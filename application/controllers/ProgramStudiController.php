<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProgramStudiController extends MY_Controller
{

	public function piaud()
	{
		$data['title'] = "Otista - Pendidikan Islam Anak Usia Dini";
		$this->render_page('main/prodi/page_piaud', $data);
	}

	public function pai()
	{
		$data['title'] = "Otista - Pendidikan Agama Islam";
		$this->render_page('main/prodi/page_pai', $data);
	}
}