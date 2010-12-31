<?php
/**
 * Elgg primary CSS view
 *
 * @package Elgg.Core
 * @subpackage UI
 */

// check if there is a theme overriding the old css view and use it, if it exists
$old_css_view = elgg_get_view_location('css');
if ($old_css_view != "{$CONFIG->viewpath}") {
	echo elgg_view('css', $vars);
	return true;
}


echo elgg_view('css/elements/reset', $vars);
echo elgg_view('css/elements/core', $vars);
echo elgg_view('css/elements/typography', $vars);
echo elgg_view('css/elements/spacing', $vars);
echo elgg_view('css/elements/navigation', $vars);
echo elgg_view('css/elements/grid', $vars);
echo elgg_view('css/elements/forms', $vars);
echo elgg_view('css/elements/skin', $vars);


?>

/**
 * ELGG DEFAULT CSS
 */

/* Table of Contents:

	RESET CSS 					reduce browser inconsistencies in line height, margins, font size...
	CSS BASICS					<body> <p> <a> <h1>
	PAGE LAYOUT					main page content blocks: header, sidebar, footer...
	GENERIC SELECTORS			reusable generic classes
	ELGG TOPBAR					elgg topbar
	HEADER CONTENTS
	ELGG SITE NAVIGATION		Primary site navigation in header
	FOOTER CONTENTS
	SYSTEM MESSAGES				system messages overlay
	BREADCRUMBS
	SUBMENU						current page/tool submenu in sidebar
	PAGINATION					re-usable default page navigation
	ELGG TABBED NAVIGATION 		re-usable tabbed navigation
	WIDGETS
	LOGIN / REGISTER			login box, register, and lost password page styles
	CONTENT HEADER
	DEFAULT COMMENTS
	ENTITY LISTINGS				elgg's default entity listings
	USER SETTINGS				styles for user settings
	GENERAL FORM ELEMENTS		default styles for all elgg input/form elements
	FRIENDS PICKER
	LIKES
	MISC

*/
/* Colors:

	#4690D6 - elgg light blue
	#0054A7 - elgg dark blue
	#e4ecf5 - elgg v light blue
*/





.elgg-border-plain {
	border: 1px solid #eeeeee;
}

/* ***************************************
	SYSTEM MESSAGES
*************************************** */
.elgg-system-messages {
	position:fixed;
	top:24px;
	right:20px;
	max-width:500px;
	z-index:9600;
}
.elgg-system-messages li {
	color:white;
	font-weight:bold;
	display:block;
	padding:3px 10px;
	margin-top:10px;
	cursor:pointer;
	opacity:0.9;
	-webkit-box-shadow:0 2px 5px rgba(0, 0, 0, 0.45);
	-moz-box-shadow:0 2px 5px rgba(0, 0, 0, 0.45);
}
.elgg-state-success {
	background-color:black;
}
.elgg-state-error {
	background-color:red;
}

.elgg-system-message p {
	margin:0;
}

/* ***************************************
	AVATAR
*************************************** */
#avatar-upload {
	height:145px;
}
#current-user-avatar {
	float:left;
	width:160px;
	height:130px;
	border-right:1px solid #cccccc;
	margin:0 20px 0 0;
}
#avatar-croppingtool {
	border-top: 1px solid #cccccc;
	margin:20px 0 0 0;
	padding:10px 0 0 0;
}
#user-avatar {
	float: left;
	margin-right: 20px;
}
#user-avatar-preview {
	float: left;
	position: relative;
	overflow: hidden;
	width: 100px;
	height: 100px;
}

