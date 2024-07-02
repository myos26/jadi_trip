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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->text('thumbnail');
            $table->string('title', 70);
            $table->string('slug', 100);
            $table->longText('deskripsi');
            $table->bigInteger('harga');
            $table->longText('benefit');
            $table->longText('alur');
            $table->enum('type', ['recommended','open trip','paket wisata','rental mobil']);
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
