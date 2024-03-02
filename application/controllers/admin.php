<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
		$this->load->library('form_validation');
		$this->load->helper('url','form');
	}
	public function index(){
        $data['hitungbuku'] = $this->mymodel->hitungbuku();
        $data['buki'] = $this->mymodel->tampil_buku()->result();
        $data['hitungakun'] = $this->mymodel->hitungakun();
        $data['username'] = $this->session->userdata('username');
        $data['page']='v_dashboardadmin';
        echo $this->session->set_flashdata('success', 'selamat datang admin');
		$this->load->view('v_admin',$data);
        
        
	}
	public function buku(){
        $data['buku'] = $this->mymodel->tampil_buku()->result();
        $data['page']='buku';
        $this->session->set_flashdata('success', 'selamat datang admin');
        $this->load->view('v_admin',$data);
    }

    public function kategori(){
        $data['kategori'] = $this->mymodel->tampil_kategori()->result();
        $data['page']='kategori';
        $this->session->set_flashdata('success', 'selamat datang admin');
        $this->load->view('v_admin',$data);
    }

    public function ulasan(){
        $data['ulasan'] = $this->mymodel->tampil_ulasan()->result();
        $data['page']='ulasan';
        $this->session->set_flashdata('success', 'selamat datang admin');
        $this->load->view('v_admin',$data);
    }

	public function user()
    {
        $data['user'] = $this->mymodel->tampil_user()->result();
        $data['page'] = 'data_user';
        $this->session->set_flashdata('success', 'selamat datang admin');
        $this->load->view('v_admin',$data);
        
    }

	public function laporanpeminjaman(){
        $data['peminjaman'] = $this->mymodel->tampil_peminjaman()->result();
        $data['page']='v_laporanpeminjaman';
        $this->session->set_flashdata('success', 'selamat datang admin - anda berada di form laporan');
        $this->load->view('v_admin',$data);
    }

	public function read_peminjaman(){
        $data['peminjaman'] = $this->mymodel->tampil_peminjaman()->result();
        $data['page']='kelola_peminjaman';
        $this->session->set_flashdata('success', 'selamat datang admin');
        $this->load->view('v_admin',$data);
    }
    public function mahasiswa(){
        $data['mahasiswa']= $this->mymodel->tampil_mahasiswa()->result();
        $data['page']='v_mahasiswa';
        $this->session->set_flashdata('success', 'selamat datang admin');
        $this->load->view('v_admin',$data);
    }

    public function c_mahasiswa(){
        $data['page']='vc_mahasiswa';
        $this->session->set_flashdata('success', 'selamat datang admin di form tambah anggota');
        $this->load->view('v_admin',$data);
    }
    public function update_buku($id){
        $where=array('id_buku'=>$id);
        $rec=$this->mymodel->read_where('tb_buku',$where);
        $data=array(
            'rec'=>$rec[0],
        );
        $data['page']='v_updatebuku';
        $this->load->view('v_admin',$data);
    }
    public function update_kategori($id){
        $where=array('id_kategori'=>$id);
        $rec=$this->mymodel->read_where('tb_kategoribuku',$where);
        $data=array(
            'rec'=>$rec[0],
        );
        $data['page']='v_updatekategori';
        $this->load->view('v_admin',$data);
    }
    public function update_user($id){
        $where=array('id_user'=>$id);
        $rec=$this->mymodel->read_where('tb_user',$where);
        $data=array(
            'rec'=>$rec[0],
        );
        $data['page']='vc_mahasiswa';
        $this->load->view('v_admin',$data);
    }
    public function c_buku(){
        $data['page']='vc_buku';
        $this->load->view('v_admin',$data);
    }
    public function c_kategori(){
        $data['page']='vc_kategori';
        $this->load->view('v_admin',$data);
    }
    public function cr_buku()
    {
        $this->form_validation->set_rules('judul_buku','judul_buku','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true)
        {
            $buku_id = $this->input->post('buku_id');
            $judul_buku = $this->input->post('judul_buku');
            $pengarang = $this->input->post('pengarang');
            $penerbit = $this->input->post('penerbit');
            $tahun_terbit = $this->input->post('tahun_terbit');
            $kategori= $this->input->post('kategori');
            $deskripsi = $this->input->post('deskripsi');

			$configs['upload_path']= FCPATH.'/upload/';
			$configs['allowed_types']= 'jpg|jpeg|png|gif';
			$new_names = '1'.time().$_FILES['sampul']; 
			$configs['file_name']= $new_names;
			$configs['remove_spaces']= FALSE;
            $configs['max_size']=1500;

			$this->load->library('upload',$configs);

			if (!$this->upload->do_upload('sampul')) {
				$data['error']=$this->upload->display_errors();
                
			}
			else{
				$uploadData = $this->upload->data();

                $this->mymodel->cr_buku($buku_id,$uploadData['file_name'],$judul_buku,$pengarang,$penerbit,$tahun_terbit,$kategori,$deskripsi);
                redirect(site_url('admin/buku'));
			}
        }
    }
    public function cr_kategori()
    {
        $this->form_validation->set_rules('nama_kategori','nama_kategori','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true)
        {
            $nama_kategori = $this->input->post('nama_kategori');
                $this->mymodel->cr_kategori($nama_kategori);
                redirect(site_url('admin/kategori'));
			}

          
        }
    public function cr_mahasiswa2()
    {
    {
        $this->form_validation->set_rules('username','username','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true)
        {
            
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $email = $this->input->post('email');
            $level = $this->input->post('level');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $jk = $this->input->post('jk');
            $onoff = $this->input->post('onoff');
            $status = $this->input->post('status');
                
                $this->mymodel->cr_mahasiswa2($username,$password,$email,$level,$foto,$nama,$alamat,$jk,$onoff,$status);
                redirect(site_url('admin/user'));
			}
        }
    }

    
    public function do_update_buku()
    {
        $this->form_validation->set_rules('judul_buku','judul_buku','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true)
        {   
            $id_buku = $this->input->post('id_buku');
            $buku_id = $this->input->post('buku_id');
            $judul_buku = $this->input->post('judul_buku');
            $tahun_terbit = $this->input->post('tahun_terbit');
            $pengarang = $this->input->post('pengarang');
            $penerbit = $this->input->post('penerbit');
            $kategori= $this->input->post('kategori');
            $deskripsi = $this->input->post('deskripsi');

            $configs['upload_path']= FCPATH.'/upload/';
			$configs['allowed_types']= 'jpg|jpeg|png|gif';
			$new_names = '1'.time().$_FILES['sampul']; 
			$configs['file_name']= $new_names;
			$configs['remove_spaces']= FALSE;
            $configs['max_size']=1024;

			$this->load->library('upload',$configs);

			if (!$this->upload->do_upload('sampul')) {
				$data['error']=$this->upload->display_errors();
                
			}
			else{
				$uploadData = $this->upload->data();

                
                $this->mymodel->my_update_buku($id_buku,$buku_id,$uploadData['file_name'],$judul_buku,$tahun_terbit,$pengarang,$penerbit,$kategori,$deskripsi);
                redirect(site_url('admin/buku'));  
			}

        }
        
    }
    public function do_update_kategori()
    {
        $this->form_validation->set_rules('nama_kategori','nama_kategori','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true)
        {   
            $id_buku = $this->input->post('id_kategori');
                $this->mymodel->my_update_kategori($nama_kategori);
                redirect(site_url('admin/kategori'));  
			}
        }
    
    public function do_update_admin()
    {
        $this->form_validation->set_rules('username','username','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true)
        {   
            $id_user = $this->input->post('hij');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $email = $this->input->post('email');
            $level = $this->input->post('level');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $jk = $this->input->post('jk');
            
        $this->mymodel->update_datau($id_user,
        $username,
        $password,
        $email,
        $level,
        $nama,
        $alamat,
        $jk,
    );
        redirect(site_url('admin/user'));
        }
    }

    public function tsetuju()
    {
		$this->form_validation->set_rules('status', 'status','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
		   {
			$id_kelola_peminjaman= $this->input->post('idk');
			$status = $this->input->post('status');

			$this->mymodel->status($id_kelola_peminjaman,$status);

		
		redirect(site_url('admin/read_peminjaman'));
		}
	}
    public function setuju()
    {
		$this->form_validation->set_rules('status', 'status','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
		   {
			$id_kelola_peminjaman= $this->input->post('idkl');
			$status = $this->input->post('status');

			$this->mymodel->status($id_kelola_peminjaman,$status);

		
		redirect(site_url('admin/read_peminjaman'));
		}
	}

    public function delete($id)
    {
        $where=array('id_buku'=>$id);
        $this->mymodel->delete('tb_buku',$where);
        redirect('admin/buku');
    }
    
    public function delete_kat($id)
    {
        $where=array('id_kategori'=>$id);
        $this->mymodel->delete('tb_kategoribuku',$where);
        redirect('admin/kategori');
    }

    public function delete_user($id)
    {
        $where=array('id_user'=>$id);
        $this->mymodel->delete('tb_user',$where);
        redirect('admin/user');
    }
}

