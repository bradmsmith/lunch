<ul id="nav" class="drop">
  	<li><a href="/profile"><?php echo get_loggedin_user()->name;  ?></a>
    <ul>
 		<li><a href="/settings"><img class="user-dropdown-avatar" src="<?php echo get_loggedin_user()->getIconURL('tiny');?>" />Account Settings</a></li>
		<li><a href="/action/logout">Sign Out</a></li>
    </ul>
  </li>
</ul>