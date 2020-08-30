<?php namespace App\Controllers;

class Usuario extends BaseController
{
	public function index()
	{
		$this->template('cadastros/usuario');
	}
}