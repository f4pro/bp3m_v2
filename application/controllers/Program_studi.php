<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Program_studi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Programstudi_model');
    }
    function index()
    {
        $data['judul'] = "Program Studi";
        $data['ps'] = $this->Programstudi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("program_studi/vw_ps", $data);
        $this->load->view("layout/footer", $data);
    }


    function tambah()
    {
        $data['judul'] = "Halaman Tambah Program Studi";
        $data['program_studi'] = $this->Programstudi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('nama_ps', 'Program Studi', 'required', [
            'required' => 'Nama Prodi Wajib diisi',
        ]);
        $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
            'required' => 'Nama Kaprodi Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("program_studi/vw_tambah_ps");
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_ps' => $this->input->post('nama_ps'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];
            
            $this->Programstudi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Program Studi Berhasil Ditambah!</div>');
            redirect('Program_studi');
        }
    }

    function delete($id)
    {
        $this->Programstudi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Program Studi Tidak Dapat Dihapus (Sudah Berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Program Studi Berhasil Dihapus!</div>');
        }
        redirect('program_studi');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Tambah Program Studi";
        $data['ps'] = $this->Programstudi_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('nama_ps', 'Program Studi', 'required', [
            'required' => 'Nama Prodi Wajib diisi',
        ]);
        $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
            'required' => 'Nama Kaprodi Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("program_studi/vw_ubah_ps", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_ps' => $this->input->post('nama_ps'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];
            
            $this->Programstudi_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Program Studi Berhasil Ditambah!</div>');
            redirect('Program_studi');
        }
    }
}
