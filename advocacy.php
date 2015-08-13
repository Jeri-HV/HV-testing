<?php include('lib/utils.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Advocacy Groups - HealthiVibe</title>
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
        background: url(images/panorama-advocacy.jpg) no-repeat center center;
        background-size: cover;
        }
}
@media screen and (max-width: 599px) {
        #interior-banner {
        background: url(images/panorama-advocacy.mobile.jpg) no-repeat;
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
Representing the<br/>
needs and concerns<br/>
of patients<br/>
</span>
</div>
<!-- interior-banner-text -->

<img src="images/curved-rule-purple.png" style="width: 100%; position: absolute; bottom: 0px" /></div>
<!-- interior-banner -->

<div id="content" class="canvas">
<div id="main">

<div id="main-text">
<!-- Sidebar for partner logos -->
<div class="sidebar">
<?php include('sidebar-advocacy.php'); ?>
</div>

<h1>Advocacy Groups</h1>

<p>
Patient advocacy is deeply rooted in all that we do at HealthiVibe. We are driven to connect on a deeper level, to uncover what drives the patient thoughts, and ultimately their decisions. What we learn from patient advocacy organizations can do far more than gain insights into clinical trial design but can also affect the patient-centric approaches for pharmaceutical clients across the broad spectrum of their business model.
</p>

<p>
Working with patient groups around patient preferences, treatment decisions and clinical trial participation translates to more patient-centric, efficient and quality-driven clinical trials and programs.
</p>

<p>
<a href="contact.html">Contact us</a> if you would like to learn more or are interested in collaborating. 
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
