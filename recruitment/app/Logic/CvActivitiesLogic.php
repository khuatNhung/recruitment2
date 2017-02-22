<?php 
namespace App\Logic;
// use App\Models\Cv;
// use App\Models\Educations;
use Illuminate\Support\Facades\DB;
class CvActivitiesLogic 
{
	public function cvActivitiesLogic($id)
	{
		$cv =DB::select(DB::raw("SELECT t.*
			FROM activity t
			WHERE t.cv_id=$id;
			"));
		return $cv;
	}
}

 ?>