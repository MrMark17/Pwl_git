<?php 

defined('BASEPATH') OR exit ('No direct script access allowed');

class Barang extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Barang_model');
	}
		public function list_barang()
	{
		$data_barang = $this ->Barang_model ->get_barang();

		$konten = '<tr>
			<td>Nama</td>
			<td>Deskripsi</td>
			<td>Stok</td>
			<td>Aksi</td>
		</tr>';
		
		foreach ($data_barang ->result() as $key =>$value) {
			$konten .= '<tr>
			<td>'.$value -> nama_barang.'</td>
			<td>'.$value -> deskripsi.'</td>
			<td>'.$value -> stok.'</td>
			<td>Aksi | Read | Edit</td>
		</tr>';
		}
		$data_json = array(
			'konten' => $konten,
		);
		echo json_encode($data_json);
	}

	public function create_action()
	{
		$this->db ->trans_start();

		$arr_input = array(
			'nama_barang' => $this->input ->post('nama_barang'),
			'deskripsi' => $this->input ->post('deskripsi'),
		);
		
		$this->Barang_model ->insert_data($arr_input);

		if ($this->db ->trans_status() === false) {
			$this->db ->trans_rollback();
			$data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Input Data Barang');
		} else {
			$this->db ->trans_commit();
			$data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Input Data Barang');
		}

		echo json_encode($data_output);
	}
}

?>


