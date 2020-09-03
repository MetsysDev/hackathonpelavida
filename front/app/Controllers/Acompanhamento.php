<?php namespace App\Controllers;

class Acompanhamento extends BaseController
{
	public function index()
	{
		$js = array(
            "assets/js/cadastro/acompanhameto.js"
		);
		
		return $this->template('cadastros/Acompanhamento', array('js' => $js));
	}
}