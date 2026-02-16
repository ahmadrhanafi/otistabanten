<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

#[AllowDynamicProperties] // Tambahkan ini untuk menghilangkan error/warning di PHP 8.2+
class MY_Controller extends CI_Controller
{
	/**
	 * Pastikan constructor dipanggil agar library yang di-load
	 * di autoload.php bisa terbaca dengan baik oleh editor.
	 */
	public function __construct()
	{
		parent::__construct();
	}

	function render_page_login($content, $data = NULL)
	{
		$data['header']  = $this->load->view('auth/header', $data, TRUE);
		$data['content'] = $this->load->view($content, $data, TRUE);
		$data['footer']  = $this->load->view('auth/footer', $data, TRUE);

		$this->load->view('auth/index', $data);
	}

	function render_page($content, $data = NULL)
	{
		$data['header']         = $this->load->view('main/header', $data, TRUE);
		$data['topbar']         = $this->load->view('main/topbar', $data, TRUE);
		$data['content']        = $this->load->view($content, $data, TRUE);
		$data['footer']         = $this->load->view('main/footer', $data, TRUE);

		$this->load->view('main/index', $data);
	}

	function render_page_admin($content, $data = NULL)
	{
		$data['header']         = $this->load->view('admin/header', $data, TRUE);
		$data['sidebar']        = $this->load->view('admin/sidebar', $data, TRUE);
		$data['content']        = $this->load->view($content, $data, TRUE);
		$data['footer']         = $this->load->view('admin/footer', $data, TRUE);

		$this->load->view('admin/index', $data);
	}

	function upload_foto($data_img, $dir_poto)
	{
		$config['upload_path']   = $dir_poto;
		$config['allowed_types'] = 'jpeg|jpg|png|gif|bmp';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($data_img)) {
			$error = array('error' => $this->upload->display_errors());
			// Gunakan return null atau handle error dengan lebih rapi daripada die
			return false;
		} else {
			$data = array('upload_data' => $this->upload->data());
			return $data['upload_data']['file_name'];
		}
	}

	function delete_file($dir, $filename)
	{
		if (empty($filename)) return false;

		$file_path = FCPATH . $dir . $filename;

		if (file_exists($file_path)) {
			return unlink($file_path);
		}
		return false;
	}
}
