<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Halaman Prodi";
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_prodi", $data);
        $this->load->view("layout/footer");
    }

    public function tambah(){
        $data['judul'] = "Halaman Tambah Prodi";
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_tambah_prodi", $data);
        $this->load->view("layout/footer");
    }
}

?>