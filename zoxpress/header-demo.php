<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" >
<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<?php if ( is_single() ) { ?>
	<meta property="og:type" content="article" />
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'zox-large-thumb' ); ?>
			<meta property="og:image" content="<?php echo esc_url( $thumb['0'] ); ?>" />
			<meta name="twitter:image" content="<?php echo esc_url( $thumb['0'] ); ?>" />
		<?php } ?>
		<meta property="og:url" content="<?php the_permalink() ?>" />
		<meta property="og:title" content="<?php the_title_attribute(); ?>" />
		<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
		<meta name="twitter:card" content="summary">
		<meta name="twitter:url" content="<?php the_permalink() ?>">
		<meta name="twitter:title" content="<?php the_title_attribute(); ?>">
		<meta name="twitter:description" content="<?php echo strip_tags(get_the_excerpt()); ?>">
	<?php endwhile; endif; ?>
<?php } else { ?>
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<?php } ?>
<meta name="theme-color" content="#000" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div id="zox-site">
