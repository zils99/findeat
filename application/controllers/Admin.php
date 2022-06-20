<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_user');
        $this->load->model('m_restaurant');
        $this->load->model('m_lokasi');
        $this->load->model('m_collect');
        $this->load->model('m_reservasi');
        loginsession();
    }

    public function home()
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['restaurant'] = $this->m_restaurant->getallrestaurant();
        $data['jmlrestaurant'] = $this->m_restaurant->getcountallrestaurant();
        $data['jmlreservasi'] = $this->m_reservasi->getcountallreservasi();
        foreach ($data['restaurant'] as $jr) :
            $total = $this->m_restaurant->getcountrestaurantmenu($jr->restaurant_name);
            $field[] = (object)[
                'Join' => $jr->user_joindate,
                'Owner' => $jr->user_nama,
                'Address' => $jr->restaurant_address,
                'Menu' => $total,
                'Restaurant_name' => $jr->restaurant_name
            ];
        endforeach;
        $data['restaurant'] = $field;
        $this->load->view('admin/temp_topbar');
        $this->load->view('admin/temp_sidebar', $data);
        $this->load->view('admin/homeadmin', $data);
        $this->load->view('admin/temp_footer');
    }

    public function listuser()
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['listuser'] = $this->m_user->getalluser('user');
        $data['jmlrestaurant'] = $this->m_restaurant->getcountallrestaurant();
        $data['jmlreservasi'] = $this->m_reservasi->getcountallreservasi();
        $this->load->view('admin/temp_topbar');
        $this->load->view('admin/temp_sidebar', $data);
        $this->load->view('admin/listuser', $data);
        $this->load->view('admin/temp_footer');
    }

    public function listlokasi()
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['listlokasi'] = $this->m_lokasi->getalllokasi();
        foreach ($data['listlokasi'] as $ls) :
            $total = $this->m_lokasi->getcountrestaurant($ls->lokasi_tempat);
            $field[] = (object)[
                'id' => $ls->lokasi_id,
                'lokasi' => $ls->lokasi_tempat,
                'total' => $total
            ];
        endforeach;
        $data['listlokasi'] = $field;
        $this->load->view('admin/temp_topbar');
        $this->load->view('admin/temp_sidebar', $data);
        $this->load->view('admin/lokasi', $data);
        $this->load->view('admin/temp_footer');
    }

    public function addlokasi()
    {
        $nama = $this->input->post('nama');
        $data = [
            'lokasi_tempat' => $nama
        ];
        $this->m_lokasi->tambahlokasi($data);
        redirect('admin/listlokasi');
    }

    public function editlokasi($id)
    {
        $nama = $this->input->post('nama');
        $data = [
            'lokasi_tempat' => $nama
        ];
        $this->m_lokasi->editlokasi($id, $data);
        redirect('admin/listlokasi');
    }

    public function listcollection()
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        $data['listcollect'] = $this->m_collect->getallcollection();
        foreach ($data['listcollect'] as $lc) :
            $total = $this->m_collect->getcountcollection($lc->collection_nama);
            $field[] = (object)[
                'id' => $lc->collection_id,
                'collect' => $lc->collection_nama,
                'total' => $total
            ];
        endforeach;
        $data['listcollect'] = $field;
        $this->load->view('admin/temp_topbar');
        $this->load->view('admin/temp_sidebar', $data);
        $this->load->view('admin/collection', $data);
        $this->load->view('admin/temp_footer');
    }

    public function addcollection()
    {
        $nama = $this->input->post('nama');
        $data = [
            'collection_nama' => $nama
        ];
        $this->m_collect->tambahcollection($data);
        redirect('admin/listcollection');
    }

    public function editcollection($id)
    {
        $nama = $this->input->post('nama');
        $data = [
            'collection_nama' => $nama
        ];
        $this->m_collect->editcollection($id, $data);
        redirect('admin/listcollection');
    }
}
