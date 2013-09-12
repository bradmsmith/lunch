<?php
/**
 * CSS typography
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	Typography
*************************************** */
body {
	font-size: 80%;
	line-height: 1.4em;
	font-family: "Lucida Grande", Arial, Tahoma, Verdana, sans-serif;
}

a {
	color: #4690D6;
}

a:hover,
a.selected { <?php //@todo remove .selected ?>
	color: #555555;
	text-decoration: underline;
}

.elgg-item-school .elgg-image-block .elgg-body h3 a {
	font: .8em 'Segoe UI',Helvetica,Arial,'Sans-Serif';
	color: #000;
}

p {
	margin-bottom: 15px;
}

p:last-child {
	margin-bottom: 0;
}

pre, code {
	font-family: Monaco, "Courier New", Courier, monospace;
	font-size: 12px;
	
	background:#EBF5FF;
	color:#000000;
	overflow:auto;

	overflow-x: auto; /* Use horizontal scroller if needed; for Firefox 2, not needed in Firefox 3 */

	white-space: pre-wrap;
	word-wrap: break-word; /* IE 5.5-7 */
	
}

pre {
	padding:3px 15px;
	margin:0px 0 15px 0;
	line-height:1.3em;
}

code {
	padding:2px 3px;
}

.elgg-monospace {
	font-family: Monaco, "Courier New", Courier, monospace;
}

blockquote {
	line-height: 1.3em;
	padding:3px 15px;
	margin:0px 0 15px 0;
	background:#EBF5FF;
	border:none;
	
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}

h1, h2, h3, h4, h5, h6 {
	font-weight: bold;
	color: #0054A7;
}

h1 { font-size: 1.8em; }
h2 { font-size: 1.5em; line-height: 1.1em; padding-bottom:5px}
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }

.elgg-heading-site, .elgg-heading-site:hover {
	font-size: 2em;
	line-height: 1.4em;
	color: white;
	font-style: italic;
	font-family: Georgia, times, serif;
	text-shadow: 1px 2px 4px #333333;
	text-decoration: none;
}

.elgg-heading-main {
	float: left;
	max-width: 530px;
	margin-right: 10px;
}
.elgg-heading-basic {
	color: #0054A7;
	font-size: 1.2em;
	font-weight: bold;
}

.elgg-subtext {
	color: #666666;
	font-size: 85%;
	line-height: 1.2em;
	font-style: italic;
}

.elgg-text-help {
	display: block;
	font-size: 85%;
	font-style: italic;
}

.elgg-quiet {
	color: #666;
}

.elgg-loud {
	color: #0054A7;
}

/* ***************************************
	USER INPUT DISPLAY RESET
*************************************** */
.elgg-output {
	margin-top: 10px;
}

.elgg-output dt { font-weight: bold }
.elgg-output dd { margin: 0 0 1em 1em }

.elgg-output ul, .elgg-output ol {
	margin: 0 1.5em 1.5em 0;
	padding-left: 1.5em;
}
.elgg-output ul {
	list-style-type: disc;
}
.elgg-output ol {
	list-style-type: decimal;
}
.elgg-output table {
	border: 1px solid #ccc;
}
.elgg-output table td {
	border: 1px solid #ccc;
	padding: 3px 5px;
}
.elgg-output img {
	max-width: 100%;
	height: auto;
}


/* This CSS resource incorporates links to font software which is
the valuable licensed property of Monotype Imaging and/or
its suppliers and its use is covered under the terms of the
Web Font Software License and Services Agreement agreed to between you
and Monotype Imaging. Except as specifically permitted by the license,
you may not redistribute, copy, convert, modify or reverse engineer
this font software. Please contact Monotype Imaging for any questions
regarding Web Fonts:  http://www.fontslive.com/ */

@font-face {
font-family: "Segoe UI";
src: url("http://cdn-resources.windowsphone.com/Resources/Fonts/Apollo/SegoeUI-webfonts-WestEuropean/Segoe-UI/3ca1af51-981a-4e1c-b9c6-a66d0a5fe3c0-3.woff") format("woff");
font-style: normal;
font-weight: normal;
}
@font-face {
font-family: "Segoe UI Light";
src: url("http://cdn-resources.windowsphone.com/Resources/Fonts/Apollo/SegoeUI-webfonts-WestEuropean/Segoe-UI-Light/45a13f65-5199-4a22-821e-9b7d7795518e-3.woff") format("woff");
font-style: normal;
font-weight: normal;
}
@font-face {
font-family: "Segoe UI Bold";
src: url("http://cdn-resources.windowsphone.com/Resources/Fonts/Apollo/SegoeUI-webfonts-WestEuropean/Segoe-UI-Bold/f5dd91f1-2016-48f8-a46c-e3418a52c859-3.woff") format("woff");
font-style: normal;
font-weight: normal;
}
@font-face {
font-family: "Segoe UI Semibold";
src: url("http://cdn-resources.windowsphone.com/Resources/Fonts/Apollo/SegoeUI-webfonts-WestEuropean/Segoe-UI-Semibold/afae52c9-5d08-4193-8984-bb4346fd493c-3.woff") format("woff");
font-style: normal;
font-weight: normal;
}
@font-face {
font-family: "Segoe UI Semilight";
src: url("http://cdn-resources.windowsphone.com/Resources/Fonts/Apollo/SegoeUI-webfonts-WestEuropean/Segoe-UI-SemiLight/58e25a2b-5ed7-47bc-abc4-2f5c14b43227-3.woff") format("woff");
font-style: normal;
font-weight: normal;
}
