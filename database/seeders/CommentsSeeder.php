<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\comments;
class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {

        comments::create([
            'comment_content' => 'wow this is greate bro',
            'auther' => 'abid zaman',
            'posts_id' => rand(1,3)
        ]);
    }
}
}
