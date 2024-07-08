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
        Schema::create('iklans', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan');
            $table->string('tautan');
            $table->string('type');
            $table->string('sampul');
            $table->enum('status',['On','Off','Expired'])->default('Off');
            $table->timestamp('tanggal');
            $table->timestamp('time')->nullable(); // Waktu terakhir status On
            $table->softDeletes(); // Waktu status Expired
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iklans');
    }
};
