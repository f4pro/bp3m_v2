<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class Akreditasi_p extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tm_ak_apt_model');
        $this->load->model('Tm_ak_lam_model');
        $this->load->model('Tm_ak_panduan_model');
    }
    public function index()
    {
        $data['judul'] = "Akreditasi";
        $data['lam'] = $this->Tm_ak_lam_model->get();
        $data['apt'] = $this->Tm_ak_apt_model->get();
        $data['panduan'] = $this->Tm_ak_panduan_model->get();
        $this->load->view('pub/layout/header_pb', $data);
        $this->load->view('pub/vw_akreditasi');
        $this->load->view('pub/layout/footer_pb');
    }
}