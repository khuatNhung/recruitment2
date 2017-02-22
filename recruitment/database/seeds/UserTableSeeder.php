<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $date= date('Y/m/d h:i');
		$mail='@gmail.com';
		DB::table('users')->insert([
            'name' => 'DungNguyen',
            'email' => 'dungnguyen'.$mail,
            'password' => bcrypt('secret'),
            'phone' =>'01628597431',
            'image'=>'images/anh1.jpg',
            'user_type'=>'admin',
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        DB::table('users')->insert([
            'name' => 'linhtrieu',
            'email' => 'linhtrieu'.$mail,
            'password' => bcrypt('secret'),
            'phone' =>'0828283993',
            'image'=>'images/anh2.jpg',
            'user_type'=>'leader',
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        DB::table('users')->insert([
            'name' => 'dungpham',
            'email' => 'dungpham'.$mail,
            'password' => bcrypt('secret'),
            'phone' =>'0976640109',
            'image'=>'images/anh3.jpg',
            'user_type'=>'user',
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        DB::table('users')->insert([
            'name' => 'maido',
            'email' => 'maido'.$mail,
            'password' => bcrypt('secret'),
            'phone' =>'01982738392',
            'image'=>'images/anh4',
            'user_type'=>'user',
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        DB::table('users')->insert([
            'name' => 'thunguyen',
            'email' => 'thunguyen'.$mail,
            'password' => bcrypt('secret'),
            'phone' =>'0928377782',
            'image'=>'images/anh5',
            'user_type'=>'leader',
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
    }
}
