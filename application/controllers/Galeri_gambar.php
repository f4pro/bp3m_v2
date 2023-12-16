<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Galeri_gambar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Galeri_gambar_model');
        $this->load->model('Kategori_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Galeri Gambar";
        $data['galeri_gambar'] = $this->Galeri_gambar_model->get();
        $data['kategori'] = $this->Kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("galeri_gambar/vw_galeri_gambar", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Gambar";
        $data['galeri_gambar'] = $this->Galeri_gambar_model->get();
        $data['kategori'] = $this->Kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Gambar', 'required', [
            'required' => 'Nama Gambar Wajib diisi',
        ]);
        $this->form_validation->set_rules('kategori_g', 'Kategori Gambar', 'required', [
            'required' => 'Kategori Gambar Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("galeri_gambar/vw_tambah_galeri_gambar", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'kategori_g' => $this->input->post('kategori_g')
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/galeri_gambar/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Galeri_gambar_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Gambar Berhasil Ditambah!</div>');
            redirect('galeri_gambar');
        }
    }
    function delete($id)
    {
        $this->Galeri_gambar_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gambar Tidak Dapat Dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Gambar Berhasil Dihapus!</div>');
        }
        redirect('galeri_gambar');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit Gambar";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['galeri_gambar'] = $this->Galeri_gambar_model->getById($id);
        $data['kategori'] = $this->Kategori_model->get();

        $this->form_validation->set_rules('nama', 'Nama Gambar', 'required', [
            'required' => 'Nama Gambar Wajib diisi',
        ]);
        $this->form_validation->set_rules('kategori_g', 'Kategori Gambar', 'required', [
            'required' => 'Kategori Gambar Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("galeri_gambar/vw_ubah_galeri_gambar", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'kategori_g' => $this->input->post('kategori_g'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/galeri_gambar/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['galeri_gambar']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/galeri_gambar/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id = $this->input->post('id');
            $this->Galeri_gambar_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Gambar Berhasil Diubah!</div>');
            redirect('galeri_gambar');
        }
    }
}
