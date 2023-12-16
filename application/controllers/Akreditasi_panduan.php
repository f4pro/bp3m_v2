<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akreditasi_panduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Tm_ak_panduan_model');
    }
    public function index()
    {
        $data['judul'] = "Manajemen Dokumen Panduan";
        $data['panduan'] = $this->Tm_ak_panduan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('akreditasi/panduan/vw_ak_panduan', $data);
        $this->load->view('layout/footer', $data);
    }

    // Kode Panduan
    function tambah()
    {
        $data['judul'] = "Tambah Dokumen Panduan";
        $data['panduan'] = $this->Tm_ak_panduan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_dokumen', 'Nama Instrumen', 'required', [
            'required' => 'Nama Dokumen wajib diisi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("akreditasi/panduan/vw_tambah_ak_panduan", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_dokumen' => $this->input->post('nama_dokumen'),
                'url' => $this->input->post('url'),
            ];

            $this->Tm_ak_panduan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen panduan berhasil disimpan!</div>');
            redirect('akreditasi_panduan');
        }
    }

    function delete($id)
    {
        $this->Tm_ak_panduan_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Dapat Dihapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        }
        redirect('akreditasi_panduan');
    }

    function edit($id)
    {
        $data['judul'] = "Edit Dokumen Panduan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['panduan'] = $this->Tm_ak_panduan_model->getById($id);

        $this->form_validation->set_rules('nama_dokumen', 'Nama Instrumen', 'required', [
            'required' => 'Nama Dokumen wajib diisi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("akreditasi/panduan/vw_ubah_ak_panduan", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_dokumen' => $this->input->post('nama_dokumen'),
                'url' => $this->input->post('url'),
            ];

            $this->Tm_ak_panduan_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen panduan Berhasil Diubah!</div>');
            redirect('Akreditasi_panduan');
        }
    }
}
