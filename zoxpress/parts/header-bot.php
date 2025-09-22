<?php $zox_skin = get_option('zox_skin'); $zox_trans_menu = get_option('zox_trans_menu'); if (($zox_skin == "14"  && is_front_page()) || ($zox_trans_menu == "true" && is_front_page())) { ?>
	<div id="zox-bot-head-wrap" class="left zoxrel zox-trans-bot">
<?php } else { ?>
	<div id="zox-bot-head-wrap" class="left zoxrel">
<?php } ?>
	<div class="zox-head-width">
		<div id="zox-bot-head">
			<div id="zox-bot-head-left">
				<div class="zox-fly-but-wrap zoxrel zox-fly-but-click">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div><!--zox-fly-but-wrap-->
			</div><!--zox-bot-head-left-->
			<div id="zox-bot-head-mid" class="relative">
				<div class="zox-bot-head-logo">
					<div class="zox-bot-head-logo-main">
						<?php if(get_option('zox_logo_nav')) { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="zox-logo-stand" src="<?php echo esc_url(get_option('zox_logo_nav')); ?>" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /><img class="zox-logo-dark" src="<?php echo esc_url(get_option('zox_logo_navd')); ?>" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
						<?php } else { ?>
							<?php $zox_feat_layout = get_option('zox_feat_layout'); $zox_skin = get_option('zox_skin'); if (($zox_skin == "2") || ( $zox_skin == "1" && $zox_feat_layout == "2")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="zox-logo-stand" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /><img class="zox-logo-dark" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent1d.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if (($zox_skin == "3" || $zox_skin == "6") || ( $zox_skin == "1" && $zox_feat_layout == "3") || ( $zox_skin == "1" && $zox_feat_layout == "6")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent2.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if (($zox_skin == "4") || ( $zox_skin == "1" && $zox_feat_layout == "3")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="zox-logo-stand" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent3.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /><img class="zox-logo-dark" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent3d.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if (($zox_skin == "5") || ( $zox_skin == "1" && $zox_feat_layout == "5")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-net1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if (($zox_skin == "7") || ( $zox_skin == "1" && $zox_feat_layout == "7")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-net3.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if (($zox_skin == "8" || $zox_skin == "10") || ( $zox_skin == "1" && $zox_feat_layout == "8") || ( $zox_skin == "1" && $zox_feat_layout == "10")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-sport1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if (($zox_skin == "9") || ( $zox_skin == "1" && $zox_feat_layout == "9")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="zox-logo-stand" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-sport2.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /><img class="zox-logo-dark" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-sport2d.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if (($zox_skin == "11") || ( $zox_skin == "1" && $zox_feat_layout == "11")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="zox-logo-stand" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-fash1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /><img class="zox-logo-dark" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-fash1d.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if (($zox_skin == "12") || ( $zox_skin == "1" && $zox_feat_layout == "11")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="zox-logo-stand" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-fash2.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /><img class="zox-logo-dark" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-fash2d.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if ($zox_skin == "13" || ( $zox_skin == "1" && $zox_feat_layout == "13")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="zox-logo-stand" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-fash3.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /><img class="zox-logo-dark" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-fash3d.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if ($zox_skin == "14" || ( $zox_skin == "1" && $zox_feat_layout == "13")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-trans-tech1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if ($zox_skin == "15" || ( $zox_skin == "1" && $zox_feat_layout == "15")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="zox-logo-stand" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-tech2.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /><img class="zox-logo-dark" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-tech2d.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else if ($zox_skin == "16" || ( $zox_skin == "1" && $zox_feat_layout == "16")) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-tech3.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } ?>
							<?php if ( is_home() || is_front_page() || is_category( $category ) ) { ?>
								<h1 class="zox-logo-title"><?php bloginfo( 'name' ); ?></h1>
							<?php } else { ?>
								<h2 class="zox-logo-title"><?php bloginfo( 'name' ); ?></h2>
							<?php } ?>
						<?php } ?>
					</div><!--zox-bot-head-logo-main-->
					<?php $zox_skin = get_option('zox_skin'); $zox_trans_menu = get_option('zox_trans_menu'); if (($zox_skin == "14"  && is_front_page()) || ($zox_trans_menu == "true" && is_front_page())) { ?>
						<div class="zox-bot-logo-trans">
							<?php if(get_option('zox_logo_trans')) { ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_option('zox_logo_trans')); ?>" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
							<?php } else { ?>
								<?php $zox_skin = get_option('zox_skin'); $zox_feat_layout = get_option('zox_feat_layout'); if ($zox_skin == "14" || ($zox_skin == "1" && $zox_feat_layout == "14")) { ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-trans-tech1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
								<?php } ?>
							<?php } ?>
						</div><!--zox-bot-logo-trans-->
					<?php } ?>
					<?php if ( is_home() || is_front_page() ) { ?>
						<h1 class="zox-logo-title"><?php bloginfo( 'name' ); ?></h1>
					<?php } else { ?>
						<h2 class="zox-logo-title"><?php bloginfo( 'name' ); ?></h2>
					<?php } ?>
				</div><!--zox-bot-head-logo-->
				<div class="zox-bot-head-menu">
					<div class="zox-nav-menu">
						<?php wp_nav_menu(array('theme_location' => 'main-menu', 'fallback_cb' => 'false')); ?>
					</div><!--zox-nav-menu-->
				</div><!--zox-bot-head-menu-->
			</div><!--zox-bot-head-mid-->
			<div id="zox-bot-head-right">
				<?php $zox_dark_mode = get_option('zox_dark_mode'); if ($zox_dark_mode !== "2" && $zox_dark_mode !== "3") { ?>
					<span class="zox-night zox-night-mode fas fa-moon"></span>
				<?php } ?>
				<span class="zox-nav-search-but fas fa-search zox-search-click"></span>
			</div><!--zox-bot-head-right-->
		</div><!--zox-bot-head-->
	</div><!--zox-head-width-->
</div><!--zox-bot-head-wrap-->