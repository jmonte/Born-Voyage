<!DOCTYPE html>
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <script src="<?php echo js_asset_url('jquery.js'); ?>" type="text/javascript"></script>
     <script src="<?php echo js_asset_url('thickbox.js'); ?>" type="text/javascript"></script>
     <link type="text/css" href="<?php echo css_asset_url('thickbox.css'); ?>" rel="stylesheet" />
     <title>Born Voyage - Your Boarding Pass To Sweet Travel Deals</title>
     <script type="text/javascript">
     $(document).ready(function() {
          $("#triquibackimg").load(function(){
               var doc_width = $(document).width();
               var doc_height = $(document).height();
               var image_width = $(this).width();
               var image_height = $(this).height();
               var image_ratio = image_width/image_height;    
               var new_width = doc_width;
               var new_height = Math.round(new_width/image_ratio);
               $(this).width(new_width);
               $(this).height(new_height);
               if(new_height<doc_height){
                    new_height = doc_height;
                    new_width = Math.round(new_height*image_ratio);
                    $(this).width(new_width);
                    $(this).height(new_height);
                    var width_offset = Math.round((new_width-doc_width)/2);
                    $(this).css("left","-"+width_offset+"px");
               }
          })
		  
       tb_show("Announcement","<?php echo site_url('page/view/modal'); ?>?height=280&width=600&modal=true", "");
     });
     </script>
     <style type="text/css">
          #triquiback{
               left: 0;
               top: 0;
               position:fixed;
               overflow:hidden;
               zIndex: -9999
          }
          #triquibackimg{
               position:fixed
          }
     </style>
</head>
<body>
     <div id="triquiback">
          <img id="triquibackimg" src="<?php echo image_asset_url('l'.rand(1,6).'.jpg'); ?>" />
     </div>
     
  
     
</body>
</html>