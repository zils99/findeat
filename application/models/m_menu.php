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

    function getfirstmenu($id)
    {
        $this->db->select('menu_gambar');
        $this->db->from('menu');
        $this->db->join('restaurant', 'menu.restaurant_name = restaurant.restaurant_name');
        $this->db->where('restaurant_id = ', $id);
        $this->db->limit(1);
        return $this->db->get()->row_array();
    }

    function getallmenu($id)
    {
        $this->db->select('menu_gambar');
        $this->db->from('menu');
        $this->db->join('restaurant', 'menu.restaurant_name = restaurant.restaurant_name');
        $this->db->where('restaurant_id = ', $id);
        return $this->db->get()->result_array();
    }
}
