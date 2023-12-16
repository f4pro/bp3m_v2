<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Member_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Data Member";
        $data['member'] = $this->Member_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("member/vw_member", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Member";
        $data['member'] = $this->Member_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_member', 'Nama Member', 'required', [
            'required' => 'Nama Wajib diisi',
        ]);
        $this->form_validation->set_rules('title_member', 'Jabatan Member', 'required', [
            'required' => 'Jabatan Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("member/vw_tambah_member", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_member' => $this->input->post('nama_member'),
                'title_member' => $this->input->post('title_member')
            ];
            $upload_image = $_FILES['gambar_member']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/member/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar_member')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar_member', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Member_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('member');
        }
    }
    function delete($id)
    {
        $this->Member_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Dapat Dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        }
        redirect('member');
    }


    function edit($id)
    {
        $data['judul'] = "Halaman Edit member";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->Member_model->getById($id);

        $this->form_validation->set_rules('nama_member', 'Nama Member', 'required', [
            'required' => 'Nama Wajib diisi',
        ]);
        $this->form_validation->set_rules('title_member', 'Jabatan Member', 'required', [
            'required' => 'Jabatan Wajib diisi',
        ]);
        
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("member/vw_edit_member", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_member' => $this->input->post('nama_member'),
                'title_member' => $this->input->post('title_member'),
            ];
            $upload_image = $_FILES['gambar_member']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/member/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar_member')) {
                    $old_image = $data['document']['gambar_member'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/member/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar_member', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id = $this->input->post('id');
            $this->Member_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('member');
        }
    }
}