/* ***************************************
	WIDGETS
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 5px 5px 15px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: #dedede;
	border: 2px solid #cccccc;
}
.elgg-widgets-add-panel ul {
	padding: 0;
	margin: 0;
}
.elgg-widgets-add-panel li {
	float: left;
	margin: 2px 10px;
	list-style: none;
	width: 200px;
	padding: 4px;
	background-color: #cccccc;
	border: 2px solid #b0b0b0;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widget-available {
	color: #333333;
	cursor: pointer;
}
.elgg-widget-available:hover {
	background-color: #bcbcbc;
}
.elgg-widget-unavailable {
	color: #888888;
}
.elgg-widget {
	background-color: #dedede;
	padding: 2px;
	margin: 0 5px 15px;
	position: relative;
}
.elgg-widget:hover {
	background-color: #cccccc;
}
.elgg-widget-title {
	background-color: #dedede;
	height: 30px;
	line-height: 30px;
	overflow: hidden;
}
.elgg-widget-title h3 {
	float: left;
	padding: 0 45px 0 20px;
	color: #333333;
}
.elgg-widget-controls a {
	position: absolute;
	top: 5px;
	display: block;
	width: 18px;
	height: 18px;
	border: 1px solid transparent;
}
a.elgg-widget-collapse-button {
	left: 5px;
	background:transparent url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat 0px -385px;
}
.elgg-widget-controls a.elgg-widget-collapsed {
	background-position: 0px -365px;
}
a.elgg-widget-delete-button {
	right: 5px;
	background:transparent url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat -198px 3px;
}
a.elgg-widget-edit-button {
	right: 25px;
	background:transparent url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat -300px -1px;
}
a.elgg-widget-edit-button:hover, a.elgg-widget-delete-button:hover {
	border: 1px solid #cccccc;
}
.elgg-widget-container {
	background-color: white;
	width: 100%;
	overflow: hidden;
}
.elgg-widget-edit {
	display: none;
	width: 96%;
	padding: 2%;
	border-bottom: 2px solid #dedede;
}
.elgg-widget-content {
	padding: 10px;
}
.drag-handle {
	cursor: move;
}
.elgg-widget-placeholder {
	border: 2px dashed #dedede;
	margin-bottom: 15px;
}

/* ***************************************
	RIVER
*************************************** */
.elgg-river {
	border-top: 1px solid #CCCCCC;
}
.elgg-river > li {
	border-bottom: 1px solid #CCCCCC;
}
.elgg-river-item {
	padding: 7px 0;
}
.elgg-river-item .elgg-pict {
	margin-right: 20px;
}
.elgg-river-timestamp {
    color: #666666;
    font-size: 85%;
    font-style: italic;
    line-height: 1.2em;
}
.elgg-river-content {
	border-left: 1px solid #CCCCCC;
	font-size: 85%;
	line-height: 1.5em;
	margin: 8px 0 5px 0;
	padding-left: 5px;
}
.elgg-river-content .elgg-user-icon {
	float: left;
}
.elgg-river-layout .elgg-input-dropdown {
	float: right;
	margin: 10px 0;
}

.elgg-river-comments-tab {
	display: block;
	background-color: #EEEEEE;
	color: #4690D6;
	margin-top: 5px;
	width: auto;
	float: right;
	font-size: 85%;
	padding: 1px 7px;
	-moz-border-radius-topleft: 5px;
	-moz-border-radius-topright: 5px;
	-webkit-border-top-left-radius: 5px;
	-webkit-border-top-right-radius: 5px;
}
.elgg-river-comments {
	margin: 0;
	border-top: none;
}
.elgg-river-comments li:first-child {
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-left-radius: 5px;
}
.elgg-river-comments li:last-child {
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-webkit-border-bottom-left-radius: 5px;
}
.elgg-river-comments li {
	background-color: #EEEEEE;
	border-bottom: none;
	padding: 4px;
	margin-bottom: 2px;
}
.elgg-river-comments .elgg-media {
	padding: 0;
}
.elgg-river-more {
	background-color: #EEEEEE;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	padding: 2px 4px;
	font-size: 85%;
	margin-bottom: 2px;
}
.elgg-river-item form {
	background-color: #EEEEEE;
	padding: 4px 4px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	display: none;
	height: 30px;
}
.elgg-river-item input[type=text] {
	width: 80%;
}
.elgg-river-item input[type=submit] {
	margin: 0 0 0 10px;
}
.elgg-river-item > .elgg-alt a {
	font-size: 90%;
	float: right;
	clear: both;
}

