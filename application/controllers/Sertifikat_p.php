<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class Sertifikat_p extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sertifikat_model');
        $this->load->model('Programstudi_model');
    }

    public function index()
    {
        $data['judul'] = "Sertifikat";
        $data['sertif'] = $this->Sertifikat_model->get();
        $data['prodi'] = $this->Programstudi_model->get();
        $this->load->view('pub/layout/header_pb', $data);
        $this->load->view('pub/vw_sertifikat', $data);
        $this->load->view('pub/layout/footer_pb');
    }
}