<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Spmi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Spmi_model');
    }
    function index()
    {
        $data['judul'] = "Halaman SPMI";
        $data['spmi'] = $this->Spmi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("spmi/vw_spmi", $data);
        $this->load->view("layout/footer", $data);
    }


    function tambah()
    {
        $data['judul'] = "Halaman Tambah SPMI";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama SPMI', 'required', [
            'required' => 'Nama SPMI Wajib diisi',
        ]);
        $this->form_validation->set_rules('url', 'URL', 'required', [
            'required' => 'URL Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("spmi/vw_tambah_spmi", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'url' => $this->input->post('url'),
            ];
            $this->Spmi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('Spmi');
        }
    }

    function delete($id)
    {
        $this->Spmi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Dapat Dihapus (Sudah Berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        }
        redirect('spmi');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit SPMI";
        $data['spmi'] = $this->Spmi_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama SPMI', 'required', [
            'required' => 'Nama SPMI Wajib diisi',
        ]);
        $this->form_validation->set_rules('url', 'URL', 'required', [
            'required' => 'URL Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("spmi/vw_ubah_spmi", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'url' => $this->input->post('url'),
            ];
            $id = $this->input->post('id');
            $this->Spmi_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('spmi');
        }
    }
}
