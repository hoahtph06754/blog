<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('orders')->insert([
             ['name'=>'sản phẩm 1', 'cate_id'=>1,'user_id'=>1,'total'=> 300,'quantity'=> 10, 'status'=>'approved'],
             ['name'=>'sản phẩm 2', 'cate_id'=>2,'user_id'=>2,'total'=> 400,'quantity'=> 10, 'status'=>'loading goods'],
             ['name'=>'sản phẩm 3', 'cate_id'=>3,'user_id'=>4,'total'=> 250,'quantity'=> 2, 'status'=>'being transported'],
             ['name'=>'sản phẩm 4', 'cate_id'=>4,'user_id'=>3,'total'=> 100,'quantity'=> 5, 'status'=>'loading goods'],
             ['name'=>'sản phẩm 5', 'cate_id'=>2,'user_id'=>2,'total'=> 60,'quantity'=> 1, 'status'=>'being transported'],
             ['name'=>'sản phẩm 6', 'cate_id'=>3,'user_id'=>1,'total'=> 30,'quantity'=> 1, 'status'=>'loading goods'],
         ]);
    }
}
