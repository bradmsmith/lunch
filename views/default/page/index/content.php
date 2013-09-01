<?php
	/**
	* Index page
 	* @uses $vars['lunch_count']
 	* @uses $vars['lunch_count_future']
 	*/

	$login = elgg_view_form('login', array('action' => "{$login_url}action/login"), array('returntoreferer' => TRUE)); 

?>

<img src="" width="100%" height="575"/>

<div class="desc">
	<p>It seems like such a simple idea. We’ll invite people for free food and preach them the gospel of Jesus Christ. Once a week we can talk about the Bible during lunch on your campus by having a Christian Club. And yet, this simple idea will involve your entire life.</p>
	<p>Representing the gospel is not just something you can do once a week, it is something you are.  It is a 24/7 lifestyle.</p>
	<p> This site will equip you to evangelize at your high school.  There are so many who need to know Jesus but won’t read the Bible or go to church.  Let’s take Jesus to them.</p>
	<a id="signup_button" href="/register">Sign Up</a>
</div>


<h3><?php echo $vars['lunch_count_future']; ?> upcoming campus lunches!</h3><br/><br/>

<h3>Browse <?php echo $vars['lunch_count']; ?> campus lunches</h3>