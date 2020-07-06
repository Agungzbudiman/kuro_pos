<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function print_invoice($no_invoice,$id_toko){
		$dataInvoice = $this->db->query("select * from tbl_transaksi t
										where t.transaksi_no = '".$no_invoice."' and t.id_toko = '".$id_toko."'")->row_array();
		if (!empty($dataInvoice)) {
			$data['data_transaksi'] = $dataInvoice;
			$data['detail_transaksi'] = $this->db->query("select * from tbl_transaksi_detail td 
										where td.transaksi_detail_ready = '0' and 
										td.id_transaksi = '".$dataInvoice['transaksi_id']."'")->result_array();
			$this->load->view('print_invoice',$data);
		}else{
			echo 'Invoice tidak ada';
		}
	}
}
