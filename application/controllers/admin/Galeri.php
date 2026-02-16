<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends MY_Controller
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
		$data['Title'] = "Galeri Media | Dashboard Administrator";
		$data['video'] = $this->M_Global->globalquery("SELECT * FROM VideoGalery ORDER BY created_at DESC ");
		$data['poto'] = $this->M_Global->globalquery("SELECT * FROM PhotoGalery ORDER BY created_at DESC ");
		$this->render_page_admin('admin/galeri/page_galeri', $data);
	}

	public function create()
	{
		$tipe = $this->input->post('tipe');

		if ($tipe == "poto") {
			$nama = $this->input->post('nama');
			$fileStore = $_FILES['image'];
			$img = $this->upload_foto("image", "./assets_admin/dist/img/galeri/");

			$data = [
				"GaleryName" => $nama,
				"GaleryImg" => $img,
				"created_at" => date('Y-m-d H:i:s')
			];
			$table = "PhotoGalery";
			$message_success = "Foto Berhasil Ditambahkan";
			$message_gagal = "Foto Gagal Ditambahkan";
		} else {

			$src = $this->input->post('src');

			$new_url = str_replace("watch?v=", "embed/", $src);
			$data = [
				"VideoSrc" => $new_url,
				"created_at" => date('Y-m-d H:i:s')
			];

			$table = "VideoGalery";
			$message_success = "Video Berhasil Ditambahkan";
			$message_gagal = "Video Gagal Ditambahkan";
		}

		$result = $this->M_Global->insert($data, $table);


		if ($result == 'success') {

			if ($table == "PhotoGalery") {
				$this->session->set_flashdata('success_poto', $message_success);
			} else {

				$this->session->set_flashdata('success_video', $message_success);
			}
		} else {
			if ($table == "PhotoGalery") {
				$this->session->set_flashdata('error_poto', $message_gagal);
			} else {

				$this->session->set_flashdata('error_video', $message_gagal);
			}
		}

		redirect(base_url('admin-galeri'));
	}

	public function update()
	{
		$id = $this->input->post('id');
		$tipe = $this->input->post('tipe');

		if ($tipe == 'poto') {
			$nama = $this->input->post('nama');
			$img = $this->input->post('img');

			$fileStore = $_FILES['image']['name'];

			if ($fileStore != "") {
				// hapus foto
				$this->delete_file('assets_admin/dist/img/galeri/', $img);

				// upload foto
				$img = $this->upload_foto("image", "./assets_admin/dist/img/galeri/");
			}

			$where = "GaleryID = '$id' ";
			$table = "PhotoGalery";
			$data = [
				"GaleryName" => $nama,
				"GaleryImg" => $img
			];

			$message_success = "Foto Berhasil Di Edit";
			$message_gagal = "Foto Gagal Di Edit";
		} else {

			$src = $this->input->post('src');
			$new_url = str_replace("watch?v=", "embed/", $src);

			$where = "VideoID = '$id' ";
			$data = [
				"VideoSrc" => $new_url
			];

			$table = "VideoGalery";
			$message_success = "Video Berhasil Di Edit";
			$message_gagal = "Video Gagal Di Edit";
		}



		$result = $this->M_Global->update_data($where, $data, $table);

		if ($result == 'success') {

			if ($table == "PhotoGalery") {
				$this->session->set_flashdata('success_poto', $message_success);
			} else {

				$this->session->set_flashdata('success_video', $message_success);
			}
		} else {
			if ($table == "PhotoGalery") {
				$this->session->set_flashdata('error_poto', $message_gagal);
			} else {

				$this->session->set_flashdata('error_video', $message_gagal);
			}
		}

		redirect(base_url('admin-galeri'));
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$tipe = $this->input->post('tipe');

		if ($tipe == 'poto') {

			$img = $this->input->post('img');

			$this->delete_file('assets_admin/dist/img/galeri/', $img);
			$table = 'PhotoGalery';
			$param = "GaleryID = '$id' ";

			$message_success = "Foto Berhasil Di Hapus";
			$message_gagal = "Foto Gagal Di Hapus";
		} else {

			$table = 'VideoGalery';
			$param = "VideoID = '$id' ";
			$message_success = "Video Berhasil Di Hapus";
			$message_gagal = "Video Gagal Di Hapus";
		}
		// hapus foto
		$result = $this->M_Global->delete($table, $param);

		if ($result == 'success') {

			if ($table == "PhotoGalery") {
				$this->session->set_flashdata('success_poto', $message_success);
			} else {

				$this->session->set_flashdata('success_video', $message_success);
			}
		} else {
			if ($table == "PhotoGalery") {
				$this->session->set_flashdata('error_poto', $message_gagal);
			} else {

				$this->session->set_flashdata('error_video', $message_gagal);
			}
		}
		redirect(base_url('admin-galeri'));
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
		$tipe = $this->uri->segment(5);

		if ($tipe == 'poto') {
			$sql = "SELECT * FROM PhotoGalery WHERE GaleryID  = '$id' ";
		} else {

			$sql = "SELECT * FROM VideoGalery WHERE VideoID  = '$id' ";
		}


		$data['galeri'] = $this->M_Global->globalquery($sql)->row();
		$data['tipe'] = $tipe;

		$this->load->view('admin/galeri/page_load_edit', $data);
	}

	public function view_delete()
	{
		$id = $this->uri->segment(4);
		$tipe = $this->uri->segment(5);

		if ($tipe == 'poto') {
			$sql = "SELECT * FROM PhotoGalery WHERE GaleryID  = '$id' ";
		} else {

			$sql = "SELECT * FROM VideoGalery WHERE VideoID  = '$id' ";
		}

		$data['galeri'] = $this->M_Global->globalquery($sql)->row();
		$data['tipe'] = $tipe;

		$this->load->view('admin/galeri/page_delete', $data);
	}
}
