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

$email = @clean_data_field($_POST["email"]);
$subject = @clean_data_field($_POST["subject"]);
$message = @clean_data_field($_POST["message"]);
$message = str_replace("\r\n", "<br/>", $message);
$message = str_replace("\n", "<br/>", $message);

$sec = strtolower(to_str($_POST["security_code"]));
$check = strtolower(to_str($_SESSION['security_code']));

if ( empty($sec) || $check != $sec ) {
        unset($_SESSION['security_code']);
        header("Location: contact.html?captcha=false&email=". urlencode($email) . "&subject=". urlencode($subject) . "&message=". urlencode($message));
        exit;
}

unset($_SESSION['security_code']);

$to = "info@healthivibe.com";

$message = "This message was sent by ". $email . ": <br/><br/>". $message . "<br/><br/>";
$message = $message . "--- Do not reply to this message ---";
$subject = "Healthivibe request: ". $subject;

@send_mail($from, $fromName, $to, $subject, $message);

header( "Location: message-sent.html" );

?>
