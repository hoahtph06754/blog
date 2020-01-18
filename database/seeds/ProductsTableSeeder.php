<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	['name'=>'Sản phẩm a','image'=>'https://cdn.tuoitre.vn/thumb_w/640/2019/3/15/hope-1552624452627898708795.jpg','short_desc'=>'mô tả ngắn 1','detail'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus repellat
            quis officiis architecto consequuntur unde aut dolorem vel incidunt quia!','cate_id'=> 1,'ori_price'=> 20,'sell_price'=> 15, 'view'=> 1234,'sell'=> 40],
            ['name'=>'Sản phẩm b','image'=>'https://picture.vn/wp-content/uploads/2018/01/chup-anh-nghe-thuat-2018-2-1.jpg','short_desc'=>'mô tả ngắn 2','detail'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus repellat
            quis officiis architecto consequuntur unde aut dolorem vel incidunt quia!','cate_id'=> 2,'ori_price'=> 28,'sell_price'=> 20, 'view'=> 266,'sell'=> 50],
            ['name'=>'Sản phẩm c','image'=>'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAJFRe8.img?h=552&w=750&m=6&q=60&u=t&o=f&l=f&x=455&y=214','short_desc'=>'mô tả ngắn 3','detail'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus repellat
            quis officiis architecto consequuntur unde aut dolorem vel incidunt quia!','cate_id'=> 4,'ori_price'=> 40,'sell_price'=> 35, 'view'=> 368,'sell'=> 62],
            ['name'=>'Sản phẩm d','image'=>'https://www.uct.edu.vn/wp-content/uploads/2019/06/bai-tho-nguoi-con-gai-hai-duong.jpg','short_desc'=>'mô tả ngắn 4','detail'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus repellat
            quis officiis architecto consequuntur unde aut dolorem vel incidunt quia!','cate_id'=> 3,'ori_price'=> 36,'sell_price'=> 30, 'view'=> 8977,'sell'=> 100],
            ['name'=>'Sản phẩm e','image'=>'https://nld.mediacdn.vn/2018/photo-1-1514859634861.jpg','short_desc'=>'mô tả ngắn 5','detail'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus repellat
            quis officiis architecto consequuntur unde aut dolorem vel incidunt quia!','cate_id'=> 5,'ori_price'=> 55,'sell_price'=> 50, 'view'=> 5689,'sell'=> 140],
            ['name'=>'Sản phẩm f','image'=>'https://doanhnhanplus.vn/wp-content/uploads/2017/12/kacuda_kasiawitkowska_sportsmama_kalendarzsportowy_DSC_5595a.jpg','short_desc'=>'mô tả ngắn 6','detail'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus repellat
            quis officiis architecto consequuntur unde aut dolorem vel incidunt quia!','cate_id'=> 1,'ori_price'=> 60,'sell_price'=> 55, 'view'=> 955,'sell'=> 180]
        ]);
    }
}
