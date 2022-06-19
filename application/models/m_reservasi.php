<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_reservasi extends CI_model
{
    function tambahreservasi($data)
    {
        $this->db->insert('reservasi', $data);
    }

    function getreservasi($id)
    {
        $this->db->select('*');
        $this->db->from('reservasi');
        $this->db->where('reservasi_restaurant =', $id);
        return $this->db->get()->result();
    }

    function updatereservasi($where, $data)
    {
        $this->db->where('reservasi_id =', $where);
        $this->db->update('reservasi', $data);
    }
}
