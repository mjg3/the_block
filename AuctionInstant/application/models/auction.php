<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Auction extends CI_Model {

		public function __construct(){
			parent:: __construct();
		}

		public function create_product($product_info) {
			// Codeigniter insert method
			$this->db->insert('products', $product_info);
			// Let's get the id of the product we just inserted
			$product_id = $this->db->insert_id();
			// Then we'll insert the proudct into the queue
			$this->db->insert('queues', array('product_id' => $product_id));
		}

		public function product_detail($product_id)
			// get the product information for the provided id, and return
			// an array of that information.
			$product_information = $this->db->get_where
			('products', array('id' => $product_id))->result_array();

			return $product_information;
	}

?>
