<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Apirest extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(['m_login','m_menu']);
        $this->load->database();
    }

    //Login data sesuai transaksi
    function login_POST() {
        $username = $this->post('username');
        $password = $this->post('password');
        $return = $this->m_login->loginApi($username,md5($password));
        if ($return) {
            $result = [
                        'data' => $return,
                        'status' => 'ok',
                        'msg' => 'Selamat Datang '.$return['name'],
                        ];
            $this->response($result, 200);
        }else{
            $result = [
                        'data' => $return,
                        'status' => 'not_ok',
                        'msg' => 'gagal login',
                        ];
            $this->response($result, 200);
        }
    }

    // Mengambil menu transaksi
    function getmenu_GET($id){
        $return = $this->m_menu->getMenuApi($id);
        if (count($return)>0) {
            $data = [];
            foreach ($return as $key => $value) {
                $category_id = (empty($value->category_id)?0:$value->category_id);
                if (empty($data[$category_id])) {
                    $data[$category_id] = ['name'=>(empty($category_id)?'Lain-lain':$value->category_name),'expanded'=>false,'menu'=>[]];
                }
                $data[$category_id]['menu'][] = ['nama'=>$value->menu_name,
                                                'harga'=>$value->menu_harga,
                                                'show'=>$value->is_available,
                                                'gambar'=>base_url('upload/').$value->menu_image,
                                                'id'=>$value->menu_id];
            }
            $datanew = [];
            foreach ($data as $key => $value) {
                $datanew[] = $value;
            }
            $result = [
                        'data' => $datanew,
                        'status' => 'ok',
                        'msg' => 'Menu dapat diambil',
                        ];
            $this->response($result, 200);
        }else{
            $result = [
                        'data' => $return,
                        'status' => 'not_ok',
                        'msg' => 'Menu sedang tidak ada',
                        ];
            $this->response($result, 200);
        }
    }

    // Membuat transaksi berdasarkan user ataupun kasir, jika kasir maka harus langsung dibayar
    function saveTransaksi_POST(){
        $post = $this->input->post();

        $dataMenu = [];
        foreach ($post['menu'] as $key => $value) {
            $getMenu = $this->db->where('menu_id',$value['menu_id'])->from('tbl_menu')->get()->row_array();
            $dataMenu[] = ['id_transaksi'=>'',
                        'id_menu'=>$value['menu_id'],
                        'transaksi_detail_nama'=>$getMenu['menu_name'],
                        'transaksi_detail_harga'=>$getMenu['menu_harga'],
                        'transaksi_detail_status'=>1,
                        'transaksi_detail_image'=>$getMenu['menu_image'],
                        'transaksi_detail_note'=>$value['note'],
                        'transaksi_detail_jumlah'=>$value['jumlah'],
                        ];
        }

        $dataTransaksi = ['transaksi_status'=>0,
                            'transaksi_no'=>$this->get_no_invoice(),
                            'transaksi_tanggal'=>date('Y-m-d H:i:s'),
                            'id_user'=>$post['id_user'],
                            'id_toko'=>$post['id_toko'],
                            'transaksi_atasnama'=>$post['transaksi_atas_nama']];

        if (count($dataMenu)>0) {
            $this->db->insert('tbl_transaksi',$dataTransaksi);
            $transaksi_id = $this->db->insert_id();
            foreach ($dataMenu as $key => $value) {
                $dataMenu[$key]['id_transaksi'] = $transaksi_id;
            }
            $this->db->insert_batch('tbl_transaksi_detail',$dataMenu);


            $result = [
                        'data' => [],
                        'status' => 'ok',
                        'msg' => 'Transaksi Berhasil',
                        ];
            $this->response($result, 200);
        }else{
            $result = [
                        'data' => [],
                        'status' => 'not_ok',
                        'msg' => 'Transaksi Tidak dapat dibuat',
                        ];
            $this->response($result, 200);
        }
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
        return date('y').$kd;
    }

    // Menambakan menu jika user ingin menambah makanan
    function addTransaksi_POST(){
        $post = $this->input->post();

        $dataMenu = [];
        foreach ($post['menu'] as $key => $value) {
            $getMenu = $this->db->where('menu_id',$value['menu_id'])->from('tbl_menu')->get()->row_array();
            $dataMenu[] = ['id_transaksi'=>'',
                        'id_menu'=>$value['menu_id'],
                        'transaksi_detail_nama'=>$getMenu['menu_name'],
                        'transaksi_detail_harga'=>$getMenu['menu_harga'],
                        'transaksi_detail_status'=>0,
                        'transaksi_detail_image'=>$getMenu['menu_image'],
                        'transaksi_detail_note'=>$value['note'],
                        'transaksi_detail_jumlah'=>$value['jumlah'],
                        ];
        }

        if (count($dataMenu)>0) {
            $dataTransaksi = $this->db->where(['id_user'=>$post['id_user'],'transaksi_status <'=>2])->from('tbl_transaksi')->get()->row();
            $transaksi_id = $dataTransaksi->transaksi_id;
            foreach ($dataMenu as $key => $value) {
                $dataMenu[$key]['id_transaksi'] = $transaksi_id;
            }
            $this->db->insert_batch('tbl_transaksi_detail',$dataMenu);


            $result = [
                        'data' => [],
                        'status' => 'ok',
                        'msg' => 'Transaksi Berhasil',
                        ];
            $this->response($result, 200);
        }else{
            $result = [
                        'data' => [],
                        'status' => 'not_ok',
                        'msg' => 'Transaksi Tidak dapat dibuat',
                        ];
            $this->response($result, 200);
        }
    }

    // Mengambil pesanan menu berdasarkan meja yang transaksinya belum selesai
    function checkPesanan_POST(){
        $post = $this->input->post();
        if (!empty($post['user_id'])) {
            $dataMenu = $this->db->query("
                            select * from tbl_transaksi t
                            inner join tbl_transaksi_detail td on td.id_transaksi = t.transaksi_id
                            where t.id_user = '".$post['user_id']."' and t.transaksi_status < 2
            ")->result();

            if (count($dataMenu)>0) {
                $datanew = [];
                foreach ($dataMenu as $key => $value) {
                    $datanew[] = ['nama'=>$value->transaksi_detail_nama,
                                    'note'=>$value->transaksi_detail_note,
                                    'jumlah'=>$value->transaksi_detail_jumlah,
                                    'harga'=>$value->transaksi_detail_harga,
                                    'status'=>$value->transaksi_detail_status,
                                    'ready'=>$value->transaksi_detail_ready,
                                    'gambar'=>base_url('upload/').$value->transaksi_detail_image,
                                    'id'=>$value->transaksi_detail_id];
                }
                $result = [
                            'data' => $datanew,
                            'status' => 'ok',
                            'msg' => 'Menu Pesanan',
                            ];
                $this->response($result, 200);
            }else{
                $result = [
                            'data' => [],
                            'status' => 'not_ok',
                            'msg' => 'Tidak Ada menu yang dipesan',
                            ];
                $this->response($result, 200);
            }
        }else{
            $result = [
                        'data' => [],
                        'status' => 'not_ok',
                        'msg' => 'Tolong Login Terlebih dahulu',
                        ];
            $this->response($result, 200);
        }
    }

    // Mengambil detail Transaksi berupa menu2 yang dipilih customer
    function cekPesananTransaksi_POST(){
        $post = $this->input->post();
        if (!empty($post['transaksi_id'])) {
            $dataMenu = $this->db->query("
                            select * from tbl_transaksi t
                            inner join tbl_transaksi_detail td on td.id_transaksi = t.transaksi_id
                            where t.transaksi_id = '".$post['transaksi_id']."'
            ")->result();

            if (count($dataMenu)>0) {
                $datanew = [];
                foreach ($dataMenu as $key => $value) {
                    $datanew[] = ['nama'=>$value->transaksi_detail_nama,
                                    'note'=>$value->transaksi_detail_note,
                                    'jumlah'=>$value->transaksi_detail_jumlah,
                                    'harga'=>$value->transaksi_detail_harga,
                                    'status'=>$value->transaksi_detail_status,
                                    'ready'=>$value->transaksi_detail_ready,
                                    'gambar'=>base_url('upload/').$value->transaksi_detail_image,
                                    'id'=>$value->transaksi_detail_id];
                }
                $result = [
                            'data' => $datanew,
                            'status' => 'ok',
                            'msg' => 'Menu Pesanan',
                            ];
                $this->response($result, 200);
            }else{
                $result = [
                            'data' => [],
                            'status' => 'not_ok',
                            'msg' => 'Tidak Ada menu yang dipesan',
                            ];
                $this->response($result, 200);
            }
        }else{
            $result = [
                        'data' => [],
                        'status' => 'not_ok',
                        'msg' => 'Tolong Login Terlebih dahulu',
                        ];
            $this->response($result, 200);
        }
    }

    // mengambil data pesanan menu yang akan di proses oleh dapur
    function cekMenuPesanan_POST(){
        $post = $this->input->post();
        if (!empty($post['id_toko'])) {
            $dataMenu = $this->db->query("
                            select * from tbl_transaksi t
                            inner join tbl_transaksi_detail td on td.id_transaksi = t.transaksi_id
                            where date(t.transaksi_tanggal) = '".date('Y-m-d')."' and td.transaksi_detail_status < 3 and td.transaksi_detail_ready = '0'
                            and t.id_toko = '".$post['id_toko']."
                            order by td.transaksi_detail_status asc'
            ")->result();

            if (count($dataMenu)>0) {
                $datanew = [];
                foreach ($dataMenu as $key => $value) {
                    $datanew[] = ['nama'=>$value->transaksi_detail_nama,
                                    'note'=>$value->transaksi_detail_note,
                                    'jumlah'=>$value->transaksi_detail_jumlah,
                                    'harga'=>$value->transaksi_detail_harga,
                                    'status'=>$value->transaksi_detail_status,
                                    'gambar'=>base_url('upload/').$value->transaksi_detail_image,
                                    'id'=>$value->transaksi_detail_id];
                }
                $result = [
                            'data' => $datanew,
                            'status' => 'ok',
                            'msg' => 'Menu Pesanan',
                            ];
                $this->response($result, 200);
            }else{
                $result = [
                            'data' => [],
                            'status' => 'not_ok',
                            'msg' => 'Tidak Ada menu yang dipesan',
                            ];
                $this->response($result, 200);
            }
        }else{
            $result = [
                        'data' => [],
                        'status' => 'not_ok',
                        'msg' => 'Tolong Login Terlebih dahulu',
                        ];
            $this->response($result, 200);
        }
    }

    // mengambil semua pesanan terhadap toko tersebut
    function getAllPesanan_POST(){
        $post = $this->input->post();
        if (!empty($post['id_toko'])) {
            $dataPesanan = $this->db->query("
                            select t.*,td.transaksi_detail_jumlah,td.transaksi_detail_harga from tbl_transaksi t
                            inner join tbl_transaksi_detail td on td.id_transaksi = t.transaksi_id
                            where date(t.transaksi_tanggal) = '".date('Y-m-d')."' and t.id_toko = '".$post['id_toko']."'
                            order by t.transaksi_status asc
            ")->result_array();

            if (count($dataPesanan)>0) {
                $datanew = [];
                foreach ($dataPesanan as $key => $value) {
                    if (empty($datanew[$value['transaksi_id']])) {
                       $datanew[$value['transaksi_id']] = ['transaksi_no'=>$value['transaksi_no'],
                                                            'transaksi_id'=>$value['transaksi_id'],
                                                            'transaksi_status'=>$value['transaksi_status'],
                                                            'transaksi_tanggal'=>$value['transaksi_tanggal'],
                                                            'transaksi_jam'=>date_format(date_create($value['transaksi_tanggal']),'H:i'),
                                                            'id_user'=>$value['id_user'],
                                                            'is_deleted'=>$value['is_deleted'],
                                                            'transaksi_atasnama'=>$value['transaksi_atasnama'],
                                                            'id_toko'=>$value['id_toko'],
                                                            'jumlah_total'=>0];
                    }
                    $datanew[$value['transaksi_id']]['jumlah_total'] += $value['transaksi_detail_jumlah']*$value['transaksi_detail_harga'];
                }
                $dataArray = [];
                foreach ($datanew as $key => $value) {
                    $dataArray[] = $value;
                }
                $result = [
                            'data' => $dataArray,
                            'status' => 'ok',
                            'msg' => 'Menu Pesanan',
                            ];
                $this->response($result, 200);
            }else{
                $result = [
                            'data' => [],
                            'status' => 'not_ok',
                            'msg' => 'Tidak Ada menu yang dipesan',
                            ];
                $this->response($result, 200);
            }
        }else{
            $result = [
                        'data' => [],
                        'status' => 'not_ok',
                        'msg' => 'Tolong Login Terlebih dahulu',
                        ];
            $this->response($result, 200);
        }
    }

    // menyelesaikan transaksi
    function clearTransaksi_POST(){
        $post = $this->input->post();
        if (!empty($post['transaksi_id'])) {
            $this->db->update('tbl_transaksi',['transaksi_status'=>2],['transaksi_id'=>$post['transaksi_id']]);
            $result = [
                        'data' => [],
                        'status' => 'ok',
                        'msg' => 'Transaksi Berhasil',
                        ];
            $this->response($result, 200);
        }else{
            $result = [
                        'data' => [],
                        'status' => 'not_ok',
                        'msg' => 'Pilih Transaksi Terlebih dahulu',
                        ];
            $this->response($result, 200);
        }
    }

    // mengubah status detail transaksi menjadi proses atau sudah di hidangkan
    function updateMenuTransaksi_POST(){
        $post = $this->input->post();
        if (!empty($post['transaksi_detail_id'])) {
            $this->db->update('tbl_transaksi_detail',['transaksi_detail_status'=>$post['transaksi_detail_status']],['transaksi_detail_id'=>$post['transaksi_detail_id']]);
            $result = [
                        'data' => [],
                        'status' => 'ok',
                        'msg' => 'Menu Transaksi Berhasil diupdate',
                        ];
            $this->response($result, 200);
        }else{
            $result = [
                        'data' => [],
                        'status' => 'not_ok',
                        'msg' => 'Pilih Menu Transaksi Terlebih dahulu',
                        ];
            $this->response($result, 200);
        }
    }

    // mengubah status makanan yang tersedia to stock habis
    function updateStatusMenu_POST(){
        $post = $this->input->post();
        if (!empty($post['menu_id'])) {
            $this->db->update('tbl_menu',['is_available'=>($post['status']=='1'?0:1)],['menu_id'=>$post['menu_id']]);
            if ($post['status']=='1') {
                $this->db->update('tbl_transaksi_detail',['transaksi_detail_ready'=>1],['id_menu'=>$post['menu_id'],'transaksi_detail_status'=>1]);
            }
            $result = [
                        'data' => [],
                        'status' => 'ok',
                        'msg' => 'Menu Berhasil diupdate',
                        ];
            $this->response($result, 200);
        }else{
            $result = [
                        'data' => [],
                        'status' => 'not_ok',
                        'msg' => 'Pilih Menu Terlebih dahulu',
                        ];
            $this->response($result, 200);
        }
    }

    // mengubah status makanan yang menjadi tersedia
    function semuaMenuTersedia_POST(){
        $post = $this->input->post();
        if (!empty($post['id_toko'])) {
            $this->db->update('tbl_menu',['is_available'=>1],['id_toko'=>$post['id_toko']]);
            $result = [
                        'data' => [],
                        'status' => 'ok',
                        'msg' => 'Menu Berhasil diupdate',
                        ];
            $this->response($result, 200);
        }else{
            $result = [
                        'data' => [],
                        'status' => 'not_ok',
                        'msg' => 'Pilih Menu Terlebih dahulu',
                        ];
            $this->response($result, 200);
        }
    }

}
?>