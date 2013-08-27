<?php
/**
 * @todo clean up
 */

// Profile dropdown
if (elgg_is_logged_in()) {
	$name = explode(' ', elgg_get_logged_in_user_entity()->name);
	$icon = elgg_get_logged_in_user_entity()->getIconURL('small');
?>	
	<div id="site-dropdown">
	<li class="dropdown"><a href="/profile/"><img src="<?php echo $icon; ?>" style="float: right; padding-left: 10px;"/><?php echo $name[0]; ?><br/><span><?php echo $name[1]; ?></span></a>
	<ul><li><a href="/profile/">Profile</a></li>
	<li><a href="/settings/">Settings</a></li>
	<li><a href="/action/logout">Sign Out</a></li></ul>
	</li></ul>
	</div>

<?php 
} else {
	$body = elgg_view_form('login', array('action' => "{$login_url}action/login"), array('returntoreferer' => TRUE)); 
?>

	<div id="login-dropdown">
		<?php 
			echo elgg_view('output/url', array(
				'href' => 'login#login-dropdown-box',
				'rel' => 'popup',
				'class' => 'elgg-button elgg-button-dropdown',
				'text' => elgg_echo('login'),
			)); 
			echo elgg_view_module('dropdown', '', $body, array('id' => 'login-dropdown-box')); 
		?>
	</div>

<?php } ?>