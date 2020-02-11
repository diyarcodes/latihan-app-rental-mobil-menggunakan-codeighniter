<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['mobil'] = $this->rental_model->getDataMobil();

        $this->load->view('templates_customer/header', $data);
        $this->load->view('customer/dashboard', $data);
        $this->load->view('templates_customer/footer');
    }

    public function detailMobil($id)
    {
        $data['judul'] = 'Detail Mobil';
        $data['mobil'] = $this->rental_model->getDataMobilById($id);

        $this->load->view('templates_customer/header', $data);
        $this->load->view('customer/detail_mobil', $data);
        $this->load->view('templates_customer/footer');
    }
}
