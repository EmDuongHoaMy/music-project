<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('ten_sp',50);
            $table->integer('id_sp');
            $table->integer('so_luong');
            $table->string('size',3);
            $table->integer('id_khach');
            $table->string('ten_khachhang');
            $table->string('dia_chi',255);
            $table->string('phone_number',20);
            $table->integer('gia_donhang');
            $table->text('ghi_chu')->nullable();
            $table->dateTime('ngay_dat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
