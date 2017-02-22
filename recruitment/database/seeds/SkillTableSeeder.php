<?php

use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill')->delete();
        $date= date('Y/m/d h:i');
        DB::table('skill')->insert([
            'skill_name'=>'C',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('skill')->insert([
            'skill_name'=>'C+',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('skill')->insert([
            'skill_name'=>'C#',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('skill')->insert([
            'skill_name'=>'Photoshop',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('skill')->insert([
            'skill_name'=>'Php',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
