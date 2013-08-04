<?php
/**
 * Walled garden login
 */

$title = elgg_get_site_entity()->name;
$welcome = elgg_echo('walled_garden:welcome');
$welcome .= ': <br/>' . $title;

$menu = elgg_view_menu('walled_garden', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-general elgg-menu-hz',
));

$login_box = elgg_view('core/account/login_box', array('module' => 'walledgarden-login'));

echo <<<HTML

<div style="width: 275px">
	<a href="/" class="login-logo">
		<img src="/mod/missionfield/graphics/campuslunches.png" alt="Campus Lunches" width="125" />
	</a><br/><br/>
	$login_box
</div>

<div>
	<p>
		Campus Lunch.  It seems like such a simple idea.  We’ll invite people for free food and preach them the gospel of Jesus Christ.  Once a week we can talk about the Bible during lunch on your campus by having a Christian Club.  And yet, this simple idea will involve your entire life.  Representing the gospel is not just something you can do once a week, it is something you are.  It is a 24/7 lifestyle.  This book will equip you to evangelize at your high school.  There are so many who need to know Jesus but won’t read the Bible or go to church.  Let’s take Jesus to them. 
	</p>
</div>

<div class="login-foot">
	<h1 id="signup">
		New to Campus Lunches?
		<a id="signup_button" href="/register">Sign Up</a>
	</h1>
</div>

HTML;


