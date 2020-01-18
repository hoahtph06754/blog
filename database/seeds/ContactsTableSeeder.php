<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            ['name'=>'Mai','email'=>'mai@gmail.com','message'=>'đây là liên hệ của mai'],
            ['name'=>'Nga','email'=>'nga@gmail.com','message'=>'đây là liên hệ của nga'],
            ['name'=>'Thúy','email'=>'thuy@gmail.com','message'=>'đây là liên hệ của Thúy'],
            ['name'=>'Thanh','email'=>'thanh@gmail.com','message'=>'đây là liên hệ của Thanh'],
            ['name'=>'Tuyết','email'=>'tuyet@gmail.com','message'=>'đây là liên hệ của Tuyết']
        ]);
    }
}
