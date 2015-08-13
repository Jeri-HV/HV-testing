<?php   
include_once("lib/utils.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Request Recieved - FAP Clinical Trial for New Drugs Eflornithine and Sunlidac</title>
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
	min-height: 700px;
	background-color: #ffffff;
}
#inner-content {
	padding: 0px 40px;
}

.supplemental-text { font-weight: bold; color: darkred; font-variant: none; font-style: normal; font-size: 80%;; }

FORM li { list-style: none; padding-right: 10px; margin-bottom: 5px; }

#msgbox {

	width: 550px;
	margin: 40px auto;
	background-color: #efefef;
	padding: 30px;
}

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

                <h1>FAP Clinical Trial for New Drugs</h1>
<p>Cancer Prevention Pharmaceuticals recently opened a clinical trial that is evaluating a new drug combination (eflornithine (DMFO) and sulindac) for patients with FAP (familial adenomatous polyposis). This study will determine if a combination drug treatment can work better than each drug alone in preventing the disease from getting worse. It will also look to see if this new treatment for FAP can reduce the number and/or size of colon polyps and will look at how the medication might change quality of life.</p>
<h2>New FAP Drugs Eflornithine (DMFO) and Sulindac</h2>
<p>The two drugs used in this study are eflornithine (CPP-1X, also known as DFMO) and sulindac. Sulindac is a drug that is similar to aspirin, naproxen, and ibuprofen in that it blocks inflammation. It has been shown in several studies to reduce the growth of colon polyps, but has not been approved by the FDA for this indication. Eflornithine (CPP-1X) is an experimental drug that has also been shown to reduce the growth of polyps in the colon. Earlier clinical trials have shown that these two drugs work together to reduce the number of colon polyps. A study in patients with a history of large colon polyps showed a dramatic reduction in all colon polyps (more than 70%) and a 92% reduction in advanced polyps (also known as adenomas).</p
>

<div id="msgbox">
<em>Thank you.</em>
<br/><br/>
Your request has been received, and you will be contacted soon.
</div>

</div>
</div>
</div>

</body>
</html>
