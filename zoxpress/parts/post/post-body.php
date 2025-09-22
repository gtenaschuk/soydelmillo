<div class="zox-post-body-wrap left zoxrel">
	<div class="zox-post-body left zoxrel zox100">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div><!--zox-post-body-->
	<div class="zox-post-body-bot left zoxrel zox100">
		<div class="zox-post-body-width">
			<div class="zox-post-tags left zoxrel zox100">
				<span class="zox-post-tags-header"><?php esc_html_e( 'In this article:', 'zoxpress' ); ?></span><span itemprop="keywords"><?php the_tags('',', ','') ?></span>
			</div><!--zox-post-tags-->
			<?php $zox_prev_next = get_option('zox_prev_next'); if ($zox_prev_next == "true") { ?>
				<div class="zox-prev-next-wrap left relative">
					<?php $nextPost = get_next_post(TRUE, ''); if($nextPost) { $args = array( 'posts_per_page' => 1, 'include' => $nextPost->ID ); $nextPost = get_posts($args); foreach ($nextPost as $post) { setup_postdata($post); ?>
						<div class="zox-next-wrap">
							<span class="zox-prev-next-label left"><?php esc_html_e( "Up Next", 'zoxpress' ); ?>:</span><a href="<?php the_permalink(); ?>" rel="bookmark"><h2><?php the_title(); ?></h2></a>
						</div><!--zox-next-wrap-->
					<?php wp_reset_postdata(); } } ?>
					<?php $prevPost = get_previous_post(TRUE, ''); if($prevPost) { $args = array( 'posts_per_page' => 1, 'include' => $prevPost->ID ); $prevPost = get_posts($args); foreach ($prevPost as $post) { setup_postdata($post); ?>
						<div class="zox-prev-wrap">
							<span class="zoxprev-next-label left"><?php esc_html_e( "Don't Miss", 'zoxpress' ); ?>:</span><a href="<?php the_permalink(); ?>" rel="bookmark"><h2><?php the_title(); ?></h2></a>
						</div><!--zox-prev-wrap-->
					<?php wp_reset_postdata(); } } ?>
				</div><!--zox-prev-next-wrap-->
			<?php } ?>
			<div class="zox-posts-nav-link">
				<?php posts_nav_link(); ?>
			</div><!--zox-posts-nav-link-->
			<?php $zox_author_box = get_option('zox_author_box'); if ($zox_author_box == "true") { ?>
				<div class="zox-author-box-wrap left zoxrel">
					<div class="zox-author-box-img zoxrel">
						<?php echo get_avatar( get_the_author_meta('email'), '150' ); ?>
					</div><!--zox-author-box-img-->
					<div class="zox-author-box-right">
						<div class="zox-author-box-head zoxrel">
							<div class="zox-author-box-name-wrap">
								<span class="zox-author-box-name-head zoxrel"><?php esc_html_e( 'Written By', 'zoxpress' ); ?></span>
								<span class="zox-author-box-name zoxrel"><?php the_author_posts_link(); ?></span>
							</div><!--zox-author-box-name-wrap-->
						</div><!--zox-author-box-head-->
						<div class="zox-author-box-text left zoxrel">
							<p><?php the_author_meta('description'); ?></p>
						</div><!--zox-author-box-text-->
					</div><!--zox-author-box-right-->
				</div><!--zox-author-box-wrap-->
			<?php } ?>
			<div class="zox-org-wrap" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				<div class="zox-org-logo" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
					<?php if(get_option('zox_logo_nav')) { ?>
						<img src="<?php echo esc_url(get_option('zox_logo_nav')); ?>"/>
						<meta itemprop="url" content="<?php echo esc_url(get_option('zox_logo_nav')); ?>">
					<?php } else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent1.png" alt="<?php bloginfo( 'name' ); ?>" />
						<meta itemprop="url" content="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent1.png">
					<?php } ?>
				</div><!--zox-org-logo-->
				<meta itemprop="name" content="<?php bloginfo( 'name' ); ?>">
			</div><!--zox-org-wrap-->
			<?php if ( comments_open() ) { ?>
				<?php $disqus_id = get_option('zox_disqus_id'); if ($disqus_id) { if (isset($disqus_id)) {  ?>
					<?php $zox_click_id = get_the_ID(); ?>
					<div id="zox-comments-button" class="zox-disqus-comm-first left zoxrel zox-com-click-<?php echo esc_html($zox_click_id); ?> zox-com-but-<?php echo esc_html($zox_click_id); ?>">
						<span class="zox-comment-but-text"><i class="fas fa-comment"></i> <?php comments_number(__( 'Comments', 'zoxpress'), esc_html__('Comments', 'zoxpress'), esc_html__('Comments', 'zoxpress')); ?></span>
					</div><!--zox-comments-button-->
					<?php $disqus_id2 = esc_html($disqus_id); zox_disqus_embed($disqus_id2); ?>
					<div class="zox-disqus-comm-wrap">
						<a href="<?php the_permalink(); ?>#zox-comments-button" target="_blank">
						<div id="zox-comments-button" class="left zoxrel">
							<span class="zox-comment-but-text"><i class="fas fa-comment"></i> <?php comments_number(__( 'Comments', 'zoxpress'), esc_html__('Comments', 'zoxpress'), esc_html__('Comments', 'zoxpress')); ?></span>
						</div><!--zox-comments-button-->
						</a>
					</div><!--zox-diqus-comm-wrap-->
				<?php } } else { ?>
					<?php $zox_click_id = get_the_ID(); ?>
					<div id="zox-comments-button" class="left zoxrel zox-com-click-<?php echo esc_html($zox_click_id); ?> zox-com-but-<?php echo esc_html($zox_click_id); ?>">
						<span class="zox-comment-but-text"><i class="fas fa-comment"></i> <?php comments_number(__( 'Click to comment', 'zoxpress'), esc_html__('1 Comment', 'zoxpress'), esc_html__('% Comments', 'zoxpress'));?></span>
					</div><!--zox-comments-button-->
					<?php comments_template(); ?>
				<?php } ?>
			<?php } ?>
		</div><!--zox-post-body-width-->
	</div><!--zox-post-body-bot-->
</div><!--zox-post-body-wrap-->