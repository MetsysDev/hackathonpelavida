<?php namespace App\Controllers;

class Acompanhamento extends BaseController
{
	public function index()
	{
		$this->template('cadastros/acompanhamento');
	}
}