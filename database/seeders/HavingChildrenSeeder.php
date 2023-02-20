<?php

namespace Database\Seeders;

use App\Models\HavingChildren;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HavingChildrenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $childrens = [
            [
                'name' => 'نعم'
            ],
            [
                'name' => 'لا'
            ],
        ];
        foreach ($childrens as $children) {
            HavingChildren::create(['name' => $children['name']]);
        }
    }
}
