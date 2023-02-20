<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $educations = [
            [
                'name' => 'غير دارس'
            ],
            [
                'name' => 'دراسة متوسطة'
            ],
            [
                'name' => 'دراسة ثانوية'
            ],
            [
                'name' => 'دراسة جامعية'
            ],
            [
                'name' => 'دكتوراه'
            ],
            [
                'name' => 'دراسة ذاتيه'
            ],
        ];

        foreach ($educations as $education) {
            Education::create(['name' => $education['name']]);
        }
    }
}
