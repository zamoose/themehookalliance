# Theme Hook Alliance #

## Status ##
**1.0**

## What? ##
Child theme authors and plugin developers need a consistent set of entry points to allow for easy customization and altering of functionality. Core WordPress offers a suite of [action hooks](http://codex.wordpress.org/Plugin_API/Action_Reference/) and [template tags](http://codex.wordpress.org/Template_tags) but does not cover many of the common use cases. The Theme Hook Alliance is a community-driven effort to agree on a set of third-party action hooks that THA themes pledge to implement in order to give that desired consistency.

## Why? ##
There have been [discussions](http://www.wptavern.com/forum/themes-templates/494-standard-theme-hook-names.html) about implementing a common set of hooks, a [Trac ticket](http://core.trac.wordpress.org/ticket/18561#comment:92) and even an [initial pass](http://codex.wordpress.org/User_talk:Dcole07) at implementing something similar. However, for whatever reason[s], these efforts have not gained traction. I proposed this third-party solution [here](http://literalbarrage.org/blog/2012/06/29/wordpress-theme-hook-alliance) and this project is intended to be an implementation of these goals.

## What about WordPress? ##
As stated above, there have been attempts to have something along these lines added to WordPress Core in the past and, while they have generally been seen as good ideas, they have remained as such.

Taking this out of the realm of Core and into the third-party realm is a bit of a risky proposition, to be sure. If the conventions laid out below are not adopted in a widespread fashion, this effort will ultimately fail.

However, this is no reason to wait. Child themes have recently been approved for release in the official [Themes Repository](http://wordpress.org/extend/themes) and plugin authors continue to need more reliable entry points into WordPress' content flow so as to avoid nasty hacks like output buffering.

### When Core does it, Core wins ###
A small note: none of the proposed theme hooks are intended to replace or rewrite existing WordPress functionality. So, for instance, if a desired result can be obtained by filtering the output of e.g. `the_content()`, there is no need to create an entirely new hook. Therefore, any functions that duplicate work Core performs already should be rejected immediately.

### What if Core adds some (or all) of these filters? ###
If this idea gains enough traction, there is a chance that a partial, or even full, portion of these hooks will make their way into Core. When/if this occurs, we can simply update `tha-theme-hooks.php` to include the new `do_action()` calls at the appropriate places. Then, THA users will simply need to update their copy of `tha-theme-hooks.php` to take advantage.

For example, if Core were to introduce a `before_header` hook, we could (in theory) simply alter `tha_header_before` as follows

```php
	function tha_header_before() {
		do_action( 'tha_header_before' );
		do_action( 'before_header' );
	}
```

This would allow all themes using the THA hooks to avoid rewriting/refactoring in the case of a Core change.

## Conventions ##

* Hooks should be of the form 	`tha_` + `[section of the theme]` + `_[placement within block]`.
* Hooks should be named based upon the generally-accepted semantic name for the section of a theme they cover, e.g., `tha_content_*` should refer to the section/block of a theme containing the content (or "The Loop"), while `tha_sidebar_*` would refer to the sidebars generally called by `get_sidebar()`.
* Hooks should be suffixed based upon their placement within a block.
	* Hooks immediately *preceding* a block should use `_before`.
	* Hooks immediately *following* a block should use `_after`.
	* Hooks placed at the very *beginning* of a block should use `_top`.
	* Hooks placed at the very *end* of a block should use `_bottom`.
* If the theme section covered by a hook can contain multiple semantic elements, it should be pluralized. (Primarily applies to `tha_sidebars_before/after` in the early goings.)

## Usage ##

1. Copy `tha-theme-hooks.php` to a directory inside of your theme; say, `include/`, for instance.
2. Include `tha-theme-hooks.php` via `<?php include( 'include/tha-theme-hooks.php' ); ?>` in your `functions.php` or similar.
3. Using `tha-example-index.php` as a guide, *be sure to implement all of the hooks described in `tha-theme-hooks.php` in order to offer full compatibility*.
4. Profit!

## Core Compatibility ##
Working on it!

## THA-Compatible Themes ##
* **In-Progress**
	* [Elbee Elgee](http://literalbarrage.org/blog/code/elbee-elgee) by Doug Stewart ([bitbucket](https://bitbucket.org/zamoose/elbee-elgee))

* **Full Support**
	* [The Bootstrap](http://wordpress.org/extend/themes/the-bootstrap) by Konstantin Obenland ([github](https://github.com/obenland/the-bootstrap))
	* [wolf](https://github.com/bradp/wolf) by Brad Parbs ([github](https://github.com/bradp/wolf))
	* [hook_s](https://github.com/bradp/hook_s) by Brad Parbs ([github](https://github.com/bradp/hook_s))
	* [Documentation](https://github.com/bueltge/Documentation) by Frank Bültge
	* [Opus Primus](http://wordpress.org/extend/themes/opus-primus) (via a Stanza) by Cais ([github](https://github.com/Cais/opus-primus))
	* [Oenology](http://www.chipbennett.net/themes/oenology/) by Chip Bennett ([github](https://github.com/chipbennett/oenology))
	* [Museum Core](http://wordpress.org/extend/themes/museum-core/) by Chris Reynolds ([github](https://github.com/jazzsequence/museum-core))
	* [Decode](http://scotthsmith.com/projects/decode/) by Scott Smith ([github](https://github.com/ScottSmith95/Decode))
	* [Some Like It Neat](https://github.com/digisavvy/some-like-it-neat) by Alex Vasquez
	* [Compass](https://github.com/FlagshipWP/compass) by Flagship
