<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */



/* database names constant */

// Deals Table
define('MODEL_DEAL_NAME' , 'name');
define('MODEL_DEAL_PRICE' , 'price');
define('MODEL_DEAL_SAVE' , 'save');
define('MODEL_DEAL_SHORTDESCRIPTION' , 'shortDescription');
define('MODEL_DEAL_PURCHASED' , 'purchased');
define('MODEL_DEAL_HIGHLIGHTS' , 'highlights');
define('MODEL_DEAL_LOCATION' , 'location');
define('MODEL_DEAL_ABOUT' , 'about');
define('MODEL_DEAL_DETAILS' , 'details');
define('MODEL_DEAL_DATEADDED' , 'dateAdded');
define('MODEL_DEAL_DEALEND' , 'dealEnd');
define('MODEL_DEAL_LATITUDE' , 'latitude');
define('MODEL_DEAL_LONGITUDE' , 'longitude');


// Users Table
define('MODEL_USER_EMAIL' , 'email');
define('MODEL_USER_PASSWORD' , 'password');
define('MODEL_USER_DATEREGISTERED','dateRegistered');


if(  $_SERVER['HTTP_HOST']  == "www.bornvoyage.com" || $_SERVER['HTTP_HOST']  == "bornvoyage.com" ) {
	define('FB_APP_ID' , '239958989435494');
	define('FB_APP_SECRET', '2c250c0dc046e8b0d52ade42f2f177ad');
} else {
	define('FB_APP_ID' , '224015401038702');
	define('FB_APP_SECRET', 'f24f2a0d36a209aa68b757256b97d454');
}