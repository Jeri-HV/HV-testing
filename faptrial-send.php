<?php 
include_once("lib/utils.php");
include_once("lib/sendmail.php");

function clean_data_field($string) {
    //$string = preg_replace('/[\r\n]/', "", $string);
    $string = str_replace("<", "&lt;", $string);
    $string = str_replace(">", "&gt;", $string);
    $string = str_replace("\\'", "'", $string);
    $string = str_replace("\'", "'", $string);
    $string = str_replace("\"", "", $string);
    $string = str_replace("\\", "", $string);
    return $string;
}

session_start();

$host = "localhost";
$port = 25;
$from = "info@healthivibe.com";
$fromName = "HealthiVibe";

$phone = @clean_data_field($_POST["phone"]);
$name = @clean_data_field($_POST["name"]);
$zip = @clean_data_field($_POST["zip"]);
$citystate = @clean_data_field($_POST["citystate"]);
$email = @clean_data_field($_POST["email"]);
$preferred = @clean_data_field($_POST["preferred"]);
$interested = @clean_data_field($_POST["interested"]);
$source = @clean_data_field($_POST["source"]);

$subject = "FAP Clinical Trial Contact Form Submission";
$message = "Form submission received, details below:". "<br/><br/>";
$message = $message . "Name: ". $name . "<br/>";
$message = $message . "Phone: ". $phone . "<br/>";
$message = $message . "Email: ". $email . "<br/>";
$message = $message . "City, State: ". $citystate . "<br/>";
$message = $message . "Zip: ". $zip . "<br/><br/>";
$message = $message . "Preferred Method of Contact: ". $preferred . "<br/>";
$message = $message . "Interested in: ". $interested . "<br/>";

$message = $message . "<br/>Source: ". $source . "<br/>";

//$sec = strtolower(to_str($_POST["security_code"]));
//$check = strtolower(to_str($_SESSION['security_code']));

//if ( $check != $sec ) {
//        unset($_SESSION['security_code']);
//        header("Location: faptrial.html?captcha=false&email=". urlencode($email) . "&name=". urlencode($name) . "&phone=". urlencode($phone) . "&citystate=". urlencode($citystate) . "&zip=". urlencode($zip) . "&preferred=". urlencode($preferred) . "&interested=". urlencode($interested) . "&source=". urlencode(source));
//        exit;
//}

//unset($_SESSION['security_code']);

$to = array("info@healthivibe.com", "clinical@canprevent.com");
@send_mail($from, $fromName, $to, $subject, $message);

header( "Location: faptrial-sent.html" );

?>
