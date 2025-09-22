<div class="zox-post-video1-wrap zoxrel left zox100">
	<div class="zox-post-video1-img zox100 zoxlh0">
		<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
			<div class="zox-post-img left zoxrel zoxlh0" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
				<?php the_post_thumbnail('', array( 'class' => 'flipboard-image' )); ?>
				<?php $thumb_id = get_post_thumbnail_id(); $zox_thumb_array = wp_get_attachment_image_src($thumb_id, 'zox-post-thumb', true); $zox_thumb_url = $zox_thumb_array[0]; $zox_thumb_width = $zox_thumb_array[1]; $zox_thumb_height = $zox_thumb_array[2]; ?>
				<meta itemprop="url" content="<?php echo esc_url($zox_thumb_url) ?>">
				<meta itemprop="width" content="<?php echo esc_html($zox_thumb_width) ?>">
				<meta itemprop="height" content="<?php echo esc_html($zox_thumb_height) ?>">
			</div><!--zox-post-img-->
		<?php } ?>
	</div><!--zox-post-video1-img-->
	<div class="zox-post-video1-cont zoxrel zox100">
		<div class="zox-post-width zoxrel">
			<div class="zox-post-video1-grid">
				<div class="zox-post-video1-left">
					<?php get_template_part( 'parts/post/post', 'img' ); ?>
				</div><!--zox-post-video1-left-->
				<div class="zox-post-video1-right">
					<?php get_template_part( 'parts/post/post', 'head' ); ?>
				</div><!--zox-post-video1-right-->
			</div><!--zox-post-video1-grid-->
		</div><!--zox-post-width-->
	</div><!--zox-post-video1-cont-->
</div><!--zox-post-video1-wrap-->