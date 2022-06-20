<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_user');
		$this->load->model('m_restaurant');
	}

	public function index()
	{
		$this->load->view('landing/landingpage');
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('landing/login');
		} else {
			$email = $this->input->post('email');
			$pass = $this->input->post('password');

			$hasil = $this->m_user->getuser($email);
			if ($hasil) {
				if (password_verify($pass, $hasil['user_password'])) {
					$data = [
						'user_email' => $hasil['user_email'],
						'user_role' => $hasil['user_role']
					];
					$this->session->set_userdata($data);
					if ($data['user_role'] == "pengguna") {
						redirect('User/home');
					} elseif ($data['user_role'] == "owner") {
						redirect('owners/home');
					} else {
						redirect('Admin/home');
					}
				} else {
					$this->session->set_flashdata('logingagal', '<div class="alert alert-danger" role="alert">
					Password salah</div>');
				}
			} else {
				$this->session->set_flashdata('logingagal', '<div class="alert alert-danger" role="alert">
				Email salah</div>');
			}
			redirect('Landing/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_email');
		$this->session->unset_userdata('user_role');

		$this->session->set_flashdata('logoutberhasil', '<div class="alert alert-success" role="alert">Logout berhasil</div>');
		redirect('Landing/login');
	}

	public function register()
	{
		$this->form_validation->set_rules('choice', 'Choice', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('landing/register_choice');
		} else {
			$pil = $this->input->post('choice');
			if ($pil == 'owner') {
				redirect('Landing/register_owner');
			} else {
				redirect('Landing/register_user');
			}
		}
	}

	public function register_user()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[user.user_email]',
			['is_unique' => 'Email sudah terdaftar, silahkan login menggunakan email tersebut!']
		);

		if ($this->form_validation->run() == false) {
			$this->load->view('landing/register_user');
		} else {
			$data = [
				'user_nama' => htmlspecialchars($this->input->post('name', true)),
				'user_password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'user_email' => htmlspecialchars($this->input->post('email', true)),
				'user_joindate' => date('Y-m-d'),
				'user_role' => "pengguna"
			];

			$this->m_user->add($data);
			$this->session->set_flashdata('registerberhasil', '<div class="alert alert-success" role="alert">
			Akun berhasil di buat silahkan login</div>');

			redirect('Landing/login');
		}
	}

	public function register_owner()
	{
		$this->form_validation->set_rules('name_owner', 'Nama', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('email_owner', 'Email', 'required|trim|valid_email|is_unique[user.user_email]', ['is_unique' => 'Email sudah terdaftar, silahkan login menggunakan email tersebut!']);

		if ($this->form_validation->run() == false) {
			$this->load->view('landing/register_owner');
		} else {
			$data_restaurant = [
				'restaurant_name' => htmlspecialchars($this->input->post('name_restaurant', true)),
				'restaurant_address' => htmlspecialchars($this->input->post('address_restaurant', true)),
				'user_email' => htmlspecialchars($this->input->post('email_owner', true)),
				'collection_tipe' => 'none',
				'restaurant_gambar' => 'test.png',
				'lokasi_tempat' => 'none'
			];

			$data_owners = [
				'user_nama' => htmlspecialchars($this->input->post('name_owner', true)),
				'user_password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'user_email' => htmlspecialchars($this->input->post('email_owner', true)),
				'user_joindate' => date('Y-m-d'),
				'user_role' => "owner"
			];

			$this->m_user->add($data_owners);
			$this->m_restaurant->add($data_restaurant);
			$this->session->set_flashdata('registerberhasil', '<div class="alert alert-success" role="alert">Akun berhasil di buat silahkan login</div>');

			redirect('Landing/login');
		}
	}
}
