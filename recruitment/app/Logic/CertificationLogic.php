<?php

namespace App\Logic;
use App\Models\CertificationModel;
use DateTime;

class CertificationLogic {
	public function store($request, $cv_id) {
		$num_cer = $request->num_cer;
		for ($demCer = 0; $demCer <= $num_cer; $demCer++) {
			if (isset($request["date_of_issue_" . $demCer])) {
				if ($request['cer_name_' . $demCer] != '') {
					$dateIssue = $request['date_of_issue_' . $demCer];
					$dateIssueFormat = date_format(new DateTime($dateIssue), "Y-m-d");
					CertificationModel::create([
						'cv_id' => $cv_id,
						'cer_name' => $request['cer_name_' . $demCer],
						'date_of_issue' => !empty($dateIssue) ? $dateIssueFormat : null,
					]);
				}
			}
		}
	}

}