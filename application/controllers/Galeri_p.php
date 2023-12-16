<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Galeri_p extends CI_Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
        $this->load->model('Galeri_gambar_model');
        $this->load->model('Galeri_video_model');
        $this->load->model('Kategori_model');
    }
    public function index()
    {
        $data['page'] = "galeri_p";
        $data['gambar'] = $this->Galeri_gambar_model->get();
        $data['video'] = $this->Galeri_video_model->get();
        $data['kategori'] = $this->Kategori_model->get();
        $title['judul'] = "Galeri";
        $this->load->view('pub/layout/header_pb', $title);
        $this->load->view('pub/vw_galeri', $data);
        $this->load->view('pub/layout/footer_pb');
    }
    public function filter($id){

        $data['gambar'] = $this->Galeri_gambar_model->getData($id);
        $data['kategori'] = $this->Kategori_model->get();
        $title['judul'] = "Galeri";
        $this->load->view('pub/layout/header_pb', $title);
        $this->load->view('pub/vw_galeri', $data);
        $this->load->view('pub/layout/footer_pb');
    }
}
