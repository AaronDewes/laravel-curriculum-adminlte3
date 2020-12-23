<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '24',
                'title'      => 'organization_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '25',
                'title'      => 'organization_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '26',
                'title'      => 'organization_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '27',
                'title'      => 'organization_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '28',
                'title'      => 'organization_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '29',
                'title'      => 'grade_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '30',
                'title'      => 'grade_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '31',
                'title'      => 'grade_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '32',
                'title'      => 'grade_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '33',
                'title'      => 'grade_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '34',
                'title'      => 'organization_type_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '35',
                'title'      => 'organization_type_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '36',
                'title'      => 'organization_type_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '37',
                'title'      => 'organization_type_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '38',
                'title'      => 'organization_type_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '39',
                'title'      => 'organization_type_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '40',
                'title'      => 'user_reset_password',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '41',
                'title'      => 'group_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '42',
                'title'      => 'group_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '43',
                'title'      => 'group_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '44',
                'title'      => 'group_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '45',
                'title'      => 'group_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '46',
                'title'      => 'curriculum_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '47',
                'title'      => 'curriculum_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '48',
                'title'      => 'curriculum_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '49',
                'title'      => 'curriculum_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '50',
                'title'      => 'curriculum_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '51',
                'title'      => 'objective_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '52',
                'title'      => 'objective_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '53',
                'title'      => 'objective_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '54',
                'title'      => 'objective_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '55',
                'title'      => 'objective_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '66',
                'title'      => 'navigator_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '67',
                'title'      => 'navigator_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '68',
                'title'      => 'navigator_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '69',
                'title'      => 'navigator_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '70',
                'title'      => 'navigator_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '72',
                'title'      => 'achievement_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '73',
                'title'      => 'achievement_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '74',
                'title'      => 'achievement_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '75',
                'title'      => 'achievement_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '76',
                'title'      => 'achievement_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '79',
                'title'      => 'certificate_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '80',
                'title'      => 'certificate_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '81',
                'title'      => 'certificate_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '82',
                'title'      => 'certificate_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '83',
                'title'      => 'certificate_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '85',
                'title'      => 'period_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '86',
                'title'      => 'period_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '87',
                'title'      => 'period_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '88',
                'title'      => 'period_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '89',
                'title'      => 'period_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '91',
                'title'      => 'course_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '92',
                'title'      => 'course_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '93',
                'title'      => 'course_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '94',
                'title'      => 'course_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '95',
                'title'      => 'course_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '96',
                'title'      => 'group_enrolment',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '97',
                'title'      => 'organization_enrolment',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '98',
                'title'      => 'categorie_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '99',
                'title'      => 'categorie_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '100',
                'title'      => 'categorie_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '101',
                'title'      => 'categorie_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '102',
                'title'      => 'categorie_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '103',
                'title'      =>  'logbook_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '104',
                'title'      =>  'logbook_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '105',
                'title'      =>  'logbook_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '106',
                'title'      =>  'logbook_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '107',
                'title'      =>  'logbook_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '108',
                'title'      =>  'logbook_entry_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '109',
                'title'      =>  'logbook_entry_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '110',
                'title'      =>  'logbook_entry_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '111',
                'title'      =>  'logbook_entry_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '112',
                'title'      =>  'logbook_entry_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '113',
                'title'      => 'task_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '114',
                'title'      => 'task_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '115',
                'title'      => 'task_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '116',
                'title'      => 'task_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '117',
                'title'      => 'task_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '118',
                'title'      => 'medium_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '119',
                'title'      => 'medium_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '120',
                'title'      => 'medium_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '121',
                'title'      => 'medium_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '122',
                'title'      => 'medium_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '123',
                'title'      => 'external_medium_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '124',
                'title'      => 'external_medium_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '125',
                'title'      => 'external_medium_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '126',
                'title'      => 'external_medium_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '127',
                'title'      => 'external_medium_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '128',
                'title'      => 'link_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '129',
                'title'      => 'link_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '130',
                'title'      => 'link_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '131',
                'title'      => 'link_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '132',
                'title'      => 'link_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '133',
                'title'      => 'absence_access',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '134',
                'title'      => 'absence_create',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '135',
                'title'      => 'absence_show',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '136',
                'title'      => 'absence_edit',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'         => '137',
                'title'      => 'absence_delete',
                'created_at' => '2019-04-15 19:14:42',
                'updated_at' => '2019-04-15 19:14:42',
            ],
            [
                'id'        => '138',
                'title'     =>'plan_access',
                'created_at'=>'2020-06-07 17:57:10',
                'updated_at'=>'2020-06-07 17:57:10',
            ],
            [
                'id'        => '139',
                'title'     =>'plan_create',
                'created_at'=>'2020-06-07 17:57:19',
                'updated_at'=>'2020-06-07 17:57:19',
            ] ,
            [
                'id'        => '140',
                'title'     =>'plan_show',
                'created_at'=>'2020-06-07 17:57:27',
                'updated_at'=>'2020-06-07 17:57:27',
            ] ,
            [
                'id'        => '141',
                'title'     =>'plan_edit',
                'created_at'=>'2020-06-07 17:57:35',
                'updated_at'=>'2020-06-07 17:57:35',
            ] ,
            [
                'id'        => '142',
                'title'     =>'plan_delete',
                'created_at'=>'2020-06-07 17:57:44',
                'updated_at'=>'2020-06-07 17:57:44',
            ] ,
            [
                'id'        => '143',
                'title'     =>'reference_access',
                'created_at'=>'2020-06-07 17:57:10',
                'updated_at'=>'2020-06-07 17:57:10',
            ] ,
            [
                'id'        => '144',
                'title'     =>'reference_create',
                'created_at'=>'2020-06-07 17:57:19',
                'updated_at'=>'2020-06-07 17:57:19',
            ] ,
            [
                'id'        => '145',
                'title'     =>'reference_show',
                'created_at'=>'2020-06-07 17:57:27',
                'updated_at'=>'2020-06-07 17:57:27',
            ] ,
            [
                'id'        => '146',
                'title'     =>'reference_edit',
                'created_at'=>'2020-06-07 17:57:35',
                'updated_at'=>'2020-06-07 17:57:35',
            ] ,
            [
                'id'        => '147',
                'title'     =>'reference_delete',
                'created_at'=>'2020-06-07 17:57:44',
                'updated_at'=>'2020-06-07 17:57:44',
            ] ,
            [
                'id'        => '148',
                'title'     =>'contactdetail_access',
                'created_at'=>'2020-06-07 17:57:10',
                'updated_at'=>'2020-06-07 17:57:10',
            ] ,
            [
                'id'        => '149',
                'title'     =>'contactdetail_create',
                'created_at'=>'2020-06-07 17:57:19',
                'updated_at'=>'2020-06-07 17:57:19',
            ] ,
            [
                'id'        => '150',
                'title'     =>'contactdetail_show',
                'created_at'=>'2020-06-07 17:57:27',
                'updated_at'=>'2020-06-07 17:57:27',

            ] ,
            [
                'id'        => '151',
                'title'=>'contactdetail_edit',
                'created_at'=>'2020-06-07 17:57:35',
                'updated_at'=>'2020-06-07 17:57:35',
            ] ,
            [
                'id'        => '152',
                'title'     =>'contactdetail_delete',
                'created_at'=>'2020-06-07 17:57:44',
                'updated_at'=>'2020-06-07 17:57:44',
            ] ,
            [
                'id'        => '153',
                'title'     =>'kanban_access',
                'created_at'=>'2020-06-07 17:57:10',
                'updated_at'=>'2020-06-07 17:57:10',
            ] ,
            [
                'id'        => '154',
                'title'     =>'kanban_create',
                'created_at'=>'2020-06-07 17:57:19',
                'updated_at'=>'2020-06-07 17:57:19',
            ] ,
            [
                'id'        => '155',
                'title'     =>'kanban_show',
                'created_at'=>'2020-06-07 17:57:27',
                'updated_at'=>'2020-06-07 17:57:27',
            ] ,
            [
                'id'        => '156',
                'title'     =>'kanban_edit',
                'created_at'=>'2020-06-07 17:57:35',
                'updated_at'=>'2020-06-07 17:57:35',
            ] ,
            [
                'id'        => '157',
                'title'     =>'kanban_delete',
                'created_at'=>'2020-06-07 17:57:44',
                'updated_at'=>'2020-06-07 17:57:44',
            ] ,
            [
                'id'        => '158',
                'title'=>'content_access',
                'created_at'=>'2020-06-07 17:57:10',
                'updated_at'=>'2020-06-07 17:57:10',
            ] ,
            [
                'id'        => '159',
                'title'     =>'content_create',
                'created_at'=>'2020-06-07 17:57:19',
                'updated_at'=>'2020-06-07 17:57:19',
            ] ,
            [
                'id'        => '160',
                'title'     =>'content_show',
                'created_at'=>'2020-06-07 17:57:27',
                'updated_at'=>'2020-06-07 17:57:27',
            ] ,
            [
                'id'        => '161',
                'title'     =>'content_edit',
                'created_at'=>'2020-06-07 17:57:35',
                'updated_at'=>'2020-06-07 17:57:35',
            ] ,
            [
                'id'        => '162',
                'title'     =>'content_delete',
                'created_at'=>'2020-06-07 17:57:44',
                'updated_at'=>'2020-06-07 17:57:44',
            ] ,
            [
                'id'        => '163',
                'title'=>'subject_access',
                'created_at'=>'2020-06-07 17:57:10',
                'updated_at'=>'2020-06-07 17:57:10',
            ] ,
            [
                'id'        => '164',
                'title'     =>'subject_create',
                'created_at'=>'2020-06-07 17:57:19',
                'updated_at'=>'2020-06-07 17:57:19',
            ] ,
            [
                'id'        => '165',
                'title'     =>'subject_show',
                'created_at'=>'2020-06-07 17:57:27',
                'updated_at'=>'2020-06-07 17:57:27',
            ] ,
            [
                'id'        => '166',
                'title'     =>'subject_edit',
                'created_at'=>'2020-06-07 17:57:35',
                'updated_at'=>'2020-06-07 17:57:35',
            ] ,
            [
                'id'        => '167',
                'title'     =>'subject_delete',
                'created_at'=>'2020-06-07 17:57:44',
                'updated_at'=>'2020-06-07 17:57:44',
            ],
            [
                'id'        => '168',
                'title'     =>'glossar_access',
                'created_at'=>'2020-06-07 17:57:10',
                'updated_at'=>'2020-06-07 17:57:10',
            ] ,
            [
                'id'        => '169',
                'title'     =>'glossar_create',
                'created_at'=>'2020-06-07 17:57:19',
                'updated_at'=>'2020-06-07 17:57:19',
            ] ,
            [
                'id'        => '170',
                'title'     =>'glossar_show',
                'created_at'=>'2020-06-07 17:57:27',
                'updated_at'=>'2020-06-07 17:57:27',
            ] ,
            [
                'id'        => '171',
                'title'     =>'glossar_edit',
                'created_at'=>'2020-06-07 17:57:35',
                'updated_at'=>'2020-06-07 17:57:35',
            ] ,
            [
                'id'        => '172',
                'title'     =>'glossar_delete',
                'created_at'=>'2020-06-07 17:57:44',
                'updated_at'=>'2020-06-07 17:57:44',
            ],
            [
                'id'        => '173',
                'title'     =>'message_access',
                'created_at'=>'2020-06-07 17:57:10',
                'updated_at'=>'2020-06-07 17:57:10',
            ] ,
            [
                'id'        => '174',
                'title'     =>'message_create',
                'created_at'=>'2020-06-07 17:57:19',
                'updated_at'=>'2020-06-07 17:57:19',
            ] ,
            [
                'id'        => '175',
                'title'     =>'message_show',
                'created_at'=>'2020-06-07 17:57:27',
                'updated_at'=>'2020-06-07 17:57:27',
            ] ,
            [
                'id'        => '176',
                'title'     =>'message_edit',
                'created_at'=>'2020-06-07 17:57:35',
                'updated_at'=>'2020-06-07 17:57:35',
            ] ,
            [
                'id'        => '177',
                'title'     =>'message_delete',
                'created_at'=>'2020-06-07 17:57:44',
                'updated_at'=>'2020-06-07 17:57:44',
            ]

        ];

        Permission::insert($permissions);
    }
}
