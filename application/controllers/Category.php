<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_category');
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
        $this->m_umum->checkRole('category','read','dashboard/notfound');

		$data['v_content'] = "category/index";
		$data['data_table'] = $this->m_category->getCategory();
		$this->load->view("layout",$data);
	}

	public function add()
	{
        // check access
        $this->m_umum->checkRole('category','save','category');

		$data['v_content'] = "category/add";
		$this->load->view("layout",$data);
	}

	public function doAdd()
	{

        // check access
        $this->m_umum->checkRole('category','save','category');

		$post = $this->input->post();
        $dataUser = $this->session->userdata('loginData');
        $dataCategory = ['category_name'=>$post['category_name'],
                        'id_toko'=>$dataUser['userToko'],];
        $return = $this->db->insert('tbl_category',$dataCategory);
        if ($return) {
            $this->m_umum->generatePesan("Berhasil Tambah Data","berhasil");
            redirect('category');
        }else{
            $this->m_umum->generatePesan("Gagal Tambah Data","gagal");
            redirect('category/add');
        }
	}

	public function edit($id = '')
	{
		if (empty($id)) {
            $this->m_umum->generatePesan("Pilih category terlebih dahulu","gagal");
            redirect('category');
		}
        // check access
        $this->m_umum->checkRole('category','read','dashboard/notfound');

		$data['v_content'] = "category/edit";
		$data['dataCategory']  = $this->m_category->getCategoryById($id);
		$this->load->view("layout",$data);
	}

	public function doUpdate($id)
	{
        // check access
        $this->m_umum->checkRole('category','update','category');

		$post = $this->input->post();

        $dataCategory = ['category_name'=>$post['category_name']];
        $return = $this->db->update('tbl_category',$dataCategory,['category_id'=>$id]);
        if ($return) {
            $this->m_umum->generatePesan("Berhasil Update Data","berhasil");
            redirect('category');
        }else{
            $this->m_umum->generatePesan("Gagal Update Data","gagal");
            redirect('category/add');
        }
	}

    public function delete($id)
    {
        if (empty($id)) {
            $this->m_umum->generatePesan("Pilih category terlebih dahulu","gagal");
            redirect('category');
        }

        $this->m_umum->checkRole('category','delete','category');

        $this->db->delete('tbl_category',['category_id'=>$id]);
        $this->m_umum->generatePesan("Berhasil Menghapus Data","berhasil");
        redirect('category');
    }
}
