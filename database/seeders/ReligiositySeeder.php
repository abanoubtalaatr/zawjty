<?php

namespace Database\Seeders;

use App\Models\Religiosity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReligiositySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religiosities = [
            [
                'name' => 'لست متدين'
            ],
            [
                'name' => 'متدين قليلا'
            ],
            [
                'name' => 'متدين كثيرا'
            ],
            [
                'name' => 'أفضل ان لا اقول'
            ],
        ];
        foreach ($religiosities as $religiosity) {
            Religiosity::create(['name' => $religiosity['name']]);
        }
    }
}
