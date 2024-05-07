<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\RelocationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{

    //Called after user login
    public function form(Request $request)
    {
        $employeeEmail = Session::get('email');

        try {
            // Get employee information from master data
            $employeeData = Employee::where('data04', $employeeEmail)->first();

            // Decode all encoded data in employeeData
            if ($employeeData) {
                $attributes = $employeeData->getAttributes();
                foreach ($attributes as $key => $value) {
                    if (base64_decode($value, true) !== false) {
                        $decodedValue = base64_decode($value);
                        $employeeData->$key = $decodedValue;
                    }
                }
            }

            if ($employeeData->data02) {

                //Get draft data
                $draftData = RelocationForm::where('employee_id', base64_encode($employeeData->data02))
                    ->where('form_status', "0")
                    ->first();

                // Decode all encoded data in draftData
                if ($draftData) {
                    $attributes = $draftData->getAttributes();
                    foreach ($attributes as $key => $value) {
                        // List of attributes to decode
                        $attributesToDecode = [
                            'employee_id',
                            'employee_name',
                            'position_title',
                            'grade_group_level',
                            'superior_name',
                            'contract_type',
                            'contract_start_date',
                            'contract_end_date',
                            'directorate',
                            'division',
                            'department',
                            'unit',
                        ];

                        if (in_array($key, $attributesToDecode)) {
                            $decodedValue = base64_decode($value);

                            if ($decodedValue !== false) {
                                $draftData->$key = $decodedValue;
                            }
                        }
                    }
                }
            } else {
                $employeeData->data02 = null;
            }

            return view("form", compact('employeeData', 'draftData'));
        } catch (\Exception $e) {
            return "Employee not found";
        }
    }

    public function store(Request $request)
    {
        try {
            $id =  $request->input('id');
            $data = RelocationForm::where('id', $id)->first();

            //If no existing record, create new record
            if (!$data) {
                $data = new RelocationForm;
            }

            $data->relocation_effective_date = $request->input('relocation_effective_date');
            $data->relocation_doc_id  = $request->input('relocation_doc_id');
            $data->ecn_doc_id  = $request->input('ecn_doc_id');

            $data->employee_id  = base64_encode($request->input('employee_id'));
            $data->employee_name  = base64_encode($request->input('employee_name'));
            $data->position_title  = base64_encode($request->input('position_title'));
            $data->grade_group_level  = base64_encode($request->input('grade_group_level'));
            $data->superior_name  = base64_encode($request->input('superior_name'));
            $data->contract_type  = base64_encode($request->input('contract_type'));
            $data->contract_start_date  = base64_encode($request->input('contract_start_date'));
            $data->contract_end_date  = base64_encode($request->input('contract_end_date'));
            $data->directorate  = base64_encode($request->input('directorate'));
            $data->division  = base64_encode($request->input('division'));
            $data->department  = base64_encode($request->input('department'));
            $data->unit  = base64_encode($request->input('unit'));

            $data->previous_relocation_doc_id = $request->input('previous_relocation_doc_id');

            $data->point_of_hire = $request->input('point_of_hire');
            $data->work_relocation_from = $request->input('work_relocation_from');
            $data->work_relocation_to = $request->input('work_relocation_to');
            $data->date_notified = $request->input('date_notified');
            $data->spouse_name = $request->input('spouse_name');
            $data->spouse_age = $request->input('spouse_age');
            $data->children_name = $request->input('children_name');
            $data->children_age = $request->input('children_age');
            $data->type_of_relocation = $request->input('type_of_relocation');
            $data->category_1 = $request->input('category_1');
            $data->category_2 = $request->input('category_2');
            $data->relocation_start_date = $request->input('relocation_start_date');
            $data->relocation_end_date = $request->input('relocation_end_date');

            $data->transportation = $request->input('transportation');
            $data->transportation_fare = $request->input('transportation_fare');
            $data->shipment_effects_1 = $request->input('shipment_effects_1');
            $data->shipment_effects_2 = $request->input('shipment_effects_2');
            $data->school_transfer_fees = $request->input('school_transfer_fees');
            $data->registration_fees = $request->input('registration_fees');
            $data->registration_fees_desc = $request->input('registration_fees_desc');
            $data->school_donation_fees = $request->input('school_donation_fees');
            $data->school_donation_fees_desc = $request->input('school_donation_fees_desc');
            $data->first_month_tuition_fees = $request->input('first_month_tuition_fees');
            $data->first_month_tuition_fees_desc = $request->input('first_month_tuition_fees_desc');
            $data->temporary_living_expenses = $request->input('temporary_living_expenses');
            $data->temporary_living_expenses_desc = $request->input('temporary_living_expenses_desc');
            $data->per_diems = $request->input('per_diems');
            $data->per_diems_employee = $request->input('per_diems_employee');
            $data->per_diems_dependents = $request->input('per_diems_dependents');
            $data->total_house_rental_1 = $request->input('total_house_rental_1');
            $data->total_house_rental_2 = $request->input('total_house_rental_2');

            $data->statement_checklist = $request->input('statement_checklist');
            $data->comment = $request->input('comment');

            if ($request->action == 'submit') {
                $data->form_status = '1';
            } else if ($request->action == 'saveDraft') {
                $data->form_status = '0';
            }

            $data->save();
            if ($request->input('action') == 'submit') {
                return redirect()->route('success')->with('success_message', 'Data berhasil disimpan');
            } else if ($request->input('action') == 'saveDraft') {
                return redirect()->route('success')->with('success_message', 'Draft data berhasil disimpan');
            }
        } catch (\Exception $e) {
            return "Unable to store data. Please try again ";
        }
    }
}
