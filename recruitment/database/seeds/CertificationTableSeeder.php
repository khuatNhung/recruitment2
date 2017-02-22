<?php

use Illuminate\Database\Seeder;

class CertificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('certification')->delete();
        $date=date('Y/m/d h:i');
        DB::table('certification')->insert([
            'cv_id'=>1,
            'cer_name'=>'tieng anh 1',
            'date_of_issue'=>$date,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('certification')->insert([
           'cv_id'=>1,
            'cer_name'=>'tieng anh 1',
            'date_of_issue'=>$date,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('certification')->insert([
            'cv_id'=>3,
          'cer_name'=>'tieng anh 1',
            'date_of_issue'=>$date,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('certification')->insert([
            'cv_id'=>4,
           'cer_name'=>'tieng anh 1',
            'date_of_issue'=>$date,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('certification')->insert([
            'cv_id'=>5,
            'cer_name'=>'tieng anh 1',
            'date_of_issue'=>$date,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
