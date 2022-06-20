<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_review extends CI_model
{
    function tambahreview($data)
    {
        $this->db->insert('review', $data);
    }

    public function getreview($id)
    {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('restaurant', 'review.review_restaurant = restaurant.restaurant_name');
        $this->db->where('restaurant_id = ', $id);
        return $this->db->get()->result();
    }

    public function getallreview($name)
    {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->where('review_restaurant = ', $name);
        return $this->db->get()->result();
    }
}
