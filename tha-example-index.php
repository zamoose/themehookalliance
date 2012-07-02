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
	
	</div><!-- #header -->
	<?php tha_header_after(); ?>

	<div id="content">
	<?php tha_content_top(); ?>

	<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	
	<?php tha_sidebars_before(); ?>
	<div id="sidebar">
	
	</div><!-- #sidebar-->
	<?php tha_sidebars_after(); ?>
	
	<div id="footer">
	
	</div><!-- #footer -->
	
</body>
</html>