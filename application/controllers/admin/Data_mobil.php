<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mobil extends CI_Controller {
	public function index()
	{
        $data['mobil'] = $this->rental_model->getDataMobil();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_mobil', $data);
        $this->load->view('templates_admin/footer');
	}
}
