<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 8)->create();
        $this->command->info('5 User are created');

        factory(\App\Post::class, 24)->create();
        $this->command->info('24 posts are created');

        factory(\App\Category::class, 3)->create();
        $this->command->info('3 categories created');

//        // add a random category to a post
//        foreach (\App\Post::all() as $post){
//          $category = \App\Category::inRandomOrder()->first();
//          $post->category()->associate($category->id);
//        }
//        $this->command->info('Random category attached to each post');

        foreach (\App\Post::all() as $post){
            $post->category()->associate(\App\Category::inRandomOrder()->first());
        }
        $this->command->info('Random category attached to each post');

    }
}
