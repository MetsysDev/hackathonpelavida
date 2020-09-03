<?php namespace App\Controllers;

class Comorbidade extends BaseController
{
	function __construct()
	{
		$this->ComorbidadeModel = model('App\Models\Cadastro\Comorbidade\ComorbidadeModel', false);
	}
	
	public function cadastrar()
	{
		$this->ComorbidadeModel->cadastrar(getContents());
	}

	public function listar()
	{
		$this->ComorbidadeModel->getComorbidades(getContents());
	}

}