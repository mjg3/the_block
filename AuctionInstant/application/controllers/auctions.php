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
	}

?>
