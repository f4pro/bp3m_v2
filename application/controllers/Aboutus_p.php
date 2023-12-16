<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class Aboutus_p extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pertanyaan_model');
        $this->load->model('Member_model');
        $this->load->model('Aboutusp_section_model');
        $this->load->model('Aboutusp_tagline_model');
        $this->load->model('Aboutusp_struktur_model');
    }
    public function index()
    {
        $data['judul'] = "Tentang Kami";
        $data['about_us'] = $this->Aboutusp_section_model->get();
        $data['tagline'] = $this->Aboutusp_tagline_model->get();
        $data['struktur'] = $this->Aboutusp_struktur_model->get();
        $data['member'] = $this->Member_model->get();
        $data['pertanyaan'] = $this->Pertanyaan_model->get();
        $this->load->view('pub/layout/header_pb', $data);
        $this->load->view('pub/vw_about', $data);
        $this->load->view('pub/layout/footer_pb');
    }
}