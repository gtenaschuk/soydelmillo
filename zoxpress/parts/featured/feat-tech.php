<?php $zox_feat_layout = get_option('zox_feat_layout'); $zox_cat_layout = get_option('zox_cat_layout'); if ((is_front_page() && $zox_feat_layout == "14" ) || (is_category() && $zox_cat_layout == "14" ) ) { ?>
	<div id="zox-feat-tech1-wrap" class="left zoxrel zox100">
		<div class="zox-feat-tech1-grid left zoxrel zox100">
			<div class="zox-feat-tech1-main zoxrel zox-div2  <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
				if ($zox_skin == "14") {
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
			</div><!--zox-feat-tech1-main-->
			<div class="zox-feat-tech1-sub zoxrel zox-div4t <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
				if ($zox_skin == "14") {
					echo "zox-o4";
				} else {
					if ($zox_over_style == "1") {
						echo "zox-o1";
					} else if ($zox_over_style == "2") {
						echo "zox-o2";
					} else if ($zox_over_style == "3") {
						echo "zox-o3";
					} else if ($zox_over_style == "4") {
						echo "zox-o4";
					} else if ($zox_over_style == "5") {
						echo "zox-o5";
					} else {
						echo "zox-o6";
					}
					} ?>">
				<?php if( is_front_page() ) { ?>
					<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
						<?php get_template_part( 'parts/art', 'square' ); ?>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php } else { ?>
					<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
						<?php get_template_part( 'parts/art', 'square' ); ?>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php } ?>
			</div><!--zox-feat-tech1-sub-->
		</div><!--zox-feat-tech1-grid-->
	</div><!--zox-feat-tech1-wrap-->
<?php } else if ((is_front_page() && $zox_feat_layout == "15" ) || (is_category() && $zox_cat_layout == "15" ) ) { ?>
	<div id="zox-feat-tech2-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-tech2-grid left zoxrel zox100">
				<div class="zox-feat-tech2-main left zoxrel zox100 zox-div2 <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
					if ($zox_skin == "15") {
						echo "zox-o4";
					} else {
						if ($zox_over_style == "1") {
							echo "zox-o1";
						} else if ($zox_over_style == "2") {
							echo "zox-o2";
						} else if ($zox_over_style == "3") {
							echo "zox-o3";
						} else if ($zox_over_style == "4") {
							echo "zox-o4";
						} else if ($zox_over_style == "5") {
							echo "zox-o5";
						} else {
							echo "zox-o6";
						}
					} ?>">
					<?php if( is_front_page() ) { ?>
						<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '2', 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'large' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } else { ?>
						<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '2', 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'large' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } ?>
				</div><!--zox-feat-tech2-main-->
				<div class="zox-feat-tech2-sub left zoxrel zox100 zox-div4">
					<?php if( is_front_page() ) { ?>
						<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag__in' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '4', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'mid' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } else { ?>
						<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '4', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'mid' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } ?>
				</div><!--zox-feat-tech2-sub-->
			</div><!--zox-feat-tech2-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-tech2-wrap-->
<?php } else if ((is_front_page() && $zox_feat_layout == "16" ) || (is_category() && $zox_cat_layout == "16" ) ) { ?>
	<div id="zox-feat-tech3-wrap" class="left zoxrel zox100">
		<div class="zox-feat-tech3-grid left zoxrel zox100">
			<div class="zox-feat-tech3-main left zoxrel zox100 zox-div2 <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
				if ($zox_skin == "16") {
					echo "zox-o4";
				} else {
					if ($zox_over_style == "1") {
						echo "zox-o1";
					} else if ($zox_over_style == "2") {
						echo "zox-o2";
					} else if ($zox_over_style == "3") {
						echo "zox-o3";
					} else if ($zox_over_style == "4") {
						echo "zox-o4";
					} else if ($zox_over_style == "5") {
						echo "zox-o5";
					} else {
						echo "zox-o6";
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
			</div><!--zox-feat-tech3-main-->
			<div class="zox-feat-tech3-sub-wrap zoxrel zox100">
				<div class="zox-feat-tech3-sub-left zox-div4 zoxrel zox100  <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
					if ($zox_skin == "16") {
						echo "zox-o4";
					} else {
						if ($zox_over_style == "1") {
							echo "zox-o1";
						} else if ($zox_over_style == "2") {
							echo "zox-o2";
						} else if ($zox_over_style == "3") {
							echo "zox-o3";
						} else if ($zox_over_style == "4") {
							echo "zox-o4";
						} else if ($zox_over_style == "5") {
							echo "zox-o5";
						} else {
							echo "zox-o6";
						}
					} ?>">
					<?php if( is_front_page() ) { ?>
						<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '1', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'square' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } else { ?>
						<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '1', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'square' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } ?>
				</div><!--zox-feat-tech3-sub-left-->
				<div class="zox-feat-tech3-sub-right left zoxrel zox100 zox-div4 <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
					if ($zox_skin == "16") {
						echo "zox-o4";
					} else {
						if ($zox_over_style == "1") {
							echo "zox-o1";
						} else if ($zox_over_style == "2") {
							echo "zox-o2";
						} else if ($zox_over_style == "3") {
							echo "zox-o3";
						} else if ($zox_over_style == "4") {
							echo "zox-o4";
						} else if ($zox_over_style == "5") {
							echo "zox-o5";
						} else {
							echo "zox-o6";
						}
					} ?>">
					<?php if( is_front_page() ) { ?>
						<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'midm' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } else { ?>
						<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part( 'parts/art', 'midm' ); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					<?php } ?>
				</div><!--zox-feat-tech3-sub-right-->
			</div><!--zox-feat-tech3-sub-wrap-->
		</div><!--zox-feat-tech3-grid-->
	</div><!--zox-feat-tech3-wrap-->
<?php } ?>