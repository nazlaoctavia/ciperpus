<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('v_home');
	}
	public function logout()
	{
		redirect (site_url('login'));
	}
}
