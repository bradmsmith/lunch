<?php
/**
 * Admin settings (moderators) for lunch plugin
 *
 */
?>

<p>
  <?php echo elgg_echo('lunch:settings:moderators'); ?><br/>
 
	<textarea name='params[moderators]' cols=50 rows=5><?php echo $vars['entity']->moderators; ?></textarea>
	
</p>