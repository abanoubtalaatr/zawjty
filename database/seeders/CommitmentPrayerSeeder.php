<?php

namespace Database\Seeders;

use App\Models\CommitmentPrayer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommitmentPrayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prayers = [
            [
                'name' => 'ملتزم'
            ],
            [
                'name' => 'غير ملتزم'
            ],
            [
                'name' => 'أفضل ان لا اقول'
            ],
        ];
        foreach ($prayers as $prayer) {
            CommitmentPrayer::create([
                'name' => $prayer['name']
            ]);
        }
    }
}
