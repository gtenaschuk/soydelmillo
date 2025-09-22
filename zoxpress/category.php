<?php get_header(); ?>
<div id="zox-home-main-wrap" class="zoxrel zox100">
	<?php $zox_skin = get_option('zox_skin'); $zox_home_rside = get_option('zox_home_rside'); if (($zox_skin == "10") || ($zox_skin == "1" && $zox_home_rside == "2")) { ?>
		<div class="zox-body-width">
			<div id="zox-home-body-wrap" class="zoxrel zox100">
				<div id="zox-home-cont-wrap" class="zoxrel">
					<?php get_template_part( 'parts/featured/featured' ); ?>
					<div id="zox-main-blog-wrap" class="zoxrel left zox100">
						<?php get_template_part( 'parts/blog', 'wrap' ); ?>
					</div><!--zox-main-blog-wrap-->
				</div><!--zox-home-cont-wrap-->
				<div class="zox-home-right-wrap zox-sticky-side zoxrel">
					<?php get_sidebar(); ?>
				</div><!--zox-home-right-wrap-->
			</div><!--zox-home-body-wrap-->
		</div><!--zox-body-width-->
	<?php } else if ($zox_skin == "1" && $zox_home_rside == "1") { ?>
		<?php get_template_part( 'parts/featured/featured' ); ?>
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
		<?php get_template_part( 'parts/featured/featured' ); ?>
		<div class="zox-body-width">
			<div id="zox-home-body-wrap" class="zoxrel zox100">
				<div id="zox-home-cont-wrap" class="zoxrel">
					<div id="zox-main-blog-wrap" class="zoxrel left zox100">
						<?php get_template_part( 'parts/blog', 'wrap' ); ?>
					</div><!--zox-main-blog-wrap-->
				</div><!--zox-home-cont-wrap-->
				<div class="zox-home-right-wrap zox-sticky-side zoxrel">
					<?php get_sidebar(); ?>
				</div><!--zox-home-right-wrap-->
			</div><!--zox-home-body-wrap-->
		</div><!--zox-body-width-->
	<?php } ?>
</div><!--zox-home-main-wrap-->
<?php get_footer(); ?>