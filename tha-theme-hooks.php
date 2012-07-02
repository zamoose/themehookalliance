<?php
/**
* Theme Hook Alliance hook stub list.
*
* @package 		themehookalliance
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*/

/** 
 * Themes and plugins can check for THA_HOOKS_SUPPORT to determine whether a theme
 * declares itself to support THA hooks. 
 */
define( 'THA_HOOKS_SUPPORT', true );
/**
 * If/when WordPress Core implements similar methodology, themes and plugins will be
 * able to check whether the version of THA supplied by the theme supports Core
 * hooks.
 */
define( 'THA_CORE_SUPPORT', false );

/**
* HTML <head> hooks
*/
function tha_head_top() {
	do_action( 'tha_head_top' );
}

function tha_head_bottom() {
	do_action( 'tha_head_bottom' );
}


/**
* Semantic <header> hooks
*/
function tha_header_before() {
	do_action( 'tha_header_before' );
}

function tha_header_after() {
	do_action( 'tha_header_after' );
}

function tha_header_top() {
	do_action( 'tha_header_top' );
}

function tha_header_bottom() {
	do_action( 'tha_header_bottom' );
}

/**
* Semantic <content> hooks
*/
function tha_content_before() {
	do_action( 'tha_content_before' );
}

function tha_content_after() {
	do_action( 'tha_content_after' );
}

function tha_content_top() {
	do_action( 'tha_content_top' );
}

function tha_content_bottom() {
	do_action( 'tha_content_bottom' );
}

/**
* Semantic <sidebar> hooks
*/
function tha_sidebars_before() {
	do_action( 'tha_sidebars_before' );
}

function tha_sidebars_after() {
	do_action( 'tha_sidebars_after' );
}

function tha_sidebar_top() {
	do_action( 'tha_sidebar_top' );
}

function tha_sidebar_bottom() {
	do_action( 'tha_sidebar_bottom' );
}

/**
* Semantic <footer> hooks
*/
function tha_footer_before() {
	do_action( 'tha_footer_before' );
}

function tha_footer_after() {
	do_action( 'tha_footer_after' );
}

function tha_footer_top() {
	do_action( 'tha_footer_top' );
}

function tha_footer_bottom() {
	do_action( 'tha_footer_bottom' );
}