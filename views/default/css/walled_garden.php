<?php
/**
 * Walled garden CSS
 */

$url = elgg_get_site_url();
$background = array('#00bff3', '#3cb878', '#eae023', '#f06ea7', '#f79421');

?>
body {
	background-color: <?php echo $background[rand(0,4)]; ?>;
}
#signup_button {
	height: 28px;
	font-size: 17px;
	line-height: 25px;
	padding: 0px 50px;
	letter-spacing: 0px !important;
	vertical-align: 6px;
	border-radius: 6px 6px 6px 6px;
	background: -moz-linear-gradient(center top , rgb(124, 177, 91) 0px, rgb(105, 157, 72) 100%) repeat scroll 0% 0% transparent;
	border-color: rgba(0, 0, 0, 0.65);
	display: inline-block;
	text-decoration: none !important;
	cursor: pointer;
	font-family: "Helvetica Neue",Arial,Helvetica,sans-serif;
	color: rgb(255, 255, 255);
	font-weight: bold;
	text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.32);
	border-width: 1px;
	border-style: solid;
	box-shadow: 0px 1px 0px 0px rgba(255, 255, 255, 0.6) inset;
	-moz-user-select: none;
}
.elgg-body-walledgarden {
	margin: 100px auto 0 auto;
	position: relative;
	width: 530px;
}
.elgg-module-walledgarden {
	position: absolute;
	top: 0;
	left: 0;
}
.elgg-module-walledgarden > .elgg-head {
	height: 17px;
}
.elgg-module-walledgarden > .elgg-body {
	padding: 0 10px;
}
.elgg-module-walledgarden > .elgg-foot {
	height: 17px;
}

.elgg-col > .elgg-inner {
	margin: 0 0 0 5px;
}
.elgg-col:first-child > .elgg-inner {
	margin: 0 5px 0 0;
}
.elgg-col > .elgg-inner {
	padding: 0 8px;
}

.elgg-walledgarden-single > .elgg-body {
	padding: 0 18px;
}

.elgg-module-walledgarden-login {
	margin: 0;
}
.elgg-body-walledgarden h3 {
	font-size: 1.5em;
	line-height: 1.1em;
	padding-bottom: 5px;
}

.elgg-heading-walledgarden {
	margin-top: 60px;
	line-height: 1.1em;
}

h1, h2, h3, h4, h5, h6 {
	color: #666;
}

a {
	color: #999;
}