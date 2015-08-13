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
$subject = "Share my story";
$condition = @clean_data_field($_POST["condition"]);
$participant = @clean_data_field($_POST["participant"]);
$firstName = @clean_data_field($_POST["firstname"]);
$message = @clean_data_field($_POST["message"]);
$message = str_replace("\r\n", "<br/>", $message);
$message = str_replace("\n", "<br/>", $message);

$sec = strtolower(to_str($_POST["security_code"]));
$check = strtolower(to_str($_SESSION['security_code']));

if ( $check != $sec ) {
        unset($_SESSION['security_code']);
        header("Location: share.html?captcha=false&email=". urlencode($email) . "&firstname=". urlencode($firstName) . "&condition=". urlencode($condition) . "&participant=". urlencode($participant) . "&message=". urlencode($message));
        exit;
}

unset($_SESSION['security_code']);

$to = "jeri.burtchell@healthivibe.com";

$buf = "First name: ". $firstName . "<br/>";
$buf = $buf . "Email: ". $email . "<br/>";
$buf = $buf . "Condition: ". $condition . "<br/>";
$buf = $buf . "Study Participant: ". $participant . "<br/>";
$buf = $buf . "Story (below)<br/><br/>";

$buf = $buf . $message . "<br/><br/>";
$buf = $buf . "--- Do not reply to this message ---";

@send_mail($from, $fromName, $to, $subject, $buf);

header( "Location: share-sent.html" );

?>
