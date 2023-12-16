<?php 
defined ('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Timeline_model');
        $this->load->model('Berita_model');
    }
    public function index()
    {
        $data['judul'] = 'Home';
        $data['timeline'] = $this->Timeline_model->get();
        $data['berita'] = $this->Berita_model->get();
        $this->load->view('pub/layout/header_pb', $data);
        $this->load->view('pub/index', $data);
        $this->load->view('pub/layout/footer_pb');
    }
}