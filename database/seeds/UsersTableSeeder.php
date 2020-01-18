<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\User::class,5)->create();
        DB::table('users')->insert([
        	['name'=>'hoa','avatar'=>'https://anhdephd.com/wp-content/uploads/2018/11/hinh-nen-tuong-support-trong-game-lol.jpg','birthday'=>'1995-05-05','phone_number'=>'0123456789','email'=>'hoayt@gmail.com','role'=>'admin','password'=>bcrypt('123456'),'is_active'=>'1'],
        	['name'=>'mon','avatar'=>'http://huongdanchoigame.net/wp-content/uploads/2016/11/danh-sach-tuong-mien-phi-tuong-xoay-tua-tuan-223-tu-22-11-2016-den-29-11-2016-trong-lien-minh-huyen-thoai-lol-2.jpg','birthday'=>'1999-01-05','phone_number'=>'0456238382','email'=>'mon@gmail.com','role'=>'user','password'=>bcrypt('123456'),'is_active'=>'1'],
        	['name'=>'ha','avatar'=>'https://anhdephd.com/wp-content/uploads/2018/12/anh-nen-Alistar-dep-game-lol.jpg','birthday'=>'1998-02-05','phone_number'=>'0639753926','email'=>'ha@gmail.com','role'=>'admin','password'=>bcrypt('123456'),'is_active'=>'1'],
        	['name'=>'anh','avatar'=>'https://wallup.net/wp-content/uploads/2017/03/27/342524-League_of_Legends-Alistar.jpg','birthday'=>'1997-03-05','phone_number'=>'088866699','email'=>'anh@gmail.com','role'=>'user','password'=>bcrypt('123456'),'is_active'=>'1'],
        	['name'=>'lan','avatar'=>'https://i.imgur.com/uluTPCU.jpg','birthday'=>'1999-03-01','phone_number'=>'0723566335','email'=>'lan@gmail.com','role'=>'user','password'=>bcrypt('123456'),'is_active'=>'1']
        ]);
    }
}
