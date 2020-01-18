<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\Category::class,5)->create();
        DB::table('categories')->insert([
        	['name'=>'loại1','description'=>'mô tả loại sản phẩm 1'],
        	['name'=>'loại2','descripton'=>'mô tả loại sản phẩm 2'],
        	['name'=>'loại3','description'=>'mô tả loại sản phẩm 3'],
        	['name'=>'loại4','description'=>'mô tả loại sản phẩm 4'],
        	['name'=>'loại5','description'=>'mô tả loại sản phẩm 5']
        ]);
        
    }
}
