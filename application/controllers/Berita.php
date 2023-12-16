<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Berita_model');
        $this->load->model('Kategori_model');

        $this->load->library('upload');
    }
    function index()
    {
        $data['judul'] = "Halaman Berita";
        $data['berita'] = $this->Berita_model->get();
        $data['kategori'] = $this->Kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("berita/vw_berita", $data);
        $this->load->view("layout/footer", $data);
    }

    function detail($id)
    {
        $data['judul'] = "Halaman Detail Berita";
        $data['berita'] = $this->Berita_model->getById($id);
        $data['kategori'] = $this->Kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("berita/vw_detail_berita", $data);
        $this->load->view("layout/footer");
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Berita";
        $data['kategori'] = $this->Kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required', [
            'required' => 'Kategori Wajib diisi',
        ]);
        $this->form_validation->set_rules('judul', 'Judul Berita', 'required', [
            'required' => 'Judul Berita Wajib diisi',
        ]);
        $this->form_validation->set_rules('isi', 'Isi Berita', 'required', [
            'required' => 'Isi Berita Wajib diisi',
        ]);
        $this->form_validation->set_rules('status', 'Status Berita', 'required', [
            'required' => 'Status Berita Wajib diisi',
        ]);
        

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("berita/vw_tambah_berita", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'kategori' => $this->input->post('kategori'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'status' => $this->input->post('status'),
                'author' => $data['user']['nama'],
            ];
            
            // OLD WAY

            // $upload_image = $_FILES['gambar']['name'];
            // if ($upload_image) {
            //     $config['allowed_types'] = 'gif|jpg|png|jpeg';
            //     $config['max_size'] = '2048';
            //     $config['upload_path'] = './assets/img/berita/';
            //     $this->load->library('upload', $config);
            //     if ($this->upload->do_upload('gambar')) {
            //         $new_image = $this->upload->data('file_name');
            //         $this->db->set('gambar', $new_image);
            //     } else {
            //         echo $this->upload->display_errors();
            //     }
            // }
            
            $upload_image = $_FILES['gambar']['name'];
            if($upload_image){
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/berita/';
                $this->load->library('upload', $config);
                
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }

            }
            
            $this->Berita_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berita Berhasil Ditambah!</div>');
            redirect('berita');
        }
    }
    function delete($id)
    {
        $this->Berita_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berita Tidak Dapat Dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berita Berhasil Dihapus!</div>');
        }
        redirect('berita');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit Berita";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->Berita_model->getById($id);
        $data['kategori'] = $this->Kategori_model->get();

        $this->form_validation->set_rules('kategori', 'Nama Kategori', 'required', [
            'required' => 'Kategori Wajib diisi',
        ]);
        $this->form_validation->set_rules('judul', 'Judul Berita', 'required', [
            'required' => 'Judul Berita Wajib diisi',
        ]);
        $this->form_validation->set_rules('isi', 'isi Berita', 'required', [
            'required' => 'Isi Berita Wajib diisi',
        ]);
        $this->form_validation->set_rules('status', 'Status Berita', 'required', [
            'required' => 'Status Berita Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("berita/vw_ubah_berita", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'kategori' => $this->input->post('kategori'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'status' => $this->input->post('status'),
                'author' => $data['user']['nama'],
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/berita/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['berita']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/berita/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id = $this->input->post('id');
            $this->Berita_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berita Berhasil Diubah!</div>');
            redirect('Berita');
        }
    }
}
