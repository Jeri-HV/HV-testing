<?php include('lib/utils.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Our Philosophy - HealthiVibe</title>
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
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -background-size: cover;
}

#interior-banner-text {
	color: #ffffff;
}

@media screen and (min-width: 600px) {
	#interior-banner {
	background: url(images/panorama-about2.jpg) no-repeat center center;
	}
}
@media screen and (max-width: 599px) {
	#interior-banner {
	background: url(images/panorama-about2.mobile.jpg) no-repeat center center;
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
&nbsp;
</span>
</div>
<!-- interior-banner-text -->

<img src="images/curved-rule-purple.png" style="width: 100%; position: absolute; bottom: 0px" /></div>
<!-- interior-banner -->

<div id="content" class="canvas">
<div id="main">

<div id="main-text">
<h1>Our Philosophy</h1>

<p>
HealthiVibe is improving the way clinical trials are conducted–simplifying the study development and coordination process for pharmaceutical companies and enhancing the patient experience for participants.
</p>
<p>How do we do this? <strong>With intelligence.</strong></p>
<blockquote>HealthiVibe has a unique approach which melds our team's expertise in the pharmaceutical and healthcare industries with actual patients' experiential knowledge.</blockquote>
<p>We believe that patients should play an instrumental role in clinical studies before they are designed and conducted, as well as throughout the patient journey. They have ideas and insights to share, and we tap into them.</p>
<p>
We gather rich, real-time patient and caregiver feedback about the realities of their condition and the clinical research process using interactive advisory boards and focus groups. We conduct individual patient interviews, mock clinical trial simulations and utilize online surveys from a <strong>10 million-patient panel</strong> to reach a broader, more representative consumer audience. <a href="<?php echo $base; ?>services.html">Learn more about our comprehensive services >></a>
</p>
<blockquote>This invaluable real-life patient insight is driving not only the future of clinical trials, but every dimension of pharmaceutical operations.</blockquote>
<p>We have learned that when patients become partners, innovation is sparked. Whether your product is in the pre-approval, regulatory, or post-approval  phase, this novel patient-centric approach helps our pharmaceutical clients understand study participants' needs, and in turn, allows sponsors to deploy faster, more effective, and less costly clinical trials.</p>
<p>But working with clients to develop patient-centric clinical studies is just a portion of our capability. HealthiVibe also has expertise in sponsor-side services including investigation site education, steering committee coordination, investigator meeting facilitation, patient-centricity initiatives, and video testimonial development. <a href="<?php echo $base; ?>services.html">Learn more about our service offerings >></a>
</p>
<p<center>>>> <a href="<?php echo $base; ?>contact.html">Contact us</a> to learn how our intelligence will ensure your clinical trial's success.</center> </p>
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
