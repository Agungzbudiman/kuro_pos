<?php

class M_category extends CI_Model {

    function getCategory(){
        $dataUser = $this->session->userdata('loginData');

        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('id_toko',$dataUser['userToko']);
        return $this->db->get()->result();
	}

    function getCategoryById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$id);
        return $this->db->get()->row();
    }
}
?>