<?php   
include_once("lib/utils.php");
$captcha = to_str($_REQUEST['captcha']);
$isCaptcha = ($captcha == "false");

$email = to_str($_REQUEST['email']);
$name = to_str($_REQUEST['name']);
$phone = to_str($_REQUEST['phone']);
$citystate = to_str($_REQUEST['citystate']);
$zip = to_str($_REQUEST['zip']);
$preferred = to_str($_REQUEST['preferred']);
$interested = to_str($_REQUEST['interested']);
$source = to_str($_REQUEST['source']);

?>
<!DOCTYPE html>
<html>
<head>
<title>FAP Clinical Trial for New Drugs Eflornithine and Sunlidac</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="shortcut icon" href="/favicon.ico" />
<?php include ('fonts.php'); ?>
<link rel="stylesheet" href="<?php echo getnocache('style.css'); ?>" type="text/css" />
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
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

.gfield_label {
	font-weight: 700;
}

#master {
	background-color: #6e638b; /* #efefef;*/
	padding: 15px 80px;
	width: 1260px;
	margin: 0px auto;
}
#content {
	background-color: #ffffff;
}
#inner-content {
	padding: 0px 40px;
}

.supplemental-text { font-weight: bold; color: darkred; font-variant: none; font-style: normal; font-size: 80%;; }

FORM li { list-style: none; padding-right: 10px; margin-bottom: 5px; }
</style>

<script type="text/javascript">
        
        function validateForm() {
 
                var isValid = true;
                var fields = ["phone", "name", "email", "citystate", "zip"];
                for ( var i = 0; i < fields.length; i++ ) {
                        if ( getElement(fields[i]).value.length == 0 ) {
                                getElement(fields[i] + "-required").className = "invalid-field";
                                isValid = false;
                        } else {
                                getElement(fields[i] + "-required").className = "valid-field";
                        }
                }

		// check radio button
		var radioFields = ["preferred"];

		for ( i = 0; i < radioFields.length; i++ ) {
			var f = 0;
			var selIndex = -1;
			while ( true ) {
				var opt = getElement(radioFields[i] + "-" + f);
				if ( opt == null )
					break;
				if ( opt.checked ) {
					selIndex = f;
					break;
				}
				f++;
			}
			if ( selIndex < 0 ) {
				getElement(radioFields[i] + "-required").className = "invalid-field";
				isValid = false;
			} else {
				getElement(radioFields[i] + "-required").className = "valid-field";
			}
		}

                
                return isValid;
        }
</script>

</head>

<body>

<div id="master">
<div id="content" class="canvas">
<div id="inner-content">

<article id="post-259" class="post-259 page type-page status-publish hentry">

	<div class="entry-content">
		<h1>FAP Clinical Trial for New Drugs</h1>
<p>Cancer Prevention Pharmaceuticals recently opened a clinical trial that is evaluating a new drug combination (eflornithine (DMFO) and sulindac) for patients with FAP (familial adenomatous polyposis). This study will determine if a combination drug treatment can work better than each drug alone in preventing the disease from getting worse. It will also look to see if this new treatment for FAP can reduce the number and/or size of colon polyps and will look at how the medication might change quality of life.</p>
<h2>New FAP Drugs Eflornithine (DMFO) and Sulindac</h2>
<p>The two drugs used in this study are eflornithine (CPP-1X, also known as DFMO) and sulindac. Sulindac is a drug that is similar to aspirin, naproxen, and ibuprofen in that it blocks inflammation. It has been shown in several studies to reduce the growth of colon polyps, but has not been approved by the FDA for this indication. Eflornithine (CPP-1X) is an experimental drug that has also been shown to reduce the growth of polyps in the colon. Earlier clinical trials have shown that these two drugs work together to reduce the number of colon polyps. A study in patients with a history of large colon polyps showed a dramatic reduction in all colon polyps (more than 70%) and a 92% reduction in advanced polyps (also known as adenomas).</p>
<h2>Clinical Trial Treatment Information</h2>
<p>All participants will receive at least 1 active drug. Participants will take 4 pills once a day for up to 2 years. You will be followed closely by your study doctor to see how you are responding to treatment. If you are interested in the study, please <a href="#form">contact us</a>. You will be screened at one of the centers to see if you meet the requirements to participate. Your evaluation will include upper and lower endoscopies, a physical exam and testing of blood and urine samples to check your general health. Some of the most important requirements are listed here:</p>
<h2>Eligibility for this FAP Clinical Trial</h2>
<p><strong>You may be eligible if you have FAP and:</strong></p>
<ul>
<li>Have not had your colon removed, but are considering this surgery, OR</li>
<li>Have advanced disease in your upper intestine (duodenum), OR</li>
<li>Have had your colon removed and have advanced disease in your pouch/rectum</li>
</ul>
<p><strong>If you meet one of those requirements, you may be eligible if:</strong></p>
<ul>
<li>You have a mutation in the APC gene. If you have not been previously tested, your blood will be checked to see if you have a mutation. A mutation is required for participation in this study. Some, but not all people with your condition have this mutation.</li>
<li>You are at least 18 years old</li>
</ul>
<p><strong>You would <span style="text-decoration: underline;">not</span> be eligible if you:</strong></p>
<ul>
<li>Have diabetes that requires medication to control your sugar levels</li>
<li>Have a high risk of disease to your heart or blood vessels</li>
<li>Have hearing loss and wear a hearing aid</li>
<li>Are pregnant or nursing a baby</li>
</ul>
<p>Certain medications are not allowed while you are on study. If you are on medications for FAP, you may need to go through a "washout" period where you stop taking the medication before you can begin the study. Your study doctor can explain this in more detail.</p>
<p><strong>The study will take place at 12 medical centers in the U.S., Canada, and Europe. The sites that are currently open are:</strong></p>
<p><strong>U.S. and Canada</strong></p>
<ul>
<li style="list-style: none;">Cleveland Clinic, Cleveland, OH</li>
<li style="list-style: none;">Dana Farber Cancer Institute, Boston MA</li>
<li style="list-style: none;">Mayo Clinic, Rochester, MN</li>
<li style="list-style: none;">M.D. Anderson Cancer Center, Houston, TX</li>
<li style="list-style: none;">University of Michigan, Ann Arbor, MI</li>
<li style="list-style: none;">University of Utah &ndash; Huntsman Cancer Institute, Salt Lake City, Utah</li>
<li style="list-style: none;">Washington University, St. Louis, MO</li>
<li style="list-style: none;">Zane Cohen Centre for Digestive Diseases, Toronto, Canada</li>
</ul>
<p><strong>Europe</strong></p>
<ul>
<li style="list-style: none;">Academic Medical Center, Amsterdam, The Netherlands</li>
<li style="list-style: none;">Institut de Malalties Digestives, Barcelona, Spain</li>
<li style="list-style: none;">Institute of Genetic Medicine, Newcastle Upon Tyne, United Kingdom</li>
</ul>
<p><strong>Sites opening soon include:</strong></p>
<ul>
<li style="list-style: none;">University Hospital Bonn, Bonn, Germany</li>
</ul>
<p><a name="form"></a><br />


