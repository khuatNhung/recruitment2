<?php

use Illuminate\Database\Seeder;

class MonthAssessmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('month_assessment')->delete();
        $date=date('Y/m/d h:i');
        DB::table('month_assessment')->insert([
            'work_id'=>1,
            'user_id'=>4,
            'content'=>'jjdjj',
            'point_job'=>8,
            'point_discipline'=>9,
            'point_event'=>7,
            'total'=>9,
            'conclude'=>'tot',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('month_assessment')->insert([
            'work_id'=>2,
            'user_id'=>1,
            'content'=>'jshjsh',
            'point_job'=>5,
            'point_discipline'=>5,
            'point_event'=>5,
            'total'=>9,
            'conclude'=>'có tiến bộ',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('month_assessment')->insert([
            'work_id'=>3,
            'user_id'=>3,
            'content'=>'jdjjdjjdj',
            'point_job'=>7,
            'point_discipline'=>8,
            'point_event'=>9,
            'total'=>9,
            'conclude'=>'ý thức tốt',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('month_assessment')->insert([
            'work_id'=>4,
            'user_id'=>4,
            'content'=>'hjsjsowok',
            'point_job'=>4,
            'point_discipline'=>5,
            'point_event'=>5,
            'total'=>9,
            'conclude'=>"chưa tiến bộ",
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('month_assessment')->insert([
            'work_id'=>5,
            'user_id'=>5,
            'content'=>"shhdjdj",
            'point_job'=>7,
            'point_discipline'=>7,
            'point_event'=>7,
            'total'=>1,
            'conclude'=>"khá tốt",
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
