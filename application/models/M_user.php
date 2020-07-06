<?php

class M_user extends CI_Model {

    function getUser(){
        // 0 =  meja,1 = kasir, 2 = dapur, 3 = manager, 4 = super saiyan 
        $dataUser = $this->session->userdata('loginData');

        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where_in('user_status',['0','1','2','3']);
        $this->db->where('id_toko',$dataUser['userToko']);
        return $this->db->get()->result();
	}

    function checkUsername($username){
        $this->db->select('user_id');
        $this->db->from('tbl_user');
        $this->db->where('username',$username);
        return $this->db->get()->row();   
    }

    function getUserById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_id',$id);
        return $this->db->get()->row();
    }
}
?>