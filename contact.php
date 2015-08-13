<?php
include_once("lib/utils.php");
$captcha = to_str($_REQUEST['captcha']);
$isCaptcha = ($captcha == "false");

$email = to_str($_REQUEST['email']);
$subject = to_str($_REQUEST['subject']);
$message = to_str($_REQUEST['message']);

if ( $subject == '' ) {
	$subject = "Tell me more about HealthiVibe";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Us - HealthiVibe</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="shortcut icon" href="/favicon.ico" />
<?php include ('fonts.php'); ?>
<link rel="stylesheet" href="<?php echo getnocache('style.css'); ?>" type="text/css" />
<script type="text/javascript" src="include/functions.js"></script>
<script type="text/javascript" src="include/search.js"></script>

<style type="text/css">

H2 {
	margin: 10px 0 0 0;
}

input[type="text"] {
	font-size: 90%;
	font-weight: 100;
	width: 400px;
	max-width: 95%;
	color: #565656;
        text-transform: none;
        padding: 0 4px 0 4px;
        height: 25px;
        border: 1px solid #a9a9a9;
}


#contactform textarea {
	color: #565656;
	font-size: 90%;
	font-weight: 100;
	height: 140px;
	width: 400px;
	max-width: 95%;
}

input[type="submit"] {
	background-color: #6e638b;
	padding: 4px 15px;
	color: #ffffff;
	height: 28px;
	border: none;
	font-size: 100%;
  	-moz-border-radius: 5px;
  	-webkit-border-radius: 5px;
  	border-radius: 5px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #000000;
}

#captcha-required {
        color: red;
        <?php
        if ( $isCaptcha == TRUE ) { ?>
        display: block;
        <?php } else { ?>
        display: none;
        <?php } ?>
}

.captcha input[type="text"] {
        width: 80px;
        }

#contact-sidebar {

	float: right;	
	background: #dfdfdf;
	padding: 18px;
	margin: 0 10px 0 0px;
	width: 240px;
}

</style>



<script type="text/javascript">

	function validateForm() {

		var isValid = true;
		var fields = ["email", "subject", "message"];
		for ( var i = 0; i < fields.length; i++ ) {
			if ( getElement(fields[i]).value.length == 0 ) {
				getElement(fields[i] + "-required").className = "invalid-field";
				isValid = false;
			} else {
				getElement(fields[i] + "-required").className = "valid-field";
			}	
		}


		return isValid;	
	}
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

<!-- center banner image -->
<!--
<div id="interior-banner"> 

<div id="interior-banner-text" class="canvas">
<span class="interior-headline">
&nbsp;
</span>
</div>

<img src="images/curved-rule-purple.png" style="width: 100%; position: absolute; bottom: 0px" /></div>

<!-- interior-banner -->
-->
<div id="content" class="canvas">
<div id="main">

<div id="main-text">
<div id="contact-sidebar">
<strong>HealthiVibe, LLC</strong><br/>
4201 Wilson Blvd<br/>
#110-321<br/>
Arlington, VA 22203<br/>
<br/>
Toll free: 866-961-6400<br/>
Email: <a href="mailto:info@healthivibe.com">info@healthivibe.com</a>
</div>

<h1>Contact Us</h1>
<p>
If you would like to learn more about HealthiVibe and our services, or if you are interested in partnering to improve the patient experience, we would love to talk with you. Please complete the form below.</p>


<div id="contactform" style="form">
<form method="POST" name="contactus" action="contact-send.html" onsubmit="return validateForm()">
<h2>Email <span class="supplemental-text">(Required)</span></h2>
<input type="text" id="email" value="<?php echo $email ?>" name="email">
<span id="email-required" class="valid-field">This field cannot be left blank.</span>
<br/>
<h2>Subject</h2>
<input type="text" id="subject" name="subject"
	value="<?php echo $subject ?>"> 
<span id="subject-required" class="valid-field">This field cannot be left blank.</span>
<br/>
<h2>Message</h2>
<textarea id="message" name="message"><?php echo $message ?></textarea>
<span id="message-required" class="valid-field">This field cannot be left blank.</span>
<br/>
<br/>
<span class="captcha">
<img style="align: top" src="lib/captchaImages.php?width=170&height=50&characters=5" /><br/>
Enter the security code above:&nbsp;<input id="security_code" name="security_code" type="text" />
<br/>
<span id="captcha-required" class="valid-field">The code did not match the image; please re-try.</span>
</span>
<br/>
<br/>

<input type="submit" value="Submit" />
</form>
</div>



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
