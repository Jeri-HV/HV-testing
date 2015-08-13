<?php
require_once("class.phpmailer.php");
include_once("class.smtp.php");

function send_mail_from($from, $fromName, $to, $subject, $body, $host, $port) {
	$mail = new PHPMailer();
        $mail->Timeout = 30;
        $mail->SMTPDebug = 1;
        $mail->IsSMTP(); // telling the class to use SMTP
        //$mail->Host = "relay-hosting.secureserver.net";
        $mail->Host = $host;
	if ($port > 0) {
        $mail->Port = $port;
	}

        $mail->FromName = $fromName;
        $mail->From = $from;

	$adds = array();
	if ( is_array($to) == FALSE ) {
		$adds[0] = $to;
	} else {
		for ( $a = 0; $a < count($to); $a++ ) {
			$adds[] = $to[$a];
		}
	}

	for ( $a = 0; $a < count($adds); $a++ ) {
		$mail->AddAddress($adds[$a]);
	}

        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->IsHTML(true);

        if(!$mail->Send()) {
        $attempt= FALSE;
        } else {
        $attempt= TRUE;
        }

        return $attempt;

}

function send_mail($from, $fromName, $to, $subject, $body) {
	return @send_mail_from($from, $fromName, $to, $subject, $body, "localhost", 25);
}

//$success = sendMail("submissions@northwindmagazine.com", "Northwind Magazine", "thoward1223@yahoo.com", "Submission received", "Hi Tom! Thanks for your submission.");
//echo "<HTML><BODY><h1>Results</h1>". $success . "</BODY></HTML>";
?>
