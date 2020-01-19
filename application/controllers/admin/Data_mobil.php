<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_mobil extends CI_Controller
{
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

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_tambah_mobil', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $this->rental_model->tambahDataMobil();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_mobil');
        }
    }

    public function hapus_mobil($id_mobil)
    {
        $this->rental_model->hapusDataMobil($id_mobil);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('admin/Data_mobil');
    }
}
