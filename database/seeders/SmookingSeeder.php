<?php

namespace Database\Seeders;

use App\Models\Smooking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $smookings = [
            [
                'name' => 'غير مدخن'
            ],
            [
                'name' => 'مدخن'
            ],
        ];

        foreach ($smookings as $smooking) {
            Smooking::create(['name' => $smooking['name']]);
        }
    }
}
