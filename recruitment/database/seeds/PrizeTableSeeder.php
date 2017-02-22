<?php

use Illuminate\Database\Seeder;

class PrizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prize')->delete();
        $date=date('Y/m/d h:i');
        DB::table('prize')->insert([
            'cv_id'=>1,
            'prize_name'=>'Học sinh xuất sắc',
            'prize_year'=>'năm 2014',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('prize')->insert([
            'cv_id'=>1,
            'prize_name'=>'Học sinh olympic',
            'prize_year'=>'năm 2013',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('prize')->insert([
            'cv_id'=>3,
            'prize_name'=>'Học sinh xuất sắc',
            'prize_year'=>'năm 2014',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('prize')->insert([
            'cv_id'=>4,
            'prize_name'=>'Học sinh xuất sắc',
            'prize_year'=>'năm 2014',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
        DB::table('prize')->insert([
            'cv_id'=>5,
            'prize_name'=>'Học sinh xuất sắc',
            'prize_year'=>'năm 2014',
            'created_at'=>$date,
            'updated_at'=>$date
            ]);
    }
}
