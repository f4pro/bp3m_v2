<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class Struktur_section extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Aboutusp_struktur_model');
    }

    function index($ids = '1')
    {
        $data['judul'] = "Halaman Edit Konten";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['struktur'] = $this->Aboutusp_struktur_model->getById($ids);

        
        
        
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("struktur/vw_ubah_struktur", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/struktur/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['struktur']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/struktur/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id = $this->input->post($ids);
            $this->Aboutusp_struktur_model->update(['id' => $id], $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('Struktur_section');
        }
    }
}