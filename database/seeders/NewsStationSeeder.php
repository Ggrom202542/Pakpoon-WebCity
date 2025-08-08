<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News\NewsStation;

class NewsStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => 'Facebook News',
                'url' => 'https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpakpooncity.go.th%2Fposts%2Fpfbid031ovCGnXhscLoVRp7H2qRZTjEnWeqXGEgr7nnXj3PfQWChTRgGkndcHFzwebagNNl&show_text=true&width=500',
                'type' => 'Facebook',
                'icon' => '', // Assuming you have an icon file named facebook-icon.png
                'description' => 'ข่าวสารและกิจกรรมจากเทศบาลเมืองปากพูน',
                'created_by' => null, // Optional field to track who created the news station
                'updated_by' => null, // Optional field to track who last updated the news station
                'date_announce' => null, // Current date and time
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Facebook News',
                'url' => 'https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpakpooncity.go.th%2Fposts%2Fpfbid02PAaJ4mRKqqszZFfcqLCJ7BsDhpnHbnG7Bh4JSg9heEi4zTcSaoV4VD6hJAmofExPl&show_text=true&width=500',
                'type' => 'Facebook',
                'icon' => '', // Assuming you have an icon file named youtube-icon.png
                'description' => 'ข่าวสารและกิจกรรมจากเทศบาลเมืองปากพูน',
                'created_by' => null,
                'updated_by' => null,
                'date_announce' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Facebook News',
                'url' => 'https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpakpooncity.go.th%2Fposts%2Fpfbid02WYZyH2E687vQes7MarnhbsoRf9oFXuULgceqdU6Y9RbFZrmxti79dTGouE8rB9zil&show_text=true&width=500',
                'type' => 'Facebook',
                'icon' => '', // Assuming you have an icon file named tiktok-icon.png
                'description' => 'ข่าวสารและกิจกรรมจากเทศบาลเมืองปากพูน',
                'created_by' => null,
                'updated_by' => null,
                'date_announce' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Facebook News',
                'url' => 'https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpakpooncity.go.th%2Fposts%2Fpfbid05PQzXdkZT3C7sLJpDUqSpGnLL78jSjypmWNidGDpLHmQhvGwMgw8cCx3BuScjtHnl&show_text=true&width=500',
                'type' => 'Facebook',
                'icon' => '', // Assuming you have an icon file named tiktok-icon.png
                'description' => 'ข่าวสารและกิจกรรมจากเทศบาลเมืองปากพูน',
                'created_by' => null,
                'updated_by' => null,
                'date_announce' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Facebook News',
                'url' => 'https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpakpooncity.go.th%2Fposts%2Fpfbid08hBoJHRhptBNoGrZCVUysRsPmURNrPYocUkfdEioJBm8K19nhPa8GaVYVbm7D7Gql&show_text=true&width=500',
                'type' => 'Facebook',
                'icon' => '', // Assuming you have an icon file named tiktok-icon.png
                'description' => 'ข่าวสารและกิจกรรมจากเทศบาลเมืองปากพูน',
                'created_by' => null,
                'updated_by' => null,
                'date_announce' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Youtube News',
                'url' => 'https://www.youtube.com/embed/rfVVQTyk3MI?si=PCVIPS395O5entrI',
                'type' => 'Youtube',
                'icon' => '', // Assuming you have an icon file named tiktok-icon.png
                'description' => 'ข่าวสารและกิจกรรมจากเทศบาลเมืองปากพูน',
                'created_by' => null,
                'updated_by' => null,
                'date_announce' => '2025-05-11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Youtube News',
                'url' => 'https://www.youtube.com/embed/DZVvPQAq9XQ?si=qi6yq3z-kZcX_cpm',
                'type' => 'Youtube',
                'icon' => '', // Assuming you have an icon file named tiktok-icon.png
                'description' => 'ข่าวสารและกิจกรรมจากเทศบาลเมืองปากพูน',
                'created_by' => null,
                'updated_by' => null,
                'date_announce' => '2025-02-27',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Youtube News',
                'url' => 'https://www.youtube.com/embed/Dn_1KdZzXGE?si=txLEZcR-41mGXJE9',
                'type' => 'Youtube',
                'icon' => '', // Assuming you have an icon file named tiktok-icon.png
                'description' => 'ข่าวสารและกิจกรรมจากเทศบาลเมืองปากพูน',
                'created_by' => null,
                'updated_by' => null,
                'date_announce' => '2025-01-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Youtube News',
                'url' => 'https://www.youtube.com/embed/Mxqx-sliovI?si=LlxK5IzvNUFuOKH4',
                'type' => 'Youtube',
                'icon' => '', // Assuming you have an icon file named tiktok-icon.png
                'description' => 'ข่าวสารและกิจกรรมจากเทศบาลเมืองปากพูน',
                'created_by' => null,
                'updated_by' => null,
                'date_announce' => '2025-01-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Youtube News',
                'url' => 'https://www.youtube.com/embed/Qi3CK1HN2i4?si=Y5ikVFsLvAAN-RCm',
                'type' => 'Youtube',
                'icon' => '', // Assuming you have an icon file named tiktok-icon.png
                'description' => 'ข่าวสารและกิจกรรมจากเทศบาลเมืองปากพูน',
                'created_by' => null,
                'updated_by' => null,
                'date_announce' => '2024-12-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];
        NewsStation::insert($data);
    }
}
