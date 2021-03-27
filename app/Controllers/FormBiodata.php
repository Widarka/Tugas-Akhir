<?php namespace App\Controllers;

use App\Models\UsernameModel;
class FormBiodata extends BaseController
{
	public function user()
	{
		// $UsernameModel = new UsernameModel();

		// $data = [
		// 	'username' => $UsernameModel
		// ];

		return view('/biodatauser/biodata_user');
	}

	//--------------------------------------------------------------------

}
