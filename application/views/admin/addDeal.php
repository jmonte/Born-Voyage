<form method="post" action="<?php echo site_url("admin/addDeal"); ?>">
	
    <p>
        <label>Name:</label><br/>
        <input type="text" name="name" />
	</p>
    
    <p>
        <label>Price</label><br/>
        <input type="text" name="price" />
	</p>
    
    <p>
        <label>Savings:</label><br/>
    	<input type="text" name="save" />
    </p>
    
    <p>
        <label>Short Description:</label><br/>
    	<textarea name="shortDescription"></textarea>
    </p>
    <p>
        <label>Highlights:</label><br/>
    	<textarea name="highlights"></textarea>
    </p>
    <p>
        <label>Location:</label><br/>
    	<textarea name="location"></textarea>
    </p>
    <p>
        <label>About:</label><br/>
    	<textarea name="about"></textarea>
    </p>
 	<p>
        <label>Details:</label><br/>
    	<textarea name="details"></textarea>
	</p>
    
	<p>
        <label>Latitude:</label><br/>    
    	<input type="text" name="latitude" />
    </p>
    <p>
        <label>Longitude:</label><br/>
    	<input type="text" name="longitude" />
	</p>
    
    <input type="submit" value="Add" />

</form>