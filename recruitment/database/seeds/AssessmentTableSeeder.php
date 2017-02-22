<?php

use Illuminate\Database\Seeder;

class AssessmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assessment')->delete();
        $date=date('Y/m/d h:i');
        DB::table('assessment')->insert([
            'cv_id'=>1,
            'day_interview'=>$date,
            'deadline'=>$date,
            'point_test'=>5,
            'conclude_end'=>'jdjfjj',
            'result_end'=>1,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('assessment')->insert([
            'cv_id'=>2,
            'day_interview'=>$date,
            'deadline'=>$date,
            'point_test'=>5,
            'conclude_end'=>'jfjjf',
            'result_end'=>1,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('assessment')->insert([
            'cv_id'=>3,
            'day_interview'=>$date,
            'deadline'=>$date,
            'point_test'=>8,
            'conclude_end'=>'jjje',
            'result_end'=>0,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('assessment')->insert([
            'cv_id'=>4,
            'day_interview'=>$date,
            'deadline'=>$date,
            'point_test'=>6,
            'conclude_end'=>'dhjj',
            'result_end'=>0,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('assessment')->insert([
            'cv_id'=>5,
            'day_interview'=>$date,
            'deadline'=>$date,
            'point_test'=>2,
            'conclude_end'=>'hhejj',
            'result_end'=>1,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
