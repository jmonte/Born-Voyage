<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<?php if( isset($css)): ?>
	<?php foreach( $css as $cs ):?>
        <link type="text/css" rel="stylesheet" href="<?php echo css_asset_url($cs.'.css'); ?>" />
    <?php endforeach; ?>
<?php endif; ?>
<?php if( isset($js)): ?>
	<?php foreach( $js as $j ):?>
        <script type="text/javascript" src="<?php echo js_asset_url($j.'.js'); ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
</head>

<body>

<div id="header-wrapper" class="wrapper">
	<div id="header">
    	<a href="#"><img id="logo" src="<?php echo image_asset_url('logo.jpg'); ?>" width="201" /></a>
        
        <div id="user-control">
        	<ul>
            	<li><a href="#">Login</a></li>
            	<li><a href="#">Sign Up</a></li>
                <li class="no-border" style="padding-right:0px;"><div class="fb-login-button">Login with Facebook</div></li>
            </ul>
        </div>
        <div class="clear"></div>
    	
        <div id="header-navigation">
        	<ul>
        		<li><a href="#">Companions</a></li>
        		<li><a href="#">Themes</a></li>
        		<li><a href="#">Destinations</a></li>
        	</ul>
        </div>
        
        <div id="header-search">
        	<form action="#" method="post">
                <input type="text" id="header-search-text"  name="search" placeholder="Search Destinations or Hotels" />
                <input type="image" src="<?php echo image_asset_url('search-button.jpg'); ?>" id="header-search-button" />
            </form>
        </div>
        
    	<div class="clear"></div>
    
    </div>
</div>