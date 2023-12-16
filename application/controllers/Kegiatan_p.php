<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_p extends CI_Controller
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
        $this->load->model('Kegiatan_model');
        $this->load->model('Kategori_model');
    }
    public function index()
    {
        $data['kegiatan'] = $this->Kegiatan_model->get();
        $data['kategori'] = $this->Kategori_model->get();
        $title['judul'] = "Kegiatan";
        $this->load->view('pub/layout/header_pb', $title);
        $this->load->view('pub/vw_kegiatan', $data);
        $this->load->view('pub/layout/footer_pb');
    }

    // Perbaiki.. masi rusak
    function kegiatan_isi($id)
    {
        $data['kegiatan'] = $this->Kegiatan_model->getById($id);
        $data['kategori'] = $this->Kategori_model->getById($id);
        $title['judul'] = "Detail Kegiatan";
        $this->load->view('pub/layout/header_pb', $title);
        $this->load->view('pub/vw_kegiatan_isi', $data);
        $this->load->view('pub/layout/footer_pb');
    }
}