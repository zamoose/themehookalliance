# Theme Hook Alliance #

## What? ##
Child theme authors and plugin developers need a consistent set of entry points to allow for easy customization and altering of functionality. Core WordPress offers a suite of [action hooks](http://codex.wordpress.org/Plugin_API/Action_Reference/) and [template tags](http://codex.wordpress.org/Template_tags) but does not cover many of the common use cases. The Theme Hook Alliance is a community-driven effort to agree on a set of third-party action hooks that THA themes pledge to implement in order to give that desired consistency.

## Why? ##
There have been [discussions](http://www.wptavern.com/forum/themes-templates/494-standard-theme-hook-names.html) about implementing a common set of hooks, a [Trac ticket](http://core.trac.wordpress.org/ticket/18561#comment:92) and even an [initial pass](http://codex.wordpress.org/User_talk:Dcole07) at implementing something similar. However, for whatever reason[s], these efforts have not gained traction. I proposed this third-party solution [here](http://literalbarrage.org/blog/2012/06/29/wordpress-theme-hook-alliance) and this project is intended to be an implementation of these goals.

## Conventions ##

* Hooks should be of the form 	`tha_` + `[section of the theme]` + `_[placement within block]`.
* Hooks should be named based upon the generally-accepted semantic name for the section of a theme they cover, e.g., `tha_content_*` should refer to the section/block of a theme containing the content (or "The Loop"), while `tha_sidebar_*` would refer to the sidebars generally called by `get_sidebar()`.
* Hooks should be suffixed based upon their placement within a block.
	* Hooks immediately *preceding* a block should use `_before`.
	* Hooks immediately *following* a block should use `_after`.
	* Hooks placed at the very *beginning* of a block should use `_top`.
	* Hooks placed at the very *end* of a block should use `_bottom`.
* If the theme section covered by a hook can contain multiple semantic elements, it should be pluralized. (Primarily applies to `tha_sidebars_before/after` in the early goings.)
