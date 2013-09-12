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
?>

<style>
.button {
	margin-left: 5px;
	padding: 7px 15px;
	font-size: 13px;
	font-weight: bold;
	border: 1px solid #ddd;
	box-shadow: 0 1px 3px rgba(0,0,0,0.05);
	vertical-align: middle;
	cursor: pointer;
	
	color: #333;
	text-shadow: 0 1px 0 rgba(255,255,255,0.9);
	white-space: nowrap;
	background-color: #eaeaea;
	
	background-image: linear-gradient(#fafafa, #eaeaea);
	background-repeat: repeat-x;
	border-radius: 3px;
	border: 1px solid #ddd;
	border-bottom-color: #c5c5c5;
	box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}
.button:hover {
	text-decoration: none;
}
</style>

	<div id="login-dropdown" style="margin-top: 15px">
		<!-- a class="button primary" href="/signup">Sign up</a -->
      <a class="button" href="/login">Sign in</a>
    </div>
<?php
}
?>