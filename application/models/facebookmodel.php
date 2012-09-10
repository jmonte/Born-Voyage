<?php

/*
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */


class FacebookModel extends CI_Model {

    public function __construct(){
        parent::__construct();

        $profile = null;
		
		$fb_data = $this->session->userdata('fb_data');
		
		// if( !isset($fb_data) ) {
		
			// Create our Application instance (replace this with your appId and secret).
			$config = array(
						'appId'  => FB_APP_ID,
						'secret' => FB_APP_SECRET,
							'fileUpload' => true, // Indicates if the CURL based @ syntax for file uploads is enabled.
						);
	
			echo $this->load->library('Facebook', $config);
	
			// Get User ID
			$user = $this->facebook->getUser();
	
			// We may or may not have this data based on whether the user is logged in.
			//
			// If we have a $user id here, it means we know the user is logged into
			// Facebook, but we don't know if the access token is valid. An access
			// token is invalid if the user logged out of Facebook.
	
			$profile = null;
			if($user)
			{
				try {
					// Proceed knowing you have a logged in user who's authenticated.
					$profile = $this->facebook->api('/me?fields=id,name,link,email,username,first_name,last_name');
					
					
					// check if profile exist
					
					$sql = "SELECT * FROM facebook_users WHERE facebookId = ?";
					$result = $this->db->query($sql, array((int)$profile['id']));
					if($result->num_rows() == 0 ) {
						$this->insert();
					} 
				} catch (FacebookApiException $e) {
					error_log($e);
					$user = null;
				}
			}
			
			
			
			$fb_data = array(
							'me' => $profile,
							'uid' => $user,
							'loginUrl' => $this->facebook->getLoginUrl(
								array(
									'scope' => 'email,user_birthday,publish_stream,username', // app permissions
									'redirect_uri' => '/profile' // URL where you want to redirect your users after a successful login
								)
							),
							'logoutUrl' => $this->facebook->getLogoutUrl(),
						);
	
			 $this->session->set_userdata('fb_data', $fb_data);

		// } 
    }
	
	
	function update() {
		$profile = null;
        // Create our Application instance (replace this with your appId and secret).
        $config = array(
	  				'appId'  => FB_APP_ID,
		  			'secret' => FB_APP_SECRET,
                        'fileUpload' => true, // Indicates if the CURL based @ syntax for file uploads is enabled.
                    );

        echo $this->load->library('Facebook', $config);

        // Get User ID
        $user = $this->facebook->getUser();

   
        $profile = null;
        if($user)
        {
            try {
                // Proceed knowing you have a logged in user who's authenticated.
                $profile = $this->facebook->api('/me?fields=id,name,link,email,username,birthday,username,location,relationship_status,first_name,middle_name,last_name,gender,languages,verified,birthday,significant_other,work,checkins,likes');
			
            } catch (FacebookApiException $e) {
                error_log($e);
                $user = null;
            }
        }
	}
	
	
	function isNeedUpdate($facebook_id) {
		
		return false;
	}
	
	
	function insert() {
		$profile = null;
        // Create our Application instance (replace this with your appId and secret).
        $config = array(
	  				'appId'  => FB_APP_ID,
		  			'secret' => FB_APP_SECRET,
                        'fileUpload' => true, // Indicates if the CURL based @ syntax for file uploads is enabled.
                    );

        echo $this->load->library('Facebook', $config);

        // Get User ID
        $user = $this->facebook->getUser();

        // We may or may not have this data based on whether the user is logged in.
        //
        // If we have a $user id here, it means we know the user is logged into
        // Facebook, but we don't know if the access token is valid. An access
        // token is invalid if the user logged out of Facebook.

        $profile = null;
        if($user)
        {
            try {
                // Proceed knowing you have a logged in user who's authenticated.
                $profile = $this->facebook->api('/me?fields=id,name,link,email,username,birthday,username,location,relationship_status,first_name,middle_name,last_name,gender,languages,verified,birthday,significant_other,work,checkins,likes');
				
				
				
				$likesPercent = "";
				
				if(isset($profile['likes']) ){
				$likes = $profile['likes']['data'];
		
	
				
				$max = count($likes);
				
				
				$percent = array();
				
				foreach($likes as $l) {
					
					
					if( !isset($percent[$l['category']]) ) {
						$percent[$l['category']] = 1;	
					} else {
						$percent[$l['category']] ++;	
					}
				}
				
				
				$per = array();
				
				foreach( $percent as $k => $p ) {
					$per[$k] = (int) ( $p / $max * 100) + "%";
				}
				arsort($per);
		
				unset($per['Application']);
				unset($per['Applications']);
				unset($per['App']);
				
				$fin = array_slice($per,0,10);
				
				
				foreach($fin as $k=>$p ) {
					$likesPercent .= $k.'->'.$p. '|';	
				}
				
				
				}
				
				$location = "";
				if( isset($profile['location'] ) ){
				$locations = $profile['location'];
				$location = $locations['name'];
				}
				
				
				
				$data = array(
					'facebookId' => $profile['id'],
					'name' => $profile['name'],
					'firstName' => $profile['first_name'],
					'lastName' => $profile['last_name'],
					'gender' => $profile['gender'],
					
					'verified'	=> $profile['verified'],
					
					'timeUpdated'	=> time(),
					'location'	=> $location,
					'likes'	=> $likesPercent
				);
				
				if( isset($profile['username']) ) {
					$data['username'] = $profile['username'];
				}
				if( isset($profile['relationship_status']) ) {
					$data['relationshipStatus'] = $profile['relationship_status'];
				}
				if( isset($profile['email']) ) {
					$data['email'] = $profile['email'];
				}
				if ( isset($profile['birthday']) ) {
					$data['birthday'] = strtotime($profile['birthday']);	
				}
				
				$this->db->insert('facebook_users' , $data);
				
				$data = array(
					'facebookId' => $this->db->insert_id(),
					'firstName' => $profile['first_name'],
					'lastName' => $profile['last_name'],
					'dateRegistered' => time(),
					'lastLogin' => time()
				
				);
				
				$this->db->insert('users' , $data);
				
				
				// insert code
				
				$CI =& get_instance();
				
				
				
				
            } catch (FacebookApiException $e) {
                error_log($e);
                $user = null;
            }
        }
	}
	
}

?>
