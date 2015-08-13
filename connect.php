<?php
include_once("lib/utils.php");
$captcha = to_str($_REQUEST['captcha']);
$isCaptcha = ($captcha == "false");

$email = to_str($_REQUEST['email']);
$firstname = to_str($_REQUEST['firstname']);
$lastname = to_str($_REQUEST['lastname']);
$organization = to_str($_REQUEST['organization']);
$orgtype = to_str($_REQUEST['orgtype']);
$other = to_str($_REQUEST['other']);

?>
<!DOCTYPE html>
<head>
<title>Sign Up - HealthiVibe</title>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="shortcut icon" href="/favicon.ico" />
<?php include ('fonts.php'); ?>
<link rel="stylesheet" href="<?php echo getnocache('style.css'); ?>" type="text/css" />
<script type="text/javascript" src="include/functions.js"></script>
<script type="text/javascript" src="include/search.js"></script>

<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">

<style type="text/css">
#mc_embed_signup H2, 
#mc_embed_signup FORM, 
#mc_embed_signup DIV {
	font-family: 'Open sans';
	margin: 10px 0 0 0;
	font-weight: normal;
}

#mc_embed_signup LABEL {
	color: #inherit;
		
}
#mc_embed_signup .indicates-required {
        width:96%;
        max-width: 500px;
}
#mc_embed_signup .mc-field-group {
	clear:left; position:relative; 
	width:96%;
	max-width: 500px;
	margin: 0px;
	text-indent: 0px;
	padding-bottom:0px; 
	min-height:30px;
}

#mc_embed_signup label { 
	font-weight: 400;
	font-size: 130%;
	color: #6e638b;
}
#mc_embed_signup input,
#mc_embed_signup input[type="text"],
#mc_embed_signup input[type="email"],
input[type="text"] {
	width: 100%;
	font-family: inherit;
	font-size: 100%;
	font-weight: 100;
	color: #565656;
        text-transform: none;
        padding: 0 2px 0 2px;
        height: 25px;
        border: 1px solid #a9a9a9;
}


textarea {
	color: #565656;
	font-size: 100%;
	font-weight: 100;
	height: 140px;
	max-width: 95%;
	width: 400px;
}

#mc_embed_signup input[type="radio"],
input[type="radio"] {
	margin: 14px 12px 0 20px;
}

#mc_embed_signup .mc-field-group input {display:block; width:100%; padding:0px;text-indent:0px; }

#mc_embed_signup input[type="button"],
#mc_embed_signup input[type="submit"],
input[type="submit"] {
	background-color: #6e638b;
	padding: 4px 15px 4px 15px;
	color: #ffffff;
	height: 28px;
	border: none;
	width: 120px;
	font-size: 100%;
  	-moz-border-radius: 5px;
  	-webkit-border-radius: 5px;
  	border-radius: 5px;
	cursor: pointer;
}

#mc_embed_signup input[type="submit"]:hover,
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
</style>


<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left;  }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>

