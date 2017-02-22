<?php

namespace App\Http\Controllers;

use App\AppConstant;
use App\Http\Requests\UserRequest;
use App\Logic\CommonLogic;
use App\Logic\UserLogic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		//
		$userLogic = new UserLogic;
		$keys = [
			'name',
			'email',
			'phone',
			'user_type',
			'row_on_page',
		];
		$params = CommonLogic::ArrayFilter($request->all(), $keys);
		$params['row_on_page'] = ($params['row_on_page'] != null) ? $params['row_on_page'] : AppConstant::DEFAULT_ROW_ON_PAGE;
		$users = $userLogic->index($params);
		$userTypes = AppConstant::$USER_TYPES;
		$rowOnPage = AppConstant::$ROW_ON_PAGE;
		return view('admin.user.index')
			->with('users', $users)
			->with('userTypes', $userTypes)
			->with('rowOnPage', $rowOnPage)
			->with('params', $params)
			->with('no', ($request->input('page', 1) - 1) * $params['row_on_page']);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
		$userTypes = AppConstant::$USER_TYPES;
		return view('admin.user.create')
			->with('userTypes', $userTypes);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(UserRequest $request) {
		//
		$userLogic = new UserLogic;
		$inputs = $request->all();
		$userLogic->store($inputs);
		Session::flash('flash_message', 'Successfully created User!');
		return Redirect::to('admin/user');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
		$userLogic = new UserLogic;
		$user = $userLogic->show($id);
		return view('admin.user.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
		$userLogic = new UserLogic;
		$user = $userLogic->show($id);
		$userTypes = AppConstant::$USER_TYPES;
		return view('admin.user.edit')
			->with('user', $user)
			->with('userTypes', $userTypes);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(UserRequest $request, $id) {
		//
		$userLogic = new UserLogic;
		$userLogic->update($request->all(), $id);

		Session::flash('flash_message', 'Update user info success');
		return Redirect::to('admin/user');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
		$userLogic = new UserLogic;
		$userLogic->destroy($id);
		Session::flash('flash_message', 'Successfully deleted the user!');
		return Redirect::to('admin/user');
	}

}
