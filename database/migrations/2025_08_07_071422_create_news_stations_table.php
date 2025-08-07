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
        Schema::create('news_stations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ชื่อสถานีข่าว');
            $table->text('url')->comment('URL ของสถานีข่าว');
            $table->string('type')->comment('ประเภทของสถานีข่าว'); // e.g. 'Facebook', 'YouTube', 'TikTok', 'Line'
            $table->string('icon')->nullable()->comment('ไอคอนของสถานีข่าว'); // Optional icon for the news station
            $table->string('description')->nullable()->comment('คำอธิบายของสถานีข่าว'); // Optional description for the news station 
            $table->string('created_by')->nullable()->comment('ผู้สร้างข้อมูล'); // Optional field to track who created the news station
            $table->string('updated_by')->nullable()->comment('ผู้ปรับปรุงข้อมูล'); // Optional field to track who last updated the news station
            $table->date('date_announce')->nullable()->comment('วันที่ประกาศ'); // Date when the news station was announced
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_stations');
    }
};
