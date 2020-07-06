<?php

class M_transaksi extends CI_Model {

    function getDataTransaksi($toko_id,$date_from,$data_to){
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('id_toko',$toko_id);
        $this->db->where("date(transaksi_tanggal) BETWEEN '".$date_from."' AND '".$data_to."'");
        $this->db->order_by('transaksi_status','desc');
        return $this->db->get()->result();
	}

	function getAllDataTransaksi($toko_id,$date_from,$data_to){
        $this->db->select('transaksi_detail_harga,transaksi_detail_jumlah');
        $this->db->from('tbl_transaksi');
        $this->db->join('tbl_transaksi_detail','tbl_transaksi.transaksi_id = tbl_transaksi_detail.id_transaksi');
        $this->db->where('id_toko',$toko_id);
        $this->db->where('transaksi_status','2');
        $this->db->where('tbl_transaksi_detail.transaksi_detail_ready','0');
        $this->db->where("date(transaksi_tanggal) BETWEEN '".$date_from."' AND '".$data_to."'");
        return $this->db->get()->result();
	}

	function getDetailDataTransaksi($toko_id,$id){
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->join('tbl_transaksi_detail','tbl_transaksi.transaksi_id = tbl_transaksi_detail.id_transaksi');
        $this->db->where('id_toko',$toko_id);
        $this->db->where('transaksi_id',$id);
        return $this->db->get()->result();
	}
}
?>