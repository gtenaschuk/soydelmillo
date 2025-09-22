<div class="zox-art-text zox-art-text1">
	<div class="zox-art-text-cont">
		<h3 class="zox-s-cat"><span class="zox-s-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span></h3>
		<div class="zox-art-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php if(get_post_meta($post->ID, "zox_featured_headline", true)): ?>
				<h2 class="zox-s-title1-feat"><?php echo esc_html(get_post_meta($post->ID, "zox_featured_headline", true)); ?></h2>
			<?php else: ?>
				<h2 class="zox-s-title1"><?php the_title(); ?></h2>
			<?php endif; ?>
			</a>
		</div><!--zox-art-title-->
		<p class="zox-s-graph"><?php echo wp_trim_words( get_the_excerpt(), 24, '...' ); ?></p>
		<div class="zox-byline-wrap">
			<span class="zox-byline-name"><?php the_author_posts_link(); ?></span><span class="zox-byline-date"><i class="far fa-clock"></i><?php if ( zox_post_date(7) ) { ?><?php the_time(get_option('date_format')); ?><?php } else { ?><?php printf( esc_html__( '%s ago', 'zoxpress' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?><?php } ?></span>
		</div><!--zox-byline-wrap-->
	</div><!--zox-art-text-cont-->
</div><!--zox-art-text-->