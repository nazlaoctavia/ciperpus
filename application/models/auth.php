<?php 
class auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}

    public function read($namatb)
    {
    $res=$this->db->get($namatb);
    return $res->result_array();
    }

    function registerteam($iduser,$nama_team,$kelompok_kelahiran,$nama_official_1,$nama_official_2,$nama_official_3)
	{
		$data_team = array(
            'id_user'=>$iduser,
			'nama_team'=>$nama_team,
			'kelompok_kelahiran'=>$kelompok_kelahiran,
			'nama_official_1'=>$nama_official_1,
			'nama_official_2'=>$nama_official_2,
			'nama_official_3'=>$nama_official_3
            
		);
		$this->db->insert('tb_team',$data_team);
        
	}
   
   
    function registrasiuserDefault($id_team,$nama_user,$tanggal_lahir,$tempat_lahir,$foto)
	{
		$data_team = array(
            'id_team'=>$id_team,
			'nama_user'=>$nama_user,
			'tanggal_lahir'=>$tanggal_lahir,
			'tempat_lahir'=>$tempat_lahir,
			'foto'=>$foto,
			
            
		);
		$this->db->insert('tb_user',$data_team);
	}
  
	
	function EditDatauser($nama_user,$tanggal_lahir,$tempat_lahir,$foto)
	{
		$data_team = array(
			'nama_user'=>$nama_user,
			'tanggal_lahir'=>$tanggal_lahir,
			'tempat_lahir'=>$tempat_lahir,
			'foto'=>$foto,
			
			
		);
 
		$where = array(
			'id_user' => $id_user
		);
 

		echo "idnya",$id_user,$nama_user,$tanggal_lahir,$tempat_lahir,$foto;
	
	    $this->db->where($where);
		$this->db->update("tb_registrasi",$data_team);

	}

	function registrasi($username,$password,$email,$level,$nama,$alamat,$jk)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>$password,
			'email'=>$email,
			'level'=>$level,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'jk'=>$jk
		);
		$this->db->insert('tb_user',$data_user);
	}
    function login_user($username,$password)
	{
        $query = $this->db->get_where('tb_user',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username',$username);
				$this->session->set_userdata('nama',$data_user->nama);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	function cek_users($username,$password)
	{
		$kondisi = array(
			'username' => $username,
			'password' => $password
		);

		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where($kondisi);
		$this->db->limit(1);
		return $this->db->get();
	}
 
    
}
?>
