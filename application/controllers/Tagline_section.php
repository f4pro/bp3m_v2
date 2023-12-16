<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class Tagline_section extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Aboutusp_tagline_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Edit Konten";
        $ids = '1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['about_us'] = $this->Aboutusp_tagline_model->getById($ids);

        $this->form_validation->set_rules('judul', 'Judul', 'required', [
            'required' => 'Kategori Wajib diisi',
        ]);
        
        
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("tagline_aboutus/vw_ubah_konten", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi_konten' => $this->input->post('isi_konten'),
            ];

            // $id = $this->input->post($ids);
            $this->Aboutusp_tagline_model->update(['id' => '1'], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('Tagline_section');
        }
    }
}