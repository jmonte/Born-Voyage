<style type="text/css">

* {
	font-family:Helvetica , Arial, sans-serif;	
}

#modal-header {
	height:100px;
	background-color:#F0F0F0;	
}

#modal-content p {
	font-size:18px;
	text-align:center;
	color:#85858B;
	margin-top:35px;
	font-weight:lighter;
}

#modal-content input {
	width:290px;
	font-size:22px;	
	background-color:#EEEEEE;
	border: #CACACA solid 1px;
	padding:5px;
	color:#CCCCCC;
	margin-top:10px;
	margin-left:10px;
}

#modal-content input[type=submit] {
	background: url("<?php echo image_asset_url("gradient-sprites.png"); ?>") repeat-x scroll 0 0px transparent;	
	text-align:left;
	width:150px;
	font-size:14px;
	color:#FFFFFF;
	border:#D87114 solid 1px;
	margin-top:10px;
}

div#modal-left {
	float:left;
	width:330px;
}

</style>


<div id="modal-content">
	<div id="modal-left">

        <form action="<?php echo site_url('user/register'); ?>" method="post">
            
            <input type="text" name="email" placeholder="email@address.com" /><br/>
            <input type="password" name="password" placeholder="password" />
           <br/>
            <input type="submit" value="Login" />
        </form>
        
    </div>
</div>