<?php

use Illuminate\Database\Seeder;

class CvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv')->delete();
        $date=date('Y/m/d h:i');
        DB::table('cv')->insert([
            'user_id'=>1,
            'name'=>'Nguyễn Văn A',
            'image'=>'aa',
            'sex'=>0,
            'birthday'=>'1995/4/7',
            'email'=>'abc@gmail.com',
            'phone'=>'0209388338',
            'address'=>'hà nam',
            'current_address'=>'hà nội',
            'target'=>'trở thành lập trình viên',
            'hobbies'=>'du lịch...',
            'other'=>'bsjjsjjs',
            'status'=>'actived',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv')->insert([
            'user_id'=>2,
            'name'=>'Nguyễn Văn A',
            'image'=>'aa',
            'sex'=>0,
            'birthday'=>'1995/5/29',
            'email'=>'nhung@gmail.com',
            'phone'=>'0209388338',
            'address'=>'hà nam',
            'current_address'=>'hà nội',
            'target'=>'trở thành lập trình viên',
            'hobbies'=>'du lịch...',
            'other'=>'bsjjsjjs',
            'status'=>'actived',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv')->insert([
            'user_id'=>3,
            'name'=>'Nguyễn Văn A',
            'image'=>'aa',
            'sex'=>0,
            'birthday'=>'1995/2/28',
            'email'=>'dung@gmail.com',
            'phone'=>'0209388338',
            'address'=>'hà nam',
            'current_address'=>'hà nội',
            'target'=>'trở thành lập trình viên',
            'hobbies'=>'du lịch...',
            'other'=>'bsjjsjjs',
            'status'=>'actived',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv')->insert([
            'user_id'=>4,
            'name'=>'Nguyễn Văn A',
            'image'=>'aa',
            'sex'=>0,
            'birthday'=>'1995/4/7',
            'email'=>'ly@gmail.com',
            'phone'=>'0209388338',
            'address'=>'hà nam',
            'current_address'=>'hà nội',
            'target'=>'trở thành lập trình viên',
            'hobbies'=>'du lịch...',
            'other'=>'bsjjsjjs',
            'status'=>'actived',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv')->insert([
            'user_id'=>5,
            'name'=>'Nguyễn Văn A',
            'image'=>'aa',
            'sex'=>0,
            'birthday'=>'1995/4/7',
            'email'=>'abc@gmail.com',
            'phone'=>'0209388338',
            'address'=>'hà nam',
            'current_address'=>'hà nội',
            'target'=>'trở thành lập trình viên',
            'hobbies'=>'du lịch...',
            'other'=>'bsjjsjjs',
            'status'=>'actived',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
