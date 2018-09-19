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

    }
}
