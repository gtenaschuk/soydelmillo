<?php
	/* Template Name: Authors List */
?>
<?php get_header(); ?>
<div id="zox-home-main-wrap" class="zoxrel zox100">
	<div class="zox-article-wrap zoxrel left zox100">
		<?php if( is_tag() ) { ?>
			<div class="zox-body-width">
				<div class="zox-post-top-wrap zoxrel left zox100">
					<div class="zox-post-title-wrap zox-tit1">
						<h1 class="zox-post-title left entry-title" itemprop="headline"><?php esc_html_e( 'All posts tagged', 'zoxpress' ); ?> "<?php single_tag_title(); ?>"</h1>
					</div><!--zox-post-title-wrap-->
				</div><!--zox-post-top-wrap-->
			</div><!--zox-body-width-->
		<?php } ?>
		<?php $zox_skin = get_option('zox_skin'); $zox_home_rside = get_option('zox_home_rside'); if ($zox_skin == "1" && $zox_home_rside == "1") { ?>
			<div class="zox-body-width">
				<div id="zox-home-body-wrap" class="zoxrel zox100">
					<div id="zox-home-cont-wrap" class="zoxrel">
						<div id="zox-main-blog-wrap" class="zoxrel left zox100">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="zox-authors-wrap">
									<section class="zox-authors-grid left zoxrel">
										<?php $zox_users = get_users('orderby=post_count&order=DESC'); foreach($zox_users as $user) { $post_count = count_user_posts( $user->ID ); if($post_count < 1) continue; ?>
											<div class="zox-authors-cont">
												<div class="zox-authors-left">
													<?php echo get_avatar( $user->user_email, '200' ); ?>
												</div><!--zox-authors-left-->
												<div class="zox-authors-right">
													<div class="zox-authors-text">
														<span class="zox-authors-name"><a href="<?php echo get_author_posts_url( $user->ID ); ?>"><?php echo esc_html( $user->display_name ); ?></a></span>
														<p class="zox-authors-desc"><?php echo wp_kses_post( $user->description ); ?></p>
														<?php wp_get_current_user(); $author_query = array('posts_per_page' => '1','author' => $user->ID); $author_posts = new WP_Query($author_query); while($author_posts->have_posts()) : $author_posts->the_post(); ?>
															<a href="<?php the_permalink(); ?>" rel="bookmark"><h2 class="zox-authors-latest"><?php the_title(); ?></h2></a>
														<?php endwhile; wp_reset_postdata(); ?>
													</div><!--zox-authors-text-->
												</div><!--zox-authors-right-->
											</div><!--zox-authors-cont-->
										<?php } ?>
									</section><!--zox-authors-wrap-->
								</div><!--zox-authors-wrap-->
							<?php endwhile; endif; ?>
						</div><!--zox-main-blog-wrap-->
					</div><!--zox-home-cont-wrap-->
				</div><!--zox-home-body-wrap-->
			</div><!--zox-body-width-->
		<?php } else { ?>
			<div class="zox-body-width">
				<div id="zox-home-body-wrap" class="zoxrel zox100">
					<div id="zox-home-cont-wrap" class="zoxrel">
						<div id="zox-main-blog-wrap" class="zoxrel left zox100">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="zox-authors-wrap">
									<section class="zox-authors-grid left zoxrel">
										<?php $zox_users = get_users('orderby=post_count&order=DESC'); foreach($zox_users as $user) { $post_count = count_user_posts( $user->ID ); if($post_count < 1) continue; ?>
											<div class="zox-authors-cont">
												<div class="zox-authors-left">
													<?php echo get_avatar( $user->user_email, '200' ); ?>
												</div><!--zox-authors-left-->
												<div class="zox-authors-right">
													<div class="zox-authors-text">
														<span class="zox-authors-name"><a href="<?php echo get_author_posts_url( $user->ID ); ?>"><?php echo esc_html( $user->display_name ); ?></a></span>
														<p class="zox-authors-desc"><?php echo wp_kses_post( $user->description ); ?></p>
														<?php wp_get_current_user(); $author_query = array('posts_per_page' => '1','author' => $user->ID); $author_posts = new WP_Query($author_query); while($author_posts->have_posts()) : $author_posts->the_post(); ?>
															<a href="<?php the_permalink(); ?>" rel="bookmark"><h2 class="zox-authors-latest"><?php the_title(); ?></h2></a>
														<?php endwhile; wp_reset_postdata(); ?>
													</div><!--zox-authors-text-->
												</div><!--zox-authors-right-->
											</div><!--zox-authors-cont-->
										<?php } ?>
									</section><!--zox-authors-wrap-->
								</div><!--zox-authors-wrap-->
							<?php endwhile; endif; ?>
						</div><!--zox-main-blog-wrap-->
					</div><!--zox-home-cont-wrap-->
					<div class="zox-home-right-wrap zox-sticky-side zoxrel">
						<?php get_sidebar(); ?>
					</div><!--zox-home-right-wrap-->
				</div><!--zox-home-body-wrap-->
			</div><!--zox-body-width-->
		<?php } ?>
	</div><!--zox-article-wrap-->
</div><!--zox-home-main-wrap-->
<?php get_footer(); ?>