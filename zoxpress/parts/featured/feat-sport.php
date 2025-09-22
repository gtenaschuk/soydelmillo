<?php $zox_feat_layout = get_option('zox_feat_layout'); $zox_cat_layout = get_option('zox_cat_layout'); if ((is_front_page() && $zox_feat_layout == "8" ) || (is_category() && $zox_cat_layout == "8" ) ) { ?>
	<div id="zox-feat-sport1-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-sport1-grid left zoxrel zox100">
				<div class="zox-feat-sport1-main-wrap zoxrel zox-div23 <?php $zox_skin = get_option('zox_skin'); $zox_stand_style = get_option('zox_stand_style');
					if ($zox_skin == "8") {
						echo "zox-s6";
					} else {
						if ($zox_stand_style == "1") {
							echo "zox-s1";
						} else if ($zox_stand_style == "3") {
							echo "zox-s3";
						} else if ($zox_stand_style == "4") {
							echo "zox-s4";
						} else if ($zox_stand_style == "5") {
							echo "zox-s5";
						} else if ($zox_stand_style == "6") {
							echo "zox-s6";
						} else if ($zox_stand_style == "7") {
							echo "zox-s7";
						} else if ($zox_stand_style == "8") {
							echo "zox-s8";
						} else {
							echo "zox-s2";
						}
						} ?>">
					<?php if( is_front_page() ) { ?>
						<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '1', 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'largef' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } else { ?>
						<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '1', 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'largef' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } ?>
				</div><!--zox-feat-sport1-main-wrap-->
				<div class="zox-feat-sport1-sub-wrap zoxrel zox-div3 <?php $zox_skin = get_option('zox_skin'); $zox_stand_style = get_option('zox_stand_style');
					if ($zox_skin == "8") {
						echo "zox-s6";
					} else {
						if ($zox_stand_style == "1") {
							echo "zox-s1";
						} else if ($zox_stand_style == "3") {
							echo "zox-s3";
						} else if ($zox_stand_style == "4") {
							echo "zox-s4";
						} else if ($zox_stand_style == "5") {
							echo "zox-s5";
						} else if ($zox_stand_style == "6") {
							echo "zox-s6";
						} else if ($zox_stand_style == "7") {
							echo "zox-s7";
						} else if ($zox_stand_style == "8") {
							echo "zox-s8";
						} else {
							echo "zox-s2";
						}
						} ?>">
					<?php if( is_front_page() ) { ?>
						<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'midm' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } else { ?>
						<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'midm' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } ?>
				</div><!--zox-feat-sport1-sub-wrap-->
				<div class="zox-feat-right-wrap zoxrel">
					<div class="zox-side-wrap zoxrel zoxs">
						<?php if ( is_active_sidebar( 'zox-feat-right-sidebar-widget' ) ) { ?>
							<?php dynamic_sidebar( 'zox-feat-right-sidebar-widget' ); ?>
						<?php } ?>
					</div><!--zox-side-wrap-->
				</div><!--zox-feat-right-wrap-->
			</div><!--zox-feat-sport1-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-sport1-wrap-->
<?php } else if ((is_front_page() && $zox_feat_layout == "9" ) || (is_category() && $zox_cat_layout == "9" ) ) { ?>
	<div id="zox-feat-sport2-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-sport2-grid left zoxrel zox100">
				<div class="zox-feat-sport2-main-wrap zoxrel zox-div1 <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
					if ($zox_skin == "9") {
						echo "zox-o3";
					} else {
						if ($zox_over_style == "2") {
							echo "zox-o2";
						} else if ($zox_over_style == "3") {
							echo "zox-o3";
						} else if ($zox_over_style == "4") {
							echo "zox-o4";
						} else if ($zox_over_style == "5") {
							echo "zox-o5";
						} else {
							echo "zox-o1";
						}
						} ?>">
					<?php if( is_front_page() ) { ?>
						<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '1', 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'exlargef' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } else { ?>
						<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '1', 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'exlargef' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } ?>
				</div><!--zox-feat-sport2-main-wrap-->
			</div><!--zox-feat-sport2-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-sport2-wrap-->
<?php } else if ((is_front_page() && $zox_feat_layout == "10" ) || (is_category() && $zox_cat_layout == "10" ) ) { ?>
	<div id="zox-feat-sport3-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-sport3-grid left zoxrel zox100">
				<div class="zox-feat-sports3-main-wrap zoxrel">
					<div class="zox-feat-sports3-main zoxrel zox-div23 <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
						if ($zox_skin == "10") {
							echo "zox-o4";
						} else {
							if ($zox_over_style == "2") {
								echo "zox-o2";
							} else if ($zox_over_style == "3") {
								echo "zox-o3";
							} else if ($zox_over_style == "4") {
								echo "zox-o4";
							} else if ($zox_over_style == "5") {
								echo "zox-o5";
							} else {
								echo "zox-o1";
							}
							} ?>">
						<?php if( is_front_page() ) { ?>
							<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '1', 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
								<?php get_template_part( 'parts/art', 'largef' ); ?>
							<?php endwhile; wp_reset_postdata(); ?>
						<?php } else { ?>
							<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '1', 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
								<?php get_template_part( 'parts/art', 'largef' ); ?>
							<?php endwhile; wp_reset_postdata(); ?>
						<?php } ?>
					</div><!--zox-feat-sports3-main-->
					<div class="zox-feat-sports3-sub zoxrel zox-div4">
						<?php if( is_front_page() ) { ?>
							<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
								<?php get_template_part( 'parts/art', 'midm' ); ?>
							<?php endwhile; wp_reset_postdata(); ?>
						<?php } else { ?>
							<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '3', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
								<?php get_template_part( 'parts/art', 'midm' ); ?>
							<?php endwhile; wp_reset_postdata(); ?>
						<?php } ?>
					</div><!--zox-feat-sports3-sub-->
				</div><!--zox-feat-sports3-main-wrap-->
			</div><!--zox-feat-sport3-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-sport3-wrap-->
<?php } ?>