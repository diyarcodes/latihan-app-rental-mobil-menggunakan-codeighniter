<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_type extends CI_Controller
{
  public function index()
  {
    $data['type'] = $this->rental_model->getDataType();

    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/data_type', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambah_type()
  {
    $data['type'] = $this->rental_model->getDataType();

    $this->form_validation->set_rules('kode_type', 'Kode_type', 'required|trim', [
      'required' => 'Kode type Tidak Boleh Kosong'
    ]);
    $this->form_validation->set_rules('nama_type', 'Nama_type', 'required|trim', [
      'required' => 'Nama Type Tidak boleh Kosong'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates_admin/header');
      $this->load->view('templates_admin/sidebar');
      $this->load->view('admin/form_tambah_type', $data);
      $this->load->view('templates_admin/footer');
    } else {
      $this->rental_model->tambahDataType();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('admin/Data_type');
    }
  }

  public function hapus_type($id)
  {
    $this->rental_model->hapusDataType($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Data Mobil Berhasil Dihapus
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
    redirect('admin/Data_type');
  }

  public function ubah_type($id_type)
  {
    $data['type'] = $this->rental_model->getDataTypeById($id_type);

    $this->form_validation->set_rules('kode_type', 'Kode_type', 'required|trim', [
      'required' => 'Kode type Tidak Boleh Kosong'
    ]);
    $this->form_validation->set_rules('nama_type', 'Nama_type', 'required|trim', [
      'required' => 'Nama Type Tidak boleh Kosong'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates_admin/header');
      $this->load->view('templates_admin/sidebar');
      $this->load->view('admin/form_ubah_type', $data);
      $this->load->view('templates_admin/footer');
    } else {
      $this->rental_model->ubahDataType();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mobil Berhasil Diubah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect('admin/Data_type');
    }
  }
}
