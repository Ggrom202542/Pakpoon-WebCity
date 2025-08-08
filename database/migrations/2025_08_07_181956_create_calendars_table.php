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
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('ชื่อกิจกรรม');
            $table->dateTimeTz('start_date')->comment('วันที่เริ่มกิจกรรม');
            $table->dateTimeTz('end_date')->comment('วันที่สิ้นสุดกิจกรรม');
            $table->text('description')->nullable()->comment('รายละเอียดกิจกรรม');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendars');
    }
};
