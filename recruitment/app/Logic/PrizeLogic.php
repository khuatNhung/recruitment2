<?php

namespace App\Logic;
use App\Models\PrizeModel;

class PrizeLogic {
	public function store($request, $cv_id) {
		$num_prize = $request->num_prize;
		for ($demPrize = 0; $demPrize <= $num_prize; $demPrize++) {
			if (isset($request["prize_name_" . $demPrize])) {
				if ($request['prize_name_' . $demPrize] != '') {
					PrizeModel::create([
						'cv_id' => $cv_id,
						'prize_name' => $request['prize_name_' . $demPrize],
						'prize_year' => $request["prize_year_" . $demPrize],
					]);
				}
			}
		}
	}

}