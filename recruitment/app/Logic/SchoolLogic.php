<?php

namespace App\Logic;
use App\Models\SchoolModel;
use DateTime;

class SchoolLogic {
	public function store($request, $cv_id) {
		$num_edu = $request->num_edu;
		for ($dem = 0; $dem <= $num_edu; $dem++) {
			if (isset($request["school_name_" . $dem])) {
				if ($request["school_name_" . $dem] != '') {
					$start = $request['edu_start_date_' . $dem];
					$startFormat = date_format(new DateTime($start), "Y-m-d");
					$end = $request['edu_end_date_' . $dem];
					$endFormat = date_format(new DateTime($end), "Y-m-d");
					SchoolModel::create([
						'cv_id' => $cv_id,
						'school_name' => $request['school_name_' . $dem],
						'start_date' => !empty($start) ? $startFormat : null,
						'end_date' => !empty($end) ? $endFormat : null,
					]);
				}
			}
		}
	}
}