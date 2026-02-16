<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends MY_Controller
{

	public function sejarah_yayasan()
	{
		$data['title'] = "Otista - Sejarah Yayasan";
		$this->render_page('main/profile/page_yayasan', $data);
	}

	public function  visi_misi()
	{
		$data['title'] = "Otista - VIsi & Misi";
		$this->render_page('main/profile/paga_visi_misi', $data);
	}

	public function  struktur_manajemen()
	{
		$data['title'] = "Otista - Struktur Manajemen";
		$this->render_page('main/profile/page_manajemen', $data);
	}
}
