<?php

class API  extends CI_Controller {
	
	
	/* deal calls */
	
	function addDeal() {
		$this->_verifyUser();	
		
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$save = $this->input->post('save');
		$shortDescription = $this->input->post('shortDescription');
		$purchased = $this->input->post('purchased');
		$highlights = $this->input->post('highlights');
		$location = $this->input->post('location');
		$about = $this->input->post('about');
		$details = $this->input->post('details');
		$dateAdded = $this->input->post('dateAdded');
		$dateEnd = $this->input->post('dateEnd');
		$latitude = $this->input->post('latitude');
		$longitude = $this->input->post('longitude');
		
		
		$name = "test";
		$dateAdded = time();
		$dateEnd = time();
		
		// validation code here
		
		$data = array(
			MODEL_DEAL_NAME => $name , 
			MODEL_DEAL_PRICE => $price,
			MODEL_DEAL_SAVE => $save,
			MODEL_DEAL_SHORTDESCRIPTION => $shortDescription,
			MODEL_DEAL_PURCHASED => $purchased, 
			MODEL_DEAL_HIGHLIGHTS => $highlights,
			MODEL_DEAL_LOCATION => $location,
			MODEL_DEAL_ABOUT => $about,
			MODEL_DEAL_DETAILS => $details,
			MODEL_DEAL_DATEADDED => $dateAdded,
			MODEL_DEAL_DEALEND => $dateEnd,
			MODEL_DEAL_LATITUDE=> $latitude,
			MODEL_DEAL_LONGITUDE => $longitude
		);
		
		$this->load->database();
		$this->load->model('DealModel');
		$this->DealModel->insert($data);
		
		
	}
	
	function deleteDeal() {
		_verifyUser();
	}
	
	function editDeal() {
		_verifyUser();	
	}
	
	function login() {
		
	}
	
	function logout() {
		
	}
	
	function changePassword() {
		
	}
	
	
	/* deal calls */
	
	
	
	function _verifyUser() {
		
	}
	
	


}
