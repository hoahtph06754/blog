<?php

use Illuminate\Database\Seeder;

class Order_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderdetails')->insert([
            ['order_id'=> 1, 'product_id'=> 1,'address'=>'280 Cổ Nhuế','total'=> 300,'payment_method'=> 'Airpay','quantity'=> 10, 'status'=>'approved','transport_fee'=>'Fast Delivery'],
            ['order_id'=> 2, 'product_id'=> 2,'address'=>'28 Nguyễn Khang','total'=> 400,'payment_method'=> 'COD','quantity'=> 10, 'status'=>'loading goods','transport_fee'=>'Fast Delivery'],
            ['order_id'=> 3, 'product_id'=> 3,'address'=>'99 Cầu Giấy','total'=> 250,'payment_method'=> 'COD','quantity'=> 2, 'status'=>'being transported','transport_fee'=>'Fast Delivery'],
            ['order_id'=> 4, 'product_id'=> 4,'address'=>'20 Hoàng Quốc Việt','total'=> 100,'payment_method'=> 'COD','quantity'=> 5, 'status'=>'loading goods','transport_fee'=>'Fast Delivery'],
            ['order_id'=> 5, 'product_id'=> 2,'address'=>'50 Hồ Tùng Mậu','total'=> 60,'payment_method'=> 'Card','quantity'=> 1, 'status'=>'being transported','transport_fee'=>'Fast Delivery'],
            ['order_id'=> 6, 'product_id'=> 3,'address'=>'97 Tây Mỗ','total'=> 30,'payment_method'=> 'Airpay','quantity'=> 1, 'status'=>'loading goods','transport_fee'=>'Fast Delivery']
        ]);
    }
}
