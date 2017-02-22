<?php

namespace App\Logic;

use App\Models\UserModel;
use App\Logic\CommonLogic;

class UserLogic {

    public function index($params) {
        $userModel = new UserModel;
        $users = $userModel->index($params);
        return $users;
    }
    public function store($params) {
        $userModel = new UserModel;
        $userModel->name = (isset($params['name']) ? $params['name']: "");
        $userModel->email = (isset($params['email']) ? $params['email']: "");
        $userModel->phone = (isset($params['phone']) ? $params['phone']: "");
        $userModel->user_type = (isset($params['user_type']) ? $params['user_type']: "");
        $userModel->password = bcrypt((isset($params['password']) ? $params['password']: ""));
        
        $userModel->save();
    }
    public function update($params, $id) {
        $userModel = new UserModel;
        $user = $userModel->show($id);
        if ($user != null) {
            $user->name = (isset($params['name']) ? $params['name']: "");
            $user->email = (isset($params['email']) ? $params['email']: "");
            $user->phone = (isset($params['phone']) ? $params['phone']: "");
            $user->user_type = (isset($params['user_type']) ? $params['user_type']: "");
            $user->password = bcrypt((isset($params['password']) ? $params['password']: ""));
            $user->save();
        }
    }
    public function show($id) {
        $userModel = new UserModel;
        $user = $userModel->show($id);
        return $user;
    }
    
    public function destroy($id) {
        UserModel::destroy($id);
    }
}
