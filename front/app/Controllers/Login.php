<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		parent::initController($request, $response, $logger);
		$this->session = session();
	}

	public function index()
	{
		if (!is_null($this->session->get('login'))) {
			return redirect()->to(base_url('Dashboard'));
		}

		return view('login/login');
	}

	public function logar()
	{
		helper('common_helper');

		$url = 'http://localhost/hackathonpelavida/back-end/public/Usuario/login';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, getContents());
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		$statusCode =  curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		$result = json_decode($result, true);
		if ($statusCode == 200) {
			$this->session->set(array('login' => true));
			send(200, $result);
		}
		send(400, null, $result['message']);
	}

	public function logout()
	{
		$this->session->destroy();
	}
}