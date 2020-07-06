<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_umum');
    }

    public function index()
    {
        if(!empty($this->session->userdata('loginData'))){
            redirect('dashboard');
        }
        $data = [];
        $this->load->view("login/login",$data);
    }
		
	public function doLogin() {
        $dataPost = $this->input->post();
        $login = $this->m_login->loginUser($dataPost['username'], md5($dataPost['password']));
        if ($login) {
            $this->m_umum->generatePesan("Berhasil Login","berhasil");
            redirect('dashboard');  
        }else{
            $this->m_umum->generatePesan("Gagal Login","gagal");
            redirect('login');
        }
    }

    public function doRegister() {
        $post = $this->input->post();
        if ($post['password'] != $post['password_re']) {
            $this->m_umum->generatePesan("Sorry password not match","gagal");
            redirect('login/register');
        }
        $checkUser = $this->m_login->alreadyUsername($post['username']);
        if ($checkUser>0) {
            $this->m_umum->generatePesan("Username Sudah dipakai","gagal");
            redirect('login/register');
        }
        $dataRegister = ['user_name'=>$post['user_name'],
                        'username'=>$post['username'],
                        'user_status'=>'4',
                        'password'=>md5($post['password'])];
        $regis = $this->m_login->registerUser($dataRegister);
        if ($regis) {
            $this->m_umum->generatePesan("Berhasil Register","berhasil");
            redirect('login');
        }else{
            $this->m_umum->generatePesan("Gagal Register","gagal");
            redirect('login/register');
        }
    }

    public function register()
    {
        if(!empty($this->session->userdata('loginData'))){
            redirect('dashboard');
        }
        $data = [];
        $this->load->view("login/register",$data);
    }

    function log(){
        $this->session->unset_userdata('loginData');
        redirect('login');
    }
       
}
