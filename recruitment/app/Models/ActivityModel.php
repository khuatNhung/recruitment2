<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityModel extends Model {
	protected $table = 'activity';
	protected $fillable = [
		'id', 'cv_id', 'start_date', 'end_date', 'activity_name', 'position', 'description',
	];
	protected $timestamp = true;

}
