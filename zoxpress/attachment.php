<?php get_header(); ?>
<article id="post-<?php echo get_the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/NewsArticle">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="zox-article-wrap" class="zoxrel left zox100">
			<div class="zox-post-top-wrap zoxrel left zox100">
				<div class="zox-post-title-wrap zox-tit1">
					<div class="zox-post-width">
						<h1 class="zox-post-title left entry-title" itemprop="headline"><?php the_title_attribute(); ?></h1>
					</div><!--zox-post-width-->
				</div><!--zox-post-title-wrap-->
			</div><!--zox-post-top-wrap-->
			<div class="zox-post-main-grid">
				<div class="zox-post-width">
					<div class="zox-post-main">
						<div class="zox-post-img left relative" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
							<?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "post"); ?>
								<a href="<?php echo esc_url(wp_get_attachment_url($post->id)); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo esc_url( $att_image[0] );?>" class="attachment-post" alt="<?php the_title(); ?>" /></a>
							<?php else : ?>
								<a href="<?php echo esc_url(wp_get_attachment_url($post->ID)); ?>" title="<?php echo esc_html( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo esc_html(basename($post->guid)); ?></a>
							<?php endif; ?>
						</div><!--zox-post-img-->
					</div><!--zox-post-main-->
				</div><!--zox-post-width-->
			</div><!--zox-post-main-grid-->
		</div><!--zox-article-wrap-->
	<?php endwhile; endif; ?>
</article><!--zox-post-wrap-->
<?php get_footer(); ?>