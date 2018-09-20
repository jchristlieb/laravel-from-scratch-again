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

        // add categories to posts
        foreach (\App\Post::all() as $post) {
            foreach (\App\Category::all() as $category) {
                // 25% probability that a category is attached to a post
                if (rand(1,100) > 75) {
                    $post->categories()->attach($category->id);
                }
            }
        }
        $this->command->info('categories attached to posts');

    }
}
