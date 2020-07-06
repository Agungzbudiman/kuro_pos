<?php

class M_menu extends CI_Model {

    function getMenu(){
        $dataUser = $this->session->userdata('loginData');

        $this->db->select('*');
        $this->db->from('tbl_menu');
        $this->db->where('is_deleted',0);
        $this->db->where('tbl_menu.id_toko',$dataUser['userToko']);
        $this->db->join('tbl_category','tbl_category.category_id = tbl_menu.id_category','left');
        return $this->db->get()->result();
	}

    function getMenuById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_menu');
        $this->db->join('tbl_category','tbl_category.category_id = tbl_menu.id_category','left');
        $this->db->where('menu_id',$id);
        $this->db->where('is_deleted',0);
        return $this->db->get()->row();
    }

    function getMenuApi($id_toko){
        $dataUser = $this->session->userdata('loginData');

        $this->db->select('*');
        $this->db->from('tbl_menu');
        $this->db->where('is_deleted',0);
        // $this->db->where('is_available',1);
        $this->db->where('tbl_menu.id_toko',$id_toko);
        $this->db->join('tbl_category','tbl_category.category_id = tbl_menu.id_category','left');
        return $this->db->get()->result();
    }
}
?>