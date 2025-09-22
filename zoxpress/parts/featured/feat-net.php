<?php $zox_feat_layout = get_option('zox_feat_layout'); $zox_cat_layout = get_option('zox_cat_layout'); if ((is_front_page() && $zox_feat_layout == "5" ) || (is_category() && $zox_cat_layout == "5" ) ) { ?>
	<div id="zox-feat-net1-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-net1-grid zox-feat-cont left zoxrel zox100">
				<div class="zox-feat-net1-cont">
					<div class="zox-feat-net1-main zoxrel zox-div2 <?php $zox_skin = get_option('zox_skin'); $zox_stand_style = get_option('zox_stand_style');
						if ($zox_skin == "5") {
							echo "zox-s4";
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
					</div><!--zox-feat-net1-main-->
					<div class="zox-feat-net1-sub zoxrel zox-div4">
						<?php if( is_front_page() ) { ?>
							<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
								<?php get_template_part( 'parts/art', 'midm' ); ?>
							<?php endwhile; wp_reset_postdata(); ?>
						<?php } else { ?>
							<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
								<?php get_template_part( 'parts/art', 'midm' ); ?>
							<?php endwhile; wp_reset_postdata(); ?>
						<?php } ?>
					</div><!--zox-feat-net1-sub-->
				</div><!--zox-feat-net1-cont-->
				<div class="zox-feat-right-wrap zoxrel">
					<?php if ( is_active_sidebar( 'zox-feat-right-sidebar-widget' ) ) { ?>
						<?php dynamic_sidebar( 'zox-feat-right-sidebar-widget' ); ?>
					<?php } ?>
				</div><!--zox-feat-right-wrap-->
			</div><!--zox-feat-net1-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-net1-wrap-->
<?php } else if ((is_front_page() && $zox_feat_layout == "6" ) || (is_category() && $zox_cat_layout == "6" ) ) { ?>
	<div id="zox-feat-net2-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-net2-grid left zoxrel zox100">
				<div class="zox-feat-net2-main-wrap zoxrel zox-div2 <?php $zox_skin = get_option('zox_skin'); $$zox_stand_style = get_option('zox_stand_style');
					if ($zox_skin == "6") {
						echo "zox-s4";
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
							<?php get_template_part( 'parts/art', 'large' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } else { ?>
						<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '1', 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'large' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } ?>
				</div><!--zox-feat-net2-main-wrap-->
				<div class="zox-feat-net2-sub-wrap zoxrel zox-div4 <?php $zox_skin = get_option('zox_skin'); $zox_stand_style = get_option('zox_stand_style');
					if ($zox_skin == "5") {
						echo "zox-s4";
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
						<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'large' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } else { ?>
						<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'large' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } ?>
				</div><!--zox-feat-net2-sub-wrap-->
			</div><!--zox-feat-net2-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-net2-wrap-->
<?php } else if ((is_front_page() && $zox_feat_layout == "7" ) || (is_category() && $zox_cat_layout == "7" ) ) { ?>
	<div id="zox-feat-net3-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-net3-grid left zoxrel zox100">
				<div class="zox-feat-net3-main-wrap zoxrel zox-div1 <?php $zox_skin = get_option('zox_skin'); $zox_stand_style = get_option('zox_stand_style');
					if ($zox_skin == "7") {
						echo "zox-s5";
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
				</div><!--zox-feat-net3-main-wrap-->
				<div class="zox-feat-net3-sub-wrap zoxrel zox-div3 <?php $zox_skin = get_option('zox_skin'); $zox_stand_style = get_option('zox_stand_style');
					if ($zox_skin == "7") {
						echo "zox-s5";
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
				</div><!--zox-feat-net3-sub-wrap-->
			</div><!--zox-feat-net3-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-net3-wrap-->
<?php } ?>