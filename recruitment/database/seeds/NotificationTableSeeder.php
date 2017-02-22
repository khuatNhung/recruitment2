<?php

use Illuminate\Database\Seeder;

class NotificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification')->delete();
          $date=date('Y/m/d h:i');
        DB::table('notification')->insert([
            'user_id'=>1,
            'cv_id'=>1,
            'cvup_id'=>1,
            'action'=>"tạo cv",
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('notification')->insert([
            'user_id'=>2,
            'cv_id'=>2,
            'cvup_id'=>2,
            'action'=>"đánh giá hàng tháng",
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('notification')->insert([
            'user_id'=>3,
            'cv_id'=>3,
            'cvup_id'=>3,
            'action'=>"đánh giá kết quả phỏng vấn",
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('notification')->insert([
            'user_id'=>4,
            'cv_id'=>4,
            'cvup_id'=>4,
            'action'=>"upload cv",
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('notification')->insert([
            'user_id'=>5,
            'cv_id'=>5,
            'cvup_id'=>5,
            'action'=>"upload cv",
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
