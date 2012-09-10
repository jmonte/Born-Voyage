<?php

class Deal extends CI_Controller {

	public function index() {
		$this->load->helper('asset');
		$data['css'] = array(
			'main',
			'jquery.ui.base',
			'jquery.ui.core',
			'jquery.ui.tabs',
			'deal_index'
		);
		$data['js'] = array(
			'jquery',
			'jcarousel',
			'jquery-ui',
			'deal_index_main'
		);
		
		
		$this->load->view('header' , $data);
		$this->load->view('deal/index');
		$this->load->view('footer');
	}

}