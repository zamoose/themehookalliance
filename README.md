# Theme Hook Alliance #

## What? ## 
Let's all come together and agree on a nice standard set of WordPress theme hooks.

## Why? ##
Original idea [here](http://literalbarrage.org/blog/2012/06/29/wordpress-theme-hook-alliance).

## Conventions ##

* Hooks are generally of the form 	`tha_` + `[section of the theme]` + `_[placement within block]`
* Hooks should be suffixed based upon their placement within a block
	* Hooks immediately *preceding* a block should use `_before`
	* Hooks immediately *following* a block should use `_after`
	* Hooks placed at the very *beginning* of a block should use `_top`
	* Hooks placed at the very *end* of a block should use `_bottom`
* Hooks should be named based upon the generally-accepted semantic name for the section of a theme they cover, e.g., `tha_content_*` should refer to the section/block of a theme containing the content (or "The Loop"), while `tha_sidebar_*` would refer to the sidebars generally called by `get_sidebar()`