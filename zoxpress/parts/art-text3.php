<div class="zox-art-text">
	<h3 class="zox-s-cat"><span class="zox-s-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span></h3>
	<div class="zox-art-title">
		<a href="<?php the_permalink(); ?>" rel="bookmark">
		<h2 class="zox-s-title3"><?php the_title(); ?></h2>
		</a>
	</div><!--zox-art-title-->
</div><!--zox-art-text-->