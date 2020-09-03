<?php namespace App\Controllers;

class Unidadesaude extends BaseController
{
	public function index()
	{
		$js = array(
            "assets/js/cadastro/unidadeSaude.js"
		);

		return $this->template('cadastros/Unidadesaude', array('js' => $js));
	}
}