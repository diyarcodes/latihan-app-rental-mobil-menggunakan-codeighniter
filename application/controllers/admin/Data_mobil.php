<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_mobil extends CI_Controller
{
  public function index()
  {
    $data['mobil'] = $this->rental_model->getDataMobil();

    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/data_mobil', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambah_mobil()
  {
    $data['mobil'] = $this->rental_model->getDataMobil();
    $data['type'] = $this->rental_model->getDataType();

    $this->form_validation->set_rules('kode_type', 'Kode Type', 'required|trim', [
      'required' => 'Kode Type Tidak Boleh Kosong'
    ]);
    $this->form_validation->set_rules('merk', 'Merk', 'required|trim', [
      'required' => 'Merk Tidak Boleh Kosong'
    ]);
    $this->form_validation->set_rules('no_plat', 'No plat', 'required|trim', [
      'required' => 'No. Plat Tidak Boleh Kosong'
    ]);
    $this->form_validation->set_rules('warna', 'Warna', 'required|trim', [
      'required' => 'Warna Tidak Boleh Kosong'
    ]);
    $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|integer', [
      'required' => 'Warna Tidak Boleh Kosong',
      'integer' => 'Tahun Harus Angka'
    ]);
    $this->form_validation->set_rules('status', 'Status', 'required|trim', [
      'required' => 'Status Tidak Boleh Kosong'
    ]);

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

  public function detail_mobil($id_mobil)
  {
    $data['detail'] = $this->rental_model->getDataMobilById($id_mobil);

    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/detail_mobil', $data);
    $this->load->view('templates_admin/footer');
  }

  public function ubah_mobil($id_mobil)
  {
    $data['mobil'] = $this->rental_model->getDataMobilById($id_mobil);
    $data['type'] = $this->rental_model->getDataType();

    $data['typeMobil'] = ['SDN', 'LMB', 'MNV'];

    $this->form_validation->set_rules('merk', 'Merk', 'required|trim', [
      'required' => 'Merk Tidak Boleh Kosong'
    ]);
    $this->form_validation->set_rules('no_plat', 'No plat', 'required|trim', [
      'required' => 'No. Plat Tidak Boleh Kosong'
    ]);
    $this->form_validation->set_rules('warna', 'Warna', 'required|trim', [
      'required' => 'Warna Tidak Boleh Kosong'
    ]);
    $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|integer', [
      'required' => 'Tahun Tidak Boleh Kosong',
      'integer' => 'Tahun Harus Angka'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates_admin/header');
      $this->load->view('templates_admin/sidebar');
      $this->load->view('admin/form_ubah_mobil', $data);
      $this->load->view('templates_admin/footer');
    } else {
      $this->rental_model->ubahDataMobil();
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
