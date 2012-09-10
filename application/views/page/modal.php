<style type="text/css">

* {
	font-family: Arial, sans-serif;	
}

#modal-header {
	height:50px;
	background-color:#000;	
	-webkit-border-top-left-radius: 10px;
	-webkit-border-top-right-radius: 10px;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-topright: 10px;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	border:#000 solid 1px;
}

#modal-content {
	border-top:none;
	
}

#TB_window {
	    box-shadow: 12px 10px 8px rgba(0, 0, 0, 0.53);
    -moz-box-shadow: 12px 10px 8px rgba(0, 0, 0, 0.53);
    -webkit-box-shadow: 12px 10px 8px rgba(0, 0, 0, 0.53);
}

.label-field {
	font-size:10px;
	color:#666;	
}

.class-field {
	font-size:15px;
	font-weight:bold;
	font-family:Helvetica, sans-serif;	
}


#modal-left {
	float:left;
	width:360px;	
	padding:10px 20px;
	padding-bottom:0px;
}

#modal-right {
	width:190px;
	float:right;
}

#modal-content input[type=submit] {
	background: url("<?php echo image_asset_url("gradient-sprites.png"); ?>") repeat-x scroll 0 0px transparent;	
	text-align:left;
	font-size:14px;
	color:#FFFFFF;
	border:#D87114 solid 1px;
	margin-top:10px;
	padding:5px;
	font-family: Helvetica,Arial, sans-serif;
}

.class-field {
	height:15px;
	border-bottom:#000000 solid 1px;	
}

#separator {
	width:2px;	
	border-left:#666 dashed 1px;
	height:280px;
	float:right;
	margin-right:200px;
	position:absolute;
	right:0;
}

#boardingPass {
	color:#FFF;
	font-size:20px;	
	font-family:Helvetica,Arial,  sans-serif;
	float:left;
	font-weight:bold;
	margin-top:18px;
	margin-left:10px;
}

#processBoardingPass , #take-flight {
	bottom: 0;
    left: 0;
    margin-bottom: 10px;
    margin-left: 20px;
    position: absolute;
}

#take-flight {
	color:#EF7430;	
	font-size:14px;
	font-weight:bold;
	margin-left:10px;
}

#boarding-time {
	border-bottom:none;
	font-size:12px;
}

</style>



