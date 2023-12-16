<?php
defined('BASEPATH') or exit('No direct script access allowed');
class galeri_video extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('galeri_video_model');
        $this->load->model('kategori_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Galeri Video";
        $data['galeri_video'] = $this->galeri_video_model->get();
        $data['kategori'] = $this->kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("galeri_video/vw_galeri_video", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Video";
        $data['galeri_video'] = $this->galeri_video_model->get();
        $data['kategori'] = $this->kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Video', 'required', [
            'required' => 'Nama Video Wajib diisi',
        ]);
        $this->form_validation->set_rules('kategori_v', 'Kategori Video', 'required', [
            'required' => 'Kategori Video Wajib diisi',
        ]);
        $this->form_validation->set_rules('video', 'Video', 'required', [
            'required' => 'Video Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("galeri_video/vw_tambah_galeri_video", $data);
            $this->load->view("layout/footer", $data);
        } 
    }
    function do_tambah(){
       
        $upload_video = $_FILES['video']['name'];
        if ($upload_video) {
            $config['allowed_types'] = 'mp4|3gp|flv';
            $config['max_size'] = '20000';
            $config['upload_path'] = './assets/video/galeri_video/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('video')) {
                $video_name = $this->upload->data('file_name');
                $this->db->set('video', $video_name);
                $data = [
                    'kategori_v' => $this->input->post('kategori_v'),
                    'nama' => $this->input->post('nama'),
                    'url' => $this->input->post('url'),
                    'video'=>$video_name
                ];
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->galeri_video_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menambahkan Video</div>');
        redirect('galeri_video');
    }
    function delete($id)
    {
        $this->galeri_video_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Video tidak dapat dihapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Video Berhasil Dihapus!</div>');
        }
        redirect('galeri_video');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit Video";
        $data['kategori'] = $this->kategori_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['galeri_video'] = $this->galeri_video_model->getById($id);
        $data['kategori'] = $this->kategori_model->get();

        $this->form_validation->set_rules('nama', 'Nama video', 'required', [
            'required' => 'Nama video Wajib diisi',
        ]);
        $this->form_validation->set_rules('kategori_g', 'Kategori video', 'required', [
            'required' => 'Kategori video Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("galeri_video/vw_ubah_galeri_video", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'kategori_v' => $this->input->post('kategori_v'),
                'url' => $this->input->post('url'),
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
            $this->galeri_video_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Gambar Berhasil Diubah!</div>');
            redirect('galeri_gambar');
        }
    }
    function do_edit(){
        $upload_video = $_FILES['video']['name'];
        if ($upload_video) {
            $config['allowed_types'] = 'mp4|3gp|flv';
            $config['max_size'] = 1024 * 100; //max 100mb
            $config['upload_path'] = './assets/video/galeri_video/';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('video')) {
                $video_name = $this->upload->data('file_name');
                $this->db->set('video', $video_name);
                $data = [
                    'nama' => $this->input->post('nama'),
                    'kategori_v' => $this->input->post('kategori_v'),
                    'video'=>$video_name
                ];
                $where = [
                    'id'=>$this->input->post('id'),
                ];
                    $this->galeri_video_model->update($where,$data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit info Video</div>');
                    redirect('galeri_video');
            } else {
                echo $this->upload->display_errors();
            }
        }else{
             $data = [
                    'nama' => $this->input->post('nama'),
                    'kategori_v' => $this->input->post('kategori_v'),
                ];
                $where = [
                    'id'=>$this->input->post('id'),
                ];
                    $this->galeri_video_model->update($where,$data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Edit info Video</div>');
                    redirect('galeri_video');
        }
    }
}
