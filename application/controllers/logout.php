<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller {


	public function logout(){
        $this->session->sess_destroy();
        
    }
}

