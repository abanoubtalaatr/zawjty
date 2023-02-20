<?php

namespace Database\Seeders;

use App\Models\WantMarried;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WantMarriedSeeder extends Seeder
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
                'name' => 'زواج اول'
            ],
            [
                'name' => 'زواج ثاني'
            ],
            [
                'name' => 'زواج ثالث'
            ],
            [
                'name' => 'زواج رابع'
            ],
        ];
        foreach ($types as $type) {
            WantMarried::create(['name' => $type['name']]);
        }
    }
}
