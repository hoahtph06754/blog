<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	['name'=>'post1','content'=>'Lorem ipsum dolor sit amet','user_id'=>'1'],
        	['name'=>'post2','content'=>'Lorem ipsum dolor sit amet','user_id'=>'2'],
        	['name'=>'post3','content'=>'Lorem ipsum dolor sit amet','user_id'=>'3'],
        	['name'=>'post4','content'=>'Lorem ipsum dolor sit amet','user_id'=>'4'],
        	['name'=>'post5','content'=>'Lorem ipsum dolor sit amet','user_id'=>'5'],
        ]);
    }
}
