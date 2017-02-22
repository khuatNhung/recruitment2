<?php

use Illuminate\Database\Seeder;

class InterviewAssessmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interview_assessment')->delete();
        $date=date('Y/m/d h:i');
        DB::table('interview_assessment')->insert([
            'assess_id'=>1,
            'user_id'=>1,
            'content'=>'hsjjjwkk',
            'result'=>1,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('interview_assessment')->insert([
            'assess_id'=>2,
            'user_id'=>2,
            'content'=>'hsjjjwkk',
            'result'=>0,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('interview_assessment')->insert([
            'assess_id'=>3,
            'user_id'=>3,
            'content'=>'hsjjjwkk',
            'result'=>1,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('interview_assessment')->insert([
            'assess_id'=>4,
            'user_id'=>4,
            'content'=>'hsjjjwkk',
            'result'=>1,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('interview_assessment')->insert([
            'assess_id'=>5,
            'user_id'=>5,
            'content'=>'hsjjjwkk',
            'result'=>0,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
