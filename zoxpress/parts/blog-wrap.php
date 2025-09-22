<div class="zox-main-blog zoxrel left zox100">
	<section class="zox-blog-grid left zoxrel left zox100 infinite-content <?php $zox_blog_layout = get_option('zox_blog_layout'); $zox_arch_layout = get_option('zox_arch_layout');
		if (is_archive()) {
			if ($zox_arch_layout == "2") {
				echo "zox-div3";
			} else if ($zox_arch_layout == "3") {
				echo "zox-div4";
			} else {
				echo "zox-divr";
			}
		} else {
			if ($zox_blog_layout == "2") {
				echo "zox-div3";
			} else if ($zox_blog_layout == "3") {
				echo "zox-div4";
			} else {
				echo "zox-divr";
			}
		}
		?> <?php $zox_main_style = get_option('zox_main_style'); $zox_skin = get_option('zox_skin');
		if ($zox_skin == "2") {
				echo "zox-s1";
			} else if ($zox_skin == "3") {
				echo "zox-s3";
			} else if ($zox_skin == "4") {
				echo "zox-s8";
			} else if ($zox_skin == "5") {
				echo "zox-s4";
			} else if ($zox_skin == "6") {
				echo "zox-s4";
			} else if ($zox_skin == "7") {
				echo "zox-s5";
			} else if ($zox_skin == "8") {
				echo "zox-s6";
			} else if ($zox_skin == "9") {
				echo "zox-s6";
			} else if ($zox_skin == "10") {
				echo "zox-s6";
			} else if ($zox_skin == "11") {
				echo "zox-s7";
			} else if ($zox_skin == "12") {
				echo "zox-s2";
			} else if ($zox_skin == "13") {
				echo "zox-s7";
			} else if ($zox_skin == "14") {
				echo "zox-s6";
			} else if ($zox_skin == "15") {
				echo "zox-s6";
			} else if ($zox_skin == "16") {
				echo "zox-s6";
			} else {
				if ($zox_main_style == "2") {
					echo "zox-s2";
				} else if ($zox_main_style == "3" ) {
					echo "zox-s3";
				} else if ($zox_main_style == "4") {
					echo "zox-s4";
				} else if ($zox_main_style == "5") {
					echo "zox-s5";
				} else if ($zox_main_style == "6") {
					echo "zox-s6";
				} else if ($zox_main_style == "7") {
					echo "zox-s7";
				} else if ($zox_main_style == "8") {
					echo "zox-s8";
				} else {
		       		echo "zox-s1";
				}
		}
		?>">
		<?php if(is_front_page() && is_page()) { ?>
			<?php global $do_not_duplicate; if (isset($do_not_duplicate)) { ?>
				<?php global $post; global $paged; $count = 0; $zox_posts_num = esc_html(get_option('zox_posts_num')); $paged = (get_query_var('page')) ? get_query_var('page') : 1; query_posts(array( 'posts_per_page' => $zox_posts_num, 'post__not_in'=>$do_not_duplicate, 'paged' =>$paged )); if (have_posts()) : while (have_posts()) : the_post(); $count++; ?>
					<?php if ($count == 1) { ?>
						<?php get_template_part( 'parts/art', 'blogm' ); ?>
					<?php } else { ?>
						<?php get_template_part( 'parts/art', 'blog' ); ?>
					<?php } ?>
				<?php endwhile; endif; ?>
			<?php } else { ?>
				<?php global $post; global $paged; $count = 0; $zox_posts_num = esc_html(get_option('zox_posts_num')); $paged = (get_query_var('page')) ? get_query_var('page') : 1; query_posts(array( 'posts_per_page' => $zox_posts_num, 'paged' =>$paged )); if (have_posts()) : while (have_posts()) : the_post(); $count++; ?>
					<?php if ($count == 1) { ?>
						<?php get_template_part( 'parts/art', 'blogm' ); ?>
					<?php } else { ?>
						<?php get_template_part( 'parts/art', 'blog' ); ?>
					<?php } ?>
				<?php endwhile; endif; ?>
			<?php } ?>
		<?php } else if(is_page()) { ?>
			<?php global $do_not_duplicate; if (isset($do_not_duplicate)) { ?>
				<?php global $post; $count = 0; $zox_posts_num = esc_html(get_option('zox_posts_num')); $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array( 'posts_per_page' => $zox_posts_num, 'post__not_in'=>$do_not_duplicate, 'paged' =>$paged )); if (have_posts()) : while (have_posts()) : the_post(); $count++; ?>
					<?php if ($count == 1) { ?>
						<?php get_template_part( 'parts/art', 'blogm' ); ?>
					<?php } else { ?>
						<?php get_template_part( 'parts/art', 'blog' ); ?>
					<?php } ?>
				<?php endwhile; endif; ?>
			<?php } else { ?>
				<?php global $post; $count = 0; $zox_posts_num = esc_html(get_option('zox_posts_num')); $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array( 'posts_per_page' => $zox_posts_num, 'paged' =>$paged )); if (have_posts()) : while (have_posts()) : the_post(); $count++; ?>
					<?php if ($count == 1) { ?>
						<?php get_template_part( 'parts/art', 'blogm' ); ?>
					<?php } else { ?>
						<?php get_template_part( 'parts/art', 'blog' ); ?>
					<?php } ?>
				<?php endwhile; endif; ?>
			<?php } ?>
		<?php } else if(is_search()) { ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'parts/art', 'search' ); ?>
			<?php endwhile; ?>
			<?php else : ?>
				<div class="zox-search-text left relative">
					<p><?php esc_html_e('Sorry, your search did not match any entries.', 'zoxpress') ?></p>
				</div><!--zox-search-text-->
			<?php endif; ?>
		<?php } else { ?>
			<?php global $do_not_duplicate; if (isset($do_not_duplicate)) { ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); if (in_array($post->ID, $do_not_duplicate)) continue; ?>
					<?php get_template_part( 'parts/art', 'blog' ); ?>
				<?php endwhile; endif; ?>
			<?php } else { ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'parts/art', 'blog' ); ?>
				<?php endwhile; endif; ?>
			<?php } ?>
		<?php } ?>
	</section><!--zox-blog-grid-->
	<div class="zox-inf-more-wrap left zoxrel">
		<?php $zox_infinite_scroll = get_option('zox_infinite_scroll'); if ($zox_infinite_scroll == "true") { if (isset($zox_infinite_scroll)) { ?>
			<a href="#" class="zox-inf-more-but"><?php esc_html_e( 'More Posts', 'zoxpress' ); ?></a>
		<?php } } ?>
		<div class="zox-nav-links">
			<?php if (function_exists("pagination")) { pagination($wp_query->max_num_pages); } ?>
		</div><!--zox-nav-links-->
	</div><!--zox-inf-more-wrap-->
</div><!--zox-main-blog-->