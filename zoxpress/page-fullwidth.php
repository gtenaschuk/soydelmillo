<?php
	/* Template Name: Full Width */
?>
<?php get_header(); ?>
<article class="zox-page-wrap left zoxrel zox100" itemscope itemtype="http://schema.org/NewsArticle">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="zox-article-wrap zoxrel left zox100">
			<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="<?php the_permalink(); ?>"/>
			<div class="zox-post-main-grid">
				<div class="zox-post-width">
					<div class="zox-post-main-wide zoxrel left zox100">
						<div class="zox-post-main">
							<div class="zox-post-top-wrap zoxrel left zox100">
								<div class="zox-post-title-wrap zox-tit1">
									<div class="zox-post-width">
										<h1 class="zox-post-title left entry-title" itemprop="headline"><?php the_title(); ?></h1>
									</div><!--zox-post-width-->
								</div><!--zox-post-title-wrap-->
							</div><!--zox-post-top-wrap-->
							<div class="zox-post-body left zoxrel zox100">
								<?php the_content(); ?>
								<?php wp_link_pages(); ?>
							</div><!--zox-post-body-->
						</div><!--zox-post-main-->
					</div><!--zox-post-main-wide-->
				</div><!--zox-post-width-->
			</div><!--zox-post-main-grid-->
		</div><!--zox-article-wrap-->
	<?php endwhile; endif; ?>
</article><!--zox-post-wrap-->
<?php get_footer(); ?>