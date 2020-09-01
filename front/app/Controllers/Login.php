<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$js = array(
            "assets/js/login/login.js"
		);

		$this->template('login/login', array('js' => $js));
	}
}