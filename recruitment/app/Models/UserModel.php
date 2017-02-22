<?php

namespace App\Models;

use App\AppConstant;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model {

	protected $table = 'users';
	protected $fillable = ['id',
		'name', 'email', 'password', 'phone', 'image', 'user_type', 'remember_token', 'create_at', 'update_at',
	];

	public function index($params) {
		$users = self::where('name', 'like', '%' . (($params['name'] != null) ? $params['name'] : "") . '%')
			->where('email', 'like', '%' . (($params['email'] != null) ? $params['email'] : "") . '%')
			->where('phone', 'like', '%' . (($params['phone'] != null) ? $params['phone'] : "") . '%')
			->where('user_type', 'like', '%' . (($params['user_type'] != null) ? $params['user_type'] : "") . '%')
			->paginate(($params['row_on_page'] != null) ? $params['row_on_page'] : AppConstant::DEFAULT_ROW_ON_PAGE);
		return $users;
	}

	public function show($userId) {
		$user = self::where('id', $userId)->first();
		return $user;
	}

//    public function store($params) {
	//        $newUser = self::create([
	//                    'name' => $params['name'],
	//                    'email' => $params['email'],
	//                    'password' => $params['password'],
	//                    'phone' => $params['phone'],
	//                    'image' => $params['image'],
	//                    'user_type' => $params['user_type'],
	//                    'remember_token' => $params['remember_token'],
	//                    'create_at' => $params['create_at'],
	//                    'update_at' => $params['update_at'],
	//        ]);
	//        return $newUser;
	//    }

	public static function destroy($id) {
		$user = self::where('id', $id)->first();
		if ($user != null) {
			$user->delete();
		}
	}
}
