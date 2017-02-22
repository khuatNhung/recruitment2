<?php

use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experience')->delete();
        $date=date('Y/m/d h:i');
        DB::table('experience')->insert([
            'cv_id'=>1,
            'start_date'=>'2016/1/1',
            'end_date'=>'2016/2/1',
            'work_unit'=>'fpt',
            'project_name'=>'web bán máy tính',
            'project_description'=>'jdjdkksk',
            'leader_teacher'=>'nguyễn văn B',
            'position'=>'thành viên',
            'task'=>'code logic',
            'size'=>'4',
            'technology'=>'php',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('experience')->insert([
            'cv_id'=>1,
            'start_date'=>'2016/1/1',
            'end_date'=>'2016/2/1',
            'work_unit'=>'đh giao thông vận tải',
           
            'project_name'=>'web bán quần áo',
            'project_description'=>'jdjdkksk',
            'leader_teacher'=>'nguyễn văn C',
            'position'=>'thành viên',
            'task'=>'thiết kế giao diện',
            'size'=>'5',
            'technology'=>'asp.net',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('experience')->insert([
            'cv_id'=>3,
            'start_date'=>'2016/1/1',
            'end_date'=>'2016/2/1',
            'work_unit'=>'fpt',
            'project_name'=>'web học tiếng anh',
           
            'project_description'=>'jdjdkksk',
            'leader_teacher'=>'nguyễn văn D',
            'position'=>'thành viên',
            'task'=>'code logic',
            'size'=>'5',
            'technology'=>'ruby',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('experience')->insert([
            'cv_id'=>4,
            'start_date'=>'2016/1/1',
            'end_date'=>'2016/2/1',
            'work_unit'=>'fpt',
            'project_name'=>'web tin tuc',
            
            'project_description'=>'jdjdkksk',
            'leader_teacher'=>'nguyễn văn E',
            'position'=>'thành viên',
            'task'=>'thiết kế giao diện',
            'size'=>'5',
            'technology'=>'php',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('experience')->insert([
            'cv_id'=>5,
            'start_date'=>'2016/1/1',
            'end_date'=>'2016/2/1',
            'work_unit'=>'fpt',
           
            'project_name'=>'web quản lý nhân sự',
            'project_description'=>'jdjdkksk',
            'leader_teacher'=>'nguyễn văn F',
            'position'=>'thành viên',
            'task'=>'code logic',
            'size'=>'5',
            'technology'=>'java',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
