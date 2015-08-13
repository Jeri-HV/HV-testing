<?php include('lib/utils.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Partners - HealthiVibe</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="shortcut icon" href="/favicon.ico" />
<?php include ('fonts.php'); ?>
<link rel="stylesheet" href="<?php echo getnocache('style.css'); ?>" type="text/css" />
<script type="text/javascript" src="include/search.js"></script>

<style type="text/css">
#interior-banner {
	margin: 0;
	position: relative;
}

#interior-banner-text {
	color: #ffffff;
}

@media screen and (min-width: 600px) {
        #interior-banner {
        background: url(images/panorama-partners.jpg) no-repeat top center;
        background-size: cover;
        }
}
@media screen and (max-width: 599px) {
        #interior-banner {
        background: url(images/panorama-partners.mobile.jpg) no-repeat;
        background-size: cover;
        }
}
</style>

</head>

<body id="learn">
<?php include_once("analyticstracking.php") ?>
<div id="master">
<div class="canvas" id="content-head">

<?php include "header.php"; ?>
<!-- header -->

</div>
<!-- content-head -->

<!-- center banner image -->
<div id="interior-banner"> 

<div id="interior-banner-text" class="canvas">
<span class="interior-headline">
Working together<br/>
to create<br/>
<span class="bolder">patient-centered trials</span>
</span>
</div>
<!-- interior-banner-text -->

<img src="images/curved-rule-green.png" style="width: 100%; position: absolute; bottom: 0px" /></div>
<!-- interior-banner -->

<div id="content" class="canvas">
<div id="main">

<div id="main-text">

<!-- Sidebar for partner logos -->
<div class="sidebar">
<?php include('sidebar-advocacy.php'); ?>
<?php include('sidebar-technology.php'); ?>

</div>
<!-- Sidebar -->

<h1>Partners</h1>

<h2>Patient Advocacy Groups</h2>

<p>
To be successful, our clients need the patient voice. Understanding that each disease area has its own unique charter, HealthiVibe partners with patient advocacy groups and online communities for the most effective and comprehensive feedback collection.
</p>

<p>
We make a difference because we seek partners across the entire healthcare ecosystem.
</p>

<h2>Technology Solution Providers</h2>

<p>
At HealthiVibe we want to hear about edgy new apps, mobile devices, data capture tools and web-based solutions that accelerate 
trials&mdash;or that make participation more fun and interesting for trial participants. We think there's room for innovative 
solutions and we love when sponsors incorporate new models and tools into their trials. And we believe that new technologies will 
truly transform the way studies are carried out.
</p>

<p>
HealthiVibe welcomes partners from health start-ups and medical device companies to join us on this exciting journey. If you are a 
technology solution provider with an entrepreneurial spirit and a patient-centered approach, please contact us about becoming a 
partner. 
</p>

</div>
<!-- main-text -->


</div>
<!-- main -->

</div>
<!-- content -->

<?php include "footer.php"; ?>

<div style="clear: both"></div>
</div>
</body></html>
