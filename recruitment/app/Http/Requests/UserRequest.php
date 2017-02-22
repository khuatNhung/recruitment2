<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\UserModel;

class UserRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $method = $this->method();
        switch ($method) {
            case 'GET':
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                    return [
                        'name' => 'required',
                        'email' => 'required|email|max:255|unique:users',
                        'password' => 'required|min:6|confirmed',
                        'phone' => 'required|numeric|min:10|unique:users',
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'name' => 'required',
                        'email' => 'required|email|max:255|unique:users,email,' . $this->id,
                        'password' => 'min:6|confirmed',
                        'phone' => 'required|numeric|min:10|unique:users,phone,' . $this->id,
                    ];
                }
            default: {
                return [];
            }
        }
    }

    public function messages() {
        return [
            'name.required' => 'Vui lòng nhập user name',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email này đã tồn tại',
            'email.email' => 'Địa chỉ email không đúng định dạng',
            'password.required' => 'Vui lòng nhập password',
            'phone.unique' => 'Số điện thoại này đã tồn tại',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.numeric' => 'Số điện thoại không đúng định dang',
            'phone.min' => 'Số điện thoại phải có ít nhất 10 chữ số',
            'password.min' => 'Vui lòng nhập mật khẩu có ít nhất 6 kí tự',
            'password.confirmed' => 'Xác nhận mật khẩu không đúng!'
        ];
    }

}