/* ***************************************
	LOGIN / REGISTER
*************************************** */
/* login in sidebar */
.elgg-aside #login {
	width:auto;
}
.elgg-aside #login form {
	width:auto;
}
.elgg-aside #login .login-textarea {
	width:196px;
}
/* default login and register forms */
#login input[type="text"],
#login input[type="password"],
.register input[type="text"],
.register input[type="password"] {
	margin:0 0 10px 0;
}
.register input[type="text"],
.register input[type="password"] {
	width:380px;
}
.rememberme label {
	font-weight:normal;
	font-size:100%;
}
.loginbox .elgg-submit-button {
	margin-right: 15px;
}
#login .persistent-login {
	float:right;
	display:block;
	margin-top:-34px;
	margin-left:80px;
}
#login .persistent-login label {
	font-size:1.0em;
	font-weight: normal;
	cursor: pointer;
}
#login-dropdown {
	float:right;
	position: absolute;
	top:10px;
	right:0;
	z-index: 9599;
}
#login-dropdown #signin-button {
	padding:10px 0px 12px;
	line-height:23px;
	text-align:right;
}
#login-dropdown #signin-button a.signin {
	padding:2px 6px 3px 6px;
	text-decoration:none;
	font-weight:bold;
	position:relative;
	margin-left:0;
	color:white;
	border:1px solid #71B9F7;
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
}
#login-dropdown #signin-button a.signin span {
	padding:4px 0 6px 12px;
	background-image:url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png);
	background-position:-150px -51px;
	background-repeat:no-repeat;
}
#login-dropdown #signin-button a.signin:hover {
	background-color:#71B9F7;
	/* color:black; */
}
#login-dropdown #signin-button a.signin:hover span {
	/* background-position:-150px -71px; */
}
#login-dropdown #signin-button a.signin.menu-open {
	background:#cccccc !important;
	color:#666666 !important;
	border:1px solid #cccccc;
	outline:none;
}
#login-dropdown #signin-button a.signin.menu-open span {
	background-position:-150px -71px;
	color:#333333;
}
#login-dropdown #signin-menu {
	-moz-border-radius-topleft:5px;
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-top-left-radius:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	display:none;
	background-color:white;
	position:absolute;
	width:210px;
	z-index:100;
	border:5px solid #CCCCCC;
	text-align:left;
	padding:12px;
	top: 26px;
	right: 0px;
	margin-top:5px;
	margin-right: 0px;
	color:#333333;
	-webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
}
#login-dropdown #signin-menu input[type=text],
#login-dropdown #signin-menu input[type=password] {
	width:203px;
	margin:0 0 5px;
}
#login-dropdown #signin-menu p {
	margin:0;
}
#login-dropdown #signin-menu label {
	font-weight:normal;
	font-size: 100%;
}
#login-dropdown #signin-menu .elgg-submit-button {
	margin-right:15px;
}

/* ***************************************
	CONTENT HEADER
**************************************** */
#content-header {
	border-bottom:1px solid #CCCCCC;
}
#content-header:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
.content-header-title {
	float:left;
}
.content-header-title {
	margin-right:10px;
	max-width: 530px;
}
.content-header-title h2 {
	border:none;
	margin-bottom:0;
	padding-bottom:5px;
}
.content-header-options {
	float:right;
}
.content-header-options .elgg-action-button {
	float:right;
	margin:0 0 5px 10px;
}

/* ***************************************
	DEFAULT ENTITY LISTINGS
**************************************** */
.entity-listing {
	border-bottom:1px dotted #cccccc;
	padding:4px 0;
	position:relative;
}
.entity-listing:first-child {
	border-top:1px dotted #cccccc;
}
.entity-listing:hover {
	background-color: #eeeeee;
}
.entity-listing .icon {
	margin-left:3px;
	margin-top:3px;
}
.entity-listing .info {
	min-height:28px;
	width:693px;
}
.entity-listing-info p {
	margin:0;
	/* line-height:1.2em; */
}
.entity-title {
	font-weight: bold;
	font-size: 1.1em;
	line-height:1.2em;
	color:#666666;
	padding-bottom:4px;
}
.entity-title a {
	color:#0054A7;
}
.entity-subtext {
	color:#666666;
	font-size: 85%;
	font-style: italic;
	line-height:1.2em;
}
/* entity metadata block */
.elgg-metadata {
	float:right;
	margin-left:15px;
	color:#aaaaaa;
	font-size: 90%;
}
.entity-metadata {
	float:right;
	margin:0 3px 0 15px;
	color:#aaaaaa;
	font-size: 90%;
}
.entity-metadata span, .elgg-metadata span {
	margin-left:14px;
	text-align:right;
	float:left;
}
.entity-metadata .entity-edit a, .elgg-metadata .entity-edit a {
	color:#aaaaaa;
}
.entity-metadata .entity-edit a:hover, .elgg-metadata .entity-edit a:hover {
	color:#555555;
}
.entity-metadata .delete-button, .elgg-metadata .delete-button {
	margin-top:3px;
}

