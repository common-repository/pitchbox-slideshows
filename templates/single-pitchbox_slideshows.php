<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<title><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

<?php wp_head(); ?>
	</head>
	<body>
	<div class="slides" id="pitchbox-slides">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		foreach ($slides as $key => $slide) {
		} 
	<section><p>
	_e( 'Sorry, no SlideShow found.' ); ?>
<?php endif; ?>
	</div>
</div>

</html>