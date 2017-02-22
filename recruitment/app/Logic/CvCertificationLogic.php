<?php 
namespace App\Logic;
// use App\Models\Cv;
// use App\Models\Educations;
use Illuminate\Support\Facades\DB;
class CvCertificationLogic 
{
	public function cvCertificationLogic($id)
	{
		$cv =DB::select(DB::raw("SELECT t.*
			FROM certification t
			WHERE t.cv_id=$id;
			"));
		return $cv;
	}
}

 ?>