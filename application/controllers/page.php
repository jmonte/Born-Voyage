<?php

class Page extends CI_Controller {

	public function index() {
		
		/*
		echo '<pre>';
		$this->load->library('session');
		$this->load->database();
		$this->load->model('FacebookModel');
		$this->FacebookModel->update();
		$fb_data = $this->session->userdata('fb_data'); // This array contains all the user FB information
	*/
	
		
		$this->load->helper('asset');
		$data['css'] = array(
			'main',
			'page_index',
			'jcarousel',
			'thickbox'
		);
		$data['js'] = array(
			'jquery',
			'thickbox',
			'jcarousel'
		);
		
		
		$this->load->library('session');
		$this->load->database();
		$this->load->model('FacebookModel');
		$fb_data = $this->session->userdata('fb_data'); // This array contains all the user FB information

		if((!$fb_data['uid']) or (!$fb_data['me'])) { }
		else {
			
			$data['fb_data'] = $fb_data;
		}
		
		$this->load->view('page/index_header' , $data);
		
		// compatibility algorithm
		
		// list of compatible deals
		$data['deals'] = array(
		
		);
		
		
		
		$this->load->view('page/index' , $data);
		$this->load->view('footer');
		
	}

	public function view($page = 'home') {
		
		$this->load->helper('asset');
		/*
		$this->load->library('session');
		$this->load->database();
		$this->load->model('FacebookModel');
		$fb_data = $this->session->userdata('fb_data'); // This array contains all the user FB information

		if((!$fb_data['uid']) or (!$fb_data['me'])) { }
		else {
			
			$data['fb_data'] = $fb_data;
		}
		*/
		
		$this->load->view('page/'.$page);
	}
	
	
	function compatibleDeal() {
	/*$this->load->database();
		$this->load->model('DealModel');
		$deals = $this->DealModel->getAllActiveDeals();
		
		$finalTags = array();
		
		foreach($deals as $deal) {
			echo $deal['tags'];
			$tags = split(',',$deal['tags']);
			foreach($tags as $t) {
				$finalTags[] = strtolower(trim($t));
			}
		}
		
		$f = array_unique($finalTags);
		
		foreach($f as $p ) {
			echo $p. '<br/>';	
		}
		
		die();
		*/
		$facebook_id = 1450163793;	
		
		$user = array(
			'relationshipStatus' => 'single',
			'gender'	=> 'male',
			'currentLocation'	=> 'Singapore',
			'birthday'	=> '581299200'
		);
		
		
		// get all active deals
		$this->load->database();
		$this->load->model('DealModel');
		$deals = $this->DealModel->getAllActiveDeals();
	
		$this->load->model('CompatibilityModel');
	
		$deal_score = array();
	
		foreach( $deals as $deal ) {
			$deal_score[$deal['name']] = 0;
			$deal_score[$deal['name']] += $this->CompatibilityModel->getScore( $deal['relationshipStatus'] , $user['relationshipStatus'] );
			$deal_score[$deal['name']] += $this->CompatibilityModel->getScore( $deal['gender'] , $user['gender'] );
			$deal_score[$deal['name']] += $this->CompatibilityModel->getScore( $deal['recommendedLocation'] , $user['currentLocation'] );
			
			$diff = $deal['eventDate'] - $user['birthday'];
			$years = floor($diff / (365*60*60*24));
			$months = 12 - floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
			if( $months <=2 ) {
				$deal_score[$deal['name']] += 20;
			}
			
			
			
			
		}
		
		echo '<pre>';
		
		arsort($deal_score);

		print_r($deal_score);
	
		
				
		// deal is appropriate for birthday celebration and birthday is max 2 months from the deal
				// - 20 points
				
		// compare all the likes from facebook , from the tags of the deal
				// score vary
				
		
		// sort the deals based on score
			// top 5 deals wins
			// if equal - based on how much is purchased or the newest will be the priority
	
		
		
	}
	
}