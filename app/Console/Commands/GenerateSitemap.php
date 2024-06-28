<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Post;
use App\Models\Kategori;
use App\Models\Paket;


class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

         $posts = Post::all();
         foreach ($posts as $post) {
             $sitemap->add(Url::create("/article/{$post->slug}")->setPriority(0.6));
         }

         $categories = Kategori::all();
         foreach ($categories as $category) {
             $sitemap->add(Url::create("/category/{$category->name}")->setPriority(0.5));
         }

        //  $packages = Paket::all();
        //  foreach ($packages as $package) {
        //      $sitemap->add(Url::create("/paket/{$package->slug}")->setPriority(0.7));
        //  }

         $sitemap->writeToFile(public_path('sitemap.xml'));

         $this->info('Sitemap generated successfully.');
    }
}
