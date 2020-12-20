<?php
/**
 * FILE PermissionsTableSeeder.php
 *
 * @author Dark Angel - jonathanyombo@gmail.com
 * DATE 12/17/2020 - 10:56 PM
 */

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 24,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 25,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 26,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 27,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 28,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 29,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 30,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 31,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 32,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 33,
                'title' => 'asset_create',
            ],
            [
                'id'    => 34,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 35,
                'title' => 'asset_show',
            ],
            [
                'id'    => 36,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 37,
                'title' => 'asset_access',
            ],
            [
                'id'    => 38,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 39,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 40,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 41,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 42,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 43,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 44,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 45,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 46,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 47,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 48,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 49,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 50,
                'title' => 'task_create',
            ],
            [
                'id'    => 51,
                'title' => 'task_edit',
            ],
            [
                'id'    => 52,
                'title' => 'task_show',
            ],
            [
                'id'    => 53,
                'title' => 'task_delete',
            ],
            [
                'id'    => 54,
                'title' => 'task_access',
            ],
            [
                'id'    => 55,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 56,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 57,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 58,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 59,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 60,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 61,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 62,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 63,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 64,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 65,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 66,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 67,
                'title' => 'expense_create',
            ],
            [
                'id'    => 68,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 69,
                'title' => 'expense_show',
            ],
            [
                'id'    => 70,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 71,
                'title' => 'expense_access',
            ],
            [
                'id'    => 72,
                'title' => 'income_create',
            ],
            [
                'id'    => 73,
                'title' => 'income_edit',
            ],
            [
                'id'    => 74,
                'title' => 'income_show',
            ],
            [
                'id'    => 75,
                'title' => 'income_delete',
            ],
            [
                'id'    => 76,
                'title' => 'income_access',
            ],
            [
                'id'    => 77,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 78,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 79,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 80,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 81,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 82,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 83,
                'title' => 'currency_create',
            ],
            [
                'id'    => 84,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 85,
                'title' => 'currency_show',
            ],
            [
                'id'    => 86,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 87,
                'title' => 'currency_access',
            ],
            [
                'id'    => 88,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 89,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 90,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 91,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 92,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 93,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 94,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 95,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 96,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 97,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 98,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 99,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 100,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 101,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 102,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 103,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 104,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 105,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 106,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 107,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 108,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 109,
                'title' => 'client_create',
            ],
            [
                'id'    => 110,
                'title' => 'client_edit',
            ],
            [
                'id'    => 111,
                'title' => 'client_show',
            ],
            [
                'id'    => 112,
                'title' => 'client_delete',
            ],
            [
                'id'    => 113,
                'title' => 'client_access',
            ],
            [
                'id'    => 114,
                'title' => 'project_create',
            ],
            [
                'id'    => 115,
                'title' => 'project_edit',
            ],
            [
                'id'    => 116,
                'title' => 'project_show',
            ],
            [
                'id'    => 117,
                'title' => 'project_delete',
            ],
            [
                'id'    => 118,
                'title' => 'project_access',
            ],
            [
                'id'    => 119,
                'title' => 'note_create',
            ],
            [
                'id'    => 120,
                'title' => 'note_edit',
            ],
            [
                'id'    => 121,
                'title' => 'note_show',
            ],
            [
                'id'    => 122,
                'title' => 'note_delete',
            ],
            [
                'id'    => 123,
                'title' => 'note_access',
            ],
            [
                'id'    => 124,
                'title' => 'document_create',
            ],
            [
                'id'    => 125,
                'title' => 'document_edit',
            ],
            [
                'id'    => 126,
                'title' => 'document_show',
            ],
            [
                'id'    => 127,
                'title' => 'document_delete',
            ],
            [
                'id'    => 128,
                'title' => 'document_access',
            ],
            [
                'id'    => 129,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 130,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 131,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 132,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 133,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 134,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 135,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 136,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 137,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 138,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 139,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
