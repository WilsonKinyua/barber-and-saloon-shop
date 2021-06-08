<?php

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
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 39,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 40,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 41,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 42,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 43,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 44,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 45,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 46,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 47,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 48,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 49,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 50,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 51,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 52,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 53,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 54,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 55,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 56,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 57,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 58,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 59,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 60,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 61,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 62,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 63,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 64,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 65,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 66,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 67,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 68,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 69,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 70,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 71,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 72,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 73,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 74,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 75,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 76,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 77,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 78,
                'title' => 'expense_create',
            ],
            [
                'id'    => 79,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 80,
                'title' => 'expense_show',
            ],
            [
                'id'    => 81,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 82,
                'title' => 'expense_access',
            ],
            [
                'id'    => 83,
                'title' => 'income_create',
            ],
            [
                'id'    => 84,
                'title' => 'income_edit',
            ],
            [
                'id'    => 85,
                'title' => 'income_show',
            ],
            [
                'id'    => 86,
                'title' => 'income_delete',
            ],
            [
                'id'    => 87,
                'title' => 'income_access',
            ],
            [
                'id'    => 88,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 89,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 90,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 91,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 92,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 93,
                'title' => 'setting_access',
            ],
            [
                'id'    => 94,
                'title' => 'slider_create',
            ],
            [
                'id'    => 95,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 96,
                'title' => 'slider_show',
            ],
            [
                'id'    => 97,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 98,
                'title' => 'slider_access',
            ],
            [
                'id'    => 99,
                'title' => 'barber_create',
            ],
            [
                'id'    => 100,
                'title' => 'barber_edit',
            ],
            [
                'id'    => 101,
                'title' => 'barber_show',
            ],
            [
                'id'    => 102,
                'title' => 'barber_delete',
            ],
            [
                'id'    => 103,
                'title' => 'barber_access',
            ],
            [
                'id'    => 104,
                'title' => 'review_create',
            ],
            [
                'id'    => 105,
                'title' => 'review_edit',
            ],
            [
                'id'    => 106,
                'title' => 'review_show',
            ],
            [
                'id'    => 107,
                'title' => 'review_delete',
            ],
            [
                'id'    => 108,
                'title' => 'review_access',
            ],
            [
                'id'    => 109,
                'title' => 'blog_create',
            ],
            [
                'id'    => 110,
                'title' => 'blog_edit',
            ],
            [
                'id'    => 111,
                'title' => 'blog_show',
            ],
            [
                'id'    => 112,
                'title' => 'blog_delete',
            ],
            [
                'id'    => 113,
                'title' => 'blog_access',
            ],
            [
                'id'    => 114,
                'title' => 'discount_show',
            ],
            [
                'id'    => 115,
                'title' => 'discount_delete',
            ],
            [
                'id'    => 116,
                'title' => 'discount_access',
            ],
            [
                'id'    => 117,
                'title' => 'service_create',
            ],
            [
                'id'    => 118,
                'title' => 'service_edit',
            ],
            [
                'id'    => 119,
                'title' => 'service_show',
            ],
            [
                'id'    => 120,
                'title' => 'service_delete',
            ],
            [
                'id'    => 121,
                'title' => 'service_access',
            ],
            [
                'id'    => 122,
                'title' => 'booking_create',
            ],
            [
                'id'    => 123,
                'title' => 'booking_edit',
            ],
            [
                'id'    => 124,
                'title' => 'booking_show',
            ],
            [
                'id'    => 125,
                'title' => 'booking_delete',
            ],
            [
                'id'    => 126,
                'title' => 'booking_access',
            ],
            [
                'id'    => 127,
                'title' => 'about_us_create',
            ],
            [
                'id'    => 128,
                'title' => 'about_us_edit',
            ],
            [
                'id'    => 129,
                'title' => 'about_us_show',
            ],
            [
                'id'    => 130,
                'title' => 'about_us_delete',
            ],
            [
                'id'    => 131,
                'title' => 'about_us_access',
            ],
            [
                'id'    => 132,
                'title' => 'contact_us_show',
            ],
            [
                'id'    => 133,
                'title' => 'contact_us_delete',
            ],
            [
                'id'    => 134,
                'title' => 'contact_us_access',
            ],
            [
                'id'    => 135,
                'title' => 'subscriber_show',
            ],
            [
                'id'    => 136,
                'title' => 'subscriber_access',
            ],
            [
                'id'    => 137,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 138,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 139,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 140,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 141,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 142,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
