<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Auction extends CI_Model {

		public function __construct(){
			parent:: __construct();
		}

		//validate registration
		public function validate_registration($post)
		{
			$this->load->helper(array('form', 'url'));
		    $this->load->library('form_validation');
		    $this->form_validation->set_rules('first_name', 'First Name', 'trim|min_length[3]|alpha_dash|required|xss_clean');
		    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|min_length[3]|alpha_dash|required|xss_clean');
		    $this->form_validation->set_rules('email', 'Email', 'trim|is_unique[users.email]|valid_email|required');
		    $this->form_validation->set_rules('password', 'Password', 'trim|min_length[8]|matches[confirm_password]|required|md5');
		    if($this->form_validation->run())
		    {
		    	return "valid";
		    }
		    else
		    {
		    	return array(validation_errors());
		    }
		}

		//validate login form
		public function validate_login($login_info)
		{
			$this->load->helper(array('form', 'url'));
		    $this->load->library('form_validation');
		    $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|callback_check_database');
		    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		    if($this->form_validation->run())
		    {
		    	return "valid";
		    }
		    else
		    {
		    	return array(validation_errors());
		    }
		}

		//make sure user is unique and matches database before logging in
		public function login($email, $password)
		{
		    $this -> db -> select('email', 'password', 'id');
		    $this -> db -> from('users');
		    $this -> db -> where('email', $email);
		    $this -> db -> where('password', md5($password));
		    $this -> db -> limit(1);

		    $query = $this -> db -> get();

		    if($query -> num_rows() == 1)
		    {
		    	return $query->result();
		    }
		    else
		    {
		    	return false;
		    }
		}
	}

?>
