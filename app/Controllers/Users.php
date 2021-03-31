<?php namespace App\Controllers;

use App\Models\UsernameModel;
class Users extends BaseController
{
	protected $usernameModel;
	public function __construct()
	{
		$this->usernameModel = new UsernameModel();
	}

	public function user()
	{
		$users = $this->usernameModel->findall();
		// dd($users);
		// $this->usernameModel->load->model('UsernameModel');
		// $users = $this->usernameModel->session->userdata('id');
		// $userdata = $this->usernameModel->UsernameModel->get();
		// return $userdata;
		$data = [
			'users' => $users
		];
		return view('/biodatauser/biodata_user', $data);
	}

	//--------------------------------------------------------------------

}
