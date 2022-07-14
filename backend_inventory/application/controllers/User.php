<?php 

defined('BASEPATH') OR exit ('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		echo "Index";
	}

	public function check_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$cek = $this->User_model->cek_user($email, sha1($password));

		if ($cek->num_rows() > 0) {
			$data_json = array('sukses' => 'Ya', 'pesan' => 'Sukses Login !!');
		} else {
			$data_json = array('sukses' => 'T', 'pesan' => 'Username dan Password Tidak Terdaftar!!');
		}
		echo json_encode($data_json);
	}
	
}

?>


