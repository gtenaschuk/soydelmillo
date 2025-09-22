<?php $zox_feat_layout = get_option('zox_feat_layout'); $zox_cat_layout = get_option('zox_cat_layout'); if ((is_front_page() && $zox_feat_layout == "11" ) || (is_category() && $zox_cat_layout == "11" ) ) { ?>
	<div id="zox-feat-fash1-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-fash1-grid zox-feat-cont left zoxrel zox100">
				<div class="zox-feat-fash1-left-wrap zox-feat-side zox-sticky-side zoxrel">
					<div class="zox-feat-fash1-main zoxrel zox-div1t <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
						if ($zox_skin == "11") {
							echo "zox-o5";
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
					</div><!--zox-feat-fash1-main-->
				</div><!--zox-feat-fash1-left-wrap-->
				<div class="zox-feat-fash1-right-wrap zoxrel">
					<div class="zox-feat-fash1-sub-wrap zoxrel zox-div4">
						<?php if( is_front_page() ) { ?>
							<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '6', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
								<?php get_template_part( 'parts/art', 'square' ); ?>
							<?php endwhile; wp_reset_postdata(); ?>
						<?php } else { ?>
							<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '6', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
								<?php get_template_part( 'parts/art', 'square' ); ?>
							<?php endwhile; wp_reset_postdata(); ?>
						<?php } ?>
					</div><!--feat-fash1-sub-wrap-->
				</div><!--zox-feat-fash1-right-wrap-->
			</div><!--zox-feat-fash1-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-fash1-wrap-->
<?php } else if ((is_front_page() && $zox_feat_layout == "12" ) || (is_category() && $zox_cat_layout == "12" ) ) { ?>
	<div id="zox-feat-fash2-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-fash2-grid left zoxrel zox100 zox-div4 <?php $zox_skin = get_option('zox_skin'); $zox_stand_style = get_option('zox_stand_style');
				if ($zox_skin == "12") {
					echo "zox-s2";
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
					<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '4', 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
						<?php get_template_part( 'parts/art', 'large' ); ?>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php } else { ?>
					<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '4', 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
						<?php get_template_part( 'parts/art', 'large' ); ?>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php } ?>
			</div><!--zox-feat-fash2-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-fash2-wrap-->
<?php } else if ((is_front_page() && $zox_feat_layout == "13" ) || (is_category() && $zox_cat_layout == "13" ) ) { ?>
	<div id="zox-feat-fash3-wrap" class="left zoxrel zox100">
		<div class="zox-feat-fash3-grid left zoxrel zox100 zox-div1 <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
			if ($zox_skin == "13") {
				echo "zox-o2";
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
		</div><!--zox-feat-fash3-grid-->
	</div><!--zox-feat-fash3-wrap-->
<?php } ?>