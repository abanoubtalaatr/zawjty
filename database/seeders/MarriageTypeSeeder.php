<?php

namespace Database\Seeders;

use App\Models\MarriageType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarriageTypeSeeder extends Seeder
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
                'name' => 'زواج عادي'
            ],
            [
                'name' => 'زواج مسيار'
            ],
            [
                'name' => 'زواج متعدد'
            ],
        ];
        foreach ($types as $type) {
            MarriageType::create(['name' => $type['name']]);
        }
    }
}
