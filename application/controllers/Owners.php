<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Owners extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_user');
        $this->load->model('m_menu');
        $this->load->model('m_lokasi');
        $this->load->model('m_collect');
        $this->load->model('m_reservasi');
        $this->load->model('m_restaurant');
        loginsession();
    }

    public function home()
    {
        $data['restaurant'] = $this->db->get_where('restaurant', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['lokasi'] = $this->m_lokasi->getalllokasi();
        $data['collect'] = $this->m_collect->getallcollection();
        $this->load->view('owner/temp_topbar');
        $this->load->view('owner/temp_sidebar', $data);
        $this->load->view('owner/profile_resto_owner', $data);
        $this->load->view('owner/temp_footer');
    }

    public function updateprofile()
    {
        $data['email'] = $this->session->userdata('user_email');
        $data['gambar'] = $this->m_restaurant->getgambar($data['email']);
        $restaurant = $this->db->get_where('restaurant', ['user_email' => $this->session->userdata('user_email')])->row_array();
        if (NULL != $this->input->post('collection')) {
            $data['restaurant_update'] = [
                'restaurant_name' => $this->input->post('nama'),
                'restaurant_address' => $this->input->post('alamat'),
                'restaurant_jamoperasional' => $this->input->post('jam'),
                'restaurant_harga' => $this->input->post('harga'),
                'lokasi_tempat' => $this->input->post('collection')
            ];
        } elseif (NULL != $this->input->post('daerah')) {
            $data['restaurant_update'] = [
                'restaurant_name' => $this->input->post('nama'),
                'restaurant_address' => $this->input->post('alamat'),
                'restaurant_jamoperasional' => $this->input->post('jam'),
                'restaurant_harga' => $this->input->post('harga'),
                'collection_tipe' => $this->input->post('daerah')
            ];
        } else {
            $data['restaurant_update'] = [
                'restaurant_name' => $this->input->post('nama'),
                'restaurant_address' => $this->input->post('alamat'),
                'restaurant_jamoperasional' => $this->input->post('jam'),
                'restaurant_harga' => $this->input->post('harga')
            ];
        }

        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['upload_path']          = './assets/img/restaurant/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                echo $this->upload->display_errors();
            } else {
                $file = $this->upload->data();
                $data['restaurant_update'] = [
                    'restaurant_gambar' => $file['file_name']
                ];
            }
        }
        $this->m_restaurant->updaterestaurant($data['email'], $data['restaurant_update']);
        redirect('Owners/home');
    }

    public function listmenu()
    {
        $restaurant = $this->db->get_where('restaurant', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['menu'] = $this->m_menu->getmenu($restaurant['restaurant_name']);
        $this->load->view('owner/temp_topbar');
        $this->load->view('owner/temp_sidebar', $data);
        $this->load->view('owner/menu_resto', $data);
        $this->load->view('owner/temp_footer');
    }

    public function addmenu()
    {
        $restaurant = $this->db->get_where('restaurant', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $upload_image = $_FILES['gambarmenu']['name'];

        if ($upload_image) {
            $config['upload_path']          = './assets/img/menu/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambarmenu')) {
                echo $this->upload->display_errors();
            } else {
                $file = $this->upload->data();
                $data['menu'] = [
                    'menu_gambar' => $file['file_name'],
                    'restaurant_name' => $restaurant['restaurant_name']
                ];
            }

            $this->m_menu->tambahmenu($data['menu']);
            redirect('Owners/listmenu');
        }
    }

    public function reservasi()
    {
        if ($this->input->post('selected_button')) {
            $selected_button = $this->input->post('selected_button');
            echo ($selected_button);
        } else {
            $restaurant = $this->db->get_where('restaurant', ['user_email' => $this->session->userdata('user_email')])->row_array();
            $data['reservasi'] = $this->m_reservasi->getreservasi($restaurant['restaurant_name']);
            $this->load->view('owner/reservasi_owner', $data);
        }
    }

    public function reservasireject($id)
    {
        $data = [
            'reservasi_status' => 'Reject'
        ];
        $this->m_reservasi->updatereservasi($id, $data);
        redirect('Owners/reservasi');
    }

    public function reservasiacc($id)
    {
        $data = [
            'reservasi_status' => 'Accept'
        ];
        $this->m_reservasi->updatereservasi($id, $data);
        redirect('Owners/reservasi');
    }
}
