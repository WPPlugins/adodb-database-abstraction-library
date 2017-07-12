<?php
/*
Plugin Name: ADOdb Database Abstraction Library
Plugin URI: http://wordpress.org/plugins/adodb-database-abstraction-library/
Description: Allows you to use the ADOdb Database Abstraction Library. If the WP_Query-function does not supplies you with enough freedom.
Author: Occhio webdevelopment
Version: 1.02
Author URI: http://www.occhio.nl
*/ 


/**
 * WordPress ADOdb Database Abstraction Library class
 * Usage: var_dump(Adodb::get_instance()->GetOne("SELECT user_nicename FROM `wp_users`"));
 *
 */
if (!class_exists("Adodb")) {
	include('class-adodb.php');
}

// test: var_dump(Adodb::get_instance()->GetOne("SELECT user_nicename FROM `wp_users`"));
?>