<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mstrdtenc', function (Blueprint $table) {
            $table->increments('dataid');
            $table->string('data01', 100);
            $table->string('data02', 100)->unique();
            $table->string('data021', 10)->nullable();
            $table->string('data03', 100);
            $table->string('data04', 100);
            $table->string('data05', 100);
            $table->string('data06', 100);
            $table->string('data07', 100);
            $table->string('data08', 100);
            $table->string('data09', 100)->nullable();
            $table->string('data10', 100)->nullable();
            $table->string('data11', 100);
            $table->string('data12', 100);
            $table->string('data13', 100);
            $table->string('data14', 100)->nullable();
            $table->string('data15', 100)->nullable();
            $table->string('data16', 100)->nullable();
            $table->string('data17', 100);
            $table->string('data18', 100)->nullable();
            $table->string('data19', 100)->nullable();
            $table->string('data20', 100)->nullable();
            $table->string('data21', 100)->nullable();
            $table->string('data22', 100)->nullable();
            $table->string('data23', 100)->nullable();
            $table->string('data24', 100)->nullable();
            $table->string('data25', 100)->nullable();
            $table->string('data26', 100)->nullable();
            $table->string('data27', 100)->nullable();
            $table->string('data28', 100)->nullable();
            $table->string('data29', 100)->nullable();
            $table->string('data30', 100)->nullable();
            $table->string('data31', 100)->nullable();

            $table->timestamps();

            // Indexes
            $table->index('data07');
            $table->index('data15');
            $table->index('data28');
            $table->index('data11');
            $table->index('data14');
            $table->index('data25');
        });

        Schema::create("relocation_form", function (Blueprint $table) {
            $table->increments('id');
            $table->date("relocation_effective_date");

            $table->string("relocation_doc_id");
            $table->string("ecn_doc_id");
            $table->string("employee_id");
            $table->string("employee_name");
            $table->string("position_title");
            $table->string("grade_group_level");
            $table->string("superior_name");
            $table->string("contract_type");
            $table->string("contract_start_date");
            $table->string("contract_end_date");
            $table->string("directorate");
            $table->string("division");
            $table->string("department");
            $table->string("unit");
            $table->string("previous_relocation_doc_id");

            $table->string("point_of_hire");
            $table->string("work_relocation_from");
            $table->string("work_relocation_to");
            $table->date("date_notified");
            $table->string("spouse_name");
            $table->string("spouse_age");
            $table->string("children_name");
            $table->string("children_age");
            $table->string("type_of_relocation");
            $table->string("category_1");
            $table->string("category_2");
            $table->date("relocation_start_date");
            $table->date("relocation_end_date");

            $table->string("transportation");
            $table->string("transportation_fare");
            $table->string("shipment_effects_1");
            $table->string("shipment_effects_2");
            $table->string("school_transfer_fees");
            $table->string("registration_fees");
            $table->string("registration_fees_desc");
            $table->string("school_donation_fees");
            $table->string("school_donation_fees_desc");
            $table->string("first_month_tuition_fees");
            $table->string("first_month_tuition_fees_desc");
            $table->string("temporary_living_expenses");
            $table->string("temporary_living_expenses_desc");
            $table->string("per_diems");
            $table->string("per_diems_employee");
            $table->string("per_diems_dependents");
            $table->string("total_house_rental_1");
            $table->string("total_house_rental_2");

            $table->string("statement_checklist")->nullable();
            $table->string("comment")->nullable();

            $table->string("form_status"); //draft (0) or submitted (1)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('mstrdtenc');
        Schema::drop('relocation_form');
    }
};
