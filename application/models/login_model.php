<?php
class login_model extends CI_Model{
    function validate($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('tb_user',1);
        return $result;
    }
}