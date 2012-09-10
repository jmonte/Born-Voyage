<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Born Voyage - Your Boarding Pass to Sweet Travel Deals</title>

<?php foreach( $css as $cs ):?>
	<link type="text/css" rel="stylesheet" href="<?php echo css_asset_url($cs.'.css'); ?>" />
<?php endforeach; ?>

<?php foreach( $js as $j ):?>
	<script type="text/javascript" src="<?php echo js_asset_url($j.'.js'); ?>"></script>
<?php endforeach; ?>

<script type="text/javascript">
	var mainDealCarousels =
	'{"deals": [{"title":"New York","link":"link","saving":"30"},{"title":"Domincan Republic","link":"link","saving":"35"},{"title":"Paris","link":"link","saving":"40"},{"title":"Rome","link":"link","saving":"45"},{"title":"Chicago","link":"link","saving":"50"}]}';
</script>
<script type="text/javascript" src="<?php echo js_asset_url('page_index_main.js'); ?>"></script>

</head>

<body>

<div id="header-wrapper" class="wrapper">
	<div id="header">
    	<a href="#"><img id="logo" src="<?php echo image_asset_url('logo.jpg'); ?>" width="201"  /></a>
        
        <div id="user-control">
        	<ul>
            <?php if( isset($fb_data) ): ?>
                      <?php if(!$fb_data['me']): ?>
            	<li><a class="thickbox" title="Login" href="<?php echo site_url('page/view/login'); ?>?height=150&width=330">Login</a></li>
            	<li><a href="#">Sign Up</a></li>
                
                <?php endif; ?>
                <?php else: ?>
                <li><a class="thickbox" title="Login" href="<?php echo site_url('page/view/login'); ?>?height=150&width=330">Login</a></li>
            	<li><a href="#">Sign Up</a></li>
 
            <?php endif; ?>
                
                <script type="text/javascript">
				function fbLogin() {
window.location.reload();
}
				</script>
                
                      <?php if( isset($fb_data) ): ?>
                      <?php if(!$fb_data['me']): ?>
                      <li class="no-border" style="padding-right:0px;width:130px;"><!--<div class="fb-login-button">Login with Facebook</div> -->
                
                      <div onlogin="fbLogin();" class="fb-login-button" data-show-faces="false" data-width="100" data-max-rows="1" data-scope="user_likes , user_birthday, email , user_hometown,user_location, user_relationships, user_work_history, user_checkins,user_likes" next="http://localhost/"></div>
                      </li>
					  
					  <?php else: ?>
                      <li class="no-border" style="padding-right:0px;width:250px;"><!--<div class="fb-login-button">Login with Facebook</div> -->
                
                      
                     
                      	<img src="https://graph.facebook.com/<?php echo $fb_data['me']['username'] ?>/picture" width="30" style="float:right;margin-left:10px;" />
                         <span style="float: right;line-height: 30px;">
                      	<?php echo $fb_data['me']['name']; ?>
                      </span>
                      <div style="clear:both"></div>
                        <span style="font-size:10px;float:right;margin-top:0px;text-decoration:underline;color:#666;"><a href="<?php echo $fb_data['logoutUrl'] ?>">logout</a></span>
                        </li>
                      <?php endif; ?>
						<?php else: ?>
                        <li class="no-border" style="padding-right:0px;width:80px;"><!--<div class="fb-login-button">Login with Facebook</div> -->
                        <div onlogin="fbLogin();" class="fb-login-button" data-show-faces="false" data-width="100" data-max-rows="1" data-scope="user_likes , user_birthday, email , user_hometown,user_location, user_relationships, user_work_history, user_checkins,user_likes" next="http://localhost/"></div>
                        </li>
                        <?php endif; ?>
                
 
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