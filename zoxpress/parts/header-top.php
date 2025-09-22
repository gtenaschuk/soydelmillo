<div id="zox-top-head-wrap" class="left relative">
	<?php if ( has_header_image() ) { ?>
		<img class="zox-head-bg" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
	<?php } ?>
	<div class="zox-head-width">
		<div id="zox-top-head" class="relative">
			<div id="zox-top-head-left">
				<?php $zox_top_navl = get_option('zox_top_navl'); if ($zox_top_navl == "3") { ?>
					<?php get_template_part( 'parts/soc', 'top' ); ?>
				<?php } else if ($zox_top_navl == "4") { ?>
					<?php if ( class_exists( 'WooCommerce' ) ) { ?>
						<div class="zox-woo-cart-wrap">
							<a class="zox-woo-cart" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_html_e( 'View your shopping cart', 'zoxpress' ); ?>"><span class="zox-woo-cart-num"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a><span class="zox-woo-cart-icon fas fa-shopping-cart"></span>
						</div><!--zox-woo-cart-wrap-->
					<?php } ?>
				<?php } else if ($zox_top_navl == "5") { ?>
					<?php $zox_top_nav_html = get_option('zox_top_nav_html'); if ($zox_top_nav_html) { ?>
						<?php echo html_entity_decode($zox_top_nav_html); ?>
					<?php } ?>
				<?php } else if ($zox_top_navl == "6") { ?>
					<div class="zox-top-nav-menu zox100">
						<?php wp_nav_menu(array('theme_location' => 'sec-menu', 'fallback_cb' => 'false')); ?>
					</div><!--zox-top-nav-menu-->
				<?php } ?>
			</div><!--zox-top-head-left-->
			<div id="zox-top-head-mid">
				<?php $zox_top_nav_logo = get_option('zox_top_nav_logo'); if ($zox_top_nav_logo == "true") { ?>
					<?php if(get_option('zox_logo')) { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="zox-logo-stand" src="<?php echo esc_url(get_option('zox_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /><img class="zox-logo-dark" src="<?php echo esc_url(get_option('zox_logod')); ?>" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
					<?php } else { ?>
						<?php $zox_feat_layout = get_option('zox_feat_layout'); $zox_skin = get_option('zox_skin'); if ($zox_skin == "11" || ($zox_skin == "1" && $zox_feat_layout == "10")) { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="zox-logo-stand" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-fash1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /><img class="zox-logo-dark" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-fash1d.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
						<?php } else if ($zox_skin == "12" || ($zox_skin == "1" && $zox_feat_layout == "11")) { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="zox-logo-stand" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-fash2.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /><img class="zox-logo-dark" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-fash2d.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
						<?php } else { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
						<?php } ?>
					<?php } ?>
				<?php } ?>
			</div><!--zox-top-head-mid-->
			<div id="zox-top-head-right">
				<?php $zox_top_navr = get_option('zox_top_navr'); if ($zox_top_navr == "2") { ?>
					<?php get_template_part( 'parts/soc', 'top' ); ?>
				<?php } else if ($zox_top_navr == "3") { ?>
					<?php if ( class_exists( 'WooCommerce' ) ) { ?>
						<div class="zox-woo-cart-wrap">
							<a class="zox-woo-cart" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_html_e( 'View your shopping cart', 'zoxpress' ); ?>"><span class="zox-woo-cart-num"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a><span class="zox-woo-cart-icon fas fa-shopping-cart"></span>
						</div><!--zox-woo-cart-wrap-->
					<?php } ?>
				<?php } else if ($zox_top_navr == "4") { ?>
					<?php $zox_top_nav_html = get_option('zox_top_nav_html'); if ($zox_top_nav_html) { ?>
						<?php echo html_entity_decode($zox_top_nav_html); ?>
					<?php } ?>
				<?php } else if ($zox_top_navr == "5") { ?>
					<div class="zox-top-nav-menu zox100">
						<?php wp_nav_menu(array('theme_location' => 'sec-menu', 'fallback_cb' => 'false')); ?>
					</div><!--zox-top-nav-menu-->
				<?php } ?>
			</div><!--zox-top-head-right-->
		</div><!--zox-top-head-->
	</div><!--zox-head-width-->
</div><!--zox-top-head-wrap-->