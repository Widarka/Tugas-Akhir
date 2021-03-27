<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('dashboard');
	}

	public function biodatauser()
	{
		return view('biodata_user');
	}

	//--------------------------------------------------------------------

}
