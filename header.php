<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo("title"); ?></title>
	<meta http-equiv="Content-Language" content="German" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>" media="screen" />
	<?php wp_head(); ?>
</head>
<body>
<div id="wrap">
	<div id="header">
		<div id="headerlinks">
		<?php wp_nav_menu(); ?>
		</div>
		<h1><a href="<?php echo get_option("home"); ?>"><?php bloginfo("name"); ?></a></h1>
	</div>

	<?php get_sidebar(); ?>