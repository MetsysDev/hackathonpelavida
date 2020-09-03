<?php namespace App\Controllers;

class Tabelapacientes extends BaseController
{
	public function index()
	{
        $js = array(
            "assets/js/tabelas/pacientes.js",
        );

		return $this->template('tabelas/Pacientes', array('js' => $js));
	}
}