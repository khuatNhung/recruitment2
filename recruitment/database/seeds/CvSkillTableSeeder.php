<?php

use Illuminate\Database\Seeder;

class CvSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv_skill')->delete();
        $date= date('Y/m/d h:i');
        DB::table('cv_skill')->insert([
            'skill_id'=>1,
            'cv_id'=>1,
            'number_year'=>'1 năm',
            'description'=>'áp dụng kỹ năng thật tuyệt',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv_skill')->insert([
            'skill_id'=>2,
            'cv_id'=>1,
            'number_year'=>'2 năm',
            'description'=>'áp dụng kỹ năng thật tuyệt',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv_skill')->insert([
            'skill_id'=>3,
            'cv_id'=>3,
            'number_year'=>'3 năm',
            'description'=>'áp dụng kỹ năng thật tuyệt',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv_skill')->insert([
            'skill_id'=>4,
            'cv_id'=>4,
            'number_year'=>'4 năm',
            'description'=>'áp dụng kỹ năng thật tuyệt',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('cv_skill')->insert([
            'skill_id'=>5,
            'cv_id'=>5,
            'number_year'=>'>5 năm',
            'description'=>'áp dụng kỹ năng thật tuyệt',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
