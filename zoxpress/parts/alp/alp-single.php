<div class="zox-alp-width">
	<div class="zox-auto-post-grid">
		<div class="zox-alp-side zox-sticky-side">
			<div class="zox-alp-side-in">
				<?php get_template_part( 'parts/alp/alp', 'side' ); ?>
			</div><!--zox-alp-side-in-->
		</div><!--zox-alp-side-->
		<div class="zox-auto-post-main">
			<article id="post-<?php echo get_the_ID(); ?>" <?php post_class(); ?> class="zox-post-wrap" itemscope itemtype="http://schema.org/NewsArticle">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $zox_post_layout = get_option('zox_post_layout'); $zox_post_temp = get_post_meta($post->ID, "zox_post_template", true); if( (empty($zox_post_temp) && $zox_post_layout == '7') || ( $zox_post_temp == "def" && $zox_post_layout == '7' ) || ( $zox_post_temp == "global" && $zox_post_layout == '7' ) || $zox_post_temp == "temp7" ) { ?>
						<?php get_template_part( 'parts/post/post', 'vid' ); ?>
					<?php } ?>
					<div class="zox-article-wrap zoxrel left zox100">
						<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="<?php the_permalink(); ?>"/>
						<?php $zox_post_layout = get_option('zox_post_layout'); $zox_post_temp = get_post_meta($post->ID, "zox_post_template", true); if( ( empty($zox_post_temp) && empty($zox_post_layout) ) || (empty($zox_post_temp) && $zox_post_layout == '1') || ( $zox_post_temp == "def" && $zox_post_layout == '1' ) || ( $zox_post_temp == "global" && $zox_post_layout == '1' ) || ( empty($zox_post_temp) && $zox_post_layout == '2' ) || ( $zox_post_temp == "def" && $zox_post_layout == '2' ) || ( $zox_post_temp == "global" && $zox_post_layout == '2' ) || ( empty($zox_post_temp) && $zox_post_layout == '3' ) || ( $zox_post_temp == "def" && $zox_post_layout == '3' ) || ( $zox_post_temp == "global" && $zox_post_layout == '3' ) || ( empty($zox_post_temp) && $zox_post_layout == '4' ) || ( $zox_post_temp == "def" && $zox_post_layout == '4' ) || ( $zox_post_temp == "global" && $zox_post_layout == '4' ) || $zox_post_temp == "temp1" || $zox_post_temp == "temp2" || $zox_post_temp == "temp3" || $zox_post_temp == "temp4" ) { ?>
							<div class="zox-post-top-wrap zoxrel left zox100">
								<?php $zox_post_layout = get_option('zox_post_layout'); $zox_post_temp = get_post_meta($post->ID, "zox_post_template", true); if( ( empty($zox_post_temp) && empty($zox_post_layout) ) || (empty($zox_post_temp) && $zox_post_layout == '1') || ( $zox_post_temp == "def" && $zox_post_layout == '1' ) || ( $zox_post_temp == "global" && $zox_post_layout == '1' ) || ( empty($zox_post_temp) && $zox_post_layout == '2' ) || ( $zox_post_temp == "def" && $zox_post_layout == '2' ) || ( $zox_post_temp == "global" && $zox_post_layout == '2' ) || $zox_post_temp == "temp1" || $zox_post_temp == "temp2" ) { ?>
									<div class="zox-post-title-wrap zox-tit2">
										<div class="zox-post-width">
											<?php get_template_part( 'parts/post/post', 'head' ); ?>
										</div><!--zox-post-width-->
									</div><!--zox-post-title-wrap-->
								<?php } ?>
								<?php $zox_post_layout = get_option('zox_post_layout'); $zox_post_temp = get_post_meta($post->ID, "zox_post_template", true); if( (empty($zox_post_temp) && $zox_post_layout == '2') || ( $zox_post_temp == "def" && $zox_post_layout == '2' ) || ( $zox_post_temp == "global" && $zox_post_layout == '2' ) || $zox_post_temp == "temp2" ) { ?>
									<div class="zox-post-img-wrap">
										<div class="zox-post-width">
											<?php get_template_part( 'parts/post/post', 'img' ); ?>
										</div><!--zox-post-width-->
									</div><!--zox-post-img-wrap-->
								<?php } ?>
								<?php $zox_post_layout = get_option('zox_post_layout'); $zox_post_temp = get_post_meta($post->ID, "zox_post_template", true); if( ( empty($zox_post_temp) && $zox_post_layout == '4' ) || ( $zox_post_temp == "def" && $zox_post_layout == '4' ) || ( $zox_post_temp == "global" && $zox_post_layout == '4' ) || $zox_post_temp == "temp4" ) { ?>
									<div class="zox-post-img-wrap zox-alp-img-full">
										<div class="zox-post-width">
											<?php get_template_part( 'parts/post/post', 'img' ); ?>
										</div><!--zox-post-width-->
									</div><!--zox-post-img-wrap-->
								<?php } ?>
								<?php $zox_post_layout = get_option('zox_post_layout'); $zox_post_temp = get_post_meta($post->ID, "zox_post_template", true); if( ( empty($zox_post_temp) && $zox_post_layout == '3' ) || ( $zox_post_temp == "def" && $zox_post_layout == '3' ) || ( $zox_post_temp == "global" && $zox_post_layout == '3' ) ||$zox_post_temp == "temp3" ) { ?>
									<div class="zox-post-img-wrap zox-alp-img-full">
										<div class="zox-post-width">
											<?php get_template_part( 'parts/post/post', 'img' ); ?>
										</div><!--zox-post-width-->
									</div><!--zox-post-img-wrap-->
									<div class="zox-post-title-wrap zox-tit2 zox-post-head-min">
										<div class="zox-post-width">
											<?php get_template_part( 'parts/post/post', 'head' ); ?>
										</div><!--zox-post-width-->
									</div><!--zox-post-title-wrap-->
								<?php } ?>
							</div><!--zox-post-top-wrap-->
						<?php } ?>
						<div class="zox-post-main-grid">
							<div class="zox-post-width">
								<div class="zox-post-main-wrap zoxrel left zox100">
									<div class="zox-post-main">
										<?php $zox_post_layout = get_option('zox_post_layout'); $zox_post_temp = get_post_meta($post->ID, "zox_post_template", true); if( ( empty($zox_post_temp) && empty($zox_post_layout) ) || (empty($zox_post_temp) && $zox_post_layout == '1') || ( $zox_post_temp == "def" && $zox_post_layout == '1' ) || ( $zox_post_temp == "global" && $zox_post_layout == '1' ) || ( empty($zox_post_temp) && $zox_post_layout == '4' ) || ( $zox_post_temp == "def" && $zox_post_layout == '4' ) || ( $zox_post_temp == "global" && $zox_post_layout == '4' ) || ( empty($zox_post_temp) && $zox_post_layout == '5' ) || ( $zox_post_temp == "def" && $zox_post_layout == '5' ) || ( $zox_post_temp == "global" && $zox_post_layout == '5' ) || ( empty($zox_post_temp) && $zox_post_layout == '6' ) || ( $zox_post_temp == "def" && $zox_post_layout == '6' ) || ( $zox_post_temp == "global" && $zox_post_layout == '6' ) || $zox_post_temp == "temp1" || $zox_post_temp == "temp4" || $zox_post_temp == "temp5" || $zox_post_temp == "temp6" ) { ?>
											<div class="zox-post-bot-wrap">
												<?php $zox_post_layout = get_option('zox_post_layout'); $zox_post_temp = get_post_meta($post->ID, "zox_post_template", true); if( (empty($zox_post_temp) && $zox_post_layout == '4') || ( $zox_post_temp == "def" && $zox_post_layout == '4' ) || ( $zox_post_temp == "global" && $zox_post_layout == '4' ) || $zox_post_temp == "temp4" ) { ?>
													<div class="zox-post-title-wrap zox-tit2 zox-post-head-min">
														<div class="zox-post-width">
															<?php get_template_part( 'parts/post/post', 'head' ); ?>
														</div><!--zox-poost-width-->
													</div><!--zox-post-title-wrap-->
												<?php } ?>
												<?php $zox_post_layout = get_option('zox_post_layout'); $zox_post_temp = get_post_meta($post->ID, "zox_post_template", true); if( ( empty($zox_post_temp) && $zox_post_layout == '5' ) || ( $zox_post_temp == "def" && $zox_post_layout == '5' ) || ( $zox_post_temp == "global" && $zox_post_layout == '5' ) || $zox_post_temp == "temp5" ) { ?>
													<div class="zox-post-title-wrap zox-tit2">
														<?php get_template_part( 'parts/post/post', 'head' ); ?>
													</div><!--zox-post-title-wrap-->
													<div class="zox-post-img-wrap">
														<?php get_template_part( 'parts/post/post', 'img' ); ?>
													</div><!--zox-post-img-wrap-->
												<?php } ?>
												<?php $zox_post_layout = get_option('zox_post_layout'); $zox_post_temp = get_post_meta($post->ID, "zox_post_template", true); if( ( empty($zox_post_temp) && empty($zox_post_layout) ) || (empty($zox_post_temp) && $zox_post_layout == '1') || ( $zox_post_temp == "def" && $zox_post_layout == '1' ) || ( $zox_post_temp == "global" && $zox_post_layout == '1' ) || ( empty($zox_post_temp) && $zox_post_layout == '6' ) || ( $zox_post_temp == "def" && $zox_post_layout == '6' ) || ( $zox_post_temp == "global" && $zox_post_layout == '6' ) || $zox_post_temp == "temp1" || $zox_post_temp == "temp6" ) { ?>
													<div class="zox-post-img-wrap">
														<?php get_template_part( 'parts/post/post', 'img' ); ?>
													</div><!--zox-post-img-wrap-->
												<?php } ?>
												<?php $zox_post_layout = get_option('zox_post_layout'); $zox_post_temp = get_post_meta($post->ID, "zox_post_template", true); if( ( empty($zox_post_temp) && $zox_post_layout == '6' ) || ( $zox_post_temp == "def" && $zox_post_layout == '6' ) || ( $zox_post_temp == "global" && $zox_post_layout == '6' ) ||$zox_post_temp == "temp6" ) { ?>
													<div class="zox-post-title-wrap zox-tit2 zox-post-head-min">
														<div class="zox-post-width">
															<?php get_template_part( 'parts/post/post', 'head' ); ?>
														</div><!--zox-poost-width-->
													</div><!--zox-post-title-wrap-->
												<?php } ?>
											</div><!--zox-post-bot-wrap-->
										<?php } ?>
										<?php get_template_part( 'parts/post/post', 'body' ); ?>
									</div><!--zox-post-main-->
								</div><!--zox-post-main-wrap-->
							</div><!--zox-post-width-->
						</div><!--zox-post-main-grid-->
						<?php setCrunchifyPostViews(get_the_ID()); ?>
						<?php $disqus_id3 = get_option('zox_disqus_id'); zoxClickCommmentButton($disqus_id3); ?>
					</div><!--zox-article-wrap-->
					<?php get_template_part( 'parts/post/post', 'foot' ); ?>
				<?php endwhile; endif; ?>
			</article><!--zox-post-wrap-->
		</div><!--zox-auto-post-main-->
		<?php $zox_post_side = get_post_meta($post->ID, "zox_post_side", true); $zox_alp_side = get_option('zox_alp_side'); if ($zox_alp_side == "2" && $zox_post_side !== "hide") { ?>
			<div class="zox-post-side-wrap zoxrel zox-sticky-side">
				<?php get_sidebar(); ?>
			</div><!--zox-post-side-wrap-->
		<?php } ?>
	</div><!--zox-auto-post-grid-->
</div><!--zox-alp-width-->