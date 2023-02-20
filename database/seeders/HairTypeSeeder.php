<?php

namespace Database\Seeders;

use App\Models\HairType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HairTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'عادي'
            ],
            [
                'name' => 'ناعم'
            ],
            [
                'name' => 'مجعد'
            ],[
                'name' => 'خشن'
            ],
            [
                'name' => 'اصلع قليلا'
            ],
            [
                'name' => 'اصلع'
            ],
        ];
        foreach ($types as $type) {
            HairType::create(['name' => $type['name']]);
        }
    }
}
