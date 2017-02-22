<?php

namespace App\Logic;
use App\Models\ActivityModel;
use DateTime;

class ActivityLogic {
	public function store($request, $cv_id) {
		$num_act = $request->num_act;
		for ($demAct = 0; $demAct <= $num_act; $demAct++) {
			if (isset($request["act_start_date_" . $demAct]) || isset($request['activity_name_' . $demAct])) {
				if (!empty($request['activity_name_' . $demAct])) {
					$start = $request['act_start_date_' . $demAct];
					$startFormat = date_format(new DateTime($start), "Y-m-d");
					$end = $request['act_end_date_' . $demAct];
					$endFormat = date_format(new DateTime($end), "Y-m-d");
					ActivityModel::create([
						'cv_id' => $cv_id,
						'start_date' => !empty($start) ? $startFormat : null,
						'end_date' => !empty($end) ? $endFormat : null,
						'activity_name' => $request['activity_name_' . $demAct],
						'position' => $request['act_position_' . $demAct],
						'description' => $request['act_description_' . $demAct],
					]);
				}
			}
		}
	}

}