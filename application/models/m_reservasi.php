<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_reservasi extends CI_model
{
    function tambahreservasi($data)
    {
        $this->db->insert('reservasi', $data);
    }
}
