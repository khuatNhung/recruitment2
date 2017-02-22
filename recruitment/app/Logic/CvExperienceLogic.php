<?php 
namespace App\Logic;
// use App\Models\Cv;
// use App\Models\Educations;
use Illuminate\Support\Facades\DB;
class CvExperienceLogic 
{
	public function cvExperienceLogic ($id)
	{
		$cv =DB::select(DB::raw("SELECT t.*
			FROM experience t
			WHERE t.cv_id=$id;
			"));
		return $cv;
	}
}

 ?>