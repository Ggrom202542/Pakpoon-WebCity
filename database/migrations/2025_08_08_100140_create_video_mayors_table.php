<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('video_mayors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ชื่อวิดีโอ');
            $table->string('url')->comment('URL ของวิดีโอ');
            $table->string('type')->comment('ประเภทของวิดีโอ เช่น Facebook, Youtube, Tiktok');
            $table->date('date_announce')->comment('วันที่ประกาศวิดีโอ');
            $table->string('description')->nullable()->comment('คำอธิบายวิดีโอ');
            $table->string('created_by')->nullable()->comment('ผู้สร้างวิดีโอ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_mayors');
    }
};
