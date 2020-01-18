<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            ['name'=>'Hoa','email'=>'hoayt99@gmail.com','content'=>'đánh giá sản phẩm tốt','star'=> 4,'product_id'=> 1],
            ['name'=>'Hà','email'=>'ha99@gmail.com','content'=>'sản phẩm chất lượng tốt','star'=> 4.5,'product_id'=> 1],
            ['name'=>'Mon','email'=>'mon99@gmail.com','content'=>'sản phẩm đẹp','star'=> 4.9,'product_id'=> 1],
            ['name'=>'Quân','email'=>'tuan@gmail.com','content'=>'sản phẩm có màu đa dạng','star'=> 5,'product_id'=> 1],
            ['name'=>'Đạt','email'=>'dat@gmail.com','content'=>'sản phẩm có kích thước hợp lí','star'=> 4.8,'product_id'=> 1],
            ['name'=>'Lan Anh','email'=>'lananh@gmail.com','content'=>'sản phẩm có nhiều c','star'=> 5,'product_id'=> 1]
        ]);
    }
}
