<?php
include_once("lib/utils.php");
$captcha = to_str($_REQUEST['captcha']);
$isCaptcha = ($captcha == "false");

$firstName = to_str($_REQUEST['firstname']);
$email = to_str($_REQUEST['email']);
$participant = to_str($_REQUEST['participant']);
$condition = to_str($_REQUEST['condition']);
$message = to_str($_REQUEST['message']);

$message = str_replace("<br/>", "\r\n", $message);
?>
<!DOCTYPE html>
<html>
<head>
<title>Share Your Story - HealthiVibe</title>
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
#interior-banner {
	background: url(images/panorama-about2.jpg) no-repeat;
	/*background-size: 100%;*/
	background-size: cover;
	height: 360px;
	margin: 0;
	position: relative;
}
#interior-banner-text {
	padding: 40px 0 0 0;
	color: #ffffff;
}

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
		var fields = ["email", "firstname", "condition", "message"];
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
-->
<!-- interior-banner -->

<div class="page-heading" id="single-page-head">
Share Your Story</div>

<div id="content" class="canvas">
<div id="main">

<div id="main-text">
<p>
Are you living with chronic illness? Would you like to share your story? We are searching for people living with any condition from HIV to diabetes to spotlight the hurdles they face in daily life. We will chronicle these patient vignettes on our blog.
</p>

<p>
Become an empowered patient and use our platform to share your voice!
</p>

<p>
Fill out the form below and we will be in contact shortly to set up an interview.
</p>

<div id="contactform" style="form">
<form method="POST" name="contactus" action="share-send.html" onsubmit="return validateForm()">

<h2>First Name <span class="supplemental-text">(Required)</span></h2>
<input type="text" id="firstname" value="<?php echo $firstName ?>" name="firstname">
<span id="firstname-required" class="valid-field">This field cannot be left blank.</span>
<br/>

<h2>Email <span class="supplemental-text">(Required)</span></h2>
<input type="text" id="email" value="<?php echo $email ?>" name="email">
<span id="email-required" class="valid-field">This field cannot be left blank.</span>
<br/>

<h2>Illness or Condition <span class="supplemental-text">(Required)</span></h2>
<input type="text" id="condition" value="<?php echo $condition ?>" name="condition">
<span id="condition-required" class="valid-field">This field cannot be left blank.</span>
<br/>

<h2>Have you participated in a study?</h2>
<input type="radio" id="participant" name="participant" value="Yes" <?php if ( $participant == "Yes" ) { ?>checked<?php } ?>> Yes<br/>
<input type="radio" id="participant" name="participant" value="No" <?php if ( $participant != "Yes" ) { ?>checked<?php } ?>> No
<br/>

<h2>Short health story*</h2>
<textarea id="message" name="message"><?php echo $message ?></textarea>
<span id="message-required" class="valid-field">This field cannot be left blank.</span>
<br/>

<p>
<em>*This won't be published. Just a few short sentences about the condition you are living with and how it impacts you is fine. We will delve deeper during the interview.</em></p>

<p>
We also welcome interviews or guest blog posts about being a caregiver, clinical trial participant, or patient advocate.
</p>

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
