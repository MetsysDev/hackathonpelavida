<?php namespace App\Controllers;

class Empresa extends BaseController
{
	public function index()
	{
		$this->template('cadastros/empresa');
	}
}