<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video\VideoMayor; // Assuming you have a VideoMayor model

class VideoMayorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => 'นายกพาพัฒนาเมือง',
                'url' => 'https://www.youtube.com/embed/r4DxwOPuCVk?si=d0YMYzCeDsrfqm2u',
                'type' => 'Youtube',
                'date_announce' => '2024-05-02',
                'description' => 'วิดีโอเกี่ยวกับการพัฒนาเมือง',
                'created_by' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'นายกพาพัฒนาเมือง',
                'url' => 'https://www.youtube.com/embed/gUfwNgudRTM?si=gzECwi7XvjxyEBCM',
                'type' => 'Youtube',
                'date_announce' => '2024-05-02',
                'description' => 'วิดีโอเกี่ยวกับการพัฒนาเมือง',
                'created_by' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'นายกพาพัฒนาเมือง',
                'url' => 'https://www.youtube.com/embed/gUfwNgudRTM?si=N1kEGC2TiCd3MZni',
                'type' => 'Youtube',
                'date_announce' => '2024-05-03',
                'description' => 'วิดีโอเกี่ยวกับการพัฒนาเมือง',
                'created_by' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'นายกพาพัฒนาเมือง',
                'url' => 'https://www.youtube.com/embed/zVq501U4xfI?si=v3LypR1aXlwlorr-',
                'type' => 'Youtube',
                'date_announce' => '2024-07-23',
                'description' => 'วิดีโอเกี่ยวกับการพัฒนาเมือง',
                'created_by' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'นายกพาพัฒนาเมือง',
                'url' => 'https://www.youtube.com/embed/Zmy2ibm3MFg?si=ZM3-JYlN3YzSLu6i',
                'type' => 'Youtube',
                'date_announce' => '2024-08-16',
                'description' => 'วิดีโอเกี่ยวกับการพัฒนาเมือง',
                'created_by' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'นายกพาพัฒนาเมือง',
                'url' => 'https://www.youtube.com/embed/-YetHrqCT3A?si=Jgn7gCMHgd2-bRPq',
                'type' => 'Youtube',
                'date_announce' => '2024-08-26',
                'description' => 'วิดีโอเกี่ยวกับการพัฒนาเมือง',
                'created_by' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'นายกพาพัฒนาเมือง',
                'url' => 'https://www.youtube.com/embed/VpPOeXurzak?si=3eBHkzbuhULlrRR3',
                'type' => 'Youtube',
                'date_announce' => '2024-08-30',
                'description' => 'วิดีโอเกี่ยวกับการพัฒนาเมือง',
                'created_by' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'นายกพาพัฒนาเมือง',
                'url' => 'https://www.youtube.com/embed/wBFTSv2IDsk?si=sUtJiHOSAi4_69W0',
                'type' => 'Youtube',
                'date_announce' => '2024-09-06',
                'description' => 'วิดีโอเกี่ยวกับการพัฒนาเมือง',
                'created_by' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'นายกพาพัฒนาเมือง',
                'url' => 'https://www.youtube.com/embed/N1ooI6NFDpM?si=etcyaRqZLII3dbSy',
                'type' => 'Youtube',
                'date_announce' => '2024-09-27',
                'description' => 'วิดีโอเกี่ยวกับการพัฒนาเมือง',
                'created_by' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'นายกพาพัฒนาเมือง',
                'url' => 'https://www.youtube.com/embed/r0JEFWk2f2Y?si=5ExGdoYMzJCl2x3i',
                'type' => 'Youtube',
                'date_announce' => '2024-09-27',
                'description' => 'วิดีโอเกี่ยวกับการพัฒนาเมือง',
                'created_by' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];
        VideoMayor::insert($data);
    }
}
