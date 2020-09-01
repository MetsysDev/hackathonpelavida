<?php namespace App\Controllers;

class Tabelapacientes extends BaseController
{
	public function index()
	{
        $js = array(
            "assets/js/tabelas/pacientes.js",
        );

		$this->template('tabelas/pacientes', array('js' => $js));
	}
}