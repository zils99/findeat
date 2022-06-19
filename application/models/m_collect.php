<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_collect extends CI_model
{
    function getallcollection()
    {
        $this->db->select('*');
        $this->db->from('collection');
        return $this->db->get()->result();
    }

    function getlimitcollection()
    {
        $this->db->select('*');
        $this->db->from('collection');
        $this->db->limit(4);
        return $this->db->get()->result();
    }

    function getcountcollection($collection)
    {
        $this->db->where('collection_tipe =', $collection);
        $query = $this->db->get('restaurant');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function tambahcollection($data)
    {
        $this->db->insert('collection', $data);
    }

    public function getcollection($nama)
    {
        $this->db->select('*');
        $this->db->from('collection');
        $this->db->where('collection_id =', $nama);
        return $this->db->get()->result();
    }
}
