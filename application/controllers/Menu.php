<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_menu');
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
        $this->m_umum->checkRole('menu','read','dashboard/notfound');

		$data['v_content'] = "menu/index";
		$data['data_table'] = $this->m_menu->getMenu();
		$this->load->view("layout",$data);
	}

	public function add()
	{
        // check access
        $this->m_umum->checkRole('menu','save','menu');

		$data['v_content'] = "menu/add";
        $data['data_category'] = $this->m_category->getCategory();
		$this->load->view("layout",$data);
	}

	public function doAdd()
	{
        // check access
        $this->m_umum->checkRole('menu','save','menu');

		$post = $this->input->post();
        $dataUser = $this->session->userdata('loginData');
        $dataMenu = ['menu_name'=>$post['menu_name'],
                    'menu_harga'=>$post['menu_harga'],
                    'id_category'=>$post['id_category'],
                    'id_toko'=>$dataUser['userToko'],
                    ];

        if (!empty($_FILES['menu_image'])) {
            $post    = $this->input->post();
            $ext     = pathinfo($_FILES['menu_image']['name'], PATHINFO_EXTENSION);
            $fileCuy = 'M'.date('YmdHis').rand(1,999).".".$ext;
            $config['upload_path']   = './upload/';
            $config['allowed_types'] = '*';
            $config['file_name']     = $fileCuy;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('menu_image')){
                // $error = 'error: '. $this->upload->display_errors();
                // echo $error;
                // die();
            }else{
                $dataMenu['menu_image'] = $fileCuy;
            }
        }
        $return = $this->db->insert('tbl_menu',$dataMenu);
        if ($return) {
            $this->m_umum->generatePesan("Berhasil Tambah Data","berhasil");
            redirect('menu');
        }else{
            $this->m_umum->generatePesan("Gagal Tambah Data","gagal");
            redirect('menu/add');
        }
	}

	public function edit($id = '')
	{
		if (empty($id)) {
            $this->m_umum->generatePesan("Pilih user terlebih dahulu","gagal");
            redirect('menu');
		}
        // check access
        $this->m_umum->checkRole('menu','read','menu');

		$data['v_content'] = "menu/edit";
        $data['data_category'] = $this->m_category->getCategory();
		$data['dataMenu']  = $this->m_menu->getMenuById($id);
		$this->load->view("layout",$data);
	}

	public function doUpdate($id)
	{

        // check access
        $this->m_umum->checkRole('menu','update','menu');

		$post = $this->input->post();
        $dataMenu = ['menu_name'=>$post['menu_name'],
                    'menu_harga'=>$post['menu_harga'],
                    'id_category'=>$post['id_category'],
                    ];

        if (!empty($_FILES['menu_image'])) {
            $post    = $this->input->post();
            $ext     = pathinfo($_FILES['menu_image']['name'], PATHINFO_EXTENSION);
            $fileCuy = 'M'.date('YmdHis').rand(1,999).".".$ext;
            $config['upload_path']   = './upload/';
            $config['allowed_types'] = '*';
            $config['file_name']     = $fileCuy;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('menu_image')){
                // $error = 'error: '. $this->upload->display_errors();
                // echo $error;
                // die();
            }else{
                $dataMenu['menu_image'] = $fileCuy;
            }
        }
        $return = $this->db->update('tbl_menu',$dataMenu,['menu_id'=>$id]);
        if ($return) {
            $this->m_umum->generatePesan("Berhasil Mengubah Data","berhasil");
            redirect('menu');
        }else{
            $this->m_umum->generatePesan("Gagal Mengubah Data","gagal");
            redirect('menu/add');
        }
	}

    public function delete($id)
    {
        if (empty($id)) {
            $this->m_umum->generatePesan("Pilih category terlebih dahulu","gagal");
            redirect('menu');
        }

        $this->m_umum->checkRole('menu','delete','menu');

        $this->db->update('tbl_menu',['is_deleted'=>1],['menu_id'=>$id]);
        $this->m_umum->generatePesan("Berhasil Menghapus Data","berhasil");
        redirect('menu');
    }
}
