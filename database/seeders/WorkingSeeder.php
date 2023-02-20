<?php

namespace Database\Seeders;

use App\Models\Working;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $works = [
            [
                'name' => 'بدون عمل حاليا'
            ],
            [
                'name' => 'لازلت ادرس'
            ],
            [
                'name' => 'مجال الفن / الادب'
            ],
            [
                'name' => 'الادارة'
            ],
            [
                'name' => 'مجال التجارة'
            ], [
                'name' => 'مجال الاغذية'
            ],
            [
                'name' => 'مجال الانشاءات والبناء'
            ],
            [
                'name' => 'مجال القانون'
            ],
            [
                'name' => 'مجال الطب'
            ],
            [
                'name' => 'السياسة / الحكومة'
            ],
            [
                'name' => 'متقاعد'
            ],
            [
                'name' => 'صاحب عمل خاص'
            ],
            [
                'name' => 'مجال الهندسة / العلوم'
            ],
            [
                'name' => 'مجال الكومبيوتر او المعلومات'
            ],
            [
                'name' => 'شئ اخر'
            ],
        ];

        foreach ($works as $work) {
            Working::create(['name' => $work['name']]);
        }
    }
}
