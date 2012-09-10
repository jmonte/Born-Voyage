<?php

	class User extends CI_Controller {
		
		function register() {
			
			if( count($this->input->post()) > 1 ) {
				
				// validate email
				
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				
				$password = md5( $password ) ;
				
				// add in the database
				
				$data = array(
					MODEL_USER_EMAIL => $email,
					MODEL_USER_PASSWORD => $password
				);
				
				$this->load->database();
				$this->load->model('UserModel');
				$this->UserModel->insert($data);
				
				// add session
				// send email
				
				
				$this->load->library('email');

				$this->email->from('admin@dealsite.com', '<Company> Deal Site');
				$this->email->to($email);

				$this->email->subject('Thank you for Registering!');
				$this->email->message('You are now registered in <Company> Deal Site.');
				
				$this->email->send();
				
				
				
				
				//echo $this->email->print_debugger();
				
				// reply with a status
				
			} else {
					
			}
			
		}
		
		function facebookInfo() {
			$this->load->library('session');
			$this->load->database();
			$this->load->model('FacebookModel');
			$fb_data = $this->session->userdata('fb_data'); // This array contains all the user FB information
			echo json_encode($fb_data);	
		}
		
		
	}


?>