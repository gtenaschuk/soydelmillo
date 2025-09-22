<?php get_header(); ?>
<?php $zox_alp = get_option('zox_alp'); $zox_post_alp = get_post_meta($post->ID, "zox_post_alp", true); if ( ($zox_alp == "true" && ($zox_post_alp == "global" || $zox_post_alp == "on" || (empty($zox_post_alp))) ) || ($zox_alp !== "true" && ($zox_post_alp == "on") ) ) { ?>
	<?php get_template_part( 'parts/alp/alp', 'single' ); ?>
<?php } else { ?>
	<?php get_template_part( 'parts/post/post', 'single' ); ?>
<?php } ?>
<?php get_footer(); ?>