<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            [
                'name' => '- عرض وسائل تواصل اخرى في صفحة بياناتك مثل " واتس اب ، فيس بوك ، تويتر وغيره ".',
                'key' => 'social',
            ],
            [
                'name' => '- معرفة إذا تم مشاهدة الرسائل المرسلة.',
                'key' => 'seen_messages',
            ],
            [
                'name' => '- ارسال رسائل لجميع الاعضاء.',
                'key' => 'chats',
            ],
            [
                'name' => '- اضافه صوره شخصيه .',
                'key' => 'image',
            ],
            [
                'name' => '- مشاهدة من زار صفحة بياناتي',
                'key' => 'visit_my_profile'
            ],
        ];

        foreach ($features as $feature) {
            Feature::create([
                'name' => $feature['name'],
                'key' => $feature['key'],
            ]);
        }
    }
}
