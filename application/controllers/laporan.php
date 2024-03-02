<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

	public function peminjaman()
	{
        $data['tes'] = $this->mymodel->tampil_buku()->result();
		$this->load->view('v_laporanpeminjaman',$data);
    }
    public function peminjamanp()
	{
        $data['tes'] = $this->mymodel->tampil_bukup()->result();
		$this->load->view('v_laporanpeminjaman',$data);
    }
    public function peminjamanuser()
    {
        $data['tes'] = $this->mymodel->tampil_buku()->result();
		$this->load->view('v_laporanpeminjaman',$data);
    }
    public function setuju($id)
    {
        $this->form_validation->set_rules('status', 'status', 'trim|required|min_length[1]max_length[255]');
        if ($this->form_validation->run()==true)
        {
            $id_uku= $this->input->post('idk1');
            $status= $this->input->post('status');

            $this->mymodel->status_up($id_buku,$status);

            redirect(site_url('laporan/data_peminjaman'));
        }
    }
}

