<?php

namespace App\Logic;
// use App\Models\Cv;
// use App\Models\Educations;
use Illuminate\Support\Facades\DB;
class CvEducationLogic 
{
	public function cvEducationLogic($id)
	{
		$cv =DB::select(DB::raw("SELECT t.*
			FROM school t
			WHERE t.cv_id=$id;
			"));
		return $cv;
	}
}
