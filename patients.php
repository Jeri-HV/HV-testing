<?php include('lib/utils.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Patients/Caregivers - HealthiVibe</title>
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
        background: url(images/panorama-patients.jpg) no-repeat top center;
        background-size: cover;
        }
}
@media screen and (max-width: 599px) {
        #interior-banner {
        background: url(images/panorama-patients.mobile.jpg) no-repeat center center;
        background-size: cover;
        }
}
</style>

</head>

<body>
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
Lend your voice<br/>
and ignite change<br/>
in clinical trials
</span>
</div>
<!-- interior-banner-text -->

<img src="images/curved-rule-purple.png" style="width: 100%; position: absolute; bottom: 0px" /></div>
<!-- interior-banner -->

<div id="content" class="canvas">
<div id="main">

<div id="main-text">
<h1>Patients/Caregivers</h1>

<p>
We want to hear what you have to say! You can play an instrumental role in affecting far-reaching change that will forever alter the course of clinical trial study design and conduct, making them patient-centric. Companies that design and run clinical trials are committed to making them more "patient-friendly" and you hold the key to success.
</p>

<p>
Without your feedback it is a significant challenge for researchers to fully understand the obstacles you face as a patient. Perhaps study visits, transportation or a difficult procedure makes it cumbersome to participate. Well, we want to know so that we can help sponsors design studies that work for you, optimize your involvement and meet your particular needs&mdash;and we're going to give you the opportunity to tell us!
</p>

<p>
<a href="contact.html">Contact us</a> to learn about more ways we can work together.
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
