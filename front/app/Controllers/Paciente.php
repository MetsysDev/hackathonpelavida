<?php namespace App\Controllers;

class Paciente extends BaseController
{
	public function index()
	{
		$this->template('cadastros/paciente');
	}
}