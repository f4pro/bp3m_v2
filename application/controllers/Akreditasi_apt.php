<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akreditasi_apt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Tm_ak_apt_model');
    }
    public function index()
    {
        $data['judul'] = "Instrumen APT";
        $data['apt'] = $this->Tm_ak_apt_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('akreditasi/apt/vw_ak_apt', $data);
        $this->load->view('layout/footer', $data);
    }

    // Kode APT
    function tambah()
    {
        $data['judul'] = "Tambah Instrumen APT";
        $data['apt'] = $this->Tm_ak_apt_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_instrumen', 'Nama Instrumen', 'required', [
            'required' => 'Nama Instrumen wajib diisi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("akreditasi/apt/vw_tambah_ak_apt", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_instrumen' => $this->input->post('nama_instrumen'),
                'url' => $this->input->post('url'),
            ];

            $this->Tm_ak_apt_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Instrumen APT berhasil disimpan!</div>');
            redirect('akreditasi_apt');
        }
    }

    function delete($id)
    {
        $this->tm_ak_apt_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Dapat Dihapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        }
        redirect('akreditasi_apt');
    }

    function edit($id)
    {
        $data['judul'] = "Edit Instrumen APT";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['apt'] = $this->Tm_ak_apt_model->getById($id);

        $this->form_validation->set_rules('nama_instrumen', 'Nama Instrumen', 'required', [
            'required' => 'Nama Instrumen wajib diisi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("akreditasi/apt/vw_ubah_ak_apt", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_instrumen' => $this->input->post('nama_instrumen'),
                'url' => $this->input->post('url'),
            ];

            $this->Tm_ak_apt_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Instrumen APT Berhasil Diubah!</div>');
            redirect('akreditasi_apt');
        }
    }
}
