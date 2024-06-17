<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'name' => 'Artikel'
        ]);

        for ($i = 0; $i < 4; $i++) {
            Post::create([
                'thumbnail' => fake()->word() . 'jpg',
                'title' => fake()->sentence(),
                'slug' => Str::slug(fake()->sentence()),
                'content' => fake()->paragraphs(3, true),
                'kategori_id' => 1,
                'status' => 'Public'
            ]);
        }
    }
}
