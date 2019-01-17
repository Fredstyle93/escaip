<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['project', 'hola les cocos1',1, 2],
            ['project', 'hola les cocos2',2, 2],
            ['project', 'hola les cocos3',3, 2],
            ['project', 'hola les cocos4',4, 2],
            ['project', 'hola les cocos5',5, 2],
            ['project', 'hola les cocos6',6, 2],
            ['project', 'hola les cocos7',7, 2],
            ['project', 'hola les cocos8',8, 2],
            ['post', 'salut je suis un post1', 2],
            ['post', 'salut je suis un post2', 2],
        ];

        for($i = 0; $i > 10; $i++){
            DB::table('posts')->insert([
                'postCategory' => $posts[0],
                'content' => $posts[1],
                'category_id' => $posts[2],
                'user_id' => $posts[3],
            ]);
        }
    }
}
