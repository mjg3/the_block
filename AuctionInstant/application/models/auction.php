<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Auction extends CI_Model {

		public function __construct(){
			parent:: __construct();
		}

		public function all()
		{
			return $this->db->query("")->result_array();
		}

		public function create()
		{

		}

		public function delete($id)
		{
			$this->db->query("DELETE FROM  WHERE id=?", $id);
		}

		public function update()
		{

		}
	}
	
?>
