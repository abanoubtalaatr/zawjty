<?php

namespace Database\Seeders;

use App\Models\ColorEye;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorEyeSeeder extends Seeder
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
                'name' => 'أسود'
            ],
            [
                'name' => 'بني'
            ],
            [
                'name' => 'أخضر'
            ],
            [
                'name' => 'أزرق'
            ],
            [
                'name' => 'رمادي'
            ],
            [
                'name' => 'عسلي'
            ],
            [
                'name' => 'غير ذلك'
            ],
        ];

        foreach ($colors as $color) {
            ColorEye::create(['name' => $color['name']]);
        }
    }
}
