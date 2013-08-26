<?php
/**
 * Site navigation menu
 *
 * @uses $vars['menu']['default']
 * @uses $vars['menu']['more']
 */

$default_items = elgg_extract('default', $vars['menu'], array());
$more_items = elgg_extract('more', $vars['menu'], array());

// Show Login box if not logged in
if (elgg_is_logged_in()) {
	$name = explode(' ', elgg_get_logged_in_user_entity()->name);
	$icon = elgg_get_logged_in_user_entity()->getIconURL('small');
} else {
	$name = '';
	$icon = '';
}

echo '<ul class="elgg-menu elgg-menu-site elgg-menu-site-default clearfix">';
foreach ($default_items as $menu_item) {
	echo elgg_view('navigation/menu/elements/item', array('item' => $menu_item));
}

// Profile dropdown
echo '<li class="dropdown"><a href="/profile"><img src="' . $icon . '" style="float: right; padding-left: 10px;"/>' . $name[0] . '<br/><span style="font-size: .8em;">' . $name[1] . '</span></a>';
echo '<ul><li><a href="/profile/">Profile</a></li>';
echo '<li><a href="/settings/">Settings</a></li>';
echo '<li><a href="/action/logout">Sign Out</a></li></ul>';
echo '</li></ul>';