<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	function __construct()
	{
		$this->DashboardModel = model('App\Models\Dashboard\DashboardModel', false);
	}

	public function gerar()
	{
        $this->DashboardModel->gerar(getContents());
	}

}