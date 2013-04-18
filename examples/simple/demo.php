<?php 
ob_start();
include_once("dbconnection.php");
$uid=uniqid();
$date=date("Y-m-d H-i-s");
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<title>My Thinking Cap</title>
<link href="style.css"rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../src/iscroll.js?v3.7.1"></script>
<script type="text/javascript">
var myScroll;
var a = 0;
function loaded() {
	setHeight();	// Set the wrapper height. Not strictly needed, see setHeight() function below.
	// Please note that the following is the only line needed by iScroll to work. Everything else here is to make this demo fancier.
	myScroll = new iScroll('scroller', {desktopCompatibility:true});
}
// Change wrapper height based on device orientation. Not strictly needed by iScroll, you may also use pure CSS techniques.
function setHeight() {
	var headerH = document.getElementById('header').offsetHeight,
		footerH = document.getElementById('footer').offsetHeight,
		wrapperH = window.innerHeight - headerH - footerH;
	document.getElementById('wrapper').style.height = wrapperH + 'px';
}
// Check screen size on orientation change
window.addEventListener('onorientationchange' in window ? 'orientationchange' : 'resize', setHeight, false);
// Prevent the whole screen to scroll when dragging elements outside of the scroller (ie:header/footer).
// If you want to use iScroll in a portion of the screen and still be able to use the native scrolling, do *not* preventDefault on touchmove.
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
// Load iScroll when DOM content is ready.
document.addEventListener('DOMContentLoaded', loaded, false);
</script>

<style type="text/css" media="all">
body,ul,li {
	padding:0;
	margin:0;
	border:0;
}

body {
	font-size:12px;
	-webkit-user-select:none;
    -webkit-text-size-adjust:none;
	font-family:helvetica;
/*	padding-bottom:44px;	/*	This prevents the scroller to lock if the user swipes down outside of the screen.
							 	NOT needed if in home screen mode and on Android. */
}

#header {
	width:100%;
	height:auto;
	min-height:50px;
	line-height:45px;
	background-image:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0, #fe96c9), color-stop(0.05, #d51875), color-stop(1, #7b0a2e));
	padding:0;
	color:#36B4F8;
	font-size:36px;
	font-weight:bold;
	text-align:center;
}

#header a {
	color:#f3f3f3;
	text-decoration:none;
	font-weight:bold;
	text-shadow:0 -1px 0 rgba(0,0,0,0.5);
}

#footer {
	width:100%;
	height:65px;
	
	padding:0;
	background:#666666;
	border-top:1px solid #0066CC;
}

#footer li {
	display:block;
	float:left;
}

#footer li {
	width:50%;
	text-align:center;
}

#footer a.remove {
	border-right:1px solid #333;
}

#footer a.add {
	border-left:1px solid #6a6a6a;
}

#footer a {
	display:block;
	text-decoration:none;
	font-size:12px;
	color:#eee;
	line-height:24px;
	text-shadow:0 -1px 0 #000;
}

#footer span {
	display:block;
	font-size:30px;
	font-weight:bold;
}

#wrapper {
	height:200px;		/* Of course you need to specify the object height */

	position:relative;	/* On older OS versions "position" and "z-index" must be defined (absolute | relative), */
	z-index:1;			/* it seems that recent webkit is less picky and works anyway. */

	width:100%;
	
	overflow:hidden;
}

#scroller {
/*	-webkit-touch-callout:none;*/
	-webkit-tap-highlight-color:rgba(0,0,0,0);

	float:left;
	width:100%;
	padding:0;

/*	-webkit-box-shadow:0 0 8px #555;	/* Don't use box shadows, they slow down drastically CSS animations */
}

#scroller ul {
	list-style:none;
	padding:0;
	margin:0;
	width:100%;
	text-align:left;
}

#scroller li {
	padding:0 10px;
	height:40px;
	line-height:40px;
	border-bottom:1px solid #ccc;
	border-top:1px solid #fff;
	background-color:#fafafa;
	font-size:14px;
}

