<?php
/**
 * Dropdown menu
 *
 */

echo '<ul id="nav" class="drop"><li><a href="/profile">';
echo get_loggedin_user()->name;
echo '</a><ul><li><a href="/settings"><img class="user-dropdown-avatar" src="';
echo get_loggedin_user()->getIconURL('tiny');
echo '" />Account Settings</a></li><li><a href="/action/logout">Sign Out</a></li></ul></li></ul>';