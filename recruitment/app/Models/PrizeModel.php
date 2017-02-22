<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrizeModel extends Model {
	//
	protected $table = 'prize';
	protected $fillable = [
		'id', 'cv_id', 'prize_name', 'prize_year',
	];
	protected $timestamp = true;
}
