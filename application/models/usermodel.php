<?php

class UserModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function insert( $arr = array() ) {
		$this->db->insert('users' , $arr);
	}
	
	function update( $id = 0 , $arr = array() ) {
		
	}
	
	function delete( $id = 0 ) {
		
	}
	
	function display( $page = 0 , $limit = 0 ) {
		
	}
	
	function get ( $id = 0 ) {
		
	}
	
	function logAction( $id = 0 , $log = ""  ) {
		
	}
}