<?php

class CompatibilityModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function getScore($var1 , $var2) {
		
		$var1 = strtolower($var1);
		$var2 = strtolower($var2);
		$query = $this->db->query("SELECT score FROM compatibilities WHERE (var1='{$var1}' && var2='{$var2}') OR (var1='{$var2}' && var2='{$var1}') LIMIT 1");
		if( $query->num_rows() > 0 ) {			
			$s = $query->row_array();
			return $s['score'];
		} else {
			return 0;	
		}
	}
	
}