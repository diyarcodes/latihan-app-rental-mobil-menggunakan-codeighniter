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

    public function getDataType()
    {
        return $this->db->get('type')->result_array();
    }

    public function getDataTypeById($id_type)
    {
        return $this->db->get_where('type', ['id_type' => $id_type])->row_array();
    }

    public function tambahDataType()
    {
        $data = [
            'kode_type' => $this->input->post('kode_type'),
            'nama_type' => $this->input->post('nama_type')
        ];

        $this->db->insert('type', $data);
    }

    public function ubahDataType()
    {
        $data = [
            'kode_type' => $this->input->post('kode_type'),
            'nama_type' => $this->input->post('nama_type')
        ];

        $this->db->where('id_type', $this->input->post('id_type'));
        $this->db->update('type', $data);
    }
}
