<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Timeline extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Timeline_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Timeline";
        $data['timeline'] = $this->Timeline_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("timeline/vw_timeline", $data);
        $this->load->view("layout/footer", $data);
    }


    function tambah()
    {
        $data['judul'] = "Halaman Tambah Timeline";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Judul Wajib diisi',
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
            'required' => 'Deskripsi Wajib diisi',
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
            'required' => 'Tanggal Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("timeline/vw_tambah_timeline", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tanggal' => $this->input->post('tanggal'),
            ];
            $this->Timeline_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
            redirect('timeline/');
        }
    }

    function delete($id)
    {
        $this->Timeline_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data timeline Tidak Dapat Dihapus (Sudah Berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data timeline Berhasil Dihapus!</div>');
        }
        redirect('timeline');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit Timeline";
        $data['timeline'] = $this->Timeline_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Judul Wajib diisi',
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
            'required' => 'Deskripsi Wajib diisi',
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
            'required' => 'Tanggal Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("timeline/vw_ubah_timeline", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tanggal' => $this->input->post('tanggal'),
            ];
            $this->Timeline_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data timeline Berhasil Diubah!</div>');
            redirect('Timeline');
        }
    }
}
