<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_customer extends CI_Controller
{
    public function index()
    {
        $data['customer'] = $this->rental_model->getDataCustomer();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_customer', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_customer()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim', [
            'required' => 'Gender Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('no_telepon', 'No telepon', 'required|trim', [
            'required' => 'No telepon Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('no_ktp', 'No Ktp', 'required|trim', [
            'required' => 'No Ktp Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Tidak Boleh Kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_tambah_customer');
            $this->load->view('templates_admin/footer');
        } else {
            $this->rental_model->tambahDataCustomer();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Customer Berhasil Ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_customer');
        }
    }

    public function hapus_customer($id)
    {
        $this->rental_model->hapusCustomer($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Customer Berhasil Dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('admin/Data_customer');
    }

    public function ubah_customer($id)
    {
        $data['customer'] = $this->rental_model->getDataCustomerById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim', [
            'required' => 'Gender Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('no_telepon', 'No telepon', 'required|trim', [
            'required' => 'No telepon Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('no_ktp', 'No Ktp', 'required|trim', [
            'required' => 'No Ktp Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Tidak Boleh Kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/form_ubah_customer', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $this->rental_model->ubahDataCustomer();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Customer Berhasil Diubah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/Data_customer');
        }
    }
}
