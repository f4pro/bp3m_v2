<?php
defined('BASEPATH') or exit('No direct script access allowed');
class About_renbang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('A_renbang_model');
    }
    function index()
    {
        $data['judul'] = "Halaman About Renbang";
        $data['renbang'] = $this->A_renbang_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("about_renbang/vw_konten_renbang", $data);
        $this->load->view("layout/footer", $data);
    }


    function tambah()
    {
        $data['judul'] = "Halaman Tambah Data";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Judul Wajib diisi',
        ]);
        $this->form_validation->set_rules('isi', 'Isi', 'required', [
            'required' => 'Isi Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("about_renbang/vw_tambah_konten", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
            ];
            $this->A_renbang_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('About_renbang');
        }
    }

    function delete($id)
    {
        $this->A_renbang_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Dapat Dihapus (Sudah Berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        }
        redirect('About_renbang');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit Data";
        $data['renbang'] = $this->A_renbang_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Judul Wajib diisi',
        ]);
        $this->form_validation->set_rules('isi', 'Isi', 'required', [
            'required' => 'Isi Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("about_renbang/vw_ubah_konten", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
            ];
            $id = $this->input->post('id');
            $this->A_renbang_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('About_renbang');
        }
    }
}
