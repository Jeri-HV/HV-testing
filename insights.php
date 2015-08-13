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
Every clinical trial and patient-centric initiative presents unique challenges, but we have found that even
small changes in approach can make a big difference in participation, retention, and outcome. How do 
we know? <strong>We ask.</strong></p>
<p>
Gathering intelligence via focus groups, interviews, surveys, and simulations, HealthiVibe taps deep into the patient psyche to capture a holistic look at their real-life experiences. How does the patient view their disease or condition, and what burden does it place on them and their loved ones? Why is the patient taking medication, and why would they consider switching drugs? How do they perceive their quality of life? </p>
<p>
<strong>We have access to 10 million consumers worldwide</strong>–coping with a vast range of diseases and health conditions– who make up our various patient panels.
</p>
<blockquote>
Armed with first-hand patient insights, we home in on the often-overlooked scientific, operational, and behavioral imperfections of trial and program development and execution, and we uncover ways to improve them.
</blockquote>
<p>
Through this proprietary process, we are able to understand and eliminate numerous potential challenges, which helps our clients design and conduct trials and programs that better fit participants' needs. Such optimization means pharmaceutical companies can more quickly commence and complete effective, patient-friendly studies and develop beneficial patient initiatives–<strong>and saving time equates to saving money.</strong> 
</p>
<p><a href="<?php echo $base; ?>what-we-do.html">Learn more about what we do to improve our clients' clinical trials and patient-centered initiatives >></a></p>
<p>Here are some of the factors that we take into account as we work alongside clients who are designing a clinical trial or a patient-centric program:</p>
<h2>Operational Considerations</h2>
<ul>
	<li>Visit schedules</li>
	<li>Workflow</li>
	<li>Tests and procedures</li>
	<li>Patient-reported outcomes data collection</li>
	<li>Recruitment tactics</li>
	<li>Retention barriers</li>
	<li>Caregiver burden</li>
	<li>Transportation issues</li>
</ul>
<h2>Study or Programmatic Considerations</h2>
<ul>
	<li>Meaningful patient experience</li>
	<li>Requirements that hinder participation</li>
	<li>Factors that enhance participation</li>
	<li>Impact on patient's daily life</li>
	<li>Minimize drop-out/improving overall retention rates</li>
</ul>
<h2>Clinical Considerations</h2>
<ul>
	<li>Factors influencing treatment decision-making</li>
	<li>Thoughts on treatment side effects</li>
	<li>Factors affecting medication switch</li>
	<li>Role of the prescriber, pharma, and other educational resources</li>
</ul>
<p>
<a href="<?php echo $base; ?>contact.html">Contact us</a> today to discuss ways we can increase the success of your clinical trial or your patient-centric initiative. 
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