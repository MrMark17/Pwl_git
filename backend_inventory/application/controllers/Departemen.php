<?php 

defined('BASEPATH') OR exit ('No direct script access allowed');

class Departemen extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Departemen_model');
	}

		public function list_departemen()
	{
		$data_barang = $this ->Departemen_model ->get_barang();

		$konten = '<tr>
			<td>Nama Departemen</td>
			<td>Aksi</td>
		</tr>';
		
		foreach ($data_barang ->result() as $key =>$value) {
			$konten .= '<tr>
			<td>'.$value -> nama_departemen.'</td>
			<td>Aksi | Read | Edit</td>
		</tr>';
		}
		$data_json = array(
			'konten' => $konten,
		);
		echo json_encode($data_json);
		
	}
}

?>

