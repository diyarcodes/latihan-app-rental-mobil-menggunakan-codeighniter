<?php
defined('BASEPATH') or exit('No direct script access allowed');

class rental_model extends CI_model
{
    public function getDataMobil()
    {
        return $this->db->get('mobil')->result_array();
    }

    public function getDataMobilById($id_mobil)
    {
        return $this->db->get_where('mobil', ['id_mobil' => $id_mobil])->row_array();
    }

    public function getDataType()
    {
        return $this->db->get('type')->result_array();
    }

    public function tambahDataMobil()
    {
        $data = [
            'kode_type' => $this->input->post('kode_type'),
            'merk' => $this->input->post('merk'),
            'no_plat' => $this->input->post('no_plat'),
            'tahun' => $this->input->post('tahun'),
            'warna' => $this->input->post('warna'),
            'status' => $this->input->post('status'),
            'gambar' => $this->_uploadGambar()
        ];

        $this->db->insert('mobil', $data);
    }

    private function _uploadGambar()
    {
        $config['upload_path']          = './assets/img/imgcar/';
        $config['allowed_types']        = 'jpeg|jpg|png|gif';
        $config['max_size']             = '5000';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data('file_name');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
            redirect('admin/Data_mobil');
        }
    }

    public function hapusDataMobil($id_mobil)
    {
        $this->db->where('id_mobil', $id_mobil);
        $this->db->delete('mobil');
    }
}
