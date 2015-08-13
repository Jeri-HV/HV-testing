<?php include('lib/utils.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="Rx2GsnRPdmeqYPYk6N046SPsSbQ-C4mdQFa2afSPlvQ" />
<title>HealthiVibe</title>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="shortcut icon" href="/favicon.ico" />
<?php include ('fonts.php'); ?>
<link rel="stylesheet" href="<?php echo getnocache('style.css')?>" type="text/css" />
<link rel="stylesheet" href="<?php echo getnocache('home.css')?>" type="text/css" />

<style type="text/css">
</style>

<script type="text/javascript" src="include/functions.js"></script>
<script type="text/javascript" src="include/search.js"></script>
<script type="text/javascript">

	var carouselStart = 0;
	var activeImage = 0;
	var activeHeadline = null;

	function initCarousel() {
		carouselStart = document.getElementById('image-carousel').offsetLeft - 
			document.getElementById('splash-left').offsetLeft;

		setTimeout(checkImageCarousel, 5);
	}

	function setHeadlineTransition() {
		if ( activeHeadline )
			activeHeadline.className = 'headline';
	}

	function setActiveKey(imageNumber) {

		if ( activeImage == imageNumber )
			return;

                var headers = [ "insights", "philosophy", "overview" ];
		
		for ( var i = 0; i < headers.length; i++ ) {

			var img = getElement('nav' + (i+1));
			var head = getElement('header-' + headers[i]);
			var btn = getElement('button-' + headers[i]);
			
			if ( i == (imageNumber-1) ) {
				activeHeadline = head;
				img.className = 'selected';
				head.className = 'headline-shown';
				btn.className = 'circlediv highlighted';
				setTimeout(setHeadlineTransition, 10);
			} else {
				img.className = 'unselected';
				head.className = 'headline-hidden';
				btn.className = 'circlediv';
			}

		}

		activeImage = imageNumber;
	
	}

	function checkImageCarousel() {

		var headers = [ "insights", "philosophy", "overview" ];

		var carousel = document.getElementById('image-carousel');
		if ( carousel.style.display == "none" ) {
			alert("Turning off carousel temporarily");
			setTimeout(checkImageCarousel, 5000);
			return;
		}

		var anchor = document.getElementById('splash-left');

		var numImages = 4;
		var imgWidth = 480;

		var left = carousel.offsetLeft - anchor.offsetLeft - carouselStart;
		left = Math.abs(left);

		//document.getElementById('searchbox').value = "Start: " + carouselStart + ", Left: " + left;

		for ( var i = 1; i <= numImages; i++ ) {
			var nav = document.getElementById('nav'+i);
			var prev = (i-1)*imgWidth;
			var head = document.getElementById('header-'+headers[i-1]);

			if ( left < ((i*imgWidth)-(350)) && left >= prev ) {
				setActiveKey(i);
				break;
			}
		}	

		setTimeout(checkImageCarousel, 20);
	}
	

	window.addEventListener("load", initCarousel, false);
	
</script>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<div id="master">

<div class="canvas" id="content-head">

<?php include "header.php"; ?>
<!-- header -->

</div>
<!-- content-head -->


<div id="content-splash">

<div class="canvas">
<div id="splash-left">
<span class="headline-hidden" id="header-insights">Patients <span class="bolder">changing the future</span> of <br />clinical research & beyond</span>
<span class="headline-hidden" id="header-philosophy">Enhancing studies through<br /> <span class="bolder">innovative technologies</span></span>
<span class="headline-hidden" id="header-overview">Working together on<br/><span class="bolder">patient-centered </span>initiatives</span>

<br/>

<div class="circlediv" id="button-philosophy">
<a href="about.html"><img src="images/circle-philosophy.png" border="0" /></a>
<br/>
<a href="about.html">Philosophy<a/>
</div>

<div class="circlediv" id="button-insights">
<a href="insights.html"><img src="images/circle-engage.png" border="0" /></a>
<br/>
<a href="insights.html">Insights</a>
</div>

<div class="circlediv" id="button-overview">
<a href="overview.html"><img src="images/circle-overview.png" border="0" /></a>
<br/>
<a href="overview.html">Overview</a>
</div>

<div id="learnmore"><span><a href="about.html">Learn more</a></span> <a href="about.html"><img src="images/green-arrow.png" border="0" /></a></div>

</div>
<!-- splash-left -->

<!-- these are float-right, so we need to add them in reverse order -->
<div id="curve-right" style="float: right; width: 15px; z-index: 5001; overflow: none"><img src="images/right-curve.png" 
	style="position: relative; left: -87px; z-index: 99999" /></div>

<div id="splash-right">
<div id="image-carousel" class="carousel">
<img src="images/splash-toolkit.jpg" />
<img src="images/splash-partners.jpg" />
<img src="images/splash-rewards.jpg" />
<img src="images/splash-toolkit.jpg" />
</div>
</div>
<!-- splash-right -->

<div id="curve-left" style="float: right; width: 15px; z-index: 5000; overflow: none"><img src="images/left-curve.png" 
	style="position: relative; left: 10px; z-index: 99999" /></div>

</div>
<!-- canvas -->

<div style="clear: both"></div>
</div>
<!-- content-splash -->

<div id="splash-nav-bar">
<div id="nav1" class="selected"><img src="images/1px.png" /></div>
<div id="nav2" class="unselected"><img src="images/1px.png" /></div>
<div id="nav3" class="unselected"><img src="images/1px.png" /></div>
</div>
<!-- splash-nav-bar -->


<div id="content" class="canvas">
<div id="main">

<!--
<div id="main-text" class="scrollbar">
<p>This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. 
</p> 
<p>
This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. This is a sample scrollable text area. 
</p>
<p>This is a sample scrollable text area. This is a sample scrollable text area. </p>
<p>This is a sample scrollable text area. </p>
</div
-->
<!-- main-text -->

<div id="roles">
<div class="rolediv" onmouseup="window.location='sponsors.html'">
<img src="images/sponsors.png" class="roleimg" /><br/>
<h1>Sponsors</h1>
Collaborating with patients<br/>
to spark innovation<br/>
<img src="images/purple-arrow.png" class="arrowimg" />
</div>

<div class="rolediv" onmouseup="window.location='patients.html'">
<img src="images/patients.png" class="roleimg" /><br/>
<h1>Patients & Caregivers</h1>
Those who matter most, helping<br />
 to change the future now<br/>
<img src="images/purple-arrow.png" class="arrowimg" />
</div>


<div class="rolediv" onmouseup="window.location='advocacy.html'">
<img src="images/idea_icon.png" class="roleimg" /><br/>
<h1>Creative Thinking</h1>
Ideas ahead of their time bringing<br/>
better quality of life to all<br/>
<img src="images/purple-arrow.png" class="arrowimg" />
</div>

<div style="clear:both"></div>
</div>
<!-- roles -->

</div>
<!-- main -->

</div>
<!-- content -->

<?php include "footer.php"; ?>

<div style="clear: both"></div>
</div>
</body></html>
