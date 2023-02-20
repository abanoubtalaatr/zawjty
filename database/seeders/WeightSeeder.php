<?php

namespace Database\Seeders;

use App\Models\Weight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weights = [
          [
              'name' => '40',
          ],
            [
                'name' => '60',
            ],
            [
                'name' => '90',
            ],
            [
                'name' => '110',
            ],
            [
                'name' => '140',
            ],
            [
                'name' => '180',
            ],
        ];
        foreach ($weights as $weight) {
            Weight::create(['name' => $weight['name']]);
        }
    }
}
