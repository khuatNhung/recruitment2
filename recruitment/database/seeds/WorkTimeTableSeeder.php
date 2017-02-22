<?php

use Illuminate\Database\Seeder;

class WorkTimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_time')->delete();
        $date=date('Y/m/d h:i');
        DB::table('work_time')->insert([
            'assess_id'=>1,
            'start_date'=>$date,
            'end_date'=>$date,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
          DB::table('work_time')->insert([
            'assess_id'=>2,
            'start_date'=>$date,
            'end_date'=>$date,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
            DB::table('work_time')->insert([
            'assess_id'=>3,
            'start_date'=>$date,
            'end_date'=>$date,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
              DB::table('work_time')->insert([
            'assess_id'=>4,
            'start_date'=>$date,
            'end_date'=>$date,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
            DB::table('work_time')->insert([
            'assess_id'=>5,
            'start_date'=>$date,
            'end_date'=>$date,
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
