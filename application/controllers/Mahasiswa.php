<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Halaman Mahasiswa";
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_mahasiswa", $data);
        $this->load->view("layout/footer");
    }

    public function tambah(){
        $data['judul'] = "Halaman Tambah Mahasiswa";
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
        $this->load->view("layout/footer");
    }

    public function detail(){
        $data['judul'] = "Halaman Detail Mahasiswa";
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
        $this->load->view("layout/footer");
    }
}
?>
