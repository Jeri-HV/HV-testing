<?php include('lib/utils.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Insights - HealthiVibe</title>
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
        background: url(images/panorama-rewards.jpg) no-repeat center center;
        background-size: cover;
        }
}
@media screen and (max-width: 599px) {
        #interior-banner {
        background: url(images/panorama-rewards.mobile.jpg) no-repeat;
        background-size: cover;
        }
}

</style>

</head>
<?php include_once("analyticstracking.php") ?>
<body id="learn">

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
Patients <span class="bolder">changing<br/>
the future</span> of<br/>
medicine</span>
</div>
<!-- interior-banner-text -->

<img src="images/curved-rule-green.png" style="width: 100%; position: absolute; bottom: 0px" /></div>
<!-- interior-banner -->

<div id="content" class="canvas">
<div id="main">

<div id="main-text">
<h1>Insights</h1>

<p>
[INSIGHTS CONTENT HERE]
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
