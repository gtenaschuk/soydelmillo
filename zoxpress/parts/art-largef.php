<section class="zox-art-wrap zoxrel">
	<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
		<div class="zox-art-img zoxrel zox100 zoxlh0">
			<?php the_post_thumbnail('zox-large-thumb', array( 'class' => 'zox-reg-img lazy-load' )); ?>
			<?php the_post_thumbnail('zox-square-thumb', array( 'class' => 'zox-mob-img lazy-load' )); ?>
			<?php if ( has_post_format( 'video' ) || has_post_format( 'gallery' ) || has_post_format( 'audio' ) ) { ?>
				<div class="zox-post-type">
					<?php if ( has_post_format( 'video' )) { ?>
						<span class="fas fa-play"></span>
					<?php } else if ( has_post_format( 'gallery' )) { ?>
						<span class="far fa-images"></span>
					<?php } else if ( has_post_format( 'audio' )) { ?>
						<span class="fas fa-volume-up"></span>
					<?php } ?>
				</div><!--zox-post-type-->
			<?php } ?>
		</div><!--zox-art-img-->
		</a>
		<?php get_template_part( 'parts/art', 'text1' ); ?>
	<?php } else { ?>
		<?php get_template_part( 'parts/art', 'text1c' ); ?>
	<?php } ?>
</section><!--zox-art-wrap-->