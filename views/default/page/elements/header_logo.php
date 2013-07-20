<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<a href="<?php echo $site_url; ?>">
	<img id="header-logo" src="/mod/campuslunch/graphics/campuslunches1.png" alt="Campus Lunches"/>
</a>