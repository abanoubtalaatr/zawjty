<?php

namespace Database\Seeders;

use App\Models\ColorSkin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSkinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            [
                'name' => 'أبيض'
            ],
            [
                'name' => 'اسمر'
            ],
            [
                'name' => 'قمحي'
            ],
            [
                'name' => 'قمحي غامق'
            ],
        ];

        foreach ($colors as $color) {
            ColorSkin::create(['name' => $color['name']]);
        }
    }
}
