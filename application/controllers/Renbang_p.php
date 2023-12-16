<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class Renbang_p extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dokumen_model');
        $this->load->model('Renbang_model');
        $this->load->model('A_renbang_model');
    }
    public function index()
    {
        $data['judul'] = 'Renbang';
        $data['documen'] = $this->Dokumen_model->get();
        $data['renbang'] = $this->A_renbang_model->get();
        $data['redirect'] = $this->Renbang_model->get();
        $this->load->view('pub/layout/header_pb', $data);
        $this->load->view('pub/vw_renbang', $data);
        $this->load->view('pub/layout/footer_pb');
    }
}