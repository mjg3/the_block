<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Auctions extends CI_Controller {

		public function __construct()
		{
			parent:: __construct();
			// $this->output->enable_profiler(TRUE);
			$this->load->model("Auction");
		}

		public function index() {
			if($this->session->userdata('logged_in') == true)
			{
				$this->load->view('auction');
			}
			else
			{
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
		    	$this->session->set_userdata('user_id', $user_info['user_info']['user_id']);
		    	$this->session->set_userdata('logged_in', true);
		    	$this->session->set_userdata('email', $user_info['user_info']['email']);
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
				$this->session->set_userdata('user_id', $user_info['user_info']['user_id']);
				$this->session->set_userdata('email', $user_info['user_info']['email']);
		    	redirect('/');
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
	}

?>
