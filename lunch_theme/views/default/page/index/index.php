<?php
	/**
	* Index page
 	* @uses $vars['lunch_count']
 	* @uses $vars['lunch_count_future']
 	*/

	// $login = elgg_view_form('login', array('action' => "{$login_url}action/login"), array('returntoreferer' => TRUE)); 

?>

<div class="banner" style="width: 100%; height: 542px; background: url('/mod/lunch_theme/graphics/banner1.jpg') center no-repeat; margin-bottom: 25px;">
	<div class="desc" style="width: 400px; margin-left: 500px; padding-top: 50px;">
		
		<?php
		echo elgg_view_form('login', array('action' => "/action/login"));
		?><br/>
		<p>It seems like such a simple idea. We’ll invite people for free food and preach them the gospel of Jesus Christ. Once a week we can talk about the Bible during lunch on your campus by having a Christian Club. And yet, this simple idea will involve your entire life.</p>
		<p>Representing the gospel is not just something you can do once a week, it is something you are.  It is a 24/7 lifestyle.</p>
		<p> This site will equip you to evangelize at your high school.  There are so many who need to know Jesus but won’t read the Bible or go to church.  Let’s take Jesus to them.</p>

		<?php 
			echo elgg_view_form('register', array('action' => '/action/register'), array(
				'friend_guid' => (int) get_input('friend_guid', 0),
				'invitecode' => get_input('invitecode')
			));
		 ?>
		
	</div>	
</div>
<br/>


