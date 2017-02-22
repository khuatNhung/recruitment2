<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school')->delete();
        $date=date('Y/m/d h:i');
        $date2=date('Y/m/d');
        DB::table('school')->insert([
            'cv_id'=>1,
            'school_name'=>'dh gtvt',
            'start_date'=>$date2,
            'end_date'=>$date2,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('school')->insert([
            'cv_id'=>1,
            'school_name'=>'dh gtvt',
            'start_date'=>$date2,
            'end_date'=>$date2,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('school')->insert([
            'cv_id'=>3,
            'school_name'=>'dh gtvt',
            'start_date'=>$date2,
            'end_date'=>$date2,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('school')->insert([
            'cv_id'=>4,
            'school_name'=>'dh gtvt',
            'start_date'=>$date2,
            'end_date'=>$date2,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('school')->insert([
            'cv_id'=>5,
            'school_name'=>'dh gtvt',
            'start_date'=>$date2,
            'end_date'=>$date2,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