<script type="text/javascript">

	function validateForm() {

		var isValid = true;
		var fields = ["email", "firstname", "lastname"];
		for ( var i = 0; i < fields.length; i++ ) {

			if ( getElement(fields[i]).value.length == 0 ) {
				getElement(fields[i] + "-required").className = "invalid-field";
				isValid = false;
			} else {
				getElement(fields[i] + "-required").className = "valid-field";
			}
		}	
		
		// check radio buttons
		var types = document.getElementsByName("organizationtype");

		var orgtype = "";

		for ( var k = 0; k < types.length; k++ ) {
			if ( types[k].checked ) {
				orgtype = types[k].value;
				break;
			}	
		}

		if ( orgtype == "Other" ) {
			orgtype = getElement("orgtypeother").value;
			getElement("other").value = "true";
		}

		if ( orgtype == "" ) {
			getElement("organizationtype-required").className = "invalid-field";
			isValid = false;
		} else {
			getElement("organizationtype-required").className = "valid-field";
		}

		getElement("orgtype").value = orgtype;

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

<div id="content" class="canvas">
<div id="main">

<div id="main-text">
<h1>Sign Up</h1>

<p>
Yes, I want the scoop!
</p>

<p>
Please keep me posted on HealthiVibe news and activities.
</p>


<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="http://healthivibe.us8.list-manage2.com/subscribe/post?u=e582b1f8073faef037bb17c1c&amp;id=92d6fbcdb0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label>Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label>First Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label>Last Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
</div>
<div class="mc-field-group">
	<label>Organization </label>
	<input type="text" value="" name="ORGANIZATI" class="" id="mce-ORGANIZATI">
</div>
<div class="mc-field-group input-group">
    <label>Role<span class="asterisk">*</span>
</label></strong>
    <ul><li><input type="radio" value="Patient" name="ROLE" id="mce-ROLE-0"><label for="mce-ROLE-0">Patient</label></li>
<li><input type="radio" value="Caregiver" name="ROLE" id="mce-ROLE-1"><label for="mce-ROLE-1">Caregiver</label></li>
<li><input type="radio" value="Sponsor|CRO" name="ROLE" id="mce-ROLE-2"><label for="mce-ROLE-2">Sponsor|CRO</label></li>
<li><input type="radio" value="Advocacy Organization" name="ROLE" id="mce-ROLE-3"><label for="mce-ROLE-3">Advocacy Organization</label></li>
<li><input type="radio" value="Technology Provider" name="ROLE" id="mce-ROLE-4"><label for="mce-ROLE-4">Technology Provider</label></li>
<li><input type="radio" value="Other" name="ROLE" id="mce-ROLE-5"><label for="mce-ROLE-5">Other</label></li>
</ul>
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_e582b1f8073faef037bb17c1c_92d6fbcdb0" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"></div>
</form>
</div>
<script type="text/javascript">
var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ORGANIZATI';ftypes[3]='text';fnames[4]='ROLE';ftypes[4]='radio';
try {
    var jqueryLoaded=jQuery;
    jqueryLoaded=true;
} catch(err) {
    var jqueryLoaded=false;
}
var head= document.getElementsByTagName('head')[0];
if (!jqueryLoaded) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    head.appendChild(script);
    if (script.readyState && script.onload!==null){
        script.onreadystatechange= function () {
              if (this.readyState == 'complete') mce_preload_check();
        }    
    }
}

var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
    head.appendChild(script);
    try {
        var validatorLoaded=jQuery("#fake-form").validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://healthivibe.us8.list-manage1.com/subscribe/post-json?u=e582b1f8073faef037bb17c1c&id=92d6fbcdb0&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                    beforeSubmit: function(){
                        $('#mce_tmp_error_msg').remove();
                        $('.datefield','#mc_embed_signup').each(
                            function(){
                                var txt = 'filled';
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        var bday = false;
                                        if (fields.length == 2){
                                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else {
									        if (/\[day\]/.test(fields[0].name)){
    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
									        } else {
    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                        }
	                                    }
                                    });
                            });
                        $('.phonefield-us','#mc_embed_signup').each(
                            function(){
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
                                    		this.value = '';
									    } else {
									        this.value = 'filled';
	                                    }
                                    });
                            });
                        return mce_validator.form();
                    }, 
                    success: mce_success_cb
                };
      $('#mc-embedded-subscribe-form').ajaxForm(options);
      
      
    });
}
function mce_success_cb(resp){
    $('#mce-success-response').hide();
    $('#mce-error-response').hide();
    if (resp.result=="success"){
        $('#mce-'+resp.result+'-response').show();
        $('#mce-'+resp.result+'-response').html(resp.msg);
        $('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                $('#mce-'+resp.result+'-response').show();
                $('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = $(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = $(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = $(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = $().parent(input_id).get(0);
                }
                if (f){
                    $(f).append(html);
                    $(input_id).focus();
                } else {
                    $('#mce-'+resp.result+'-response').show();
                    $('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            $('#mce-'+resp.result+'-response').show();
            $('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

</script>
<!--End mc_embed_signup-->


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
