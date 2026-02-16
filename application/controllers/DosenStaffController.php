<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DosenStaffController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_Global");
	}

	public function dosen_program_studi()
	{
		$data['title'] = "Otista - Dosen Program Studi";
		$data['dosen'] = $this->M_Global->globalquery("SELECT * FROM Dosen WHERE Tipe = 1")->result_array();
		
		$this->render_page('main/dosen_staff/page_dosen', $data);
	}
	
	public function staff()
	{
		$data['title'] = "Otista - Staff";
		$data['staff'] = $this->M_Global->globalquery("SELECT * FROM Dosen WHERE Tipe = 2")->result_array();
		$this->render_page('main/dosen_staff/page_staff', $data);
	}
}
