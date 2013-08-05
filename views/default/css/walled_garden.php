<?php
/**
 * Walled garden CSS
 */
?>

.bannerbox {
	margin: 0 auto;
background: url('/mod/lunch_theme/graphics/bannerpic<?php echo rand(1,3); ?>.jpg') no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
height: 225px;

}

.bannerbox .desc {
	color: #FFF;
	width: 350px;
	float: right;
	background-color:rgba(50, 50, 50,0.8);
	padding: 20px;
}

.elgg-body-walledgarden {
	margin: 100px auto 0 auto;
	position: relative;
	width: 90%;
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