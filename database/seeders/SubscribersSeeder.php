<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubscribersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5 ; $i++) {
        DB::table('subscribers')->insert([
            'email' => Str::random(10)."@gmail.com",
            'created_at' => now(),
        ]);
    }
    }
}
