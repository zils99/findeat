<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_restaurant extends CI_model
{
    function add($data)
    {
        $this->db->insert('restaurant', $data);
    }

    function getallrestaurant()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('restaurant', 'user.user_email = restaurant.user_email');
        $this->db->join('menu', 'restaurant.restaurant_name = menu.restaurant_name');
        return $this->db->get()->result();
    }

    function getcountallrestaurant()
    {
        $query = $this->db->get('restaurant');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function getcountrestaurantmenu($restaurant)
    {
        $this->db->where('restaurant_name =', $restaurant);
        $query = $this->db->get('menu');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function updaterestaurant($where, $data)
    {
        $this->db->where('user_email =', $where);
        $this->db->update('restaurant', $data);
    }

    public function getgambar($email)
    {
        $this->db->where('user_email', $email);
        return $this->db->get('restaurant')->row();
    }

    public function getrestaurant($nama)
    {
        $this->db->select('*');
        $this->db->from('restaurant');
        $this->db->where('lokasi_tempat =', $nama);
        return $this->db->get()->result();
    }
}
