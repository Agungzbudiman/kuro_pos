<?php

class M_umum extends CI_Model {
	function __construct() {
        parent::__construct();
        $uri = $this->uri->segment(1);
    }


	function generatePesan($pesan, $type) {
        if ($type == "berhasil") {
            $str = '<div class="alert alert-block alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                        </button>

                        <!--<i class="ace-icon fa fa-check green"></i>-->
                        '.$pesan.'
                    </div>';
        } elseif($type=="gagal") {
            $str = '<div class="alert alert-block alert-danger">
                        <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                        </button>

                        <!--<i class="ace-icon fa fa-times red"></i>-->
                        '.$pesan.'
                    </div>';
        }else{
            $str = '<div class="alert alert-block alert-warning">
                        <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                        </button>

                        
                        '.$pesan.'
                    </div>';
        }
        
        $this->session->set_flashdata('msgbox',$str);

		return $str;
    }

    function checkRole($halaman,$bit = '',$redirect){
        $selectBitwise = ['save'=>1,'read'=>2,'update'=>4,'delete'=>8,'import'=>16,'export'=>32];
        $dataUser = $this->session->userdata('loginData');
        // access 3 untuk manager, access 4 untuk super
        $dataArray = ['3'=>[
                            'dashboard'=>2,

                            ],
                    '4'=>[
                            'dashboard'=>2,
                            'category' =>15,
                            'menu' =>15,
                            'toko' =>15,
                            'user' =>15,
                        ]];
        if ($dataArray[$dataUser['userRole']][$halaman] & $selectBitwise[$bit]) {
        }else{
            $this->m_umum->generatePesan("anda tidak memiliki akses untuk ".$bit,"gagal");
            redirect($redirect);
        }
    }

    function enc_dec()
    {
        include('Crypt/RSA.php');

        $privatekey = file_get_contents('private.key');

        $rsa = new Crypt_RSA();
        $rsa->loadKey($privatekey);

        $plaintext = new Math_BigInteger('aaaaaa');
        echo $rsa->_exponentiate($plaintext)->toBytes();
    }
	
    function formatTanggal($datetime,$format='d/m/Y'){
        $time = strtotime($datetime);
        $myFormatForView = date($format, $time);
        return $myFormatForView;
    }
	
	
}
