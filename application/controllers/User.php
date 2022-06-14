<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_menu');
        $this->load->model('m_user');
        $this->load->model('m_lokasi');
        $this->load->model('m_collect');
        $this->load->model('m_restaurant');
        loginsession();
    }

    public function home()
    {
        if ($this->input->post('cari')) {
            var_dump($this->input->post('cari'));
            die;
        } else {
            $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
            $data['collections'] = $this->m_collect->getallcollection();
            $this->load->view('user/homeuser', $data);
        }
    }

    public function locallities()
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['lokasi'] = $this->m_lokasi->getalllokasi();
        $this->load->view('user/popular_localities', $data);
    }

    public function hasillocalities($id)
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['title'] = $id;
        $data['restaurant'] = $this->m_restaurant->getrestaurant($id);
        $this->load->view('user/hasilsearch', $data);
    }
}
