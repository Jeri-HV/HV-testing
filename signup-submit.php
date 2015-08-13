<?php 
include_once("lib/utils.php");
include_once("lib/sendmail.php");
include_once("lib/sql.php");

function clean_data_field($string) {
    $string = preg_replace('/[\r\n]/', "", $string);
    $string = str_replace("<", "&lt;", $string);
    $string = str_replace(">", "&gt;", $string);
    $string = str_replace("\\'", "'", $string);
    $string = str_replace("\'", "'", $string);
    $string = str_replace("\"", "", $string);
    $string = str_replace("\\", "", $string);
    return $string;
}

session_start();

$email = @clean_data_field($_POST["email"]);
$firstName = @clean_data_field($_POST["firstname"]);
$lastName = @clean_data_field($_POST["lastname"]);
$organizationName = @clean_data_field($_POST["organization"]);
$organizationType = @clean_data_field($_POST["orgtype"]);
$other = @clean_data_field($_POST["other"]);
$sec = strtolower(to_str($_POST["security_code"]));
$check = strtolower(to_str($_SESSION['security_code']));

if ( $check != $sec ) {
        unset($_SESSION['security_code']);
        header("Location: connect.html?captcha=false&email=". urlencode($email) . "&firstname=". urlencode($firstName) . "&lastname=". urlencode($lastName) . "&organization=". urlencode($organizationName) . "&orgtype=". urlencode($organizationType) . "&other=". $other);
        exit;
}

unset($_SESSION['security_code']);

$stmt = "insert into healthivibe.mailinglist ( email, firstName, lastName, organizationName, organizationType ) ";
$stmt = $stmt . "values ( ". get_sql_string($email) . ", ". get_sql_string($firstName) . ", ". get_sql_string($lastName) . ", ";
$stmt = $stmt . get_sql_string($organizationName) . ", ". get_sql_string($organizationType) . " )";

echo $stmt;

@sql_execute($stmt); 

$host = "localhost";
$port = 25;

$from = "info@healthivibe.com";
$fromName = "HealthiVibe";
$to = "info@healthivibe.com";
$subject = "New account creation for user ". $email;
$message = "A new account has been created for ". $email . ", details: <br/><br/>";
$message = $message . "First name: ". $firstName . "<br/>";
$message = $message . "Last name: ". $lastName . "<br/>";
$message = $message . "Email: ". $email . "<br/>";
$message = $message . "Organization: ". $organizationName . "<br/>";
$message = $message . "Type: ". $organizationType . "<br/><br/>";

@send_mail($from, $fromName, $to, $subject, $message);
header( "Location: connect-complete.html" );
?>
