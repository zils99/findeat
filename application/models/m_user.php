<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_user extends CI_model
{
    function add($data)
    {
        $this->db->insert('user', $data);
    }

    function getuser($email)
    {
        return $this->db->get_where('user', ['user_email' => $email])->row_array();
    }

    function getalluser($table)
    {
        $this->db->order_by("user_joindate", "asc");
        return $this->db->get($table)->result();
    }
}
