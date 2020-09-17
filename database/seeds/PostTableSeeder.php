<?php

use Illuminate\Database\Seeder;
use LaraCurso\Model\Post;
use LaraCurso\User;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //essa é uma forma
        $users = User::all();
        factory(Post::class, 12)
            ->create()
            ->each(function ($post) use ($users){
                $post->author = $users->random()->id;
                $post->save();
    });

//        factory(Post::class, 12)->create();
    }

}


