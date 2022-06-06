<?php 

defined('BASEPATH') OR exit ('No direct script access allowed');

class Departemen extends CI_Controller {
	public function index()
	{
		$konten = $this->load ->view('list_departemen', null, true);


		$data_json = array(
			'konten' => $konten,
			'titel' => 'List Departemen',
		);

		echo json_encode($data_json);
	}
}

?>


