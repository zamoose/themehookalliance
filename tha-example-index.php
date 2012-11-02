<?php tha_html_before(); ?><html>
<head>
	<?php tha_head_top(); ?>
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); 	?>" type="text/css" media="all" />
	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
	<?php tha_header_before(); ?>
	<div id="header">
		<?php tha_header_top(); ?>
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p class="dscription"><?php bloginfo( 'description' ); ?></p>
		<?php tha_header_bottom(); ?>
	</div><!-- #header -->
	<?php tha_header_after(); ?>

	<?php tha_content_before(); ?>
	<div id="content">
		<?php tha_content_top(); ?>

		<!-- This roughly encapsulates The Loop portion of the layout -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php tha_entry_before(); ?>
			<!-- Post Entry Begin -->
			<div <?php post_class( 'entry' ); ?>>
				<?php tha_entry_top(); ?>
				<h2><?php the_title(); ?></h2>
				<div class="itemtext">
					<?php the_content(); ?>
				</div><!-- .itemtext -->
				<?php tha_entry_bottom(); ?>
			</div>
			<!-- Post Entry End -->
			<?php tha_entry_after(); ?>

		<?php endwhile; endif; ?>
		<!-- Close The Loop -->
		
		<?php tha_comments_before(); ?>
		<!-- Post Comments Begin -->
		<?php comments_template(); ?>
		<!-- post Comments End -->
		<?php tha_comments_after(); ?>

		<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
	
	<?php tha_sidebars_before(); ?>
	<div id="sidebar">
		<?php tha_sidebar_top(); ?>
		<?php dynamic_sidebar( 'sidebar' ); ?>
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
	<?php tha_body_bottom(); ?>
	<?php wp_footer(); ?>
</body>
</html>