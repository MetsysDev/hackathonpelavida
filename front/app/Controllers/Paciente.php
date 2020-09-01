<?php namespace App\Controllers;

class Paciente extends BaseController
{
	public function index()
	{
		$js = array(
            "assets/js/cadastro/paciente.js"
		);

		$this->template('cadastros/paciente', array('js' => $js));
	}
}