<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BerandaController extends MY_Controller
{

	public function index()
	{
		$data['title'] = "Otista - Beranda";
		

		$this->render_page('main/beranda/beranda', $data);
	}
}