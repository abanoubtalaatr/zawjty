<?php

namespace Database\Seeders;

use App\Models\HealthStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HealthStatusSeeder extends Seeder
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
                'name' => 'سليم',
            ],

            [
                'name' => 'غير سليم',
            ],
        ];
        foreach ($statuses as $status) {
            HealthStatus::create(['name' => $status['name']]);
        }
    }
}
