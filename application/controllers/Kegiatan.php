<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kegiatan_model');
        $this->load->model('Kategori_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Kegiatan";
        $data['kegiatan'] = $this->Kegiatan_model->get();
        $data['kategori'] = $this->Kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("kegiatan/vw_kegiatan", $data);
        $this->load->view("layout/footer", $data);
    }

    function detail($id)
    {
        $data['judul'] = "Halaman Detail Kegiatan";
        $data['kegiatan'] = $this->Kegiatan_model->getById($id);
        $data['kategori'] = $this->Kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("kegiatan/vw_detail_kegiatan", $data);
        $this->load->view("layout/footer");
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Kegiatan";
        $data['kegiatan'] = $this->Kegiatan_model->get();
        $data['kategori'] = $this->Kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'required', [
            'required' => 'Nama kegiatan wajib diisi!',
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Kategori wajib diisi',
        ]);
        $this->form_validation->set_rules('tempat_kegiatan', 'Tempat Kegiatan', 'required', [
            'required' => 'Tempat kegiatan wajib diisi',
        ]);
        $this->form_validation->set_rules('waktu_kegiatan', 'Waktu Kegiatan', 'required', [
            'required' => 'Waktu kegiatan wajib diisi',
        ]);
        $this->form_validation->set_rules('deskripsi_kegiatan', 'Deskripsi Kegiatan', 'required', [
            'required' => 'Deskripsi kegiatan wajib diisi',
        ]);

        
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("kegiatan/vw_tambah_kegiatan", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_kegiatan' => $this->input->post('nama_kegiatan'),
                'kategori' => $this->input->post('kategori'),
                'tempat_kegiatan ' => $this->input->post('tempat_kegiatan'),
                'waktu_kegiatan ' => $this->input->post('waktu_kegiatan'),
                'deskripsi_kegiatan' => $this->input->post('deskripsi_kegiatan'),
                'link_kegiatan' => $this->input->post('link_kegiatan'),
            ];
            $upload_image = $_FILES['gambar_kegiatan']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/kegiatan/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar_kegiatan')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar_kegiatan', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Kegiatan_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
            redirect('kegiatan');
        }
    }
    function delete($id)
    {
        $this->Kegiatan_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Dapat Dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        }
        redirect('kegiatan');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit Kegiatan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->Kegiatan_model->getById($id);
        $data['kategori'] = $this->Kategori_model->get();

        $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'required', [
            'required' => 'Nama kegiatan wajib diisi!',
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Kategori wajib diisi',
        ]);
        $this->form_validation->set_rules('tempat_kegiatan', 'Tempat Kegiatan', 'required', [
            'required' => 'Tempat kegiatan wajib diisi',
        ]);
        $this->form_validation->set_rules('waktu_kegiatan', 'Waktu Kegiatan', 'required', [
            'required' => 'Waktu kegiatan wajib diisi',
        ]);
        $this->form_validation->set_rules('deskripsi_kegiatan', 'Deskripsi Kegiatan', 'required', [
            'required' => 'Deskripsi kegiatan wajib diisi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("kegiatan/vw_ubah_kegiatan", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_kegiatan' => $this->input->post('nama_kegiatan'),
                'kategori' => $this->input->post('kategori'),
                'tempat_kegiatan ' => $this->input->post('tempat_kegiatan'),
                'waktu_kegiatan ' => $this->input->post('waktu_kegiatan'),
                'deskripsi_kegiatan' => $this->input->post('deskripsi_kegiatan'),
                'link_kegiatan' => $this->input->post('link_kegiatan'),
            ];
            $upload_image = $_FILES['gambar_kegiatan']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'JPG|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/kegiatan/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar_kegiatan')) {
                    $old_image = $data['kegiatan']['gambar_kegiatan'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/kegiatan/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar_kegiatan', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id = $this->input->post('id');
            $this->Kegiatan_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('kegiatan');
        }
    }
}
