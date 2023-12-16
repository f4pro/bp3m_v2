<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kategori_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Kategori Berita";
        $data['kategori'] = $this->Kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("kategori/vw_kategori", $data);
        $this->load->view("layout/footer", $data);
    }


    function tambah()
    {
        $data['judul'] = "Halaman Tambah Kategori Berita";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required', [
            'required' => 'Nama Kategori Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("kategori/vw_tambah_kategori", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'kategori' => $this->input->post('kategori'),
            ];
            $this->Kategori_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Berhasil Ditambah!</div>');
            redirect('kategori');
        }
    }

    function delete($id)
    {
        $this->Kategori_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Kategori Tidak Dapat Dihapus (Sudah Berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Berhasil Dihapus!</div>');
        }
        redirect('kategori');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit Kategori Berita";
        $data['kategori'] = $this->Kategori_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required', [
            'required' => 'Nama Kategori Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("kategori/vw_ubah_kategori", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'kategori' => $this->input->post('kategori'),
                'id' => $this->input->post('id')
            ];
            $this->Kategori_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Berhasil Diubah!</div>');
            redirect('kategori');
        }
    }
}
