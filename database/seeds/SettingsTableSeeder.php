<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
           ['logo_url'=>'https://png.pngtree.com/png-clipart/20190613/original/pngtree-music-background-png-image_3569648.jpg',
           'address'=>'14 Đông Quan, Quan Hoa, Cầu Giấy, Hà Nội','hotline'=>'0888999777',
           'maps'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8189996316682!2d105.80336521435609!3d21.039927085992318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3e1ceeba2d%3A0xe19c334bde24321f!2zMTQgxJDDtG5nIFF1YW4sIFF1YW4gSG9hLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1579157379201!5m2!1sen!2s','email'=>'abc888@gmail.com']
        ]);
    }
}
