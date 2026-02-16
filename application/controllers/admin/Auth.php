<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model("M_Global");
	}

	public function index()
	{
		$this->load->view('admin/auth/page_index');
	}

	public function login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post('password');

		$data_from_db = $this->M_Global->globalquery("SELECT * FROM AdminLogin WHERE Username = '$username' ")->row();

		if ($data_from_db != null) {

			$password_from_db = $this->encryption->decrypt($data_from_db->Password);

			if ($password == $password_from_db) {

				$data = [
					"UserLoginID" => $data_from_db->AdminLoginID,
					"name" => $data_from_db->AdminName,
					"key" => "XDrie3011"
				];

				$this->session->set_userdata($data);
				redirect(base_url('admin-dashboard'));
			} else {

				$this->session->set_flashdata("error", "Password Tidak Sesuai");
				redirect(base_url('admin'));
			}
		} else {

			$this->session->set_flashdata("error", "User Tidak Di temukan");
			redirect(base_url('admin'));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}

	// public function create()
	// {

	// 	$password = "admin18";
	// 	$data = [
	// 		"AdminName" => "Fajri",
	// 		"Username" => "fajri123@gmail.com",
	// 		"Password" => $this->encryption->encrypt($password),
	// 		"created_at" => date('Y-m-d H:i:s')
	// 	];

	// 	$this->M_Global->insert($data, "AdminLogin");

	// 	var_dump($data);
	// }

	public function intip_password()
	{
		// Hash panjang yang Anda kirim tadi
		$hash = "d4869c55a3857846272868f1de8d3851773814c45c90be9ad75d37db0dd65346c49d621d131fd55d3298b8024ae83057048e0aafa8278b21a19d14abb24de4fe73JTn+fJ2ZPvW4wRB285WKCwkiNsVG9fkGd2norftW4=";

		echo "Password Aslinya adalah: " . $this->encryption->decrypt($hash);
	}
}
