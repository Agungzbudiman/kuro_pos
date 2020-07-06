<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_transaksi');
        $this->load->model('m_umum');

        $dataUser = $this->session->userdata('loginData');
        if (empty($dataUser['userToko'])) {
            $this->m_umum->generatePesan("Harap Membuat Toko Terlebih dahulu","gagal");
            redirect('toko/add');
        }
    }

	public function index()
	{
        // check access
        $this->m_umum->checkRole('user','read','dashboard/notfound');
        $dataUser = $this->session->userdata('loginData');

		$data['v_content'] = "transaksi/index";
        // if (condition) {
        //     # code...
        // }
        if (empty($_GET['date_to'])) {
            $date_to = date('Y-m-d');
        }else{
            $date_to = $_GET['date_to'];
        }
        if (empty($_GET['date_from'])) {
            $date_from = date('Y-m-d',strtotime($date_to . "-1 month"));
        }else{
            $date_from = $_GET['date_from'];
        }
		$data['data_table'] = $this->m_transaksi->getDataTransaksi($dataUser['userToko'],$date_from,$date_to);
        $dataPendapatan = 0;
        $data_transaksi = $this->m_transaksi->getAllDataTransaksi($dataUser['userToko'],$date_from,$date_to);
        foreach ($data_transaksi as $key => $value) {
            $dataPendapatan+=($value->transaksi_detail_harga*$value->transaksi_detail_jumlah);
        }
        $data['pendapatan'] = $dataPendapatan;
		$this->load->view("layout",$data);
	}

    public function detail($id)
    {
        // check access
        $this->m_umum->checkRole('user','read','dashboard/notfound');
        $dataUser = $this->session->userdata('loginData');
        $data['v_content'] = "transaksi/detail";
        $data['data_table'] = $this->m_transaksi->getDetailDataTransaksi($dataUser['userToko'],$id);
        if (count($data['data_table'])==0) {
            $this->m_umum->generatePesan("Transaksi Tidak ada","gagal");
            redirect('transaksi');
        }
        $dataPendapatan = 0;
        $data_transaksi = $this->m_transaksi->getDetailDataTransaksi($dataUser['userToko'],$id);
        foreach ($data_transaksi as $key => $value) {
            $dataPendapatan+=($value->transaksi_detail_harga*$value->transaksi_detail_jumlah);
        }
        $data['pendapatan'] = $dataPendapatan;
        $this->load->view("layout",$data);
    }
}
