<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('key') !== 'XDrie3011') {
			redirect(base_url('admin'));
		}



		$this->load->model("M_Global");
	}

	public function index()
	{
		$data['Title'] = "Dashboard Administrator | STIT OTISTA";
		$this->render_page_admin('admin/home/page_home', $data);
	}
}
