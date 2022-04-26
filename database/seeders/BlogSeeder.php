<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::upsert([
            [
                'id'                     =>  1,
                'blog_title'             => 'what if?',
                'blog_detail'            => 'comming soon',
                'blog_image'             => 'whatif.jpg',
                'blog_author'            => 7,
                'published_date'         => now(),
            ],
            [
                'id'                     =>  2,
                'blog_title'             => 'marve vs dc',
                'blog_detail'            => 'comming soon',
                'blog_image'             => 'marvelvsdc.jpg',
                'blog_author'            => 10,
                'published_date'         => now(),
            ],        
            [
                'id'                     =>  3,
                'blog_title'             => 'fyp and wrl',
                'blog_detail'            => 'comming soon',
                'blog_image'             => 'what.jpg',
                'blog_author'            => 10,
                'published_date'         => now(),
            ], 
            [
                'id'                     =>  4,
                'blog_title'             => 'Programming is fun',
                'blog_detail'            => 'comming soon',
                'blog_image'             => 'programming.jpg',
                'blog_author'            => 8,
                'published_date'         => now(),
            ],
         ],[],[]);
    }
}
