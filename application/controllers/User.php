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
        $this->load->model('m_reservasi');
        $this->load->model('m_restaurant');
        loginsession();
    }

    public function home()
    {
        if ($this->input->post('cari')) {
            $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
            $data['title'] = $this->input->post('cari');
            $data['restaurant'] = $this->m_restaurant->getrestaurantsearch($this->input->post('cari'));
            $this->load->view('user/hasilsearch', $data);
        } else {
            $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
            $data['collections'] = $this->m_collect->getlimitcollection();
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
        $data['restaurant'] = $this->m_restaurant->getrestaurantlokasi($id);
        $this->load->view('user/hasilsearch', $data);
    }

    public function seecollection()
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['collection'] = $this->m_collect->getallcollection();
        $this->load->view('user/collection', $data);
    }

    public function hasilcollection($id)
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['title'] = $id;
        $data['restaurant'] = $this->m_restaurant->getrestaurantcollection($id);
        $this->load->view('user/hasilsearch', $data);
    }

    public function detailproduct($id)
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['restaurant'] = $this->m_restaurant->getrestaurantname($id);
        $data['menu'] = $this->m_menu->getfirstmenu($id);
        $this->load->view('user/detail_product', $data);
    }

    public function seemenu($id)
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['menu'] = $this->m_menu->getallmenu($id);
        $this->load->view('user/menu', $data);
    }

    public function review($id)
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['restaurant'] = $this->m_restaurant->getrestaurantname($id);
        $this->load->view('user/add_review', $data);
    }

    public function reservasi($id)
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['restaurant'] = $this->m_restaurant->getrestaurantname($id);
        $this->load->view('user/reservasi', $data);
    }

    public function addreservasi($restaurant)
    {
        $data = [
            'reservasi_tanggal' => $this->input->post('tanggal'),
            'reservasi_username' =>  $this->input->post('nama'),
            'reservasi_seat' => $this->input->post('seat'),
            'reservasi_restaurant' => $restaurant,
            'reservasi_status' => "Waiting"
        ];
        $this->m_reservasi->tambahreservasi($data);
        redirect('user/home');
    }
}
