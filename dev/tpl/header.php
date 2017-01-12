<!DOCTYPE html>
<html>
<head>
	<title>This is a test</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="<?php bloginfo( 'template_directory' ); ?>/style.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper">