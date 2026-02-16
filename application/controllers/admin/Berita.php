<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends MY_Controller
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
		$data['Title'] = "Berita & Artikel | Dashboard Administrator";
		$data['berita'] = $this->M_Global->globalquery("SELECT * FROM News ORDER BY NewsDate DESC ");
		$this->render_page_admin('admin/berita/page_berita', $data);
	}

	public function create()
	{
		$judul = $this->input->post('judul');
		$tanggal = $this->input->post('tanggal');
		$isi_berita = htmlspecialchars($this->input->post('isi_berita'));

		$fileStore = $_FILES['image'];

		$img = $this->upload_foto("image", "./assets_admin/dist/img/berita/");

		$data = [
			"NewsTitle" => $judul,
			"NewsBody" => $isi_berita,
			"NewsDate" => $tanggal,
			"NewsImg" => $img,
			"created_at" => date('Y-m-d H:i:s')
		];

		$result = $this->M_Global->insert($data, "News");

		if ($result == 'success') {
			$this->session->set_flashdata('success', "Berita Berhasil Ditambahkan");
		} else {
			$this->session->set_flashdata('error', "Berita Gagal Ditambahkan");
		}

		redirect(base_url('admin-berita'));
	}

	public function update()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$tanggal = $this->input->post('tanggal');
		$img = $this->input->post('img_old');
		$isi_berita = htmlspecialchars($this->input->post('isi_berita'));

		$fileStore = $_FILES['image']['name'];

		if ($fileStore != "") {
			// hapus foto
			$this->delete_file('assets_admin/dist/img/berita/', $img);

			// upload foto
			$img = $this->upload_foto("image", "./assets_admin/dist/img/berita/");
		}

		$where = "NewsID = '$id' ";
		$data = [
			"NewsTitle" => $judul,
			"NewsBody" => $isi_berita,
			"NewsDate" => $tanggal,
			"NewsImg" => $img
		];

		$result = $this->M_Global->update_data($where, $data, "News");
		if ($result == 'success') {
			$this->session->set_flashdata('success', "Berita Berhasil Di Edit");
		} else {
			$this->session->set_flashdata('error', "Berita Gagal Di Edit");
		}
		redirect(base_url('admin-berita'));
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$img = $this->input->post('img');
		// hapus foto
		$this->delete_file('assets_admin/dist/img/berita/', $img);
		$result = $this->M_Global->delete("News", "NewsID = '$id' ");
		if ($result == 'success') {
			$this->session->set_flashdata('success', "Berita Berhasil Di Hapus");
		} else {
			$this->session->set_flashdata('error', "Berita Gagal Di Hapus");
		}
		redirect(base_url('admin-berita'));
	}

	public function load_isi_berita()
	{
		$id = $this->uri->segment(4);

		$sql = "SELECT NewsBody FROM News WHERE NewsID  = '$id' ";

		$data['berita'] = $this->M_Global->globalquery($sql)->row();

		$this->load->view('admin/berita/page_body', $data);
	}
	public function view_edit()
	{
		$id = $this->uri->segment(4);

		$sql = "SELECT * FROM News WHERE NewsID  = '$id' ";

		$data['berita'] = $this->M_Global->globalquery($sql)->row();

		$this->load->view('admin/berita/page_load_edit', $data);
	}

	public function view_delete()
	{
		$id = $this->uri->segment(4);

		$sql = "SELECT * FROM News WHERE NewsID  = '$id' ";

		$data['berita'] = $this->M_Global->globalquery($sql)->row();

		$this->load->view('admin/berita/page_delete', $data);
	}
}
