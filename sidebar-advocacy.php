<?php
define('WP_USE_THEMES', false);
require('blog/wp-blog-header.php');
?>

<?php

$page = get_posts (
	array (
		'name' => 'advocacy-partners', 
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
<a href="http://diabeteshandsfoundation.org" target="_blank"><img src="images/partners/diabetes-hands.png" border="0" title="Diabetes Hands Foundation" alt="Diabetes Hands Foundation" /></a><br/>
</div>

<div>
<a href="http://www.partnersinresearch.org" target="_blank"><img src="images/partners/pir.png" border="0" title="Partners in Research" alt="Partners in Research" /></a><br/>
</div>

<div style="color: #0089bc">
<a href="http://www.cff.org" target="_blank">Cystic Fibrosis Foundation</a><br/>
</div>

<div>
<a href="http://www.wilsonsdisease.org" target="_blank"><img src="images/partners/wda.gif" border="0" title="Wilson Disease Association" alt="Wilson Disease Association" /></a><br/>
</div>
-->