<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Metrics\Chartable;
use Orchid\Screen\AsSource;

// Import SoftDeletes if you want to enable soft deletes

class Employees extends Model
{
    use HasFactory , AsSource ,Filterable ,Attachable ,Chartable;

    // Define the table name (optional if the table name follows Laravel's naming convention)
    protected $table = 'employees';

    // Define the primary key (optional if it's 'id')
    protected $primaryKey = 'id';

    // Define fillable attributes to allow mass assignment
    protected $fillable = [
        'uuid',
        'user_id',
        'employee_id',
        'card_no',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone',
        'profile_image',
        'alternate_phone',
        'employee_group_id',
        'present_address',
        'permanent_address',
        'degree_name',
        'university_name',
        'cgp',
        'passing_year',
        'company_id',
        'working_period',
        'duties',
        'supervisor',
        'signature',
        'is_admin',
        'maiden_name',
        'state_id',
        'city',
        'zip',
        'citizenship',
        'joining_date',
        'promotion_date',
        'hire_date',
        'termination_date',
        'termination_reason',
        'national_id',
        'identification_attachment',
        'nationality',
        'voluntary_termination',
        'rehire_date',
        'rate',
        'pay_frequency_id',
        'duty_type_id',
        'gender_id',
        'marital_status_id',
        'attendance_time_id',
        'employee_type_id',
        'contract_start_date',
        'contract_end_date',
        'position_id',
        'department_id',
        'sub_department_id',
        'branch_id',
        'employee_code',
        'employee_device_id',
        'highest_educational_qualification',
        'pay_frequency_text',
        'hourly_rate',
        'hourly_rate2',
        'home_department',
        'department_text',
        'class_code',
        'class_code_desc',
        'class_acc_date',
        'class_status',
        'is_supervisor',
        'supervisor_id',
        'supervisor_report',
        'date_of_birth',
        'ethnic_group',
        'eeo_class_gp',
        'ssn',
        'work_in_city',
        'live_in_state',
        'home_email',
        'business_email',
        'home_phone',
        'business_phone',
        'cell_phone',
        'emergency_contact_person',
        'emergency_contact_relationship',
        'emergency_contact_country',
        'emergency_contact_state',
        'emergency_contact_city',
        'emergency_contact_post_code',
        'emergency_contact_address',
        'present_address_country',
        'present_address_state',
        'present_address_city',
        'present_address_post_code',
        'present_address_address',
        'permanent_address_country',
        'permanent_address_state',
        'permanent_address_city',
        'permanent_address_post_code',
        'permanent_address_address',
        'skill_type',
        'skill_name',
        'certificate_type',
        'certificate_name',
        'skill_attachment',
        'emergency_contact',
        'emergency_home_phone',
        'emergency_work_phone',
        'alter_emergency_contact',
        'alter_emergency_home_phone',
        'alter_emergency_work_phone',
        'sos',
        'monthly_work_hours',
        'employee_grade',
        'religion',
        'no_of_kids',
        'blood_group',
        'health_condition',
        'is_disable',
        'disabilities_desc',
        'profile_img_name',
        'profile_img_location',
        'national_id_no',
        'iqama_no',
        'passport_no',
        'driving_license_no',
        'work_permit',
        'is_active',
        'is_left',
        'created_by',
        'updated_by',
        'deleted_at',
    ];

    // Define guarded attributes (if you don't want to use fillable)
    // protected $guarded = [];

    // Enable timestamps (default is true, so this is optional)
    public $timestamps = true;

    // Define date fields (optional if you have date fields)
    protected $dates = [
        'joining_date',
        'promotion_date',
        'hire_date',
        'termination_date',
        'rehire_date',
        'contract_start_date',
        'contract_end_date',
        'class_acc_date',
        'date_of_birth',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Define relationships (if any)
    // Example: An employee belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Example: An employee belongs to a department
    public function department()
    {
        return $this->belongsTo(Departments::class, 'department_id');
    }

    public function company()
    {
        return $this->belongsTo(Companies::class, 'company_id');
    }

    // Example: An employee has many skills
    public function skills()
    {
        return $this->hasMany(Skill::class, 'employee_id');
    }

    // Example: An employee has one supervisor
    public function supervisor()
    {
        return $this->belongsTo(Employees::class, 'supervisor_id');
    }
}
