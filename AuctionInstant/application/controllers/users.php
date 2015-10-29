<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class users extends CI_Controller {

		public function __construct()
		{
			parent:: __construct();
			// $this->output->enable_profiler(TRUE);
			$this->load->model("user");
		}

		public function index() {
			if($this->session->userdata('logged_in') == true &&
			$this->session->userdata['stripe_id'] != null )
			{
				$this->load->view('auction');
			}
			else if($this->session->userdata('logged_in') == true)
			{
				$this->load->view('stripe_registration');
			}
			else {
				$this->load->view('login');
			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect("/");
		}

		public function login()
		{
			$result = $this->user->validate_login($this->input->post());

		    if($result == "valid")
		    {
		    	$user_info = ['user_info'=>$this->user->get_user_by_email($this->input->post("email"))];
		    	$this->session->set_userdata('id', $user_info['user_info']['id']);
		    	$this->session->set_userdata('logged_in', true);
		    	$this->session->set_userdata('email', $user_info['user_info']['email']);
					$this->session->set_userdata('stripe_id', $user_info['user_info']['stripe_id']);
		    	redirect("/");
		    }
			else
			{
		    	$errors = array(validation_errors());
		    	$this->session->set_flashdata('errors', $errors);
		    	redirect("/");
		    }
		}

		public function register()
		{
		    $result = $this->user->validate_registration($this->input->post());

		    if($result == "valid")
		    {
				$first_name = $this->input->post("first_name");
				$last_name = $this->input->post("last_name");
				$email = $this->input->post("email");
				$password = md5($this->input->post("password"));

				$user_info = ["first_name"=>$first_name, "last_name"=>$last_name, "email"=>$email, "password"=>$password];

				$this->user->add_user($user_info);
				$user_info = ['user_info' =>$this->user->get_user_by_email($this->input->post("email"))];
				$this->session->set_userdata('logged_in', true);
				$this->session->set_userdata('id', $user_info['user_info']['id']);
				$this->session->set_userdata('email', $user_info['user_info']['email']);
				$this->session->set_userdata('stripe_id', null);
			  $this->load->view('stripe_registration');
		    }
		    else{
		    	$errors = array(validation_errors());
		    	$this->session->set_flashdata('errors', $errors);
		    	redirect("/");
		    }
		}

		function check_database($email)
		{
		    $email = $this->input->post('email');
		    $password = md5($this->input->post('password'));

		    $result = $this->user->login($email, $password);

		    if($result)
		    {
		    	return TRUE;
		    }
		    else
		    {
		    	$this->form_validation->set_message('check_database', 'Invalid username or password');
		    	return false;
		    }
		}

		public function all_products(){
			// We'll need to load the user products model, and get all
			// products where the buyer id is equal to our session id.
			$this->load->library('session');
			$this->session->set_userdata('id', 9);
			$this->load->model('user');
			$winner_id = $this->session->userdata('id');
			$won_products = $this->user->purchased_product($winner_id);
			// After we've assembled the purcahsed products,
			// we'll want to find all products where the seller id
			// is equal to our current user's id
			$seller_id = $winner_id;
			$sold_products = $this->user->sold_product($seller_id);

			// We're going to pass both of these arrays in a shield array
			$shield = array(
				'won_products' => $won_products,
				'sold_products'   => $sold_products
			);

			$this->load->view('test', $shield);
		}

		public function faq(){
			$this->load->view('faq');
		}
	}

?>
