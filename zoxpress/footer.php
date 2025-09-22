							</div><!--zox-main-body-wrap-->
							<footer id="zox-foot-wrap" class="left zoxrel zox100">
								<div class="zox-head-width">
									<div class="zox-foot-grid left zoxrel zox100">
										<div class="zox-foot-left-wrap">
											<div class="zox-foot-logo left zox-lh0">
												<?php if(get_option('zox_logo_foot')) { ?>
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_option('zox_logo_foot')); ?>" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
												<?php } else { ?>
													<?php $zox_feat_layout = get_option('zox_feat_layout'); $zox_skin = get_option('zox_skin'); if (($zox_skin == "2") || ( $zox_skin == "1" && $zox_feat_layout == "2")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else if (($zox_skin == "3" || $zox_skin == "6") || ( $zox_skin == "1" && $zox_feat_layout == "3") || ( $zox_skin == "1" && $zox_feat_layout == "6")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent2.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else if (($zox_skin == "4") || ( $zox_skin == "1" && $zox_feat_layout == "3")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent3.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else if (($zox_skin == "5") || ( $zox_skin == "1" && $zox_feat_layout == "5")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-net1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else if (($zox_skin == "7") || ( $zox_skin == "1" && $zox_feat_layout == "7")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-net3.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else if (($zox_skin == "8" || $zox_skin == "9" || $zox_skin == "10") || ( $zox_skin == "1" && $zox_feat_layout == "8") || ( $zox_skin == "1" && $zox_feat_layout == "9") || ( $zox_skin == "1" && $zox_feat_layout == "10")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-sport1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else if (($zox_skin == "11") || ( $zox_skin == "1" && $zox_feat_layout == "11")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-fash1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else if (($zox_skin == "12") || ( $zox_skin == "1" && $zox_feat_layout == "11")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-fash2.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else if ($zox_skin == "13" || ( $zox_skin == "1" && $zox_feat_layout == "13")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-fash3.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else if ($zox_skin == "14" || ( $zox_skin == "1" && $zox_feat_layout == "13")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-trans-tech1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else if ($zox_skin == "15" || ( $zox_skin == "1" && $zox_feat_layout == "15")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-tech2.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else if ($zox_skin == "16" || ( $zox_skin == "1" && $zox_feat_layout == "16")) { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-tech3.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } else { ?>
														<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-nav-ent1.png" alt="<?php bloginfo( 'name' ); ?>" data-rjs="2" /></a>
													<?php } ?>
												<?php } ?>
											</div><!--zox-foot-logo-->
											<div class="zox-foot-left left">
												<div class="zox-foot-menu">
													<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'fallback_cb' => 'false')); ?>
												</div><!--zox-foot-menu-->
												<div class="zox-foot-copy">
													<p><?php echo wp_kses_post(get_option('zox_copyright')); ?></p>
												</div><!--zox-foot-copy-->
											</div><!--zox-foot-left-->
										</div><!--zox-foot-left-wrap-->
										<div class="zox-foot-right-wrap">
											<div class="zox-foot-soc right relative">
												<ul class="zox-foot-soc-list left relative">
													<?php if(get_option('zox_facebook')) { ?>
														<li><a href="<?php echo esc_url(get_option('zox_facebook')); ?>" target="_blank" class="fab fa-facebook-f"></a></li>
													<?php } ?>
													<?php if(get_option('zox_twitter')) { ?>
														<li><a href="<?php echo esc_url(get_option('zox_twitter')); ?>" target="_blank" class="fab fa-twitter"></a></li>
													<?php } ?>
													<?php if(get_option('zox_instagram')) { ?>
														<li><a href="<?php echo esc_url(get_option('zox_instagram')); ?>" target="_blank" class="fab fa-instagram"></a></li>
													<?php } ?>
													<?php if(get_option('zox_tiktok')) { ?>
														<li><a href="<?php echo esc_url(get_option('zox_tiktok')); ?>" target="_blank" class="fab fa-tiktok"></a></li>
													<?php } ?>
													<?php if(get_option('zox_youtube')) { ?>
														<li><a href="<?php echo esc_url(get_option('zox_youtube')); ?>" target="_blank" class="fab fa-youtube"></a></li>
													<?php } ?>
													<?php if(get_option('zox_linkedin')) { ?>
														<li><a href="<?php echo esc_url(get_option('zox_linkedin')); ?>" target="_blank" class="fab fa-linkedin-in"></a></li>
													<?php } ?>
													<?php if(get_option('zox_pinterest')) { ?>
														<li><a href="<?php echo esc_url(get_option('zox_pinterest')); ?>" target="_blank" class="fab fa-pinterest-p"></a></li>
													<?php } ?>
													<?php if(get_option('zox_tumblr')) { ?>
														<li><a href="<?php echo esc_url(get_option('zox_tumblr')); ?>" target="_blank" class="fab fa-tumblr"></a></li>
													<?php } ?>
												</ul>
											</div><!--zox-foot-soc-->
										</div><!--zox-foot-right-wrap-->
									</div><!--zox-foot-grid-->
								</div><!--zox-head-width-->
							</footer><!--zox-foot-wrap-->
						</div><!--zox-site-wall-small-->
					</div><!--zox-site-grid-->
				</div><!--zox-site-main-->
			</div><!--zox-site-wall-->
			<div class="zox-fly-top back-to-top">
				<span class="fas fa-angle-up"></span>
			</div><!--zox-fly-top-->
		</div><!--zox-site-->
		<div class="zox-fly-fade zox-fly-but-click">
		</div><!--zox-fly-fade-->
		<?php wp_footer(); ?>
	</body>
</html>