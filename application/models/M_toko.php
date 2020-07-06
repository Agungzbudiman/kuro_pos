<?php

class M_toko extends CI_Model {

    function getToko(){
        $this->db->select('*');
        $this->db->from('tbl_toko');
        return $this->db->get()->result();
	}

    function getTokoById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_toko');
        $this->db->where('toko_id',$id);
        return $this->db->get()->row();
    }
}
?>