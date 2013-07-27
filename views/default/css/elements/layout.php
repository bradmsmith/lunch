<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */

// Site color scheme, move to start.php as global variable maybe?
$colors = array(
	'blue' => '#00BFF3',
	'green' => '#3CB878',
	'yellow' => '#EAE023',
	'pink' => ' #F06EA7',
	'orange' => '#F79421',
);

// always returns css, need to fix
switch(elgg_get_context()) {
	case 'topic': 
		$color = $colors['green'];
		break;
	case 'lunch':
		$color = $colors['yellow'];
		break;
	case 'groups': 
		$color = $colors['orange'];
	case ' how-to':
		$color = $colors['pink'];
	default:
		$color = $colors['blue'];
}

?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>

body {
	border-top: 8px solid <?php echo $color; ?>;
	<?php echo elgg_get_context(); ?>
}

.elgg-page {
	background-color: #FFF;
}

.elgg-page-default {
	min-width: 998px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 107px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding-top: 20px;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	width: 990px;
	margin: 0 auto;
	text-align: right;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
	margin: 20px 0 0 0;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}
#header-logo {
	width: 210px;
	padding: 30px 20px;
	float: left;
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	background-color: #FFF;
}
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-error {
	margin-top: 20px;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 60px 20px 10px;
	float: left;
	width: 210px;
	margin: 0 0 0 10px;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px;
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	color: #999;
}
.elgg-page-footer a:hover {
	color: #666;
}
