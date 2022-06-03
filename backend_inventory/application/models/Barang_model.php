<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {
	public function get_barang()
	{
		$this->db ->select('*');
		$this->db ->from('barang');
		return $this->db ->get();
	}
}

?>
