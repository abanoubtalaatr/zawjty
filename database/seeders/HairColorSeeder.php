<?php

namespace Database\Seeders;

use App\Models\HairColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HairColorSeeder extends Seeder
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
            'name'  => 'احمر'
          ],
          [
              'name'  => 'أسود'
          ],
          [
              'name'  => 'اسود داكن'
          ],
          [
              'name'  => 'أشقر'
          ],
          [
              'name'  => 'أشقر داكن'
          ],
          [
              'name'  => 'بني فاتح'
          ],
          [
              'name'  => 'بني فاتح'
          ],
          [
              'name'  => 'رمادي'
          ],
          [
              'name'  => 'أبيض'
          ],
          [
              'name'  => 'غير ذلك'
          ],
      ];
      foreach ($colors as $color) {
          HairColor::create(['name' => $color['name']]);
      }
    }
}
