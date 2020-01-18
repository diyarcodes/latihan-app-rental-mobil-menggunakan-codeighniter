<?php
defined('BASEPATH') or exit('No direct script access allowed');

class rental_model extends CI_model
{
    public function index()
    {
    }
    public function getDataMobil()
    {
        return $this->db->get('mobil')->result_array();
    }
}
