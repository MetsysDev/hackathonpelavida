<?php namespace App\Controllers\Cadastro;

use CodeIgniter\Controller;

class Paciente extends Controller
{
	function __construct()
	{
		$this->PacienteModel = model('App\Models\Cadastro\Paciente\PacienteModel', false);
	}
	
	public function cadastrar()
	{
		$this->PacienteModel->cadastrar(getContents());
	}

	public function getPacientes()
	{
		$this->PacienteModel->getPacientes(getContents());
	}

}