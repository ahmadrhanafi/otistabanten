<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DosenStaff extends MY_Controller
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
		$data['Title'] = "Dosen & Staff | Dashboard Administrator";
		$data['dosen'] = $this->M_Global->globalquery("SELECT * FROM Dosen WHERE Tipe = 1 ");
		$data['staff'] = $this->M_Global->globalquery("SELECT * FROM Dosen WHERE Tipe = 2 ");
		$this->render_page_admin('admin/dosenstaff/page_dosen_staff', $data);
	}

	public function create()
	{
		$tipe = $this->input->post('tipe');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$fileStore = $_FILES['image'];

		$img = $this->upload_foto("image", "./assets_admin/dist/img/dosen/");

		$data = [
			"Title" => $jabatan,
			"Name" => $nama,
			"Img" => $img,
			"Tipe" => $tipe,
			"created_at" => date('Y-m-d H:i:s')
		];

		$message_success = "Foto Berhasil Ditambahkan";
		$message_gagal = "Foto Gagal Ditambahkan";


		$result = $this->M_Global->insert($data, "Dosen");


		if ($result == 'success') {

			if ($tipe == "dosen") {
				$this->session->set_flashdata('success_poto', $message_success);
			} else {

				$this->session->set_flashdata('success_video', $message_success);
			}
		} else {
			if ($tipe == "dosen") {
				$this->session->set_flashdata('error_poto', $message_gagal);
			} else {

				$this->session->set_flashdata('error_video', $message_gagal);
			}
		}

		redirect(base_url('admin-dosen-staff'));
	}

	public function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$tipe = $this->input->post('tipe');
		$img = $this->input->post('img_old');

		$fileStore = $_FILES['image']['name'];
		if ($fileStore != "") {
			// hapus foto
			$this->delete_file('assets_admin/dist/img/dosen/', $img);

			// upload foto
			$img = $this->upload_foto("image", "./assets_admin/dist/img/dosen/");
		}

		$where = "DosenID = '$id' ";
		$data = [
			"Title" => $jabatan,
			"Name" => $nama,
			"Img" => $img,
			"Tipe" => $tipe
		];

		$message_success = "Dosen / Staff Berhasil Di Edit";
		$message_gagal = "Dosen / Staff Gagal Di Edit";



		$result = $this->M_Global->update_data($where, $data, "Dosen");

		if ($result == 'success') {

			if ($tipe == "1") {
				$this->session->set_flashdata('success_poto', $message_success);
			} else {

				$this->session->set_flashdata('success_video', $message_success);
			}
		} else {
			if ($tipe == "1") {
				$this->session->set_flashdata('error_poto', $message_gagal);
			} else {

				$this->session->set_flashdata('error_video', $message_gagal);
			}
		}

		redirect(base_url('admin-dosen-staff'));
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$img = $this->input->post('img_old');
		$tipe = $this->input->post('tipe');

		$this->delete_file('assets_admin/dist/img/dosen/', $img);
		$table = 'Dosen';
		$param = "DosenID = '$id' ";

		$message_success = "Dosen / Staff Berhasil Di Hapus";
		$message_gagal = "Dosen / Staff Gagal Di Hapus";


		// hapus foto
		$result = $this->M_Global->delete($table, $param);

		if ($result == 'success') {

			if ($tipe == "1") {
				$this->session->set_flashdata('success_poto', $message_success);
			} else {

				$this->session->set_flashdata('success_video', $message_success);
			}
		} else {
			if ($table == "1") {
				$this->session->set_flashdata('error_poto', $message_gagal);
			} else {

				$this->session->set_flashdata('error_video', $message_gagal);
			}
		}
		redirect(base_url('admin-dosen-staff'));
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

		$sql = "SELECT * FROM Dosen WHERE DosenID  = '$id' ";

		$data['dosen'] = $this->M_Global->globalquery($sql)->row();

		$this->load->view('admin/dosenstaff/page_load_edit', $data);
	}

	public function view_delete()
	{
		$id = $this->uri->segment(4);

		$sql = "SELECT * FROM Dosen WHERE DosenID  = '$id' ";

		$data['dosen'] = $this->M_Global->globalquery($sql)->row();

		$this->load->view('admin/dosenstaff/page_delete', $data);
	}
}
