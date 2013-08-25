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
		<img src="/mod/lunch_theme/graphics/campuslunches.png" alt="Campus Lunches" width="125" />
	</a><br/><br/>
</div>

<div class="desc">
<h1>Campus Lunch.</h1>
<p>It seems like such a simple idea. We’ll invite people for free food and preach them the gospel of Jesus Christ. Once a week we can talk about the Bible during lunch on your campus by having a Christian Club. And yet, this simple idea will involve your entire life.</p>
<p>Representing the gospel is not just something you can do once a week, it is something you are.  It is a 24/7 lifestyle.</p>
<p> This site will equip you to evangelize at your high school.  There are so many who need to know Jesus but won’t read the Bible or go to church.  Let’s take Jesus to them.</p>
<a id="signup_button" href="/register">Sign Up</a>
</div>

<br/><br/>
$login_box

<div class="bannerbox">
</div>


HTML;


