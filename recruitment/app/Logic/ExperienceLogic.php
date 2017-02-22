<?php

namespace App\Logic;
use App\Models\ExperienceModel;
use DateTime;

class ExperienceLogic {
	public function store($request, $cv_id) {
		$num_exp = $request->num_exp;
		for ($demExp = 0; $demExp <= $num_exp; $demExp++) {
			if (isset($request["exp_start_date_" . $demExp])) {
				if (!empty($request["project_name_" . $demExp])) {
					$start = $request['exp_start_date_' . $demExp];
					$startFormat = date_format(new DateTime($start), "Y-m-d");
					$end = $request['exp_end_date_' . $demExp];
					$endFormat = date_format(new DateTime($end), "Y-m-d");
					ExperienceModel::create([
						'cv_id' => $cv_id,
						'start_date' => !empty($start) ? $startFormat : null,
						'end_date' => !empty($end) ? $endFormat : null,
						'work_unit' => $request['work_unit_' . $demExp],
						'project_name' => $request['project_name_' . $demExp],
						'project_description' => $request['project_description_' . $demExp],
						'leader_teacher' => $request['project_description_' . $demExp],
						'position' => $request['exp_position_' . $demExp],
						'task' => $request['task_' . $demExp],
						'size' => $request['size_' . $demExp],
						'technology' => $request['technology_' . $demExp],
					]);
				}
			}
		}

	}

}