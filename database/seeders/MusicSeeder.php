<?php

namespace Database\Seeders;

use App\Models\Music;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $musics = [
            [
                'name' => 'لا استمع'
            ],
            [
                'name' => 'نعم استمع'
            ]
        ];

        foreach ($musics as $music) {
            Music::create(['name' => $music['name']]);
        }
    }
}
