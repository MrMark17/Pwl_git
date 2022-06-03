<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen_model extends CI_Model {
	public function get_barang()
	{
		$this->db ->select('*');
		$this->db ->from('departemen');
		return $this->db ->get();
	}
}

?>
