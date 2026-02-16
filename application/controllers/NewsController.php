<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewsController extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_Global");
	}

	public function news()
	{
		$data['title'] = "Otista - Artikel";
		$data['news'] = $this->M_Global->globalquery("SELECT * FROM News ORDER BY created_at DESC ")->result_array();
		$data['days'] = [
			'Sunday' => 'Minggu',
			'Monday' => 'Senin',
			'Tuesday' => 'Selasa',
			'Wednesday' => 'Rabu',
			'Thursday' => 'Kamis',
			'Friday' => 'Jumat',
			'Saturday' => 'Sabtu'
		];
		$data['months'] = [
			'January' => 'Januari',
			'February' => 'Februari',
			'March' => 'Maret',
			'April' => 'April',
			'May' => 'Mei',
			'June' => 'Juni',
			'July' => 'Juli',
			'August' => 'Agustus',
			'September' => 'September',
			'October' => 'Oktober',
			'November' => 'November',
			'December' => 'Desember'
		];

		$this->render_page('main/news/page_news', $data);
	}

	public function galeri()
	{
		$data['title'] = "Otista - Galeri";
		$data['foto'] = $this->M_Global->globalquery("SELECT * FROM PhotoGalery ORDER BY created_at DESC ")->result_array();
		$data['video'] = $this->M_Global->globalquery("SELECT * FROM VideoGalery ORDER BY created_at DESC ")->result_array();

		$this->render_page('main/news/page_galeri', $data);
	}

	public function news_detail($slug)
	{
		$data['title'] = "Otistas - Artikel";

		$data['artikel'] = $this->M_Global->globalquery("SELECT * FROM News WHERE NewsID = $slug ")->row_array();


		$this->render_page('main/news/page_news_detail', $data);
	}
}
