<?php

namespace Database\Seeders;

use App\Models\AnnualIncome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnualIncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commes = [
            [
                'name' => 'أقل من 8000 دولار'
            ],
            [
                'name' => 'أقل من 25 الف دولار'
            ],
            [
                'name' => 'أكثر من 25 الف دولار'
            ],

        ];
        foreach ($commes as $comme) {
            AnnualIncome::create(['name' => $comme['name']]);
        }
    }
}
