<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\posts;
class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
        posts::create([
            'title' => 'wow this is greate bro',
            'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti laborum exercitationem quibusdam dolorem minima accusantium incidunt blanditiis, perspiciatis, dolores ad aut neque. Ea aliquid corrupti ipsam, sint vero aut asperiores!",
            'auther' => 'tauseed zaman',
            'category_id' => rand(1,5),
            'published' => rand(0,1),
            'image' => 'posts/59NAtzwh7q1ka0he85EZaPcGTcnePuDi7SuhO1lW.png',
        ]);
       }
    }
}
