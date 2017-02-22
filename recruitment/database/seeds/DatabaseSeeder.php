<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RecruitmentTableSeeder::class);
        $this->call(CvTableSeeder::class);
        $this->call(SkillTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
        $this->call(ExperienceTableSeeder::class);
        $this->call(SchoolTableSeeder::class);
        $this->call(AssessmentTableSeeder::class);
        $this->call(InterviewAssessmentTableSeeder::class);
        $this->call(WorkTimeTableSeeder::class);
        $this->call(MonthAssessmentTableSeeder::class);
        $this->call(CvUploadTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
        $this->call(NotificationStatusTableSeeder::class);
    }
}