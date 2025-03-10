<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // This is equivalent to $table->bigIncrements('id');

            $table->string('uuid', 191)->unique();
            $table->unsignedBigInteger('user_id');
            $table->string('employee_id', 191);
            $table->string('card_no', 191)->nullable();
            $table->string('first_name', 191)->nullable();
            $table->string('middle_name', 191)->nullable();
            $table->string('last_name', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->longText('profile_image')->nullable();
            $table->string('alternate_phone', 191)->nullable();
            $table->integer('employee_group_id')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('degree_name', 191)->nullable();
            $table->string('university_name', 191)->nullable();
            $table->string('cgp', 191)->nullable();
            $table->string('passing_year', 191)->nullable();
            $table->string('company_id', 191)->nullable();
            $table->string('working_period', 191)->nullable();
            $table->string('duties', 191)->nullable();
            $table->string('supervisor', 191)->nullable();
            $table->string('signature', 191)->nullable();
            $table->tinyInteger('is_admin')->default(0);
            $table->string('maiden_name', 191)->nullable();
            $table->string('state_id', 191)->nullable();
            $table->string('city', 191)->nullable();
            $table->integer('zip')->nullable();
            $table->integer('citizenship')->nullable();
            $table->date('joining_date')->nullable();
            $table->date('promotion_date')->nullable();
            $table->date('hire_date')->nullable();
            $table->date('termination_date')->nullable();
            $table->string('termination_reason', 191)->nullable();
            $table->string('national_id', 191)->nullable();
            $table->string('identification_attachment', 191)->nullable();
            $table->string('nationality', 191)->nullable();
            $table->integer('voluntary_termination')->nullable();
            $table->date('rehire_date')->nullable();
            $table->double('rate')->nullable();
            $table->unsignedBigInteger('pay_frequency_id')->nullable();
            $table->unsignedBigInteger('duty_type_id')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->unsignedBigInteger('marital_status_id')->nullable();
            $table->unsignedInteger('attendance_time_id')->nullable();
            $table->unsignedBigInteger('employee_type_id')->nullable();
            $table->date('contract_start_date')->nullable();
            $table->date('contract_end_date')->nullable();
            $table->unsignedBigInteger('position_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('sub_department_id')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->unsignedBigInteger('employee_code')->nullable();
            $table->string('employee_device_id', 191)->nullable();
            $table->string('highest_educational_qualification', 191)->nullable();
            $table->string('pay_frequency_text', 191)->nullable();
            $table->double('hourly_rate', 8, 2)->nullable();
            $table->double('hourly_rate2', 8, 2)->nullable();
            $table->string('home_department', 191)->nullable();
            $table->string('department_text', 191)->nullable();
            $table->string('class_code', 191)->nullable();
            $table->string('class_code_desc', 191)->nullable();
            $table->date('class_acc_date')->nullable();
            $table->tinyInteger('class_status')->default(1);
            $table->tinyInteger('is_supervisor')->default(0);
            $table->unsignedBigInteger('supervisor_id')->nullable();
            $table->text('supervisor_report')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('ethnic_group', 191)->nullable();
            $table->string('eeo_class_gp', 191)->nullable();
            $table->string('ssn', 191)->nullable();
            $table->string('work_in_city', 191)->nullable();
            $table->integer('live_in_state')->nullable();
            $table->string('home_email', 191)->nullable();
            $table->string('business_email', 191)->nullable();
            $table->string('home_phone', 191)->nullable();
            $table->string('business_phone', 191)->nullable();
            $table->string('cell_phone', 191)->nullable();
            $table->string('emergency_contact_person', 191)->nullable();
            $table->string('emergency_contact_relationship', 191)->nullable();
            $table->string('emergency_contact_country', 191)->nullable();
            $table->string('emergency_contact_state', 191)->nullable();
            $table->string('emergency_contact_city', 191)->nullable();
            $table->string('emergency_contact_post_code', 191)->nullable();
            $table->longText('emergency_contact_address')->nullable();
            $table->string('present_address_country', 191)->nullable();
            $table->string('present_address_state', 191)->nullable();
            $table->string('present_address_city', 191)->nullable();
            $table->string('present_address_post_code', 191)->nullable();
            $table->longText('present_address_address')->nullable();
            $table->string('permanent_address_country', 191)->nullable();
            $table->string('permanent_address_state', 191)->nullable();
            $table->string('permanent_address_city', 191)->nullable();
            $table->string('permanent_address_post_code', 191)->nullable();
            $table->longText('permanent_address_address')->nullable();
            $table->string('skill_type', 191)->nullable();
            $table->string('skill_name', 191)->nullable();
            $table->string('certificate_type', 191)->nullable();
            $table->string('certificate_name', 191)->nullable();
            $table->string('skill_attachment', 191)->nullable();
            $table->string('emergency_contact', 191)->nullable();
            $table->string('emergency_home_phone', 191)->nullable();
            $table->string('emergency_work_phone', 191)->nullable();
            $table->string('alter_emergency_contact', 191)->nullable();
            $table->string('alter_emergency_home_phone', 191)->nullable();
            $table->string('alter_emergency_work_phone', 191)->nullable();
            $table->string('sos', 191)->nullable();
            $table->string('monthly_work_hours', 191)->nullable();
            $table->string('employee_grade', 191)->nullable();
            $table->string('religion', 191)->nullable();
            $table->integer('no_of_kids')->nullable();
            $table->string('blood_group', 191)->nullable();
            $table->string('health_condition', 191)->nullable();
            $table->tinyInteger('is_disable')->default(0);
            $table->string('disabilities_desc', 191)->nullable();
            $table->string('profile_img_name', 191)->nullable();
            $table->string('profile_img_location', 191)->nullable();
            $table->string('national_id_no', 191)->nullable();
            $table->string('iqama_no', 191)->nullable();
            $table->string('passport_no', 191)->nullable();
            $table->string('driving_license_no', 191)->nullable();
            $table->tinyInteger('work_permit')->default(0);
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('is_left')->default(0);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
