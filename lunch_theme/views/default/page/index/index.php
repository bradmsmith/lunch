<?php
	/**
	* Index page
 	* @uses $vars['lunch_count']
 	* @uses $vars['lunch_count_future']
 	*/
?>

<style>
body {
	background-image: url('/mod/lunch_theme/graphics/banner<?php echo rand(1,4)?>.jpg');
	background-size: cover;
}
.elgg-page-body, .elgg-page {
	background: none;
}
.elgg-page-footer {
	display: none;
}
</style>


<div style="width: 600px; margin: 150px auto; background-color:rgba(255,255,255,0.75); padding 20x;">
	<div style="width: 250px; float: left; padding: 20px;">
		<h2>Sign Up</h2>
		<?php 
			echo elgg_view_form('register', array('action' => '/action/register'), array(
				'friend_guid' => (int) get_input('friend_guid', 0),
				'invitecode' => get_input('invitecode')
			));
		 ?>	
	</div>
	<div style="width: 200; padding: 20px">
		<p>It seems like such a simple idea. We’ll invite people for free food and preach them the gospel of Jesus Christ. Once a week we can talk about the Bible during lunch on your campus by having a Christian Club. And yet, this simple idea will involve your entire life.</p>
		<p>Representing the gospel is not just something you can do once a week, it is something you are.  It is a 24/7 lifestyle.</p>	
		<p> This site will equip you to evangelize at your high school.  There are so many who need to know Jesus but won’t read the Bible or go to church.  Let’s take Jesus to them.</p>
	</div>	
</div>



