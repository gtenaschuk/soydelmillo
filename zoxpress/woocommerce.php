<?php get_header(); ?>
<div class="zox-woo-wrap left zoxrel zox100">
	<div class="zox-body-width">
		<div class="zox-woo-cont left zoxrel zox100">
			<div class="zox-post-top-wrap zoxrel left zox100">
				<?php if(is_single()) { if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php woocommerce_breadcrumb(); ?>
				<?php endwhile; endif; } else { ?>
					<?php woocommerce_breadcrumb(); ?>
				<?php } ?>
			</div><!--zox-post-top-wrap-->
			<div class="zox-woo-grid left">
				<?php get_sidebar('woo'); ?>
				<div class="zox-post-main zoxrel">
					<div id="woo-content" class="left relative">
						<?php woocommerce_content(); ?>
						<?php wp_link_pages(); ?>
					</div><!--woo-content-->
				</div><!--zox-post-main-->
			</div><!--zox-woo-grid-->
		</div><!--zox-woo-cont-->
	</div><!--zox-body-width-->
</div><!--zox-woo-wrap-->
<?php get_footer(); ?>