<?php
$uri = $_SERVER["REQUEST_URI"];
$base = "";
$ss = "/style.css";
$m = 0;
$base = $_SERVER["DOCUMENT_ROOT"];
if (strpos($uri, '/healthivibe/') !== FALSE) {
    $ss = "/healthivibe". $ss;
}
$m = filemtime($base . $ss);
$ss = $ss . "?ts=". $m;
?>
<link rel="stylesheet" href="<?php echo $ss; ?>" type="text/css" />
