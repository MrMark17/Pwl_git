<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {
	public function get_barang()
	{
		$this->db ->select('*');
		$this->db ->from('barang');
		return $this->db ->get();
	}
	public function insert_data($data)
	{
		$this->db ->insert('barang', $data);
	}
	public function get_by_id($id_barang)
	{
		$this->db ->select('*');
		$this->db ->from('barang');
		$this->db ->where('id_barang', $id_barang);
		return $this->db ->get();
	}

	public function update_data($id_barang, $data)
	{
		$this->db ->where('id_barang', $id_barang);
		$this->db ->update('barang', $data);
	}
	public function hapus_data($id_barang)
	{
		$this->db->where('id_barang', $id_barang);
		$this->db->delete('barang');
	}
}

?>
