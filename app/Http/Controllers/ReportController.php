<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RelocationForm;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        try {
            $data = RelocationForm::all();

            foreach ($data as $record) {
                $attributes = $record->getAttributes();
                foreach ($attributes as $key => $value) {
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
                            $record->$key = $decodedValue;
                        }
                    }
                }
            }

            return view("report", compact('data'));
        } catch (\Exception $e) {
            return $e->getMessage();
            // return "Error: Can't retrieve form";
        }
    }
}
