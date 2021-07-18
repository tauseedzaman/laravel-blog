<?php

namespace Database\Seeders;
use App\Models\User;
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
        User::create([
            'name' => 'tauseedzaman',
            'email' => 'tauseedzaman@test.com',
            'password' => bcrypt('tauseedzaman'),
            'is_admin' => true
        ]);
        $this->call([
            categorySeeder::class,
            PostsSeeder::class,
            CommentsSeeder::class,
            SubscribersSeeder::class,
        ]);
    }
}
