<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class Spmi_p extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dokumen_model');
        $this->load->model('Spmi_model');
        $this->load->model('A_spmi_model');
    }
    public function index()
    {
        $data['documen'] = $this->Dokumen_model->get();
        $data['spmi'] = $this->A_spmi_model->get();
        $data['redirect'] = $this->Spmi_model->get();
        $data['judul'] = 'SPMI';
        $this->load->view('pub/layout/header_pb', $data);
        $this->load->view('pub/vw_spmi', $data);
        $this->load->view('pub/layout/footer_pb');
    }
}