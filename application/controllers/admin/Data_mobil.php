<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mobil extends CI_Controller {
	public function index()
	{
        $data['mobil'] = $this->rental_model->getDataMobil();
        $data['type'] = $this->rental_model->getDataType();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_mobil', $data);
        $this->load->view('templates_admin/footer');
    }
    
    public function tambah_mobil()
	{
        $data['mobil'] = $this->rental_model->getDataMobil();
        $data['type'] = $this->rental_model->getDataType();

        $this->form_validation->set_rules('kode_type', 'Kode_type', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('no_plat', 'No_plat', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if( $this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_tambah_mobil', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $kode_type = $this->input->post('kode_type');
            $merk = $this->input->post('merk');
            $no_plat = $this->input->post('no_plat');
            $warna = $this->input->post('warna');
            $tahun = $this->input->post('tahun');
            $status = $this->input->post('status');
            $gambar = $_files['gambar']['name'];
            
            if( $gambar = '') {

            } else {
                $config['upload_path'] = './assets/img/imgcar';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')) {
                    echo "Gambar Gagal Diupload!";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }
            $data = [
                'kode_type' => $kode_type,
                'merk' => $merk,
                'no_plat' => $no_plat,
                'tahun' => $tahun,
                'warna' => $warna,
                'status' => $status,
                'gambar' => $gambar
            ];

            $this->db->insert('mobil', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_mobil');
        }
    }
}
