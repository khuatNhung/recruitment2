<?php

namespace App\Logic;
use App\Models\CvSkillModel;
use Illuminate\Support\Facades\DB;

class CvSkillLogic {
	public function store($request, $cv_id) {
		$num_skill = $request->num_skill;
		$insertSkill = new SkillLogic();
		for ($demSkill = 0; $demSkill <= $num_skill; $demSkill++) {
			if (isset($request["skill_name_" . $demSkill]) || isset($request["skill_description_" . $demSkill])) {
				switch ($request["skill_name_" . $demSkill]) {
				case 'other':
					$insertSkill->store($request["input_skill_name_" . $demSkill]);
					$skill_id = $insertSkill->id;
					CvSkillModel::create([
						'skill_id' => $skill_id,
						'cv_id' => $cv_id,
						'number_year' => $request['number_year_' . $demSkill],
						'description' => $request["skill_description_" . $demSkill],
					]);
					break;
				default:
					CvSkillModel::create([
						'skill_id' => $request['skill_name_' . $demSkill],
						'cv_id' => $cv_id,
						'number_year' => $request['number_year_' . $demSkill],
						'description' => $request["skill_description_" . $demSkill],
					]);
					break;
				}
			}
		}
	}

	public function selectCvIdBySkillId($skill_id) {
		$select = new CvSkill();
		return $select->selectCvIdBySkillId($skill_id);
	}

	public function skillCv($id) {
		$cv = DB::select(DB::raw("SELECT u.skill_name, t.number_year, t.description
			FROM cv_skill t, skill u
			WHERE t.cv_id = $id
			AND t.skill_id = u.id
			"));
		return $cv;
	}

}