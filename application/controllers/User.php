<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_umum');
    }

	public function index()
	{
        // check access
        $this->m_umum->checkRole('user','read','dashboard/notfound');

		$data['v_content'] = "user/index";
		$data['data_table'] = $this->m_user->getUser();
		$this->load->view("layout",$data);
	}

	public function add()
	{
        // check access
        $this->m_umum->checkRole('user','save','user');

		$data['v_content'] = "user/add";
		$this->load->view("layout",$data);
	}

	public function doAdd()
	{

        // check access
        $this->m_umum->checkRole('user','save','user');

        if (!empty($this->m_user->checkUsername($post['username']))) {
            $this->m_umum->generatePesan("Gagal Tambah Data Karna Username sudah ada","gagal");
            redirect('user/add');
        }

		$post = $this->input->post();
        $dataUser = $this->session->userdata('loginData');
        $dataUser = ['username'=>$post['username'],
                    'user_name'=>$post['user_name'],
                    'user_status'=>$post['user_status'],
                    'password'=>md5($post['password']),
                    'id_toko'=>$dataUser['userToko'],];
        $return = $this->db->insert('tbl_user',$dataUser);
        if ($return) {
            $this->m_umum->generatePesan("Berhasil Tambah Data","berhasil");
            redirect('user');
        }else{
            $this->m_umum->generatePesan("Gagal Tambah Data","gagal");
            redirect('user/add');
        }
	}

	public function edit($id = '')
	{
		if (empty($id)) {
            $this->m_umum->generatePesan("Pilih category terlebih dahulu","gagal");
            redirect('user');
		}
        // check access
        $this->m_umum->checkRole('user','read','dashboard/notfound');

		$data['v_content'] = "user/edit";
		$data['dataUser']  = $this->m_user->getUserById($id);
		$this->load->view("layout",$data);
	}

	public function doUpdate($id)
	{
        // check access
        $this->m_umum->checkRole('user','update','user');

		$post = $this->input->post();

        $dataUser = ['user_name'=>$post['user_name']];
        if (!empty($post['password'])) {
            $dataUser['password'] = md5($post['password']);
        }

        $return = $this->db->update('tbl_user',$dataUser,['user_id'=>$id]);
        if ($return) {
            $this->m_umum->generatePesan("Berhasil Update Data","berhasil");
            redirect('user');
        }else{
            $this->m_umum->generatePesan("Gagal Update Data","gagal");
            redirect('user/add');
        }
	}

    public function delete($id)
    {
        if (empty($id)) {
            $this->m_umum->generatePesan("Pilih category terlebih dahulu","gagal");
            redirect('user');
        }

        $this->m_umum->checkRole('user','delete','user');

        $this->db->delete('tbl_user',['user_id'=>$id]);
        $this->m_umum->generatePesan("Berhasil Menghapus Data","berhasil");
        redirect('user');
    }
}
