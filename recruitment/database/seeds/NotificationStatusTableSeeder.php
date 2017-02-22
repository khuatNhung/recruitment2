<?php

use Illuminate\Database\Seeder;

class NotificationStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification_status')->delete();
        $date=date('Y/m/d h:i');
        DB::table('notification_status')->insert([
            'user_id'=>1,
            'notifi_id'=>1,
            'status'=>0,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('notification_status')->insert([
            'user_id'=>2,
            'notifi_id'=>2,
            'status'=>1,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('notification_status')->insert([
            'user_id'=>3,
            'notifi_id'=>3,
            'status'=>0,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('notification_status')->insert([
            'user_id'=>4,
            'notifi_id'=>4,
            'status'=>1,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('notification_status')->insert([
            'user_id'=>5,
            'notifi_id'=>5,
            'status'=>1,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
