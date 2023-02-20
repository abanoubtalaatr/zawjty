<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
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

        foreach ($countries as $country) {
            Country::create(['name' => $country['name']]);
        }
    }
}
