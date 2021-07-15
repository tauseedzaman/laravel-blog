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
        // \App\Models\User::factory(10)->create();
    }
}
