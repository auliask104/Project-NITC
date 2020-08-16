<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'Test'  => "Test Pull Request",
			'title' => "Home Page"
		];
		return view('Home', $data);
	}

	//--------------------------------------------------------------------

}
