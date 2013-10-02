<?php
/**
 *  CSS for lunch
 */
?>

/******** HEADER ********/
.elgg-page-body {
	background-color: #FFF;
}

.elgg-page-header {
	width: 100%;
	height: 70px;
	margin: 0;
	background-color: #FFFFFF;
	border-bottom: 1px solid #666;
}

#header-logo {
	width: 25px;
	padding: 20px 40px 17px 40px;;
	float: left;
}
#header-logo:hover {
	border-bottom: 4px solid black;
}


/******** DRAWER ********/
.lunch-drawer {
	background-color: #333; 
	margin: auto;
	width: 100%;
}

.elgg-system-messages {
	margin-top: 75px;
}

/******** SITE MENU ********/
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 100%
}

.elgg-menu-site {
	z-index: 10000;
	padding: 0 0 0 65px;
}

.elgg-menu-site > li > a, #login > a{
	font: 18px/24px 'Segoe UI',Helvetica,Arial,'Sans-Serif';
	color: #000;
	padding-right: 35px;
	text-size: 14px;
}

.elgg-menu-site > li > a:hover {
	text-decoration: none;
}

.elgg-menu-site > li > a {
	padding: 23px 25px 19px 25px;
}

.elgg-menu-site-default > li {
	float: left;
}

.elgg-menu-item-topics a:hover, .elgg-menu-item-topics.elgg-state-selected a { 
	border-bottom: 4px solid #00bff3;
}
.elgg-menu-item-schools a:hover, .elgg-menu-item-schools.elgg-state-selected a {
	border-bottom: 4px solid #3cb878;
}
.elgg-menu-item-calendar a:hover, .elgg-menu-item-calendar.elgg-state-selected a {
	border-bottom: 4px solid #eae023;
}
.elgg-menu-item-howto a:hover, .elgg-menu-item-howto.elgg-state-selected a {
	border-bottom: 4px solid #f79421;
}

/******** DROPDOWN ********/

#login a:hover {
	text-decoration: none;
}

#login {
	float: right;
}

#login {
	margin: 23px 15px 10px 10px;
}
#login > a:after {
	content: " \25BC ";
	font-size: 12px;
}
#login-dropdown-box {
	z-index: 2001;
	border: none;
	box-shadow: none;
}


/******* LIST ********/
.lunch-list li {
	display: inline;
	float: left;
	width: 225px;
	height: 166px;
	margin: 0 15px 30px 0;
	border: 1px solid #333;
	border-bottom: none;
	position: relative;
}

.lunch-list li p {
	border-top: 1px solid #333;
	border-bottom: 1px solid #333;
	background-color: #fff;
	position: absolute;
	bottom: 0;
	width: 100%;
	padding: 8px 0;
}

.lunch-list li img {
	height: 150px;
}

/******** FORMS ********/
input, textarea {
	border: 1px solid #ccc;
	color: #666;
	font: 120% Arial, Helvetica, sans-serif;
	padding: 5px;
	width: auto;	
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

/******** BUTTON ********/

/******** FOOTER ********/
.elgg-page-footer {
	margin-top: 40px; 
	border-top: 2px solid rgb(180, 202, 222);
	background-color: rgb(201, 225, 247);
	height: 100px;
}
