<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$this->template('dashboard/dashboard');
	}
}