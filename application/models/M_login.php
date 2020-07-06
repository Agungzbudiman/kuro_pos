<?php

class M_login extends CI_Model {
    function loginUser($username,$password){
        $this->db->select('*');
        $this->db->from('tbl_user u');
        $this->db->where('u.username', $username);
        $this->db->where('u.password', $password);
        $this->db->where_in('u.user_status', ['3','4']);
        $query = $this->db->get();
        if($query->num_rows()>0){
			$querycheck = $query->row();
			$dataArr = array(
				'userId'   => $querycheck->user_id,
				'name'     => $querycheck->user_name,
                'userRole' => $querycheck->user_status,
                'userToko' => $querycheck->id_toko,
			);
			$this->session->set_userdata('loginData',$dataArr);
            return true;
        }else{ 
            return false;
        }
	}
    function loginApi($username,$password){
        $this->db->select('*');
        $this->db->from('tbl_user u');
        $this->db->where('u.username', $username);
        $this->db->where('u.password', $password);
        $this->db->where_in('u.user_status', ['0','1','2']);
        $query = $this->db->get();
        if($query->num_rows()>0){
            $querycheck = $query->row();
            $dataArr = array(
                'userId'   => $querycheck->user_id,
                'name'     => $querycheck->user_name,
                'userRole' => $querycheck->user_status,
                'userToko' => $querycheck->id_toko,
            );
            return $dataArr;
        }else{ 
            return false;
        }
    }
    function registerUser($data)
    {
        return $this->db->insert('tbl_user',$data);
    }
    function alreadyUsername($username)
    {
        return $this->db->where('username',$username)->from('tbl_user')->get()->num_rows();
    }
}
?>