<div id="modal-content">

	<div id="separator"></div>

    <div id="modal-header">
    	<div id="boardingPass">BOARDING PASS</div>
    
    	<img src="<?php echo image_asset_url('logo.jpg'); ?>" width="150" style="float:left;margin-top:0px;margin-left:70px;margin-top:9px;"  />
    	
        <img src="http://3.bp.blogspot.com/-Eg7lzhPZQ1I/TgNgeTYoUFI/AAAAAAAAADs/2K97p6mVc3o/s1600/default-profile-picture.gif" id="profile-pix" style="float:right;margin-right:15px;margin-top:5px;" width="40"  />
        
    </div>
	<div id="modal-left">
    	<div style="width:100px;float:left;">
            <div class="label-field">Class</div>
            <div class="class-field" style="width:100px;">FIRST CLASS</div>
        </div>
        
        <div style="width:50px;float:right;margin-top:5px;">
            <div class="label-field">SEAT NO:</div>
            <?php $char = "ABCDEF"; ?>
            <div class="class-field" style="width:20px" id="seat-no"><?php echo rand(1,5) ?><?php echo $char[rand(0,5)] ?></div>
        </div>
        <div style="clear:both"></div>
        
        <div style="width:150px;float:left;margin-top:10px;">
            <div class="label-field">First Name</div>
            <div class="class-field" id="first-name"></div>
        </div>
        <div style="width:150px;float:left;margin-top:10px;margin-left:5px;">
            <div class="label-field">Last Name</div>
            <div class="class-field" id="last-name"></div>
        </div>
       <!-- <img src="http://www.crabplace.com/images/facebook-profile-default.gif" id="profile-pix" width="50" style="margin-bottom:10px;float:right;" />
    -->
        <div style="clear:both"></div>
        
        <div style="width:200px;float:left;margin-top:3px;">
            <div class="label-field">Email</div>
            <div class="class-field" id="email"></div>
        </div>
        <div style="width:90px;float:left;margin-top:3px;margin-left:16px;">
            <div class="label-field">Location</div>
            <div class="class-field" id="current-city">SINGAPORE</div>
        </div> 
        <div style="clear:both"></div>
        
        <div style="width:200px;float:left;margin-top:5px;">
            <div class="label-field">Boarding Time:</div>
            <div class="class-field" id="boarding-time">&#9654; 12:00AM MON June 4</div>
        </div> 
        
        
        <img src="<?php echo image_asset_url('barcode.jpg'); ?>" style="float:right" width="120" />
        
        
        <div id="processBoardingPass" style="font-size:11px;font-weight:bold;"><img src="<?php echo image_asset_url('ajax-loader.gif'); ?>" style="margin-right:5px;"  />Processing Your Boarding Pass</div>
        
        <div id="take-flight">Thank you For Registering!</div>
        
        <!--<input type="submit" value="Take Flight!" style="position:absolute;bottom:0;margin-bottom:10px;" id="take-flight" />
        -->
         <div onlogin="populateForm();" class="fb-login-button" data-show-faces="false" data-width="100" data-max-rows="1" data-scope="user_likes , user_birthday, email , user_hometown,user_location, user_relationships, user_work_history, user_checkins,user_likes" style="left:0;margin-left:20px;position:absolute;bottom:0;margin-bottom:10px;" onclick="processing();"></div>
    	
        <div style="clear:both"></div>
        <div id="privacy" style="float:right;font-size:9px;width:150px;line-height:10px;margin-top:-5px;text-align:right;">By registering, you agree to be bound by our <a target="_blank" href="<?php echo site_url('page/view/terms'); ?>">terms and conditions</a></div>
        
    </div>
  
        
    <div id="modal-right">
   	 <div style="float:left;text-align:left;margin-top:10px;">
            <div class="label-field">Why Join Born Voyage?</div>
            <div class="class-field" style="border-bottom:0px;font-weight:normal;height:auto;font-size:11px;font-weight:bold;">
            <ul style="list-style-position:outside;margin-left:10px;">
           <li>Free Membership</li>
           <li>We offer up to 60% off Theme Holidays (almost Everything!)</li>
			<li>
We have included activities that will interest you, and our Born Voyage team has tested and approved
            </li>
            </ul>
            </div>
        </div>
        <div style="clear:both"></div>
        <div style="border-bottom:#000 solid 1px;height:3px;width:180px;margin-left:-5px;border-left:#000 solid 1px;"></div>
     	<div style="float:left;text-align:left;margin-top:10px;">
            <div class="label-field">Why is this possible?</div>
            <div class="class-field" style="border-bottom:0px;font-weight:normal;height:auto;font-size:11px;font-weight:bold;">
            <ul style="list-style-position:outside;margin-left:10px;">
           <li>We are working direct with <br/> hotels, operators and others</li>
           
            </ul>
            </div>
        </div>
         <div style="clear:both"></div>
        <div style="border-bottom:#000 solid 1px;height:3px;width:180px;margin-left:-5px;border-left:#000 solid 1px;">
   	</div>
    
</div>


<script type="text/javascript">

function populateForm() {
	$.ajax({
  url: '<?php echo site_url('user/facebookInfo'); ?>',
  success: function(data) {
	  $('#processBoardingPass').hide();

    var object = $.parseJSON(data);
	//alert(data);
	
	$('#first-name').html(object.me.first_name);
	$('#last-name').html(object.me.last_name);
	$('#email').html(object.me.email);
	if( typeof object.me['username'] != 'undefined'  ) {
		$('#profile-pix').attr('src' , 'https://graph.facebook.com/'+object.me.username+'/picture');
	} else {
		$('#profile-pix').attr('src' , 'https://graph.facebook.com/'+object.me.id+'/picture');
	}
	$('.fb-login-button').fadeOut();
	$('#take-flight').show();
  }
});
}

function processing() {
	$('.fb-login-button').fadeOut();
	$('#processBoardingPass').show();	
}

$('#take-flight').hide();
$('#processBoardingPass').hide();

</script>




<div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '<?php echo FB_APP_ID; ?>', // App ID
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
      });
    };

    // Load the SDK Asynchronously
    (function(d){
      var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
      js = d.createElement('script'); js.id = id; js.async = true;
      js.src = "//connect.facebook.net/en_US/all.js";
      d.getElementsByTagName('head')[0].appendChild(js);
    }(document));
  </script>
