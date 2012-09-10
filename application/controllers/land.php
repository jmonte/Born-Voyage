<?php

	class Land extends CI_Controller {
		
		function index() {
			$this->load->helper('asset');
			$this->load->view('land/index.php');
		}
		
	}