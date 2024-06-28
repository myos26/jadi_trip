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

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('thumbnail');
            $table->string('title', 100);
            $table->text('description');
            $table->string('slug');
            $table->longText('content');
            $table->foreignId('kategori_id')->constrained();
            $table->enum('status', ['Publish', 'Draft']);
            $table->double('popularity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
