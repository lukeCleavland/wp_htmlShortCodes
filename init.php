<?php
/*
Plugin Name: HTML ShortCodes
Plugin URI: https://github.com/lukeCleavland/wp_htmlShortCodes.git
Description: Lets basic html entites to be added to posts and pages through shortcoes
Version: 1.0.0
Author: Luke Cleavland
*/

defined('ABSPATH') OR exit;
function open_article(){
	return "<article>";
}

function close_article(){
	return "</article>";
}

function open_section(){
	return "<section>";
}

function close_section(){
	return "</section>";
}

function open_div($atts){
		$class = NULL;
		$cols = NULL;
		$attributes = NULL;
       $a = shortcode_atts( array(
       'class' => NULL,
	   'cols' =>NULL
       ), $atts );
	   if ($a['class'] != NULL){
		$class = $a['class'];
	   }
	if ($a['cols'] != NULL){
		$cols = "column ".$a['cols'];
	   }
	   if($class != NULL || $cols != NULL){
			   $attributes = 'class="'.$class.' '.$cols.'"';
	   }


return "<div $attributes>";
}

function close_div(){
	return "</div>";
}

function open_p(){
	return "<p>";
}

function close_p(){
	return "</p>";
}

function view_space(){
	return "";
}

function preserve_line_breaks(){
	return "";
}

function line_break(){
	return "<br>";
}

add_shortcode("A", "open_article");
add_shortcode("xA", "close_article");
add_shortcode("D", "open_div");
add_shortcode("xD", "close_div");
add_shortcode("Sec", "open_section");
add_shortcode("xSec", "close_section");
add_shortcode("P", "open_p");
add_shortcode("xP", "close_p");
add_shortcode("x", "view_space");
add_shortcode("BR", "line_break");
add_shortcode("LB", "preserve_line_breaks");
