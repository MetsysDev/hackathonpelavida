<?php namespace App\Controllers;

class Empresa extends BaseController
{
	public function index()
	{

		$js = array(
            "assets/js/cadastro/empresa.js"
		);

		$this->template('cadastros/empresa', array('js' => $js));
	}
}