<?php
/*
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

define( 'THA_HOOKS_SUPPORT', true );

function tha_head_top() {
	do_action( 'tha_head_top' );
}

function tha_head_bottom() {
	do_action( 'tha_head_bottom' );
}

function tha_header_before() {
	do_action( 'tha_header_before' );
}

function tha_header_after() {
	do_action( 'tha_header_after' );
}

function tha_content_top() {
	do_action( 'tha_content_top' );
}

function tha_content_bottom() {
	do_action( 'tha_content_bottom' );
}