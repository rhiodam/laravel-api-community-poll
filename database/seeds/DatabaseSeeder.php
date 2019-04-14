<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();
        factory(App\Poll::class, 100)->create();
        factory(App\Question::class, 500)->create();
        factory(App\Answer::class, 5000)->create();
    }
}
