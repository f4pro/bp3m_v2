<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class Berita_p extends CI_Controller
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->model('Kategori_model');
    }

    public function index()
    {
        $data['berita'] = $this->Berita_model->get();
        $data['kategori'] = $this->Kategori_model->get();
        $title['judul'] = "Berita";
        $this->load->view('pub/layout/header_pb', $title);
        $this->load->view('pub/vw_berita', $data);
        $this->load->view('pub/layout/footer_pb');
    }
   
    // Perbaiki.. masi rusak
    public function berita_isi($id)
    {
        $data['berita'] = $this->Berita_model->getById($id);
        $data['kategori'] = $this->Kategori_model->get();
        $title['judul'] = "Berita";
        $this->load->view('pub/layout/header_pb', $title);
        $this->load->view('pub/vw_berita_isi', $data);
        $this->load->view('pub/layout/footer_pb');
    }
}