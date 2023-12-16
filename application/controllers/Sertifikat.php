<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sertifikat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Sertifikat_model');
        $this->load->model('Programstudi_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Sertifikat";
        $data['sertifikat'] = $this->Sertifikat_model->get();
        $data['prodi'] = $this->Programstudi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("sertifikat/vw_sertif", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Sertifikat";
        $data['sertifikat'] = $this->Sertifikat_model->get();
        $data['prodi'] = $this->Programstudi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required', [
            'required' => 'Program studi wajib diisi',
        ]);
        $this->form_validation->set_rules('nama_sk', 'Nama Sertifikat', 'required', [
            'required' => 'Nama sertifikat wajib diisi',
        ]);
        $this->form_validation->set_rules('strata', 'Strata', 'required', [
            'required' => 'Strata wajib diisi',
        ]);

        $this->form_validation->set_rules('thn_sk', 'Tahun Sertifikat', 'required', [
            'required' => 'Tahun sertifikat wajib diisi',
        ]);
        $this->form_validation->set_rules('predikat_sk', 'Predikat sertifikat', 'required', [
            'required' => 'Predikat sertifikat wajib diisi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("sertifikat/vw_tambah_sertif", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'program_studi' => $this->input->post('program_studi'),
                'strata' => $this->input->post('strata'),
                'nama_sk' => $this->input->post('nama_sk'),
                'no_sk' => $this->input->post('no_sk'),
                'url' => $this->input->post('url'),
                'thn_sk' => $this->input->post('thn_sk'),
                'predikat_sk' => $this->input->post('predikat_sk')
                // 'status' => $this->input->post('status'),
                // 'expire_sertif' => $this->input->post('expire_sertif'),
            ];
            $this->Sertifikat_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sertifikat Berhasil Ditambah!</div>');
            redirect('sertifikat');
        }
    }
    function delete($id)
    {
        $this->Sertifikat_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Sertifikat Tidak Dapat Dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sertifikat Berhasil Dihapus!</div>');
        }
        redirect('sertifikat');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit Sertifikat";
        $data['sertifikat'] = $this->Sertifikat_model->getById($id);
        $data['prodi'] = $this->Programstudi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required', [
            'required' => 'Program studi wajib diisi',
        ]);
        $this->form_validation->set_rules('nama_sk', 'Nama Sertifikat', 'required', [
            'required' => 'Nama sertifikat wajib diisi',
        ]);
        $this->form_validation->set_rules('strata', 'Strata', 'required', [
            'required' => 'Strata wajib diisi',
        ]);

        $this->form_validation->set_rules('thn_sk', 'Tahun Sertifikat', 'required', [
            'required' => 'Tahun sertifikat wajib diisi',
        ]);
        $this->form_validation->set_rules('predikat_sk', 'Predikat sertifikat', 'required', [
            'required' => 'Predikat sertifikat wajib diisi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("sertifikat/vw_edit_sertif", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'program_studi' => $this->input->post('program_studi'),
                'strata' => $this->input->post('strata'),
                'nama_sk' => $this->input->post('nama_sk'),
                'no_sk' => $this->input->post('no_sk'),
                'url' => $this->input->post('url'),
                'thn_sk' => $this->input->post('thn_sk'),
                'predikat_sk' => $this->input->post('predikat_sk')
                // 'status' => $this->input->post('status'),
                // 'expire_sertif' => $this->input->post('expire_sertif'),
            ];

            $id = $this->input->post('id');
            $this->Sertifikat_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sertifikat Berhasil Diubah!</div>');
            redirect('Sertifikat');
        }
    }
}
