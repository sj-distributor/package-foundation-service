<?php

namespace Phpteam\FoundationService\Services;

use Illuminate\Support\Facades\DB;

class StaffCNService
{

    public static function staffCNUpdateInfo()
    {
        $dbPrefix = config('database.connections.'.config('database.default').'.prefix');

        // CN STAFF更新职位
        DB::update('update '.$dbPrefix.'staffs_cn as staff, '.$dbPrefix.'positions_cn as post set staff.position_name = post.name where post.id = staff.position_id;');

        // CN STAFF更新组
        DB::update('update '.$dbPrefix.'staffs_cn as staff, '.$dbPrefix.'units_cn as unit set staff.group_name = unit.name where unit.id = staff.group_id;');

        // CN STAFF更新部门
        DB::update('update '.$dbPrefix.'staffs_cn as staff, '.$dbPrefix.'units_cn as unit set staff.department_name = unit.name where unit.id = staff.department_id;');

        // CN STAFF更新公司
        DB::update('update '.$dbPrefix.'staffs_cn as staff, '.$dbPrefix.'units_cn as unit set staff.company_name = unit.name where unit.id = staff.company_id;');

        // CN STAFF更新上级
        DB::update('update '.$dbPrefix.'staffs_cn as staff, '.$dbPrefix.'units_cn as unit set staff.superior_id = unit.leader_id where unit.id = staff.group_id;');
    }

}