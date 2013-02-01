<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>iJet</title>	
	<!--[if lt IE 9]>
   <style type="text/css">
   	.screen {
      	background-image:none!important;
      }
   </style>
   <![endif]-->
	<!--[if IE 8]>
   <style type="text/css">
   	.screen {
      	background-image:none!important;
      }
   </style>
   <![endif]-->
	
    <style type="text/css">
		/* style used for preview page only */
		html {
			height:100%;
			background:#fff;
			background:-moz-linear-gradient(top, #FFF 0%, #CCC 100%);
			background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFF), color-stop(100%,#CCC));
    	}
    	body {
			width:100%;
			height:100%;
			margin:0;
		}
		h1 {
			font-size:15px;
			font-weight:normal;
			color:#B5FF00;
			margin:0;
		}
		.container{
			position:absolute;
			width:888px;
			height:611px;
		}
    </style>
    <link rel="stylesheet" type="text/css" href="wt-rotator.css"/>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.wt-rotator.min.js"></script>
	<script type="text/javascript">
    	$(document).ready(	
			function() {
				$(".container").wtRotator({
					width:888,
					height:600,
					thumb_width:150,
            		thumb_height:26,
					button_width:26,
					button_height:25,
					button_margin:0,
					auto_start:true,
					delay:3000,
					play_once:false,
					transition:"fade",
					transition_speed:200,
					auto_center:true,
					easing:"",
					cpanel_position:"outside",
					cpanel_align:"TL",
					timer_align:"top",
					display_thumbs:true,
					display_dbuttons:true,
					display_playbutton:true,
					display_thumbimg:false,
           			display_side_buttons:false,
					display_numbers:true,
					display_timer:true,
					mouseover_select:false,
					mouseover_pause:false,
					cpanel_mouseover:false,
					text_mouseover:false,
					text_effect:"fade",
					text_sync:true,
					tooltip_type:"text",
					shuffle:false,
					block_size:75,
					vert_size:55,
					horz_size:50,
					block_delay:25,
					vstripe_delay:75,
					hstripe_delay:180			
				});
			}
		);
    </script>   
    <script type="text/javascript"> /* <![CDATA[ */ if(window.devicePixelRatio){ document.write('<link rel="stylesheet" href="safari.css" type="text/css">'); } /* ]]> */ </script>
     
   
     
     
</head>
<body> 
<div class="container">
	<div class="wt-rotator">
    	<div class="screen">
            
      	</div>
        <div class="c-panel">
           
      		<div class="thumbnails">
                <ul>
                    <li>
                    	<a href="images/01.jpg"><img src=""/></a>
                    </li>
                    <li>
                        <a href="images/02.jpg"><img src=""/></a>
                    </li>
           	  		<li>
                        <a href="images/03.jpg"><img src=""/></a>                             
                    </li>
              		<li>
                        <a href="images/04.jpg"><img src=""/></a>                                              	
                    </li>
              		<li>
                        <a href="images/05.jpg"><img src=""/></a>                                                      	                   
                  	</li>
           	     
              	</ul>
          	</div><!-- #thumbnails -->   
  			<div class="buttons">
            	<div class="prev-btn"></div>
                <div class="play-btn"></div>    
            	<div class="next-btn"></div>               
        </div><!-- #buttions -->
        </div><!-- #c-panel -->
    </div><!-- #wt-rotator -->	
</div><!-- #container -->

<div style="display:none;">
   <img src="assets/pause.png" width="" height="" border="0" alt="" />
   <img src="assets/pause_over.png" width="" height="" border="0" alt="" />
   <img src="assets/prev_over.png" width="" height="" border="0" alt="" />
   <img src="assets/next_over.png" width="" height="" border="0" alt="" />
   <img src="assets/play_over.png" width="" height="" border="0" alt="" />
</div>

</body>
</html>
