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
			$seller_id  = $product_info['seller_id'];
			// Then we'll insert the proudct into the queue
			$this->db->insert('queues',
			array('product_id' => $product_id, 'seller_id' => $seller_id));
		}

		public function product_detail($product_id) {
			// get the product information for the provided id, and return
			// an array of that information.
			$product_information = $this->db->get_where('products', array('id' => $product_id))->result_array();
			return $product_information;
	}

	// returns the id of the product that is the first item in the queue
	// and ready to be sold
	public function for_sale(){
			$query = 'SELECT product_id FROM queues ORDER BY id ASC LIMIT 1';
			$product_id = $this->db->query($query)->row_array();
			return $product_id;
	}

	public function purchased_products($user_id){
			$won_items = $this->db->get_where('purchased_products', array('buyer_id' => $user_id))->result_array();
			return $won_items;
	}

	public function sold_products($user_id){
			$sold_items = $this->db->get_where('sold_products', array('seller_id' => $user_id))->result_array();
			return $sold_items;
	}

	public function products_in_queue($user_id){
			$queued_items = $this->db->get_where('queues', array('seller_id' => $user_id))->result_array();
			return $queued_items;
	}

}

?>
