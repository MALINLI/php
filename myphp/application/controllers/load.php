<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Load extends CI_Controller {
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

	public function login()
	{
		$this->load->view('login');
	}
}
?>