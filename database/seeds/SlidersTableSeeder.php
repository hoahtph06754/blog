<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            ['sort_order'=> 1,'image_url'=>'https://khoanh24.com/gallery/save3?code=k-img2016k-img11k-img23k-imghinh-nen-powerpoint-cong-nghe-thong-tin-1058354ae172372_0ecee1973845be205a14f6e852f2bbb7type-jpg','title'=>'Siêu khuyến mãi 50%','short_desc'=>'đây là mô tả ngắn 1'],
            ['sort_order'=> 2,'image_url'=>'https://st2.depositphotos.com/1000393/11638/i/950/depositphotos_116388164-stock-photo-binary-code-background.jpg','title'=>'Ưu đãi liền tay','short_desc'=>'đây là mô tả ngắn 2'],
            ['sort_order'=> 3,'image_url'=>'https://thuthuatnhanh.com/wp-content/uploads/2019/04/hinh-anh-ket-thuc-slide-dep-nghe-thuat.jpg','title'=>'Nhận ngay quà tặng hấp dẫn khi mua sản phẩm vào ngày 20/2/2020','short_desc'=>'đây là mô tả ngắn 3'],
            ['sort_order'=> 4,'image_url'=>'https://i.pinimg.com/originals/0a/4f/da/0a4fdab0ddeab0badbac9e771da298e9.jpg','title'=>'Siêu sale','short_desc'=>'đây là mô tả ngắn 4'],
        ]);
    }
}
