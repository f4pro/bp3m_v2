<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class Aboutus_section extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Aboutusp_section_model');
    }
    public function index()
    {
        $data['judul'] = "Konten About";
        $data['about_us'] = $this->Aboutusp_section_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('section_aboutus/vw_konten', $data);
        $this->load->view('layout/footer');
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Data";
        $data['about_us'] = $this->Aboutusp_section_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Nama Kategori', 'required', [
            'required' => 'Kategori Wajib diisi',
        ]);
        $this->form_validation->set_rules('isi_konten', 'Judul Berita', 'required', [
            'required' => 'Judul Berita Wajib diisi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("section_aboutus/vw_tambah_konten", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi_konten' => $this->input->post('isi_konten')
            ];
            $this->Aboutusp_section_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('Aboutus_section');
        }
    }

    function delete($id)
    {
        $this->Aboutusp_section_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berita Tidak Dapat Dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        }
        redirect('Aboutus_section');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Konten";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['about_us'] = $this->Aboutusp_section_model->getById($id);

        $this->form_validation->set_rules('judul', 'Nama Kategori', 'required', [
            'required' => 'Kategori Wajib diisi',
        ]);
        $this->form_validation->set_rules('isi_konten', 'Judul Berita', 'required', [
            'required' => 'Judul Berita Wajib diisi',
        ]);
        
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("section_aboutus/vw_ubah_konten", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi_konten' => $this->input->post('isi_konten'),
            ];

            $id = $this->input->post('id');
            $this->Aboutusp_section_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('Aboutus_section');
        }
    }
}