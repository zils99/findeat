<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_lokasi extends CI_model
{
    function getalllokasi()
    {
        $this->db->select('*');
        $this->db->from('lokasi');
        $this->db->where('lokasi.lokasi_tempat != ', 'none');
        return $this->db->get()->result();
    }

    function getcountrestaurant($lokasi)
    {
        $this->db->where('lokasi_tempat =', $lokasi);
        $query = $this->db->get('restaurant');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function tambahlokasi($data)
    {
        $this->db->insert('lokasi', $data);
    }
}
