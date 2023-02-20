<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nationalities = [
            [
                'name' => 'السعودية'
            ],
            [
                'name' => 'الإمارات'
            ]
            ,
            [
                'name' => 'الكويت'
            ]
            ,
            [
                'name' => 'قطر'
            ]
            ,
            [
                'name' => 'البحرين'
            ]
            ,
            [
                'name' => 'عمان'
            ]
            ,
            [
                'name' => 'اليمن'
            ]
            ,
            [
                'name' => 'الأردن'
            ],
            [
                'name' => 'سورية'
            ],
            [
                'name' => 'لبنان'
            ],
            [
                'name' => 'فلسطين'
            ],
            [
                'name' => 'مصر'
            ],
            [
                'name' => 'العراق'
            ],
            [
                'name' => 'المغرب'
            ],
            [
                'name' => 'الجزائر'
            ],
            [
                'name' => 'تونس'
            ]
            ,
            [
                'name' => 'ليبيا'
            ],
            [
                'name' => 'السودان'
            ],
            [
                'name' => 'الصومال'
            ],
        ];

        foreach ($nationalities as $nationality) {
            Nationality::create(['name' => $nationality['name']]);
        }
    }
}
