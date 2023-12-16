<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akreditasi_lam extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Tm_ak_lam_model');
    }
    public function index()
    {
        $data['judul'] = "Instrumen LAM";
        $data['lam'] = $this->Tm_ak_lam_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('akreditasi/lam/vw_ak_lam', $data);
        $this->load->view('layout/footer', $data);
    }

    // Kode LAM
    function tambah()
    {
        $data['judul'] = "Tambah Instrumen LAM";
        $data['lam'] = $this->Tm_ak_lam_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_instrumen', 'Nama Instrumen', 'required', [
            'required' => 'Nama Instrumen wajib diisi',
        ]);

        $this->form_validation->set_rules('kategori_ak', 'Kategori Instrument', 'required', [
            'required' => 'Kategori Instrumen wajib diisi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("akreditasi/lam/vw_tambah_ak_lam", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_instrumen' => $this->input->post('nama_instrumen'),
                'url' => $this->input->post('url'),
                'kategori_ak' => $this->input->post('kategori_ak')
            ];

            $this->Tm_ak_lam_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Instrumen LAM berhasil disimpan!</div>');
            redirect('akreditasi_lam');
        }
    }

    function delete($id)
    {
        $this->Tm_ak_lam_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Dapat Dihapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        }
        redirect('akreditasi_lam');
    }

    function edit($id)
    {
        $data['judul'] = "Edit Instrumen LAM";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lam'] = $this->Tm_ak_lam_model->getById($id);

        $this->form_validation->set_rules('nama_instrumen', 'Nama Instrumen', 'required', [
            'required' => 'Nama Instrumen Wajib diisi',
        ]);

        $this->form_validation->set_rules('kategori_ak', 'Kategori Instrumen', 'required', [
            'required' => 'Kategori Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("akreditasi/lam/vw_ubah_ak_lam", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_instrumen' => $this->input->post('nama_instrumen'),
                'url' => $this->input->post('url'),
                'kategori_ak' => $this->input->post('kategori_ak'),
            ];

            $this->Tm_ak_lam_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Instrumen LAM Berhasil Diubah!</div>');
            redirect('akreditasi_lam');
        }
    }
}
