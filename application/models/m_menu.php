<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_menu extends CI_model
{
    function getmenu($email)
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('restaurant_name = ', $email);
        return $this->db->get()->result_array();
    }

    function tambahmenu($data)
    {
        $this->db->insert('menu', $data);
    }
}
