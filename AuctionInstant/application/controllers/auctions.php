<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class auctions extends CI_Controller {

		public function index() {
			$this->load->view('auction');
		}
		public function creates_product() {
			// Assemble an array to pass to model
			$this->load->model('auction');
			// Retrieve the id of the user currently logged in
			$seller_id = $this->session->userdata('id');
			$product_info  = $this->info->post();
			$product_info['seller_id'] = $seller_id;
			$this->auction->create_product($product_info);
		}

		public function product_details($product_id) {
			// Load the model and call the get function
			$this->load->model('auction');
			// $product_information is an array of product details
			$product_information = $this->auction->product_detail($product_id);
		}


}

?>
