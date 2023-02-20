<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
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
                'name' => 'عازب',
            ],

            [
                'name' => 'متزوج',
            ],

            [
                'name' => 'مطلق',
            ],
            [
                'name' => 'أرمل',
            ],
        ];
        foreach ($statuses as $status) {
            MaritalStatus::create(['name' => $status['name']]);
        }
    }
}
