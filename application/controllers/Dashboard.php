<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('m_umum');
    }
	public function index()
	{
		

		// check access
		$this->m_umum->checkRole('dashboard','read','dashboard/notfound');

		$data['userLogin'] = $this->session->userdata('loginData');
		$data['v_content'] = "dashboard/dashboard";
		$this->load->view("layout",$data);
	}

	public function notfound()
	{
		$data['v_content'] = "content/404";
		$this->load->view("layout",$data);
	}

	function get_no_invoice(){
        $q = $this->db->query("SELECT MAX(RIGHT(transaksi_no,9)) AS kd_max FROM tbl_transaksi WHERE YEAR(transaksi_tanggal)='".date('Y')."'");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%09s", $tmp);
            }
        }else{
            $kd = "000000001";
        }
        date_default_timezone_set('Asia/Jakarta');
        echo date('y').$kd;
    }
}
