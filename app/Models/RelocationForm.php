<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelocationForm extends Model
{
    use HasFactory;
    protected $table = 'relocation_form';
    public $primaryKey = 'id';

    protected $fillable = [
        'relocation_effective_date',
        'relocation_doc_id',
        'ecn_doc_id',
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
        'previous_relocation_doc_id',
        'point_of_hire',
        'work_relocation_from',
        'work_relocation_to',
        'date_notified',
        'spouse_name',
        'spouse_age',
        'children_name',
        'children_age',
        'type_of_relocation',
        'category_1',
        'category_2',
        'relocation_start_date',
        'relocation_end_date',
        'transportation',
        'transportation_fare',
        'shipment_effects_1',
        'shipment_effects_2',
        'school_transfer_fees',
        'registration_fees',
        'registration_fees_desc',
        'school_donation_fees',
        'school_donation_fees_desc',
        'first_month_tuition_fees',
        'first_month_tuition_fees_desc',
        'temporary_living_expenses',
        'temporary_living_expenses_desc',
        'per_diems',
        'per_diems_employee',
        'per_diems_dependents',
        'total_house_rental_1',
        'total_house_rental_2',
        'statement_checklist',
        'comment',
        // 'form_status'
    ];
}
