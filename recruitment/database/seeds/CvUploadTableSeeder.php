<?php

use Illuminate\Database\Seeder;

class CvUploadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv_upload')->delete();
       $date=date('Y/m/d h:i');
        DB::table('cv_upload')->insert([
            'user_id'=>1,
            'path'=>'c/d/msj',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv_upload')->insert([
            'user_id'=>2,
            'path'=>'c/d/msj',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv_upload')->insert([
            'user_id'=>3,
            'path'=>'c/d/msj',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv_upload')->insert([
            'user_id'=>4,
            'path'=>'c/d/msj',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv_upload')->insert([
            'user_id'=>5,
            'path'=>'c/d/msj',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
