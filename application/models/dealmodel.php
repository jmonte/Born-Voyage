<?php

class DealModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function insert( $arr = array() ) {
		$this->db->insert('deals' , $arr);
	}
	
	function update( $id = 0 , $arr = array() ) {
		
	}
	
	function delete( $id = 0 ) {
		
	}
	
	function display( $page = 0 , $limit = 0 ) {
		
	}
	
	function getAllActiveDeals() {
		$query = $this->db->query("SELECT id,name,relationshipStatus,gender,recommendedLocation,eventDate,isBirthday,tags FROM deals WHERE isActive=1");
		return $query->result_array();
	}
	
	function get ( $id = 0 ) {
		
	}
	
	function logAction( $id = 0 , $log = ""  ) {
		
	}
	
}