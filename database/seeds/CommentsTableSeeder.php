<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\Comment::class,20)->create();
        DB::table('comments')->insert([
            ['name'=>'comment1','content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam iusto, nihil expedita quaerat repellat ipsa tempore quae eos voluptatem suscipit.','post_id'=>'1'],
            ['name'=>'comment2','content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam iusto, nihil expedita quaerat repellat ipsa tempore quae eos voluptatem suscipit.','post_id'=>'2'],
            ['name'=>'comment3','content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam iusto nihil expedita quaerat repellat ipsa tempore quae eos voluptatem suscipit.','post_id'=>'3'],
            ['name'=>'comment4','content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam iusto, nihil expedita quaerat repellat ipsa tempore quae eos voluptatem suscipit.','post_id'=>'4'],
            ['name'=>'comment5','content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam iusto, nihil expedita quaerat repellat ipsa tempore quae eos voluptatem suscipit.','post_id'=>'5']
        ]);
        
    }
}