<div id="contactform" style="form">
<form method="POST" name="contactus" action="faptrial-send.html" onsubmit="return validateForm()">


<h2>Name <span class="supplemental-text">*</span></h2>
<input type="text" id="name" value="<?php echo $name ?>" name="name">
<span id="name-required" class="valid-field">This field cannot be left blank.</span>
<br/>

<h2>Phone <span class="supplemental-text">*</span></h2>
<input type="text" id="phone" value="<?php echo $phone ?>" name="phone">
<span id="phone-required" class="valid-field">This field cannot be left blank.</span>
<br/>
	
<h2>Email <span class="supplemental-text">*</span></h2>
<input type="text" id="email" value="<?php echo $email ?>" name="email">
<span id="email-required" class="valid-field">This field cannot be left blank.</span>
<br/>

<h2>City, State <span class="supplemental-text">*</span></h2>
<input type="text" id="citystate" value="<?php echo $citystate ?>" name="citystate">
<span id="citystate-required" class="valid-field">This field cannot be left blank.</span>
<br/>

<h2>Zip <span class="supplemental-text">*</span></h2>
<input type="text" id="zip" value="<?php echo $zip ?>" name="zip">
<span id="zip-required" class="valid-field">This field cannot be left blank.</span>
<br/>

<h2>Preferred Method of Contact <span class="supplemental-text">*</span></h2>
<ul>
<li><input type="radio" value="Email" name="preferred" id="preferred-0">  <label for="preferred-0">Email</label></li>
<li><input type="radio" value="Phone" name="preferred" id="preferred-1">  <label for="preferred-0">Phone</label></li>
<span id="preferred-required" class="valid-field">This field cannot be left blank.</span>
</ul>

<h2>I'm interested in:</h2>
<ul>
<li><input type="radio" value="Finding more info" name="interested" id="interested-0">  <label for="interested-0">finding out more about this critical trial</label></li>
<li><input type="radio" value="Being screened" name="interested" id="interested-1">  <label for="interested-1">being screened for the study and would like to be contacted by the medical center closest to me.</label></li>
</ul>
<br/>

<input type="hidden" id="source" name="source" value="<?php echo $source ?>">

<input type="submit" value="Submit" />
</form>
</div>

<br /><span class="supplemental-text">*</span> indicates a required field</p>
<p>For more detailed information on the study go to <a href="http://clinicaltrials.gov/ct2/show/NCT01483144?term=NCT01483144&amp;rank=1" target="_blank">ClinicalTrials.gov</a> and search for study NCT01483144.</p>
<p>This section discusses pipeline drug candidates currently undergoing clinical testing. The safety and efficacy of these drug candidates have not been evaluated by any regulatory authorities for the indications described in this section.</p>
			</div><!-- .entry-content -->
</article>
</div>
</div>
</div>

</body>
</html>
