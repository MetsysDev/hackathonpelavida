<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Usuario extends Controller
{
	public function index()
	{
		echo json_encode('token');
    }
    
    public function refreshToken()
    {
        # code...
    }

	//--------------------------------------------------------------------

}