<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mymodel extends CI_Model {

	public function get_where($where,$namatb)
	{
		$res=$this->db->get_where($where,$namatb);
		return $res;
	}
	public function read_where($namatb,$where)
    {
        $res=$this->db->get_where($namatb,$where);
        return $res->result_array();
    }
	function create_data($nama,$tannggal,$file_spm)
	{									
		$data = array(
			'username'=>$username,
			'password'=>$password,
		);
		$this->db->insert('tb_user',$data);
	}
	function cr_mahasiswa2($username,$password,$email,$level,$foto,$nama,$alamat,$jk,$onoff,$status)
	{									
		$data = array(
		
			'username'=>$username,
			'password'=>$password,
			'email'=>$email,
			'level'=>$level,
			'foto'=>$foto,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'jk'=>$jk,
			'onoff'=>$onoff,
			'status'=>$status
		);
		$this->db->insert('tb_user',$data);
	}
	function cr_buku($buku_id,$sampul,$judul_buku,$pengarang,$penerbit,$tahun_terbit,$kategori,$deskripsi)
	{									
		$data = array(
			'buku_id'=>$buku_id,
			'sampul'=>$sampul,
			'judul_buku'=>$judul_buku,
			'pengarang'=>$pengarang,
			'penerbit'=>$penerbit,
			'tahun_terbit'=>$tahun_terbit,
			'kategori'=>$kategori,
			'deskripsi'=>$deskripsi

		);	
		$this->db->insert('tb_buku',$data);
	}
	function cr_kategori($nama_kategori)
	{									
		$data = array(
			'nama_kategori'=>$nama_kategori

		);	
		$this->db->insert('tb_kategoribuku',$data);
	}

	function cr_ulasan($id_user,$id_buku,$ulasan,$rating)
	{									
		$data = array(
			'id_user'=>$id_user,
			'id_buku'=>$id_buku,
			'ulasan'=>$ulasan,
			'rating'=>$rating
		);	
		$this->db->insert('tb_ulasan',$data);
	}

	function cr_peminjaman($username,$buku,$tanggal_peminjaman,$tanggal_pengembalian,$status)
	{									
		$data = array(
			'username'=>$username,
			'buku'=>$buku,
			'tanggal_peminjaman'=>$tanggal_peminjaman,
			'tanggal_pengembalian'=>$tanggal_pengembalian,
			'status'=>$status
			
		);	
		$this->db->insert('tb_peminjaman',$data);
	}

	public function update($namatb,$data,$where)
    {
        $res=$this->db->update($namatb,$data,$where);
        return $res;
    }
	function update_data1($nama,$tannggal,$file_spm)
	{									
		$data = array(
			'nama'=>$nama,
			'tannggal'=>$tannggal,
			'file_spm'=>$file_spm
		);
		$where = array(
			'id_upload' => $id_upload
		);

		$this->db->where($where);
		$this->db->update("tb_upload",$data);	
	}
	
	function update_datau($id_user,$username,$password,$email,$level,$foto,$nama,$alamat,$jk)
	{									
		$data = array(
			'username'=>$username,
			'password'=>$password,
			'email'=>$email,
			'level'=>$level,
			'foto'=>$foto,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'jk'=>$jk,

		);
		$where = array(
			'id_user' => $id_user
		);

		$this->db->where($where);
		$this->db->update("tb_user",$data);	
	}

	function status($id_peminjaman,$status)
	{									
		$data_status = array(
			'status'=>$status
		);
		$where = array(
			'id_peminjaman' => $id_peminjaman
		);
		$this->db->where($where);
		$this->db->update("tb_peminjaman",$data_status);

	}

	function my_update_buku($id_buku,$buku_id,$sampul,$judul_buku,$pengarang,$penerbit,$tahun_terbit,$kategori,$deskripsi)
	{									
		$data = array(
			'buku_id'=>$buku_id,
			'sampul'=>$sampul,
			'judul_buku'=>$judul_buku,
			'pengarang'=>$pengarang,
			'penerbit'=>$penerbit,
			'tahun_terbit'=>$tahun_terbit,
			'kategori'=>$kategori,
			'deskripsi'=>$deskripsi
		);
		$where = array(
			'id_buku'=>$id_buku
		);

		$this->db->where($where);
		$this->db->update("tb_buku",$data);	
	}
	function my_update_kategori($nama_kategori)
	{									
		$data = array(
			'nama_kategori'=>$nama_kategori
		);
		$where = array(
			'id_kategori'=>$id_kategori
		);

		$this->db->where($where);
		$this->db->update("tb_kategoribuku",$data);	
	}
	public function tampil_upload()
	{
		return $this->db->get('tb_upload');
	}
	public function tampil_peminjaman()
	{
		return $this->db->get('tb_peminjaman');
	}
	
	public function tampil_mahasiswa()
	{
		return $this->db->get('tb_siswa');
	}
	public function tampil_buku()
	{
		return $this->db->get('tb_buku');
	}
	public function tampil_bukup()
	{
		return $this->db->get('tb_buku');
	}
	public function tampil_kategori()
	{
		return $this->db->get('tb_kategoribuku');
	}
	public function tampil_ulasan()
	{
		return $this->db->get('tb_ulasan');
	}
	public function hitungbuku()
	{
		$query=$this->db->get('tb_buku');
		return $query->num_rows();
	}
	public function hitungakun()
	{
		$query=$this->db->get('tb_user');
		return $query->num_rows();
	}
	public function hitungpinjam()
	{
		$query=$this->db->get('tb_peminjaman');
		return $query->num_rows();
	}
	public function tampil_user()
	{
		return $this->db->get('tb_user');
	}
	public function delete($table,$where)
	{
		$res=$this->db->delete($table,$where);
		return $res;
	} 
}

