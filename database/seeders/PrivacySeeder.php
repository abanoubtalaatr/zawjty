<?php

namespace Database\Seeders;

use App\Models\Privacy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Privacy::create(
            [
                'title' => 'سياسة الخصوصية',
                'description' => 'ما هي المعلومات التي نقوم بجمعها؟نجمع المعلومات الشخصية التي تقدمها لنا طوعًا عندما تقوم بالتسجيل في احدى خدماتنا ، أوعند تواصلك معنا للحصول على معلومات عنا أو عن منتجاتنا وخدماتنا. يجب أن تكون جميع المعلومات الشخصية التي تقدمها لنا صحيحة وكاملة ودقيقة ، ويجب عليك إخطارنا بأي تغييرات تطرأ على هذه المعلومات الشخصية.المعلومات التي يتم جمعها تلقائيًا :'
            ]
        );
    }
}
