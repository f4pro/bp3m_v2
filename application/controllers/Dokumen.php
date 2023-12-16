<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dokumen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Dokumen_model');
        $this->load->model('Kategori_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Dokumen";
        $data['document'] = $this->Dokumen_model->get();
        $data['kategori'] = $this->Kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("dokumen/vw_dokumen", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Dokumen";
        $data['dokumen'] = $this->Dokumen_model->get();
        $data['kategori'] = $this->Kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kategori_doc', 'Kategori', 'required', [
            'required' => 'Kategori Wajib Diisi',
        ]);
        $this->form_validation->set_rules('nama', 'Nama Dokumen', 'required', [
            'required' => 'Nama Dokumen Wajib diisi',
        ]);
        $this->form_validation->set_rules('url', 'URL', 'required', [
            'required' => 'URL Wajib diisi',
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("dokumen/vw_tambah_dokumen", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'kategori_doc' => $this->input->post('kategori_doc'),
                'nama' => $this->input->post('nama'),
                'url' => $this->input->post('url'),
                'status' => $this->input->post('status'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'pdf|gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/dokumen/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Dokumen_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen Berhasil Ditambah!</div>');
            redirect('Dokumen');
        }
    }
    function delete($id)
    {
        $this->Dokumen_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Dokumen Tidak Dapat Dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen Berhasil Dihapus!</div>');
        }
        redirect('Dokumen');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit Dokumen";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dokumen'] = $this->Dokumen_model->getById($id);
        $data['kategori'] = $this->Kategori_model->get();

        $this->form_validation->set_rules('kategori_doc', 'Kategori', 'required', [
            'required' => 'Kategori Wajib Diisi',
        ]);
        $this->form_validation->set_rules('nama', 'Nama Dokumen', 'required', [
            'required' => 'Nama Dokumen Wajib diisi',
        ]);
        $this->form_validation->set_rules('url', 'URL', 'required', [
            'required' => 'URL Wajib diisi',
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib diisi',
        ]);
        
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("dokumen/vw_edit_dokumen", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'kategori_doc' => $this->input->post('kategori_doc'),
                'nama' => $this->input->post('nama'),
                'url' => $this->input->post('url'),
                'status' => $this->input->post('status'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/dokumen/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['document']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/dokumen/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id = $this->input->post('id');
            $this->Dokumen_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen Berhasil Diubah!</div>');
            redirect('Dokumen');
        }
    }
}
