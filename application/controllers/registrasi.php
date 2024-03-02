<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller{


	function __construct()
	{
        parent::__construct();
		$this->load->model('auth');
    }
    public function index()
    {
        $this->load->view('v_registrasi');
    }
    public function proses()
    {
        $this->form_validation->set_rules('password','password','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username','username','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true)
        {
            $password = md5($this->input->post('password'));
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $level = $this->input->post('level');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $jk = $this->input->post('jk');
            $this->auth->registrasi($username,$password,$email,$level,$nama,$alamat,$jk);
            redirect('login');
        }
    }
}