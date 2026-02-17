<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewsController extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model("M_Global");
		$this->load->library('pagination');
	}

	public function news()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url('news');
		$config['total_rows'] = $this->db->count_all('News');
		$config['per_page'] = 9;
		$config['uri_segment'] = 3;

		$config['full_tag_open']    = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav>';
		$config['num_tag_open']     = '<li class="page-item">';
		$config['num_tag_close']    = '</li>';
		$config['cur_tag_open']     = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close']    = '</a></li>';
		$config['next_tag_open']    = '<li class="page-item">';
		$config['next_tag_close']   = '</li>';
		$config['prev_tag_open']    = '<li class="page-item">';
		$config['prev_tag_close']   = '</li>';
		$config['attributes']       = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['title'] = "Otista - Artikel";

		$data['news'] = $this->M_Global->globalquery("SELECT * FROM News ORDER BY created_at DESC LIMIT $page, " . $config['per_page'])->result_array();

		$data['pagination'] = $this->pagination->create_links();

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

		$data['artikel'] = $this->M_Global->globalquery("SELECT * FROM News WHERE NewsID = '$slug'")->row_array();

		$data['sidebar_news'] = $this->M_Global->globalquery("SELECT * FROM News WHERE NewsID != '$slug' ORDER BY NewsDate DESC LIMIT 5")->result_array();

		$this->render_page('main/news/page_news_detail', $data);
	}
}