/* override hover for lists of site users/members */
.members-list .entity-listing:hover {
	background-color:white;
}


/* ***************************************
	USER SETTINGS
*************************************** */
.user-settings {
	margin-bottom:20px;
}
.user-settings h3 {
	background:#e4e4e4;
	color:#333333;
	padding:5px;
	margin-top:10px;
	margin-bottom:10px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
}
.user-settings label {
	color:#333333;
	font-size:100%;
	font-weight:normal;
}
.user-settings table.styled {
	width:100%;
}
.user-settings table.styled {
	border-top:1px solid #cccccc;
}
.user-settings table.styled td {
	padding:2px 4px 2px 4px;
	border-bottom:1px solid #cccccc;
}
.user-settings table.styled td.column-one {
	width:200px;
}
.user-settings table.styled tr:hover {
	background: #E4E4E4;
}
.add-user form {
	width:300px;
}

/* ***************************************
	FRIENDS PICKER
*************************************** */
.friends-picker-container h3 {
	font-size:4em !important;
	text-align: left;
	margin:10px 0 20px 0 !important;
	color:#999999 !important;
	background: none !important;
	padding:0 !important;
}
.friends-picker .friends-picker-container .panel ul {
	text-align: left;
	margin: 0;
	padding:0;
}
.friends-picker-wrapper {
	margin: 0;
	padding:0;
	position: relative;
	width: 100%;
}
.friends-picker {
	position: relative;
	overflow: hidden;
	margin: 0;
	padding:0;
	width: 730px;
	height: auto;
}
.friendspicker-savebuttons {
	background: white;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	margin:0 10px 10px 10px;
}
.friends-picker .friends-picker-container { /* long container used to house end-to-end panels. Width is calculated in JS  */
	position: relative;
	left: 0;
	top: 0;
	width: 100%;
	list-style-type: none;
}
.friends-picker .friends-picker-container .panel {
	float:left;
	height: 100%;
	position: relative;
	width: 730px;
	margin: 0;
	padding:0;
}
.friends-picker .friends-picker-container .panel .wrapper {
	margin: 0;
	padding:4px 10px 10px 10px;
	min-height: 230px;
}
.friends-picker-navigation {
	margin: 0 0 10px 0;
	padding:0 0 10px 0;
	border-bottom:1px solid #cccccc;
}
.friends-picker-navigation ul {
	list-style: none;
	padding-left: 0;
}
.friends-picker-navigation ul li {
	float: left;
	margin:0;
	background:white;
}
.friends-picker-navigation a {
	font-weight: bold;
	text-align: center;
	background: white;
	color: #999999;
	text-decoration: none;
	display: block;
	padding: 0;
	width:20px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
}
.tabHasContent {
	background: white;
	color:#333333 !important;
}
.friends-picker-navigation li a:hover {
	background: #333333;
	color:white !important;
}
.friends-picker-navigation li a.current {
	background: #4690D6;
	color:white !important;
}
.friends-picker-navigation-l, .friends-picker-navigation-r {
	position: absolute;
	top: 46px;
	text-indent: -9000em;
}
.friends-picker-navigation-l a, .friends-picker-navigation-r a {
	display: block;
	height: 43px;
	width: 43px;
}
.friends-picker-navigation-l {
	right: 48px;
	z-index:1;
}
.friends-picker-navigation-r {
	right: 0;
	z-index:1;
}
.friends-picker-navigation-l {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png") no-repeat left top;
}
.friends-picker-navigation-r {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png") no-repeat -60px top;
}
.friends-picker-navigation-l:hover {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png") no-repeat left -44px;
}
.friends-picker-navigation-r:hover {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png") no-repeat -60px -44px;
}
.friendspicker-savebuttons .elgg-submit-button,
.friendspicker-savebuttons .elgg-cancel-button {
	margin:5px 20px 5px 5px;
}
#collectionMembersTable {
	background: #dedede;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	margin:10px 0 0 0;
	padding:10px 10px 0 10px;
}


