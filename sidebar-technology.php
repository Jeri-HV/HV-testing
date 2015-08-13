<?php
define('WP_USE_THEMES', false);
require('blog/wp-blog-header.php');
?>

<div class="sidebar-heading"><span>Technology Partners</span></div>

<?php

$page = get_posts (
	array (
		'name' => 'technology-partners', 
		'post_type' => 'page'
	) 
);
	
if ( $page )
{
	echo $page[0]->post_content;
}
?>

<!--
<div>
<a href="http://www.clinpal.com" target="_blank"><img src="images/partners/partner_clinpal.jpg" border="0" title="Clinpal" alt="Clinpal" /></a><br/>
</div>

<div>
<a href="http://mprove.com" target="_blank"><img src="images/partners/partner_mprove.jpg" border="0" title="mProve Health" alt="mProve Health" /></a><br/>
</div>

<div>
<a href="http://www.tmsbioscience.com" target="_blank"><img src="images/partners/partner_tms.jpg" border="0" title="TMS Bioscience" alt="TMS Bioscience" /></a><br/>
</div>

<div>http
<a href="http://www.telcare.com" target="_blank"><img src="images/partners/telcare.png" border="0" title="Telcare" alt="Telcare" /></a><br/>
</div>

<div>
<a href="http://www.healarium.com" target="_blank"><img src="images/partners/healarium.png" border="0" title="Healarium" alt="Healarium" /></a><br/>
</div>

<div>
<a href="http://clientcaresolutions.com/markets-served/apps-products/reminderz/" target="_blank"><img src="images/partners/reminderz.jpg" border="0" title="Reminderz" alt="Reminders" /></a><br/>
</div>
-->
