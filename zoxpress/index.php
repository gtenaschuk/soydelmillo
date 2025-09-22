<?php get_header(); ?>
<div id="zox-home-main-wrap" class="zoxrel zox100">
	<?php $zox_skin = get_option('zox_skin'); $zox_home_rside = get_option('zox_home_rside'); if ($zox_skin == "0" && $zox_home_rside == "1") { ?>
		<div class="zox-body-width">
			<div id="zox-home-body-wrap" class="zoxrel zox100">
				<div id="zox-home-cont-wrap" class="zoxrel">
					<div id="zox-main-blog-wrap" class="zoxrel left zox100">
						<?php get_template_part( 'parts/blog', 'wrap' ); ?>
					</div><!--zox-main-blog-wrap-->
				</div><!--zox-home-cont-wrap-->
			</div><!--zox-home-body-wrap-->
		</div><!--zox-body-width-->
	<?php } else { ?>
		<div class="zox-body-width">
			<div id="zox-home-body-wrap" class="zoxrel zox100">
				<div id="zox-home-cont-wrap" class="zoxrel">
					<div id="zox-main-blog-wrap" class="zoxrel left zox100">
						<?php get_template_part( 'parts/blog', 'wrap' ); ?>
					</div><!--zox-main-blog-wrap-->
				</div><!--zox-home-cont-wrap-->
				<div class="zox-home-right-wrap zoxrel zox-sticky-side">
					<?php get_sidebar(); ?>
				</div><!--zox-home-right-wrap-->
			</div><!--zox-home-body-wrap-->
		</div><!--zox-body-width-->
	<?php } ?>
</div><!--zox-home-main-wrap-->
<?php get_footer(); ?>