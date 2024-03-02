<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class data_buku extends CI_Controller{

    public function buku(){
        $this->load->view('buku');
    }
    public function update($id)
    {
        $where=array('id_buku'=>$id);
        $rec=$this->mymodel->read_where('tb_buku',$where);
        $data=array(
            'rec'=>$rec[0],
        );
        $this->load->view('V_update',$data);
    }

}