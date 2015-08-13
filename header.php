<?php 
$uri = $_SERVER["REQUEST_URI"];
$base = "/";
if (strpos($uri, '/healthivibe/') !== FALSE)
	$base = "http://localhost/projects/healthivibe/";
	//$base = "/healthivibe/";
?>
<div id="header" class="canvas">
<a href="<?php echo $base ?>"><img id="logo" src="<?php echo $base; ?>images/healthivibe-logo.png" border="0"></a>

<div id="mobilemenu">
<a href="javascript:showMenu()"><img src="<?php echo $base; ?>images/menu.png" border="0" /></a>
</div>

<div id="topmenu">
<ul class="menu"><li><a href="<?php echo $base ?>">Home</a></li>
  <li class="drop">
    About<img class="down-arrow" src="<?php echo $base; ?>images/down.png"/>
    <ul>
      <li class="first"><a href="<?php echo $base; ?>about.html">Our Philosophy</a></li>
       <li><a href="<?php echo $base; ?>team.html">Our Team</a></li>
      <li><a href="<?php echo $base; ?>partners.html">Our Partners</a></li>
      <li class="last"><a href="<?php echo $base; ?>contact.html">Contact Us</a></li>
    </ul>
  </li>
  <li class="drop">
    Our Work<img class="down-arrow" src="<?php echo $base; ?>images/down.png"/>
    <ul>
         <li class="first"><a href="<?php echo $base; ?>insights.html">Our Insights</a></li>
         <li class="last"><a href="<?php echo $base; ?>what-we-do.html">What We Do</a></li>
     </ul>
  </li>
  <li class="drop">
  	Buzz<img class="down-arrow" src="<?php echo $base; ?>images/down.png"/>
  	<ul>
        <li class="first"><a href="<?php echo $base; ?>blog/in-the-news">In the News</a></li>
  	<li><a href="<?php echo $base; ?>blog/upcoming-conferences">Upcoming Conferences</a></li>
	<li><a href="<?php echo $base; ?>blog/">Patient Lens</a></li>
	<li class="last"><a href="<?php echo $base; ?>connect.html">Newsletter Sign Up</a></li>	
	</ul>
  	</li>
  	<li class="drop">
  	<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-558193b528c8705a" async="async"></script>
  	</li>
</ul>

</div>
<!-- topmenu -->

<!--div id="searchmenu">
<div style="float: right;"><ul class="menu"><li><a href="<?php echo $base; ?>connect.html">Sign Up</a></li></ul></div>
<input class="sb-inactive" style="width: 180px" id="searchbox" type="text" value="Search Site">
</div-->
<!-- searchmenu -->

</div>
<!-- header -->

