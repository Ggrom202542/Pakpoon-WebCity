<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News\NewsUpdate; // Assuming you have a NewsUpdate model

class NewsUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => 'ข่าวเด่น Video Facebook',
                'url' => 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fpakpooncity.go.th%2Fvideos%2F733214752970521%2F&show_text=true&width=560&t=0',
                'type' => 'Facebook',
                'icon' => '',
                'description' => 'ข่าวเด่นจาก Facebook',
                'created_by' => 'system',
                'updated_by' => 'system',
                'date_announce' => '2025-07-26',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ข่าวเด่น Video Facebook',
                'url' => 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fpakpooncity.go.th%2Fvideos%2F655054733957327%2F&show_text=true&width=560&t=0',
                'type' => 'Facebook',
                'icon' => '',
                'description' => 'ข่าวเด่นจาก Facebook',
                'created_by' => 'system',
                'updated_by' => 'system',
                'date_announce' => '2025-05-11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ข่าวเด่น Video Facebook',
                'url' => 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fpakpooncity.go.th%2Fvideos%2F1271023317504281%2F&show_text=true&width=560&t=0',
                'type' => 'Facebook',
                'icon' => '',
                'description' => 'ข่าวเด่นจาก Facebook',
                'created_by' => 'system',
                'updated_by' => 'system',
                'date_announce' => '2024-12-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        NewsUpdate::insert($data);
    }
}
