<?php $zox_feat_layout = get_option('zox_feat_layout'); $zox_cat_layout = get_option('zox_cat_layout'); if ((is_front_page() && $zox_feat_layout == "2") || (is_category() && $zox_cat_layout == "2") ) { ?>
	<div id="zox-feat-ent1-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-ent1-grid left zoxrel zox100">
				<div class="zox-feat-ent1-cont-wrap zox-feat-cont zoxrel">
					<div class="zox-feat-ent1-cont zoxrel">
						<div class="zox-feat-ent1-main-wrap zoxrel zox-div2 <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
							if ($zox_skin == "2") {
								echo "zox-o6";
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
									<?php get_template_part( 'parts/art', 'largef' ); ?>
								<?php endwhile; wp_reset_postdata(); ?>
							<?php } else { ?>
								<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '1', 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
									<?php get_template_part( 'parts/art', 'largef' ); ?>
								<?php endwhile; wp_reset_postdata(); ?>
							<?php } ?>
						</div><!--zox-feat-ent1-main-wrap-->
						<div class="zox-feat-ent1-sub-wrap zoxrel zox-div4">
							<?php if( is_front_page() ) { ?>
								<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
									<?php get_template_part( 'parts/art', 'mid' ); ?>
								<?php endwhile; wp_reset_postdata(); ?>
							<?php } else { ?>
								<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
									<?php get_template_part( 'parts/art', 'mid' ); ?>
								<?php endwhile; wp_reset_postdata(); ?>
							<?php } ?>
						</div><!--zox-feat-ent1-sub-wrap-->
					</div><!--zox-feat-ent1-cont-->
					<div class="zox-feat-left-wrap zoxrel zox-divs">
						<div class="zox-feat-ent1-left left zoxrel zox100">
							<div class="zox-widget-side-head">
								<h4 class="zox-widget-side-title">
									<span class="zox-widget-side-title"><?php esc_html_e( 'Latest News', 'zoxpress' ); ?></span>
								</h4>
							</div><!--zox-widget-side-title-->
							<?php global $do_not_duplicate; global $post; $count = 0; query_posts(array( 'posts_per_page' => '8', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); if (have_posts()) : while (have_posts()) : the_post(); $count++; ?>
							<?php if ($count == 1 || $count == 5) { $do_not_duplicate[] = $post->ID; ?>
								<?php get_template_part( 'parts/art', 'midm' ); ?>
							<?php } else { ?>
								<?php get_template_part( 'parts/art', 'small' ); ?>
							<?php } endwhile; endif; wp_reset_query(); ?>
						</div><!--zox-feat-ent1-left-->
					</div><!--zox-feat-left-wrap-->
				</div><!--zox-feat-ent1-cont-wrap-->
				<div class="zox-feat-right-wrap zoxrel zox-sticky-side">
					<div class="zox-side-wrap zoxrel zoxs">
						<?php if ( is_active_sidebar( 'zox-feat-right-sidebar-widget' ) ) { ?>
							<?php dynamic_sidebar( 'zox-feat-right-sidebar-widget' ); ?>
						<?php } ?>
					</div><!--zox-side-wrap-->
				</div><!--zox-feat-right-wrap-->
			</div><!--zox-feat-ent1-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-ent1-wrap-->
<?php } else if ((is_front_page() && $zox_feat_layout == "3") || (is_category() && $zox_cat_layout == "3" )) { ?>
	<div id="zox-feat-ent2-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-ent2-grid left zoxrel zox100">
				<div class="zox-feat-ent2-main zoxrel zox100 zox-div2 <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
					if ($zox_skin == "3") {
						echo "zox-o1";
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
					<div class="zox-feat-ent2-main-grid zoxrel">
						<?php if( is_front_page() ) { ?>
							<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '2', 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
								<?php get_template_part( 'parts/art', 'exlarge' ); ?>
							<?php endwhile; wp_reset_postdata(); ?>
						<?php } else { ?>
							<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '2', 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
								<?php get_template_part( 'parts/art', 'exlarge' ); ?>
							<?php endwhile; wp_reset_postdata(); ?>
						<?php } ?>
					</div><!--zox-feat-ent2-main-grid-->
				</div><!--zox-feat-ent2-main-->
				<div class="zox-feat-ent2-bot zox-feat-cont zoxrel zox100">
					<div class="zox-feat-ent2-sub-wrap zoxrel zox100">
						<div class="zox-feat-ent2-sub1 zoxrel zox100 zox-div23 <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
							if ($zox_skin == "3") {
								echo "zox-o1";
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
								<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '1', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
									<?php get_template_part( 'parts/art', 'large' ); ?>
								<?php endwhile; wp_reset_postdata(); ?>
							<?php } else { ?>
								<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '1', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
									<?php get_template_part( 'parts/art', 'large' ); ?>
								<?php endwhile; wp_reset_postdata(); ?>
							<?php } ?>
						</div><!--zox-feat-ent2-sub1-->
						<div class="zox-feat-ent2-sub2 zoxrel zox100 zox-div3 <?php $zox_skin = get_option('zox_skin'); $zox_over_style = get_option('zox_over_style');
							if ($zox_skin == "3") {
								echo "zox-o1";
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
								<?php global $do_not_duplicate; global $post; $recent = new WP_Query(array( 'tag_id' => zox_tag_ID(esc_html(get_option('zox_feat_posts_tags'))), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($recent->have_posts()) : $recent->the_post(); $do_not_duplicate[] = $post->ID; ?>
									<?php get_template_part( 'parts/art', 'large' ); ?>
								<?php endwhile; wp_reset_postdata(); ?>
							<?php } else { ?>
								<?php global $do_not_duplicate; global $post; $cat_posts = new WP_Query(array( 'cat' => get_query_var('cat'), 'posts_per_page' => '2', 'post__not_in'=>$do_not_duplicate, 'ignore_sticky_posts'=> 1 )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; ?>
									<?php get_template_part( 'parts/art', 'large' ); ?>
								<?php endwhile; wp_reset_postdata(); ?>
							<?php } ?>
						</div><!--zox-feat-ent2-sub2-->
					</div><!--zox-feat-ent2-sub-wrap-->
					<div class="zox-feat-right-wrap zox-feat-side zoxrel">
						<?php if ( is_active_sidebar( 'zox-feat-right-sidebar-widget' ) ) { ?>
							<?php dynamic_sidebar( 'zox-feat-right-sidebar-widget' ); ?>
						<?php } ?>
					</div><!--zox-feat-right-wrap-->
				</div><!--zox-feat-ent2-bot-->
			</div><!--zox-feat-ent2-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-ent2-wrap-->
<?php } else if ((is_front_page() && $zox_feat_layout == "4" ) || (is_category() && $zox_cat_layout == "4" )) { ?>
	<div id="zox-feat-ent3-wrap" class="left zoxrel zox100">
		<div class="zox-body-width">
			<div class="zox-feat-ent3-grid left zoxrel zox100">
				<div class="zox-feat-ent3-main-wrap zox-div1 <?php $zox_skin = get_option('zox_skin'); $zox_stand_style = get_option('zox_stand_style');
					if ($zox_skin == "4") {
						echo "zox-s8";
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
				</div><!--zox-feat-ent3-main-wrap-->
				<div class="zox-feat-ent3-sub-wrap zox-div3 <?php $zox_skin = get_option('zox_skin'); $zox_stand_style = get_option('zox_stand_style');
					if ($zox_skin == "4") {
						echo "zox-s8";
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
				</div><!--zox-feat-ent3-sub-wrap-->
			</div><!--zox-feat-ent3-grid-->
		</div><!--zox-body-width-->
	</div><!--zox-feat-ent3-wrap-->
<?php } ?>