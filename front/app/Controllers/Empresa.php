<?php namespace App\Controllers;

class Empresa extends BaseController
{
	public function index()
	{

		$js = array(
            "assets/js/cadastro/empresa.js"
		);

		return $this->template('cadastros/Empresa', array('js' => $js));
	}
}