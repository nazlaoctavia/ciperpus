<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function index(){
        $data['username'] = $this->session->userdata('username');
        $data['buku'] = $this->mymodel->tampil_buku()->result();    
        $data['page']='v_dashboard';
		$this->load->view('v_user',$data);
	}
   
	public function vcs_peminjaman(){
        $data['username'] = $this->session->userdata('username');
        $data['page']='vcs_peminjaman';
		$this->load->view('v_user',$data);
	}

    public function vcs_ulasan(){
        $data['username'] = $this->session->userdata('username');
        $data['id_user'] = $this->session->userdata('id_user');
        $data['page']='vcs_ulasan';
		$this->load->view('v_user',$data);
	}


	public function bukupeminjaman(){
        $data['username'] = $this->session->userdata('username');
        $data['peminjaman'] = $this->mymodel->tampil_peminjaman()->result();
        $data['page']='v_bukupeminjam';
		$this->load->view('v_user',$data);
	}

	public function c_peminjaman()
    {
        $this->form_validation->set_rules('buku','buku','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true)
        {
            $username = $this->input->post('username');
            $buku = $this->input->post('buku');
            $tanggal_peminjaman = $this->input->post('tanggal_peminjaman');
            $tanggal_pengembalian = $this->input->post('tanggal_pengembalian');
            $status= $this->input->post('status');

        $this->mymodel->cr_peminjaman($username,$buku,$tanggal_peminjaman,$tanggal_pengembalian,$status);
        
        redirect(site_url('user'));
        }
	
    }
    public function c_ulasan()
    {
        $this->form_validation->set_rules('id_user','id_user','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true)
        {
            $id_user = $this->input->post('id_user');
            $id_buku = $this->input->post('id_buku');
            $ulasan = $this->input->post('ulasan');
            $rating = $this->input->post('rating');
            $status= $this->input->post('status');

        $this->mymodel->cr_ulasan($id_user,$id_buku,$ulasan,$rating);
        
        redirect(site_url('user'));
        }
	
    }

	public function on()
    {
        $this->form_validation->set_rules('status','status','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true)
        {
            $id_user = $this->input->post('id_user');
            $status = $this->input->post('status');

        $this->mymodel->status_on($id_user,$status);
        
        redirect(site_url('user'));
        }
	
    }

    public function batalkan()
    {
		$this->form_validation->set_rules('status', 'status','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
		   {
			$id_peminjaman= $this->input->post('idk');
			$status = $this->input->post('status');

			$this->mymodel->status($id_peminjaman,$status);

		
		redirect(site_url('user/bukupeminjaman'));
		}
	}
	public function delete_p($id)
    {
        $where=array('id_peminjaman'=>$id);
        $this->mymodel->delete('tb_peminjaman',$where);
        redirect(site_url('user/bpeminjaman'));
    }
}

