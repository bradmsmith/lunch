<ul id="nav" class="drop">
  	<li><a href="/profile"><?php echo get_loggedin_user()->name;  ?></a>
    <ul>
 		<li>
			<img class="user-dropdown-avatar" src="<?php echo get_loggedin_user()->getIconURL('medium');?>" />
			<a href="/profile">Profile</a><br/>
			<a href="/settings">Settings</a><br/>
			<a href="/action/logout">Sign Out</a>
		</li>
    </ul>
  </li>
</ul>