#scroller li > a {
	display:block;
}
</style>



<!-- preloader -->
<!-- Stylesheet -->
	  <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen, print"/>

<style>
#preloader {
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:#fff; /* change if the mask should have another color then white */
    z-index:999999; /* makes sure it stays on top */
}

#status {
    width:200px;
    height:200px;
    position:absolute;
    left:50%; /* centers the loading animation horizontally one the screen */
    top:50%; /* centers the loading animation vertically one the screen */
    background-image:url(img/status.gif); /* path to your loading animation */
    background-repeat:no-repeat;
    background-position:center;
    margin:-100px 0 0 -100px; /* is width and height divided by two */
}
.button3{
border:1px solid #26759E;-webkit-box-shadow: #FEFFFF 0px 1px 3px inset;-moz-box-shadow: #FEFFFF 0px 1px 3px inset; box-shadow: #FEFFFF 0px 1px 3px inset; -webkit-border-radius: 7px; -moz-border-radius: 7px;border-radius: 7px;font-size:14px;font-family:lucida sans unicode, lucida grande, sans-serif; padding: 11px 5px 11px 5px; text-shadow: 0px 1px 0 rgba(0,0,0,0.5); text-align: center; color: #FFFFFF;background-color: #60FA1E;
 background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #60FA1E), color-stop(100%, #174F17));
 background-image: -webkit-linear-gradient(top, #60FA1E, #174F17);
 background-image: -moz-linear-gradient(top, #60FA1E, #174F17);
 background-image: -ms-linear-gradient(top, #60FA1E, #174F17);
 background-image: -o-linear-gradient(top, #60FA1E, #174F17);
 background-image: linear-gradient(top, #60FA1E, #174F17);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#60FA1E, endColorstr=#174F17);
}
</style>
<!--End of preloader -->
 <script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function() {
$(".touch").click(function(){
//alert("fdfgfgf");
$( ".open" ).each(function () {

$(this).css({'opacity':0.0}).animate({
                        'opacity':1.0
                    }, 2050).delay(5000);
       
 
});


});
});


</script>
</head>


<body>
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<div id="header" style="background:#666666; text-align:left; background:#666666; text-align:center; border-bottom:1px solid #000000;">

iReply
</div>

<div id="wrapper">
	<div id="scroller">
			<div id="container" style="height:100%;">
					<div style="width:100%; float:left; text-align:center; margin-top:8%;">
									<A href="category.php"><img src="images/login.png" border="0" class="open"   style="width:50%; height:auto; float:left;margin-top:8%; opacity:0.0;"/>&nbsp; </A>	
									<A href="category.php"><img src="images/signup.png" border="0" class="open"   style="width:50%; height:auto; float:left; margin-top:4%; opacity:0.0;"/>&nbsp; </A>	
									<A href="category.php"><img src="images/about1.png" border="0" class="open"  style="width:50%; height:auto; margin-top:0%; opacity:0.0;"/>&nbsp; </A>		
<img src="images/touch.png" border="0" class="touch"   style="width:50%; height:auto; margin-top:13%;"/>&nbsp; 
		
						</div>
					
					
						
			</div>
			</div>
			</div>
			
			
			<div id="footer">
<div class="touch">xxxxxxxxxxxxxxxx</div>
					<div style="width:49%; height:auto; padding-top:7%; padding-left:1%; float:left; font-weight:bold; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#36B4F8;">
						Version 3.1
					</div>	
					<div style="width:49%; height:auto; padding-top:5%; float:left; padding-right:1%; text-align:right;">
						<img src="images/linkedin.png" />
						<img src="images/twitter.png" />
						<img src="images/facebook.png" />
					</div>
						

			</div>


<!-- jQuery Plugin -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>

<!-- Preloader -->
<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$("#status").fadeOut(); // will first fade out the loading animation
			$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
		})
	//]]>
</script> 
</body>
</html>
<?php
ob_flush();
?>