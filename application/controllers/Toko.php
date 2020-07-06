<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_toko');
        $this->load->model('m_umum');
    }

	public function index()
	{
        // check access
        $this->m_umum->checkRole('toko','read','dashboard/notfound');
        $dataUser = $this->session->userdata('loginData');
        if (empty($dataUser['userToko'])) {
            redirect('toko/add');
        }else{
            redirect('toko/edit');
        }
		$data['v_content'] = "toko/index";
		$data['data_table'] = $this->m_toko->getToko();
		$this->load->view("layout",$data);
	}

	public function add()
	{
        // check access
        $this->m_umum->checkRole('toko','save','toko');

		$data['v_content'] = "toko/add";
		$this->load->view("layout",$data);
	}

	public function doAdd()
	{

        // check access
        $this->m_umum->checkRole('toko','save','toko');

		$post = $this->input->post();
        $dataToko = ['toko_name'=>$post['toko_name']];
        $return = $this->db->insert('tbl_toko',$dataToko);
        if ($return) {
            $last_id = $this->db->insert_id();
            $dataUser = $this->session->userdata('loginData');
            $dataUser['userToko'] = $last_id;
            $this->db->update('tbl_user',['id_toko'=>$last_id],['user_id'=>$dataUser['userId']]);
            $this->session->set_userdata('loginData',$dataUser);

            $this->m_umum->generatePesan("Berhasil Tambah Data","berhasil");
            redirect('toko/edit');
        }else{
            $this->m_umum->generatePesan("Gagal Tambah Data","gagal");
            redirect('toko/add');
        }
	}

	public function edit()
	{
        // check access
        $this->m_umum->checkRole('toko','read','dashboard/notfound');

		$data['v_content'] = "toko/edit";
        $dataUser = $this->session->userdata('loginData');
		$data['dataToko']  = $this->m_toko->getTokoById($dataUser['userToko']);
		$this->load->view("layout",$data);
	}

	public function doUpdate()
	{
        // check access
        $this->m_umum->checkRole('toko','update','toko');

		$post = $this->input->post();

        $dataUser = $this->session->userdata('loginData');
        $dataToko = ['toko_name'=>$post['toko_name']];
        $return = $this->db->update('tbl_toko',$dataToko,['toko_id'=>$dataUser['userToko']]);
        if ($return) {
            $this->m_umum->generatePesan("Berhasil Update Data","berhasil");
            redirect('toko/edit');
        }else{
            $this->m_umum->generatePesan("Gagal Update Data","gagal");
            redirect('toko/edit');
        }
	}
}
