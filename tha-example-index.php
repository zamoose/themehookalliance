<html>
<head>
	<?php tha_head_top(); ?>
	<title>This is an example page</title>
	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>
</head>
<body>
	<?php tha_header_before(); ?>
	<div id="header">
		<?php tha_header_top(); ?>
		<h1>This is an example page</h1>
		<p class="dscription">This is to demonstrate a simple implementation of Theme Hook Alliance hooks.</p>
		<?php tha_header_bottom(); ?>
	</div><!-- #header -->
	<?php tha_header_after(); ?>

	<?php tha_content_before(); ?>
	<div id="content">
	<?php tha_content_top(); ?>

		<!-- This roughly encapsulates The Loop portion of the layout -->
		<?php tha_entry_before(); ?>
		<div class="entry">
			<?php tha_entry_top(); ?>
			<h2>This is the title</h2>
			<div class="itemtext">
				Lorem ipsum and all that rot.
			</div><!-- .itemtext -->
			<?php tha_entry_bottom(); ?>
		</div>
		<?php tha_entry_after(); ?>
		<!-- Close The Loop -->
		
		<?php tha_comments_before(); ?>
		
		<!-- comments_form() or similar goes here -->
		
		<?php tha_comments_after(); ?>
	<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
	
	<?php tha_sidebars_before(); ?>
	<div id="sidebar">
		<?php tha_sidebar_top(); ?>
		<ul>
			<li><h4>Sidebar Widget #1</h4>
				<p>Widget #1 content</p>
			</li>
			<li><h4>Sidebar Widget #2</h4>
				<p>Widget #2 content</p>
			</li>
		</ul>
		<?php tha_sidebar_bottom(); ?>
	</div><!-- #sidebar-->
	<?php tha_sidebars_after(); ?>
	
	<?php tha_footer_before(); ?>
	<div id="footer">
		<?php tha_footer_top(); ?>
		
		<h3>Footer</h3>
		<p>This is some sample footer text.</p>
		
		<?php tha_footer_bottom(); ?>
	</div><!-- #footer -->
	<?php tha_footer_after(); ?>
</body>
</html>