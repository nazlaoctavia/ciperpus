<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('auth');
    $this->load->library('session');
  }

  function index(){
    $this->load->view('v_login');
  }

  function auth(){
    $email    = $this->input->post('email',TRUE);
    $username    = $this->input->post('username',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->auth->cek_users($username,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $username  = $data['username'];
        $password  = $data['password'];
        $level = $data['level'];
        $sesdata = array(
            'username'  => $username,
            'password'  => $password,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === 'admin'){
          echo $this->session->set_flashdata('admin');
            redirect('admin');
        // access login for author
        }elseif($level === 'user'){
          echo $this->session->set_flashdata('user','selamat datang user');
            redirect('user');
        // access login for Staff
      }elseif($level === 'petugas'){
        echo $this->session->set_flashdata('petugas','selamat datang petugas');
          redirect('petugas');
        }else{
            
            redirect('admin');
        }
    }else{
        $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }

}