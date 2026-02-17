<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BerandaController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model("M_Global");
		$this->load->library('pagination');
	}
	public function index()
	{
		$data['title'] = "Otista - Beranda";
		$this->load->library('pagination');

		$config['base_url'] = base_url('news');
		$config['total_rows'] = $this->db->count_all('News');
		$config['per_page'] = 6;
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

		$data['pagination'] = $this->pagination->create_links();
		$data['berita_home'] = $this->M_Global->globalquery("SELECT * FROM News ORDER BY created_at DESC LIMIT $page, " . $config['per_page'])->result_array();

		$this->render_page('main/beranda/beranda', $data);
	}
}
