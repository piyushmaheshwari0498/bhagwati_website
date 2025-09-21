<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Website_manager extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			// $this->load->model('company/Company_model','company_model');
			// $this->config->load('extra');
			// $this->load->library('db_operations');
		}

		public function index()
	  	{
	  		$result['title'] = "Bhagwati ToyLand";
	    	$this->load->view('website/home', $result);
	  	}

	  	public function aboutus()
	  	{
	  		$result['title'] = "Bhagwati ToyLand";
	  		$result['subtitle'] = "About Us";
	    	$this->load->view('website/aboutus', $result);
	  	}
        
        // ============================
	}
?>
