<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

	<title>&middot; José Rodrigues &middot;</title>
	<meta name="description" content="Personal website, portfolio, vcard">
	<meta name="author" content="José Rodrigues">

	<link rel="stylesheet" href="source/lay.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="source/js/background.cycle.js"></script>
    <script type="text/javascript">
		$(document).ready(function() {
			$("body").backgroundCycle({
				imageUrls: [
					'http://7-themes.com/data_images/out/18/6830311-la-skyline.jpg',
					'http://p1.pichost.me/i/19/1423500.jpg',
					'http://genblock.com/wp-content/uploads/2015/05/night-city-wallpapers-hd-architecture-picture-city-wallpaper.jpg',
					'http://7-themes.com/data_images/out/32/6879569-city-background.jpg',
					'http://7-themes.com/data_images/out/5/6782642-cool-skyline-wallpaper.jpg',
					'https://wallpaperscraft.com/image/city_night_top_view_light_sky_47827_3840x2400.jpg',
					'http://www.siwallpaperhd.com/wp-content/uploads/2015/05/New-York-City-Skyline-Wallpaper-HD-11-Image.jpg',
					'http://www.magic4walls.com/wp-content/uploads/2013/12/colorful_night_city_skyline_1920x1080.jpg'
				],
				fadeSpeed: 2000,
				duration: 4000,
				backgroundSize: SCALING_MODE_COVER
			});
			
			// POPUP 1
			$("#popup1open").click(function(){
				$("#popup1").fadeIn();
			});
			$("#popup1close").click(function(){
				$("#popup1").fadeOut();
			});
			// PORTFOLIO
			$("#showportf").click(function(){
				$(".wrapper").fadeOut();
				$(".wrapper_portf").fadeIn();
			});
			$("#back2home").click(function(){
				$(".wrapper_portf").fadeOut();
				$(".wrapper").fadeIn();
			});		
			// CAPTIONS
			var move = -15;

			//On mouse over those thumbnail
			$('.zitem').hover(function() {		
				//Display the caption
				$(this).find('div.caption').stop(false,true).fadeIn(200);
			},
			function() {
				//Hide the caption
				$(this).find('div.caption').stop(false,true).fadeOut(200);
			});
		});
    </script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body oncontextmenu="return false;">		
	<?php
			$num=rand(1, 3);
			switch($num)
			{
				case 0: $y2b_link="https://www.youtube.com/embed/zyXmsVwZqX4?list=RDK4DyBUG242c&autoplay=1"; break;
				case 1: $y2b_link="https://www.youtube.com/embed/oWYp1xRPH5g?list=RDoWYp1xRPH5g&autoplay=1"; break;
				case 2: $y2b_link="https://www.youtube.com/embed/yQVxUICOCWA?autoplay=1"; break;
				case 3: $y2b_link="https://www.youtube.com/embed/UPftsIwGNoQ?autoplay=1";
			}
	?>
	<iframe width="2" height="0" src="<? echo $y2b_link; ?>" frameborder="0"></iframe>

	<div id="bg-pattern"></div>
	<div id="bg-darker"></div>
	
	<div id="all">
		<div class="wrapper">
			<div class="logo">
				JR
			</div>
			
			<div class="nav">
				<a href="javascript:void(0)" id="popup1open">ABOUT ME</a> | <a href="javascript:void(0)" id="showportf">PORTFOLIO</a>
			</div>
			
			<br />
			
			<div class="footer">
				<a href="<? echo $y2b_link; ?>" target="_blank">> Music Playlist <</a>
			</div>
		</div>
		
		<div class="wrapper_portf">
			<div class="logo_portf">
				JR
			</div>
			
			<div class="nav_portf">
				<a href="javascript:void(0)" id="back2home">GO BACK</a>
			</div>
			
			<div class="content_portf">
					<div class="zitem">
						<a href="http://pic-h.tk/i/GQVn24r.png" target="_blank"><img src="http://pic-h.tk/i/GQVn24r.png" width="125" height="125"/></a>
						<div class="caption">
							<a href="http://pic-h.tk/i/GQVn24r.png" target="_blank">NEWDESTINY eSports</a> Template + Webspell integration
						</div>
					</div>
			</div>
		</div>
		
		<div class="popup-container" id="popup1">
			<div class="popup-wrapper">
				<div class="popup-head">ABOUT ME</div>
				<div class="popup-content">
					<p>Hello! I'm José Rodrigues, I'm 19 and I'm from oporto, Portugal. I am an amateur web developer and I do not have any studies in this area. Any project is welcome to improve my knowledge, and it is always a challenge for me. If you like and are interested in my work contact me by one of the methods below, and do not forget to like my facebook page! :)</p>
					<p><b>Contacts:</b></p>
					<p>
						<b>Email:</b> josetxrodrigues@gmail.com 
							<br />
						<b>Facebook:</b> <a href="https://www.facebook.com/jrwebdev" target="_blank">https://www.facebook.com/jrwebdev</a>
							<br />
						<b>Steam:</b> <a href="http://steamcommunity.com/id/jrwebdev" target="_blank">http://steamcommunity.com/id/jrwebdev</a>
					</p>
				</div>
				<div class="popup-footer">
					<a href="javascript:void(0)" id="popup1close" class="button">
						CLOSE
					</a>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>