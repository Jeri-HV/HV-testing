<?php
$uri = $_SERVER["REQUEST_URI"];
$base = "/";
if (strpos($uri, '/healthivibe/') !== FALSE)
    $base = "/healthivibe/";
?>
<div id="footer" style="width: 100%">
<div class="canvas">
<a href="<?php echo $base; ?>index.html">Home</a>
<a href="<?php echo $base; ?>terms.html">Terms of Use</a>
<a href="<?php echo $base; ?>privacy.html">Privacy Policy</a>
<a href="<?php echo $base; ?>contact.html">Contact Us</a>
<div style="clear: both"></div>
</div>
</div>
<div id="copyright">&copy;2014 HealthiVibe, LLC &middot; All Rights Reserved.</div>
<!-- footer -->
