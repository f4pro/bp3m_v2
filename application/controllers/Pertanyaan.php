<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pertanyaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Pertanyaan_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Pertanyaan";
        $data['pertanyaan'] = $this->Pertanyaan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("pertanyaan/vw_pertanyaan", $data);
        $this->load->view("layout/footer", $data);
    }


    function tambah()
    {
        $data['judul'] = "Halaman Pertanyaan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaa', 'required', [
            'required' => 'Pertyanyaan Wajib diisi',
        ]);
        $this->form_validation->set_rules('jawaban', 'Jawaban', 'required', [
            'required' => 'Jawaban Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pertanyaan/vw_tambah_pertanyaan");
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'pertanyaan' => $this->input->post('pertanyaan'),
                'jawaban' => $this->input->post('jawaban'),
            ];
            
            $this->Pertanyaan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Program Studi Berhasil Ditambah!</div>');
            redirect('Pertanyaan');
        }
    }

    function delete($id)
    {
        $this->Programstudi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Program Studi Tidak Dapat Dihapus (Sudah Berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Program Studi Berhasil Dihapus!</div>');
        }
        redirect('program_studi');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Pertanyaan";
        $data['pertanyaan'] = $this->Pertanyaan_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaa', 'required', [
            'required' => 'Pertyanyaan Wajib diisi',
        ]);
        $this->form_validation->set_rules('jawaban', 'Jawaban', 'required', [
            'required' => 'Jawaban Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pertanyaan/vw_ubah_pertanyaan", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'pertanyaan' => $this->input->post('pertanyaan'),
                'jawaban' => $this->input->post('jawaban'),
            ];
            
            $this->Pertanyaan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Program Studi Berhasil Ditambah!</div>');
            redirect('Pertanyaan');
        }
    }
}
