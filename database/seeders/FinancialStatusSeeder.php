<?php

namespace Database\Seeders;

use App\Models\FinancialStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinancialStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'name' => 'فقير'
            ],
            [
                'name' => 'أقل من متوسط'
            ],
            [
                'name' => 'متوسط'
            ],
            [
                'name' => 'أكثر من متوسط'
            ],
            [
                'name' => 'جيد'
            ],
            [
                'name' => 'ميسور'
            ],
            [
                'name' => 'غني'
            ],
        ];

        foreach ($statuses as $status) {
            FinancialStatus::create(['name' => $status['name']]);
        }
    }
}
