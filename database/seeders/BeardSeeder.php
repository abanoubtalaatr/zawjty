<?php

namespace Database\Seeders;

use App\Models\Beard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beards = [
            [
                'name' => 'نعم',
            ],
            [
                'name' => 'لا',
            ],
        ];
        foreach ($beards as $beard) {
            Beard::create([
                'name' => $beard['name']
            ]);
        }
    }
}
