<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class auctions extends CI_Controller {

		public function index() {
			$this->load->view('auction');
		}
		// public function creates_product() {
		// 	// Assemble an array to pass to model
		// 	$this->load->model('auction');
		// 	// Retrieve the id of the user currently logged in
		// 	$seller_id = $this->session->userdata('id');
		// 	$product_info  = $this->info->post();
		// 	$product_info['seller_id'] = $seller_id;
		// 	$this->auction->create_product($product_info);
		// }
		//
		// public function product_details($product_id) {
		// 	// Load the model and call the get function
		// 	$this->load->model('auction');
		// 	// $product_information is an array of product details
		// 	$product_information = $this->auction->product_detail($product_id);
		// }

		public function update_bid(){
			$updated_price = $this->input->post('updated_price'); //updated price
			$product_id = $this->input->post('product_id');
			$bidder_id = $this->session->userdata('id');
			$this->load->model('auction');
			$time_end = $this->auction->get_time_end();
			$updated_time_end = $time_end['time_end']+30;
			$bid_info = array(
					'bidder_id'=>$bidder_id,
					'time_end'=>$time_end,
					'updated_price'=>$updated_price,
					'product_id'=>$product_id
			);
			$this->auction->update_bid($bid_info);
			redirect('/auctions');
		}
//duplicated?
		// public function register()
		// {
		//     $result = $this->user->validate_registration($this->input->post());
		//
		//     if($result == "valid")
		//     {
		// 		$first_name = $this->input->post("first_name");
		// 		$last_name = $this->input->post("last_name");
		// 		$email = $this->input->post("email");
		// 		$password = md5($this->input->post("password"));
		//
		// 		$user_info = ["first_name"=>$first_name, "last_name"=>$last_name, "email"=>$email, "password"=>$password];
		//
		// 		$this->user->add_user($user_info);
		// 		$user_info = ['user_info' =>$this->user->get_user_by_email($this->input->post("email"))];
		// 		$this->session->set_userdata('logged_in', true);
		// 		$this->session->set_userdata('user_id', $user_info['user_info']['user_id']);
		// 		$this->session->set_userdata('email', $user_info['user_info']['email']);
		//     	redirect('/');
		//     }
		//     else{
		//     	$errors = array(validation_errors());
		//     	$this->session->set_flashdata('errors', $errors);
		//     	redirect("/");
		//     }
		// }
		//
		// function check_database($email)
		// {
		//     $email = $this->input->post('email');
		//     $password = md5($this->input->post('password'));
		//
		//     $result = $this->user->login($email, $password);
		//
		//     if($result)
		//     {
		//     	return TRUE;
		//     }
		//     else
		//     {
		//     	$this->form_validation->set_message('check_database', 'Invalid username or password');
		//     	return false;
		//     }
		// }
	}

?>
