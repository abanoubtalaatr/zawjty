<?php

namespace Database\Seeders;

use App\Models\Long;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $longs = [
            [
                'name' => '130'
            ],
            [
                'name' => '150'
            ],
            [
                'name' => '165'
            ],
            [
                'name' => '190'
            ],
        ];

        foreach ($longs as $long) {
            Long::create(['name' => $long['name']]);
        }
    }
}