/* ***************************************
	LIKES
*************************************** */
.elgg-likes-list {
	background-color: white;
	border:1px solid #cccccc;
	width: 345px;
	height: auto;
	position: absolute;
	text-align: left;
	z-index: 9999;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}

/* ***************************************
	MISC
*************************************** */

.user-picker .user-picker-entry {
	clear:both;
	height:25px;
	padding:5px;
	margin-top:5px;
	border-bottom:1px solid #cccccc;
}
.user-picker-entry .delete-button {
	margin-right:10px;
}


#dashboard-info {
	float: left;
	margin-bottom: 15px;
}
#dashboard-info .elgg-inner {
	margin: 0 5px;
	border: 2px solid #dedede;
	padding: 5px;
}

/* ***************************************
	default avatar icons
*************************************** */
.elgg-user-icon {
	position:relative;
}
.elgg-user-icon.tiny,
img.tiny {
	width:25px;
	height:25px;
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-moz-background-clip:  border;

	-o-background-size: 25px;
	-webkit-background-size: 25px;
	-khtml-background-size: 25px;
	-moz-background-size: 25px;
}
.elgg-user-icon.small,
img.small {
	width:40px;
	height:40px;
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-moz-background-clip:  border;

	-o-background-size: 40px;
	-webkit-background-size: 40px;
	-khtml-background-size: 40px;
	-moz-background-size: 40px;
}
img.large {
	width:200px;
	height:200px;
}
img.medium {
	width:100px;
	height:100px;
}

/* ***************************************
	avatar drop-down menu
*************************************** */
.avatar_menu_button {
	width:15px;
	height:15px;
	position:absolute;
	cursor:pointer;
	display:none;
	right:0;
	bottom:0;
}
.avatar_menu_arrow {
	background: url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat -150px top;
	width:15px;
	height:15px;
}
.avatar_menu_arrow_on {
	background: url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat -150px -16px;
	width:15px;
	height:15px;
}
.avatar_menu_arrow_hover {
	background: url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat -150px -32px;
	width:15px;
	height:15px;
}
/* user avatar submenu options */
.elgg-user-icon .sub_menu {
	display:none;
	position:absolute;
	padding:0;
	margin:0;
	border-top:solid 1px #E5E5E5;
	border-left:solid 1px #E5E5E5;
	border-right:solid 1px #999999;
	border-bottom:solid 1px #999999;
	width:164px;
	background:#FFFFFF;
	text-align:left;
	-webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	-moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	font-size:14px;
}
div.elgg-user-icon a.icon img {
	z-index:10;
}
.elgg-user-icon .sub_menu a:link,
.elgg-user-icon .sub_menu a:visited,
.elgg-user-icon .sub_menu a:hover {
	display:block;
	font-weight: normal;
}
.elgg-user-icon .sub_menu a:hover {
	background:#cccccc;
	text-decoration:none;
}
.elgg-user-icon .sub_menu .displayname {
	padding:0 !important;
	margin:0 !important;
	border-bottom:solid 1px #dddddd !important;
	font-size:14px !important;
}
.elgg-user-icon .sub_menu .displayname a {
	padding:3px 3px 3px 8px;
	font-size:14px;
	font-weight: bold;
}
.elgg-user-icon .sub_menu .displayname a .username {
	display:block;
	font-weight: normal;
	font-size:12px;
	text-align: left;
	margin:0;
}
.sub_menu ul.sub_menu_list {
	list-style: none;
	margin-bottom:0;
	padding-left:0;
}
.elgg-user-icon .sub_menu a {
	padding:2px 3px 2px 8px;
	font-size:12px;
}
/* admin menu options in avatar submenu */
.user_menu_admin {
	border-top:solid 1px #dddddd;
}
.elgg-user-icon .sub_menu li.user_menu_admin a {
	color:red;
}
.elgg-user-icon .sub_menu li.user_menu_admin a:hover {
	color:white;
	background:red;
}



<?php

// in case plugins are still extending the old 'css' view, display it
echo elgg_view('css', $vars);
