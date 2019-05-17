<?php

namespace Phpteam\FoundationService\Models;

use Illuminate\Database\Eloquent\Model;

class StaffCN extends Model
{
    protected $table = 'staffs_cn';

    public $timestamps = false;

    public $keyType = 'string';

    public $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = ['id', 'created_date', 'created_by', 'last_modified_date', 'last_modified_by', 'user_id', 'user_name', 'serial_number', 'name_cn_long', 'name_en_long', 'gender', 'company_id', 'company_name', 'department_id', 'department_name', 'group_id', 'group_name', 'position_id', 'position_name', 'superior_id', 'identity_card_number', 'dob', 'nation', 'political_status', 'marital_status', 'fertility_status', 'household_category', 'household_location', 'graduation_school', 'major', 'education', 'bank_name', 'bank_number', 'phone_number', 'email', 'hired_date', 'contract_status', 'finger_print_number', 'work_place', 'position_status', 'terminated_date', 'internship_start_date', 'internship_end_date', 'address1', 'address2', 'current_address', 'emergency_contact', 'emergency_contact_phone_number', 'entrance_guard_number', 'seatNumber'];

    public function setIdAttribute($value)
    {
        $this->attributes['id'] = strtoupper($value);
    }

    public function setCreatedDateAttribute($value)
    {
        $this->attributes['created_date'] = date('Y-m-d H:i:s', strtotime($value));
    }

    public function setCreatedByAttribute($value)
    {
        $this->attributes['created_by'] = strtoupper($value);
    }

    public function setLastModifiedDateAttribute($value)
    {
        $this->attributes['last_modified_date'] = date('Y-m-d H:i:s', strtotime($value));
    }

    public function setLastModifiedByAttribute($value)
    {
        $this->attributes['last_modified_by'] = strtoupper($value);
    }

    public function setUserIdAttribute($value)
    {
        $this->attributes['user_id'] = strtoupper($value);
    }

    public function setUserNameAttribute($value)
    {
        $this->attributes['user_name'] = strtoupper($value);
    }

    public function setCompanyIdAttribute($value)
    {
        $this->attributes['company_id'] = strtoupper($value);
    }

    public function setDepartmentIdAttribute($value)
    {
        $this->attributes['department_id'] = strtoupper($value);
    }

    public function setGroupIdAttribute($value)
    {
        $this->attributes['group_id'] = strtoupper($value);
    }

    public function setPositionIdAttribute($value)
    {
        $this->attributes['position_id'] = strtoupper($value);
    }

    public function setSuperiorIdAttribute($value)
    {
        $this->attributes['superior_id'] = strtoupper($value);
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = date('Y-m-d', strtotime($value));
    }

    public function setHiredDateAttribute($value)
    {
        $this->attributes['hired_date'] = date('Y-m-d', strtotime($value));
    }

    public function setTerminatedDateAttribute($value)
    {
        $this->attributes['terminated_date'] = date('Y-m-d', strtotime($value));
    }

}
