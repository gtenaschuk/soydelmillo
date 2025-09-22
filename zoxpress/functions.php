<?php

/////////////////////////////////////
// Theme Setup
/////////////////////////////////////

if ( ! function_exists( 'zox_setup' ) ) {
function zox_setup(){
	load_theme_textdomain('zoxpress', get_template_directory() . '/languages');

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );
	add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio' ) );
}
}
add_action('after_setup_theme', 'zox_setup');

$zox_custombg = array(
	'default-color' => 'f0f0f0',
);
add_theme_support( 'custom-background', $zox_custombg );

$zox_customhead = array(
	'flex-width'    => true,
	'flex-height'    => true,
	'uploads'       => true,
);
add_theme_support( 'custom-header', $zox_customhead );

add_filter( 'body_class','zox_style_classes' );
function zox_style_classes( $classes ) {
$zox_main_style = get_option('zox_main_style');
$zox_skin = get_option('zox_skin');
	if ($zox_skin == "2") {
		$classes[] = "zox-ent1 zox-s1";
	} else if ($zox_skin == "3") {
		$classes[] = 'zox-ent2 zox-s3';
	} else if ($zox_skin == "4") {
		$classes[] = 'zox-ent3 zox-s8';
	} else if ($zox_skin == "5") {
		$classes[] = 'zox-net1 zox-s4';
	} else if ($zox_skin == "6") {
		$classes[] = 'zox-net2 zox-s4';
	} else if ($zox_skin == "7") {
		$classes[] = 'zox-net3 zox-s5';
	} else if ($zox_skin == "8") {
		$classes[] = 'zox-sport1 zox-s6';
	} else if ($zox_skin == "9") {
		$classes[] = 'zox-sport2 zox-s6';
	} else if ($zox_skin == "10") {
		$classes[] = 'zox-sport3 zox-s6';
	} else if ($zox_skin == "11") {
		$classes[] = 'zox-fash1 zox-s7';
	} else if ($zox_skin == "12") {
		$classes[] = 'zox-fash2 zox-s2';
	} else if ($zox_skin == "13") {
		$classes[] = 'zox-fash3 zox-s7';
	} else if ($zox_skin == "14") {
		$classes[] = 'zox-tech1 zox-s6';
	} else if ($zox_skin == "15") {
		$classes[] = 'zox-tech2 zox-s6';
	} else if ($zox_skin == "16") {
		$classes[] = 'zox-tech3 zox-s6';
	} else {
		if ($zox_main_style == "2") {
			$classes[] = 'zox-s2';
		} else if ($zox_main_style == "3" ) {
			$classes[] = 'zox-s3';
		} else if ($zox_main_style == "4") {
			$classes[] = 'zox-s4';
		} else if ($zox_main_style == "5") {
			$classes[] = 'zox-s5';
		} else if ($zox_main_style == "6") {
			$classes[] = 'zox-s6';
		} else if ($zox_main_style == "7") {
			$classes[] = 'zox-s7';
		} else if ($zox_main_style == "8") {
			$classes[] = 'zox-s8';
      	} else {
      		$classes[] = 'zox-ent1 zox-s1';
		}
	}
	return $classes;
}

if ( ! function_exists( 'zox_feat_classes' ) ) {
add_filter( 'body_class','zox_feat_classes' );
function zox_feat_classes( $classes ) {
	$zox_skin = get_option('zox_skin');
	$zox_feat_layout = get_option('zox_feat_layout');
	if ($zox_skin == "1" & $zox_feat_layout == "2") {
		$classes[] = 'zox-ent1';
	} else if ($zox_skin == "1" & $zox_feat_layout == "3") {
		$classes[] = 'zox-ent2';
	} else if ($zox_skin == "1" & $zox_feat_layout == "4") {
		$classes[] = 'zox-ent3';
	} else if ($zox_skin == "1" & $zox_feat_layout == "5") {
		$classes[] = 'zox-net1';
	} else if ($zox_skin == "1" & $zox_feat_layout == "6") {
		$classes[] = 'zox-net2';
	} else if ($zox_skin == "1" & $zox_feat_layout == "7") {
		$classes[] = 'zox-net3';
	} else if ($zox_skin == "1" & $zox_feat_layout == "8") {
		$classes[] = 'zox-sport1';
	} else if ($zox_skin == "1" & $zox_feat_layout == "9") {
		$classes[] = 'zox-sport2';
	} else if ($zox_skin == "1" & $zox_feat_layout == "10") {
		$classes[] = 'zox-sport3';
	} else if ($zox_skin == "1" & $zox_feat_layout == "11") {
		$classes[] = 'zox-fash1';
	} else if ($zox_skin == "1" & $zox_feat_layout == "12") {
		$classes[] = 'zox-fash2';
	} else if ($zox_skin == "1" & $zox_feat_layout == "13") {
		$classes[] = 'zox-fash3';
	} else if ($zox_skin == "1" & $zox_feat_layout == "14") {
		$classes[] = 'zox-tech1';
	} else if ($zox_skin == "1" & $zox_feat_layout == "15") {
		$classes[] = 'zox-tech2';
	} else if ($zox_skin == "1" & $zox_feat_layout == "16") {
		$classes[] = 'zox-tech3';
	}
    return $classes;
}
}

add_theme_support( 'responsive-embeds' );

/////////////////////////////////////
// Theme Options
/////////////////////////////////////

get_template_part( 'parts/theme', 'options' );

/////////////////////////////////////
// Enqueue Javascript/CSS Files
/////////////////////////////////////

if ( ! function_exists( 'zox_scripts_method' ) ) {
function zox_scripts_method() {
	global $wp_styles;
	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/font-awesome/css/all.css' );
	wp_enqueue_style( 'zox-iecss', get_stylesheet_directory_uri() . '/css/iecss.css', array( 'zox-style' )  );
	wp_enqueue_style( 'zox-fonts', zox_fonts_url(), array(), null );
	$wp_styles->add_data( 'zox-iecss', 'conditional', 'lt IE 10' );
	$zox_rtl = get_option('zox_rtl'); if ($zox_rtl == "true") { if (isset($zox_rtl)) {
	wp_enqueue_style( 'zox-rtl', get_template_directory_uri() . '/css/rtl.css' );
	} }
	$zox_responsive = get_option('zox_responsive'); if ($zox_responsive == "true") { if (isset($zox_responsive)) {
	$zox_rtl = get_option('zox_rtl'); if ($zox_rtl == "true") { if (isset($zox_rtl)) {
	wp_enqueue_style( 'zox-media-queries', get_template_directory_uri() . '/css/media-queries-rtl.css' );
	} } else {
	wp_enqueue_style( 'zox-media-queries', get_template_directory_uri() . '/css/media-queries.css' );
	} } }
	wp_register_script('zox-custom', get_template_directory_uri() . '/js/zoxcustom.js', array('jquery'), '', true);
	wp_register_script('zox-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true);
	wp_register_script('zox-retina', get_template_directory_uri() . '/js/retina.js', array('jquery'), '', true);
	wp_register_script('zox-infinitescroll', get_template_directory_uri() . '/js/jquery.infinitescroll.min.js', array('jquery'), '', true);
	wp_register_script('zox-alp', get_template_directory_uri() . '/js/alp.js', array('jquery'), '', true);

	wp_enqueue_script('zox-custom');
	wp_enqueue_script('zox-scripts');
	wp_enqueue_script('zox-retina');
	$zox_infinite_scroll = get_option('zox_infinite_scroll'); if ($zox_infinite_scroll == "true") { if (isset($zox_infinite_scroll)) {
	wp_enqueue_script('zox-infinitescroll');
	} }

	$zox_alp = get_option('zox_alp');
	$page_id = get_queried_object_id();
	global $post; $zox_post_alp = get_post_meta($page_id, "zox_post_alp", true);
	if ( ($zox_alp == "true" && ($zox_post_alp == "global" || $zox_post_alp == "on" || (empty($zox_post_alp))) ) || ($zox_alp !== "true" && ($zox_post_alp == "on") ) ) {
	if ( is_single() ) wp_enqueue_script( 'zox-alp' );
	}


	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	$zox_skin = get_option('zox_skin');
	$zox_stick_nav = get_option('zox_stick_nav');
	$zox_trans_menu = get_option('zox_trans_menu'); if ( (isset($zox_skin)) && (isset($zox_trans_menu)) && (isset($zox_stick_nav)) ) {
	if ($zox_stick_nav == "1") { } else if ($zox_stick_nav == "2") {
		if (($zox_skin == "14") || ($zox_skin == "1" && $zox_trans_menu == "true")) {
			wp_add_inline_script( 'zox-custom', '
			jQuery(document).ready(function($) {
			var leaderHeight = $("#zox-lead-top").outerHeight();
			var botHeight = $("#zox-bot-head-wrap").outerHeight();
			var navHeight = $("#zox-main-head-wrap").outerHeight();
			var headerHeight = navHeight + leaderHeight;
			var stickHeight = headerHeight - botHeight;
			var previousScroll = 0;
			$(window).scroll(function(event){
				var scroll = $(this).scrollTop();
				if ( typeof leaderHeight !== "undefined" ) {
					if ($(window).scrollTop() > headerHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix-up");
						$("#zox-bot-head-wrap").addClass("zox-fix");
						$(".zox-post-soc-scroll").addClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").addClass("zox-to-top");
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix-up");
						$("#zox-bot-head-wrap").removeClass("zox-fix");
						$(".zox-post-soc-scroll").removeClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").removeClass("zox-to-top");
					}
				} else {
					if ($(window).scrollTop() > navHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix-up");
						$("#zox-bot-head-wrap").addClass("zox-fix");
						$(".zox-post-soc-scroll").addClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").addClass("zox-to-top");
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix-up");
						$("#zox-bot-head-wrap").removeClass("zox-fix");
						$(".zox-post-soc-scroll").removeClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").removeClass("zox-to-top");
					}
				}
				previousScroll = scroll;
			});
			$(".zox-alp-side-in").niceScroll({cursorcolor:"#ccc",cursorwidth: 5,cursorborder: 0,zindex:999999});
			});
			' );
		} else {
			wp_add_inline_script( 'zox-custom', '
			jQuery(document).ready(function($) {
			var leaderHeight = $("#zox-lead-top").outerHeight();
			var botHeight = $("#zox-bot-head-wrap").outerHeight();
			var navHeight = $("#zox-main-head-wrap").outerHeight();
			var headerHeight = navHeight + leaderHeight;
			var stickHeight = headerHeight - botHeight;
			var previousScroll = 0;
			$(window).scroll(function(event){
				var scroll = $(this).scrollTop();
				if ( typeof leaderHeight !== "undefined" ) {
					if ($(window).scrollTop() > headerHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix-up");
						$("#zox-bot-head-wrap").addClass("zox-fix");
						$("#zox-site-grid").css("margin-top", botHeight);
						$(".zox-post-soc-scroll").addClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").addClass("zox-to-top");
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix-up");
						$("#zox-bot-head-wrap").removeClass("zox-fix");
						$("#zox-site-grid").css("margin-top", "0" );
						$(".zox-post-soc-scroll").removeClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").removeClass("zox-to-top");
					}
				} else {
					if ($(window).scrollTop() > navHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix-up");
						$("#zox-bot-head-wrap").addClass("zox-fix");
						$("#zox-site-grid").css("margin-top", botHeight);
						$(".zox-post-soc-scroll").addClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").addClass("zox-to-top");
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix-up");
						$("#zox-bot-head-wrap").removeClass("zox-fix");
						$("#zox-site-grid").css("margin-top", "0" );
						$(".zox-post-soc-scroll").removeClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").removeClass("zox-to-top");
					}
				}
				previousScroll = scroll;
			});
			$(".zox-alp-side-in").niceScroll({cursorcolor:"#ccc",cursorwidth: 5,cursorborder: 0,zindex:999999});
			});
			' );
		}
	} else {
		if (($zox_skin == "14") || ($zox_skin == "1" && $zox_trans_menu == "true")) {
			wp_add_inline_script( 'zox-custom', '
			jQuery(document).ready(function($) {
			var leaderHeight = $("#zox-lead-top").outerHeight();
			var botHeight = $("#zox-bot-head-wrap").outerHeight();
			var navHeight = $("#zox-main-head-wrap").outerHeight();
			var headerHeight = navHeight + leaderHeight;
			var stickHeight = headerHeight - botHeight;
			var previousScroll = 0;
			$(window).scroll(function(event){
				var scroll = $(this).scrollTop();
				if ( typeof leaderHeight !== "undefined" ) {
					if ($(window).scrollTop() > headerHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix-up");
						$(".zox-post-soc-scroll").addClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").addClass("zox-to-top");
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix-up");
						$(".zox-post-soc-scroll").removeClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").removeClass("zox-to-top");
					}
					if ($(window).scrollTop() > headerHeight - botHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix");
						if(scroll < previousScroll) {
							$("#zox-bot-head-wrap").addClass("zox-fix");
						} else {
							$("#zox-bot-head-wrap").removeClass("zox-fix");
						}
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix");
					}
				} else {
					if ($(window).scrollTop() > navHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix-up");
						$(".zox-post-soc-scroll").addClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").addClass("zox-to-top");
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix-up");
						$(".zox-post-soc-scroll").removeClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").removeClass("zox-to-top");
					}
					if ($(window).scrollTop() > navHeight - botHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix");
						if(scroll < previousScroll) {
							$("#zox-bot-head-wrap").addClass("zox-fix");
						} else {
							$("#zox-bot-head-wrap").removeClass("zox-fix");
						}
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix");
					}
				}
				previousScroll = scroll;
			});
			$(".zox-alp-side-in").niceScroll({cursorcolor:"#ccc",cursorwidth: 5,cursorborder: 0,zindex:999999});
			});
			' );
		} else {
			wp_add_inline_script( 'zox-custom', '
			jQuery(document).ready(function($) {
			var leaderHeight = $("#zox-lead-top").outerHeight();
			var botHeight = $("#zox-bot-head-wrap").outerHeight();
			var navHeight = $("#zox-main-head-wrap").outerHeight();
			var headerHeight = navHeight + leaderHeight;
			var stickHeight = headerHeight - botHeight;
			var previousScroll = 0;
			$(window).scroll(function(event){
				var scroll = $(this).scrollTop();
				if ( typeof leaderHeight !== "undefined" ) {
					if ($(window).scrollTop() > headerHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix-up");
						$("#zox-site-grid").css("margin-top", botHeight);
						$(".zox-post-soc-scroll").addClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").addClass("zox-to-top");
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix-up");
						$("#zox-site-grid").css("margin-top", "0" );
						$(".zox-post-soc-scroll").removeClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").removeClass("zox-to-top");
					}
					if ($(window).scrollTop() > headerHeight - botHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix");
						if(scroll < previousScroll) {
							$("#zox-bot-head-wrap").addClass("zox-fix");
							$("#zox-site-grid").css("margin-top", botHeight);
						} else {
							$("#zox-bot-head-wrap").removeClass("zox-fix");
						}
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix");
						$("#zox-site-grid").css("margin-top", "0" );
					}
				} else {
					if ($(window).scrollTop() > navHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix-up");
						$("#zox-site-grid").css("margin-top", botHeight);
						$(".zox-post-soc-scroll").addClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").addClass("zox-to-top");
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix-up");
						$("#zox-site-grid").css("margin-top", "0" );
						$(".zox-post-soc-scroll").removeClass("zox-post-soc-scroll-out");
						$(".zox-fly-top").removeClass("zox-to-top");
					}
					if ($(window).scrollTop() > navHeight - botHeight){
						$("#zox-bot-head-wrap").addClass("zox-fix");
						if(scroll < previousScroll) {
							$("#zox-bot-head-wrap").addClass("zox-fix");
							$("#zox-site-grid").css("margin-top", botHeight);
						} else {
							$("#zox-bot-head-wrap").removeClass("zox-fix");
						}
					} else {
						$("#zox-bot-head-wrap").removeClass("zox-fix");
						$("#zox-site-grid").css("margin-top", "0" );
					}
				}
				previousScroll = scroll;
			});
			$(".zox-alp-side-in").niceScroll({cursorcolor:"#ccc",cursorwidth: 5,cursorborder: 0,zindex:999999});
			});
			' );
		}
	} }

	if ( !function_exists( 'zoxClickCommmentButton' ) ) {
	function zoxClickCommmentButton($disqus_shortname){
	    global $post;
		wp_add_inline_script( 'zox-custom', '
			jQuery(document).ready(function($) {
				$(".zox-com-click-'.$post->ID.'").on("click", function(){
	  	    	$(".zox-com-click-id-'.$post->ID.'").show();
		    	$(".disqus-thread-'.$post->ID.'").show();
	  	    	$(".zox-com-but-'.$post->ID.'").hide();
		  		});
			});
		' );
	}
	}

	// Main Menu Dropdown Toggle
	wp_add_inline_script( 'zox-custom', '
	jQuery(document).ready(function($) {
	$(".zox-fly-nav-menu .menu-item-has-children a").click(function(event){
	  event.stopPropagation();
  	});

	$(".zox-fly-nav-menu .menu-item-has-children").click(function(){
    	  $(this).addClass("toggled");
    	  if($(".menu-item-has-children").hasClass("toggled"))
    	  {
    	  $(this).children("ul").toggle();
	  $(".zox-fly-nav-menu").getNiceScroll().resize();
	  }
	  $(this).toggleClass("tog-minus");
    	  return false;
  	});

	// Main Menu Scroll
	  $(".zox-fly-nav-menu").niceScroll({cursorcolor:"#888",cursorwidth: 7,cursorborder: 0,zindex:999999});
	});
	' );

	$zox_megamenu = get_option('zox_megamenu');
	if ($zox_megamenu == "true") {
	if (isset($zox_megamenu)) {
	// Mega Menu Offset
	wp_add_inline_script( 'zox-custom', '
	jQuery(document).ready(function($) {
		var headwrap = $("#zox-bot-head-wrap");
		var position = headwrap.offset();
		var headWidth = $("#zox-bot-head-wrap").outerWidth();
		$(".zox-mega-dropdown").css("width", headWidth );
		$(".zox-mega-dropdown").offset({
			left: position.left,
			width: headwrap.offsetWidth
		});
		$(window).resize(function(){
			var headwrap = $("#zox-bot-head-wrap");
			var position = headwrap.offset();
			var headWidth = $("#zox-bot-head-wrap").outerWidth();
			$(".zox-mega-dropdown").css("width", headWidth );
			$(".zox-mega-dropdown").offset({
  				left: position.left,
				width: headwrap.offsetWidth
			});
		});
	});
	' );
	}
	}

	// Dark Mode Toggle
	$zox_dark_mode = get_option('zox_dark_mode');
	if ($zox_dark_mode !== "2" && $zox_dark_mode !== "3") {
	wp_add_inline_script( 'zox-custom', '
	jQuery(document).ready(function($) {
		$("#zox-site").toggleClass(localStorage.toggled);
		$(".zox-night-mode").on("click", function(){
			if (localStorage.toggled != "zox-dark") {
				$("#zox-site").toggleClass("zox-dark", true);
				localStorage.toggled = "zox-dark";
			} else {
				$("#zox-site").toggleClass("zox-dark", false);
				localStorage.toggled = "";
			}
		});
	});
	' );
	}

	$zox_infinite_scroll = get_option('zox_infinite_scroll');
	if ($zox_infinite_scroll == "true") { if (isset($zox_infinite_scroll)) {
	wp_add_inline_script( 'zox-custom', '
	jQuery(document).ready(function($) {
	$(".infinite-content").infinitescroll({
	  navSelector: ".zox-nav-links",
	  nextSelector: ".zox-nav-links a:first",
	  itemSelector: ".infinite-post",
	  errorCallback: function(){ $(".zox-inf-more-wrap").css("display", "none") }
	});
	$(window).unbind(".infscr");
	$(".zox-inf-more-but").click(function(){
   		$(".infinite-content").infinitescroll("retrieve");
        	return false;
	});
	if ($(".zox-nav-links a").length) {
		$(".zox-inf-more-wrap").css("display","inline-block");
	} else {
		$(".zox-inf-more-wrap").css("display","none");
	}
	});
	' );
	}
	}

	// Parallax Leaderboard
	$zox_para_lead = get_option('zox_para_lead');
	$zox_lead_img1 = get_option('zox_lead_img1');
	$zox_lead_ad1 = get_option('zox_lead_ad1');
	if ($zox_para_lead == "true") { if (isset($zox_para_lead)) {
	if(isset($zox_lead_ad1) || isset($zox_lead_img1)) {
	wp_add_inline_script( 'zox-custom', '
	jQuery(document).ready(function($) {
	var leaderHeight = $("#zox-lead-top").outerHeight();
	$("#zox-lead-top-wrap").css("height", leaderHeight );

	$(window).resize(function(){
		var leaderHeight = $("#zox-lead-top").outerHeight();
		$("#zox-lead-top-wrap").css("height", leaderHeight );
	});

	});
  	' );
	}
	} }

	// Parallax Article Inline Ad Width
	$zox_post_adimg = get_option('zox_post_adimg');
	$zox_post_ad = get_option('zox_post_ad');
	if ((!empty($zox_post_adimg) && is_single()) || (!empty($zox_post_ad) && is_single())) {
	wp_add_inline_script( 'zox-custom', '
	jQuery(document).ready(function($) {
		var adWidth = $(".zox-post-ad-in1").outerWidth();
		$(".zox-post-ad-in2").css("width", adWidth );
		$(window).resize(function(){
		var adWidth = $(".zox-post-ad-in1").outerWidth();
		$(".zox-post-ad-in2").css("width", adWidth );
		});

	});
	' );
	}

	// Article Sticky Video
	if (is_single()) {
	global $post;
	$zox_alp = get_option('zox_alp');
	$zox_post_alp = get_post_meta($post->ID, "zox_post_alp", true);
	if ( ($zox_alp == "true" && ($zox_post_alp == "global" || $zox_post_alp == "on") ) || ($zox_alp !== "true" && ($zox_post_alp == "on") ) ) { } else {
	if(get_post_meta($post->ID, "zox_video_embed", true)) {
	$zox_vid_stick = get_option('zox_vid_stick'); if ($zox_vid_stick == "true") { if (!empty($zox_vid_stick)) {
	if ( is_single() ) {
	wp_add_inline_script( 'zox-custom', '
	jQuery(document).ready(function($) {
	// Video Post Scroll
	$(window).on("scroll.video", function(event){
		var scrollTop     = $(window).scrollTop();
    	var elementOffset = $(".zox-video-embed-wrap").offset().top;
    	var distance      = (elementOffset - scrollTop);
		var aboveHeight = $(".zox-video-embed-wrap").outerHeight();
		if ($(window).scrollTop() > distance + aboveHeight + screen.height){
			$(".zox-video-embed-cont").addClass("zox-vid-fixed");
			$(".zox-video-embed-wrap").css("height", aboveHeight );
			$(".zox-video-close").show();
		} else {
			$(".zox-video-embed-cont").removeClass("zox-vid-fixed");
			$(".zox-video-embed-wrap").css("height", "auto" );
			$(".zox-video-close").hide();
		}
	});

 	$(".zox-video-close").on("click", function(){
		$(".zox-video-embed").attr("src", $("iframe").attr("src"));
		$(".zox-video-embed-cont").removeClass("zox-vid-fixed");
		$(".zox-video-embed-wrap").removeClass("zox-vid-height");
		$(".zox-video-close").hide();
		$(window).off("scroll.video");
  	});

	});
  	' );
	}
	} } } } }

}
}
add_action('wp_enqueue_scripts', 'zox_scripts_method');

// Social More Toggle
if ( !function_exists( 'zoxMoreClick' ) ) {
function zoxMoreClick(){
    global $post;
    echo '
    <script type="text/javascript">
	jQuery(document).ready(function($) {
  		$(".zox-soc-stat-click-'.$post->ID.'").on("click", function(){
	  		$(".zox-more-click-'.$post->ID.'").toggleClass("zox-soc-more-open");
  		});
	});
    </script>';
}
}

/////////////////////////////////////
// Register Widgets
/////////////////////////////////////

if ( !function_exists( 'zox_sidebars_init' ) ) {
	function zox_sidebars_init() {

		register_sidebar(array(
			'id' => 'zox-sidebar-widget',
			'name' => esc_html__( 'Default Sidebar Widget Area', 'zoxpress' ),
			'description'   => esc_html__( 'The default widgetized sidebar.', 'zoxpress' ),
			'before_widget' => '<div id="%1$s" class="zox-side-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="zox-widget-side-head"><h4 class="zox-widget-side-title"><span class="zox-widget-side-title">',
			'after_title' => '</span></h4></div>',
		));

		register_sidebar(array(
			'id' => 'homepage-widget',
			'name' => esc_html__( 'Homepage Widget Area', 'zoxpress' ),
			'description'   => esc_html__( 'The widgetized area in the main content area of the homepage.', 'zoxpress' ),
			'before_widget' => '<div id="%1$s" class="zox-widget-home left relative %2$s"><div class="zox-body-width">',
			'after_widget' => '</div></div>',
			'before_title' => '<div class="zox-title-width"><div class="zox-widget-main-head"><h4 class="zox-widget-main-title"><span class="zox-widget-main-title">',
			'after_title' => '</span></h4></div></div>',
		));

		register_sidebar(array(
			'id' => 'zox-home-sidebar-widget',
			'name' => esc_html__( 'Homepage Sidebar Widget Area', 'zoxpress' ),
			'description'   => esc_html__( 'The widgetized sidebar on the homepage.', 'zoxpress' ),
			'before_widget' => '<div id="%1$s" class="zox-side-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="zox-widget-side-head"><h4 class="zox-widget-side-title"><span class="zox-widget-side-title">',
			'after_title' => '</span></h4></div>',
		));

		register_sidebar(array(
			'id' => 'zox-feat-right-sidebar-widget',
			'name' => esc_html__( 'Featured Sidebar Widget Area', 'zoxpress' ),
			'description'   => esc_html__( 'The widgetized sidebar for the right side of the Featured Posts area, if available.', 'zoxpress' ),
			'before_widget' => '<div id="%1$s" class="zox-side-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="zox-widget-side-head"><h4 class="zox-widget-side-title"><span class="zox-widget-side-title">',
			'after_title' => '</span></h4></div>',
		));

		register_sidebar(array(
			'id' => 'zox-sidebar-widget-post',
			'name' => esc_html__( 'Post/Page Sidebar Widget Area', 'zoxpress' ),
			'description'   => esc_html__( 'The widgetized sidebar on posts and pages.', 'zoxpress' ),
			'before_widget' => '<div id="%1$s" class="zox-side-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="zox-widget-side-head"><h4 class="zox-widget-side-title"><span class="zox-widget-side-title">',
			'after_title' => '</span></h4></div>',
		));

		register_sidebar(array(
			'id' => 'zox-sidebar-woo-widget',
			'name' => esc_html__( 'WooCommerce Sidebar Widget Area', 'zoxpress' ),
			'description'   => esc_html__( 'The widgetized sidebar on your WooCommerce pages.', 'zoxpress' ),
			'before_widget' => '<div id="%1$s" class="zox-side-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="zox-widget-side-head"><h4 class="zox-widget-side-title"><span class="zox-widget-side-title">',
			'after_title' => '</span></h4></div>',
		));

		register_sidebar(array(
			'id' => 'zox-sidebar-sp-widget',
			'name' => esc_html__( 'SportsPress Sidebar Widget Area', 'zoxpress' ),
			'description'   => esc_html__( 'The widgetized sidebar on your SportsPress pages.', 'zoxpress' ),
			'before_widget' => '<div id="%1$s" class="zox-side-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="zox-widget-side-head"><h4 class="zox-widget-side-title"><span class="zox-widget-side-title">',
			'after_title' => '</span></h4></div>',
		));

	}
}
add_action( 'widgets_init', 'zox_sidebars_init' );

/////////////////////////////////////
// Register Custom Menus
/////////////////////////////////////

if ( !function_exists( 'register_menus' ) ) {
function register_menus() {
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Main Menu', 'zoxpress' ),
			'sec-menu' => esc_html__( 'Secondary Menu', 'zoxpress' ),
			'mobile-menu' => esc_html__( 'Fly-Out Menu', 'zoxpress' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'zoxpress' ))
	  	);
	  }
}
add_action( 'init', 'register_menus' );

/////////////////////////////////////
// Register Mega Menu
/////////////////////////////////////

$zox_megamenu = get_option('zox_megamenu'); if ($zox_megamenu == "true") {
if (isset($zox_megamenu)) {
add_filter( 'walker_nav_menu_start_el', 'zox_walker_nav_menu_start_el', 10, 4 );

function zox_walker_nav_menu_start_el( $item_output, $item, $depth, $args ) {
	global $wp_query;
    // The mega dropdown only applies to the main navigation.
    // Your theme location name may be different, "main" is just something I tend to use.
    if ( 'main-menu' !== $args->theme_location )
        return $item_output;

    // The mega dropdown needs to be added to one specific menu item.
    // I like to add a custom CSS class for that menu via the admin area.
    // You could also do an item ID check.
    if ( in_array( 'menu-item-object-category', $item->classes ) ) {
        global $wp_query;
        global $post;
        $subposts = get_posts( 'numberposts=5&cat=' . $item->object_id );
	$item_output .= '<div class="zox-mega-dropdown"><div class="zox-head-width"><ul class="zox-mega-list">';
            foreach( $subposts as $post ) :
                setup_postdata( $post );
                $item_output .= '<li><a href="'. get_permalink( $post->ID ) .'"><div class="zox-mega-img">';
				$item_output .= get_the_post_thumbnail( $post->ID, 'zox-mid-thumb' );
				$item_output .= '</div><p>';
				$item_output .= get_the_title( $post->ID );
                $item_output .= '</p></a></li>';
            endforeach; wp_reset_postdata();
	$item_output .= '</ul></div></div>';

    }

    return $item_output;
}

function zox_mega_class($classes, $item, $args) {
  if($args->theme_location == 'main-menu') {
	  if( $item->type == 'taxonomy' ) {
    $classes[] = 'zox-mega-drop';
  } }
  return $classes;
}
add_filter('nav_menu_css_class', 'zox_mega_class', 1, 3);

} }

/////////////////////////////////////
// Register Thumbnails
/////////////////////////////////////

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1024, 576, true );
add_image_size( 'zox-large-thumb', 1024, 576, true );
add_image_size( 'zox-mid-thumb', 600, 337, true );
add_image_size( 'zox-square-thumb', 600, 600, true );
add_image_size( 'zox-small-thumb', 100, 100, true );
}

/////////////////////////////////////
// Title Meta Data
/////////////////////////////////////

add_theme_support( 'title-tag' );

function zox_filter_home_title(){
if ( ( is_home() && ! is_front_page() ) || ( ! is_home() && is_front_page() ) ) {
    $zoxHomeTitle = get_bloginfo( 'name', 'display' );
    $zoxHomeDesc = get_bloginfo( 'description', 'display' );
    return $zoxHomeTitle . " - " . $zoxHomeDesc;
}
}
add_filter( 'pre_get_document_title', 'zox_filter_home_title');


/////////////////////////////////////
// Comments
/////////////////////////////////////

if ( !function_exists( 'zox_comment' ) ) {
function zox_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '':
		case 'comment' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div class="comment-wrapper" id="comment-<?php comment_ID(); ?>">
			<div class="comment-inner">
				<div class="comment-avatar">
					<?php echo get_avatar( $comment, 46 ); ?>
				</div>
				<div class="commentmeta">
					<p class="comment-meta-1">
						<?php printf( esc_html__( '%s ', 'zoxpress'), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
					</p>
					<p class="comment-meta-2">
						<?php echo get_comment_date(); ?> <?php esc_html_e( 'at', 'zoxpress'); ?> <?php echo get_comment_time(); ?>
						<?php edit_comment_link( esc_html__( 'Edit', 'zoxpress'), '(' , ')'); ?>
					</p>
				</div>
				<div class="text">
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<p class="waiting_approval"><?php esc_html_e( 'Your comment is awaiting moderation.', 'zoxpress' ); ?></p>
					<?php endif; ?>
					<div class="c">
						<?php comment_text(); ?>
					</div>
				</div><!-- .text  -->
				<div class="clear"></div>
				<div class="comment-reply"><span class="reply"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></span></div>
			</div><!-- comment-inner  -->
		</div><!-- comment-wrapper  -->
	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php esc_html_e( 'Pingback:', 'zoxpress' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( 'Edit', 'zoxpress' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
}

/////////////////////////////////////
// Related Posts
/////////////////////////////////////

if ( !function_exists( 'zox_related_posts' ) ) {
function zox_related_posts() {
    global $post;
    $orig_post = $post;

    $tags = wp_get_post_tags($post->ID);
    if ($tags) {

	$zox_related_num = esc_html(get_option('zox_related_num'));
	$slider_exclude = esc_html(get_option('zox_feat_posts_tags'));
	$tag_exclude_slider = get_term_by('slug', $slider_exclude, 'post_tag');
	if (!empty( $tag_exclude_slider )) {
		$tag_id_exclude_slider =  $tag_exclude_slider->term_id;
       		$tag_ids = array();
        	foreach($tags as $individual_tag) {
			$excluded_tags = array($tag_id_exclude_slider);
      			if (in_array($individual_tag->term_id,$excluded_tags)) continue;
 			$tag_ids[] = $individual_tag->term_id;
		}
	} else {
       		$tag_ids = array();
        	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
	}
        $args=array(
            'tag__in' => $tag_ids,
	    'order' => 'DESC',
	    'orderby' => 'date',
            'post__not_in' => array($post->ID),
            'posts_per_page'=> $zox_related_num,
            'ignore_sticky_posts'=> 1
        );
        $my_query = new WP_Query( $args );
        if( $my_query->have_posts() ) { ?>
				<div class="zox-post-more-grid zox-div4 left zoxrel zox100">
            		<?php while( $my_query->have_posts() ) { $my_query->the_post(); ?>
						<?php get_template_part( 'parts/art', 'more' ); ?>
            		<?php }
            echo '</div>';
        }
    }
    $post = $orig_post;
    wp_reset_query();
}
}

/////////////////////////////////////
// Popular Posts
/////////////////////////////////////

if ( !function_exists( 'getCrunchifyPostViews' ) ) {
function getCrunchifyPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
}

if ( !function_exists( 'setCrunchifyPostViews' ) ) {
function setCrunchifyPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
}

/////////////////////////////////////
// Auto Load Posts
/////////////////////////////////////

if ( !function_exists( 'getPostHTML' ) ) {
function getPostHTML($post, $current = false)
	{
		ob_start();
		?>
		<div class="alp-related-post post-<?php echo esc_html($post->ID); ?> <?php echo (esc_html($current) ? 'current' : ''); ?>" data-id="<?php echo esc_html($post->ID); ?>" data-document-title="">
		<?php
		$postThumbnailUrl = get_the_post_thumbnail_url($post->ID, 'thumbnail');
		if($postThumbnailUrl)
		{
		?>

			<?php
				}
			?>
			<div class="post-details">
				<p class="post-meta">
					<?php
					$postCategories = get_the_category($post->ID);
					if($postCategories)
					{
						foreach($postCategories as $postCategory)
						{
						?>
							<a class="post-category" href="<?php echo get_category_link($postCategory->term_id); ?>"><?php echo esc_html($postCategory->name); ?></a>
						<?php
						}
					}
					?>
				</p>
				<a class="post-title" href="<?php echo get_permalink($post->ID); ?>"><?php echo esc_html($post->post_title); ?></a>
			</div>
			<?php $zox_social_box = get_option('zox_social_box'); if ($zox_social_box == "1" || $zox_social_box == "3") { ?>
				<?php if ( function_exists( 'zox_SocialALP' ) ) { ?>
					<?php zox_SocialALP(); ?>
				<?php } ?>
			<?php } ?>
		</div>
		<?php
		return ob_get_clean();
	}
}

/////////////////////////////////////
// Disqus Comments
/////////////////////////////////////

$disqus_id = get_option('zox_disqus_id'); if (isset($disqus_id)) {
if ( !function_exists( 'zox_disqus_embed' ) ) {
function zox_disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','//'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread" class="disqus-thread-'.$post->ID.'"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}
}
}

/////////////////////////////////////
// Lazy Load
/////////////////////////////////////

add_action('wp_enqueue_scripts', function () {
   wp_enqueue_script( 'zox-intersection-observer-polyfill', get_template_directory_uri() . '/js/intersection-observer.js', '', null, true );
   wp_enqueue_script( 'zox-lozad', get_template_directory_uri() . '/js/lozad.min.js', 'zox-intersection-observer-polyfill', null, true );
	wp_add_inline_script( 'zox-lozad', '
	var zoxWidgets = document.querySelectorAll("#zox-home-widget-wrap img");
	lozad(zoxWidgets, {
		rootMargin: "0px 0px",
		loaded: function (el) {
			el.classList.add("is-loaded");
		}
	}).observe();
');
});

/////////////////////////////////////
// Remove Pages From Search Results
/////////////////////////////////////

if ( !is_admin() ) {

function zox_SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}

add_filter('pre_get_posts','zox_SearchFilter');

}

/////////////////////////////////////
// Miscellaneous
/////////////////////////////////////

// Place Wordpress Admin Bar Above Main Navigation

if ( is_user_logged_in() ) {
	if ( is_admin_bar_showing() ) {
	function zox_admin_bar() {
		echo "
			<style type='text/css'>
			#zox-lead-top {top: 32px;}
			.zox-fix-up {top: -48px !important;}
			</style>
		";
	}
	add_action( 'wp_head', 'zox_admin_bar' );
	}
}

// Set Content Width
if ( ! isset( $content_width ) ) $content_width = 880;

// Add RSS links to <head> section
add_theme_support( 'automatic-feed-links' );

add_action('init', 'do_output_buffer');
function do_output_buffer() {
        ob_start();
}

// Pingback Header
function zox_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'zox_pingback_header' );

// Post Date Days Ago Function
if ( !function_exists( 'zox_post_date' ) ) {
function zox_post_date($days = 7) {
	$days = (int) $days;
	$offset = $days*60*60*24;
	if ( get_post_time() < date('U') - $offset )
		return true;

	return false;
}
}

// Get Tag ID from name
function zox_tag_ID($tag_name) {
$tag = get_term_by('name', $tag_name, 'post_tag');
if ($tag) {
return $tag->term_id;
} else {
return 0;
}
}



/////////////////////////////////////
// Pagination
/////////////////////////////////////

if ( !function_exists( 'pagination' ) ) {
function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>".esc_html__( 'Page', 'zoxpress' )." ".$paged." ".esc_html__( 'of', 'zoxpress' )." ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; ".esc_html__( 'First', 'zoxpress' )."</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; ".esc_html__( 'Previous', 'zoxpress' )."</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo esc_html(($paged == $i))? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">".__( 'Next', 'zoxpress' )." &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>".esc_html__( 'Last', 'zoxpress' )." &raquo;</a>";
         echo "</div>\n";
     }
}
}

/////////////////////////////////////
// Article Ads After X Paragraphs
/////////////////////////////////////

$zox_post_ad = get_option('zox_post_ad');
$zox_post_adimg = get_option('zox_post_adimg');
if (!empty($zox_post_ad) || !empty($zox_post_adimg)) {
function zox_post_ad_insert( $text ) {
    if ( is_single() ) {
		$zox_post_ad = get_option('zox_post_ad');
		$zox_post_adimg = get_option('zox_post_adimg');
		$zox_post_adurl = get_option('zox_post_adurl');
		if ($zox_post_adimg) {
			if ($zox_post_adurl) {
       			$ads_text = '<div class="zox-post-ad-wrap"><span class="zox-ad-label">' . esc_html__( 'Advertisement. Scroll to continue reading.', 'zoxpress' ) . '</span><div class="zox-post-ad"><div class="zox-post-ad-in1"><div class="zox-post-ad-in2"><a href="'.$zox_post_adurl.'" target="_blank"><img class="zox-post-ad-img" src="'.$zox_post_adimg.'" /></a></div></div></div></div>';
			} else {
				$ads_text = '<div class="zox-post-ad-wrap"><span class="zox-ad-label">' . esc_html__( 'Advertisement. Scroll to continue reading.', 'zoxpress' ) . '</span><div class="zox-post-ad"><div class="zox-post-ad-in1"><div class="zox-post-ad-in2"><img class="zox-post-ad-img" src="'.$zox_post_adimg.'" /></div></div></div></div>';
			}
		} else if ($zox_post_ad) {
			$ads_text = '<div class="zox-post-ad-wrap"><span class="zox-ad-label">' . esc_html__( 'Advertisement. Scroll to continue reading.', 'zoxpress' ) . '</span><div class="zox-post-ad"><div class="zox-post-ad-in1"><div class="zox-post-ad-in2">'.html_entity_decode($zox_post_ad).'</div></div></div></div>';
		}
        $split_by = "</p>";
		$zox_post_freq = get_option('zox_post_freq');
        $insert_after = $zox_post_freq; //number of paragraphs

        // make array of paragraphs
        $paragraphs = explode( $split_by, wptexturize($text));
        if ( count( $paragraphs ) > $insert_after ) {
        	$new_text = '';
            $i = 1;
            foreach( $paragraphs as $paragraph ) {
            	if( preg_match( '~<(?:img|blockquote|ul|li)[ >]~', $paragraph )) {
					$new_text .= $paragraph;
                } else {
                	$new_text .= $paragraph . ( $i % $insert_after == 0 ? $ads_text : '' );
                    $i++;
                }
			}
            return $new_text;
		}
    }
    return $text;
}
add_filter('the_content', 'zox_post_ad_insert');
}

/////////////////////////////////////
// Google AMP
/////////////////////////////////////

get_template_part( 'parts/amp/amp', 'functions' );

/////////////////////////////////////
// WooCommerce
/////////////////////////////////////

add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

add_action( 'wp_enqueue_scripts', 'zox_dequeue_stylesandscripts', 100 );
function zox_dequeue_stylesandscripts() {
    if ( class_exists( 'woocommerce' ) ) {
    wp_dequeue_style( 'selectWoo' );
    wp_deregister_style( 'selectWoo' );
    wp_dequeue_script( 'selectWoo');
    wp_deregister_script('selectWoo');
   }
}

add_action( 'get_header', 'zox_conditionally_remove_wc_assets' );
function zox_conditionally_remove_wc_assets() {

    if ( ! class_exists( 'WooCommerce' ) ) {
        return;
    }

    if ( is_woocommerce() || is_cart() || is_checkout() || is_page( array( 'my-account' ) ) ) {
        return;
    }

    remove_action( 'wp_enqueue_scripts', [ WC_Frontend_Scripts::class, 'load_scripts' ] );
    remove_action( 'wp_print_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );
    remove_action( 'wp_print_footer_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );

}

/////////////////////////////////////
// SportsPress
/////////////////////////////////////

add_theme_support( 'sportspress' );

function sportspress_pro_url_theme_27( $url ) {
return add_query_arg( 'theme', '27', $url );
}
add_filter( 'sportspress_pro_url', 'sportspress_pro_url_theme_27' );

/////////////////////////////////////
// Demo Import
/////////////////////////////////////

get_template_part( 'demo', 'import' );

/////////////////////////////////////
// Gutenberg
/////////////////////////////////////

if ( !function_exists( 'zox_editor_styles' ) ) {
function zox_editor_styles() {

	wp_enqueue_style( 'zox-fonts', zox_fonts_url(), array(), null );
    wp_enqueue_style(
        'zox-editor-options',
        get_stylesheet_uri()
    );
    wp_enqueue_style( 'zox-editor-style', get_template_directory_uri() . '/css/editor-style.css' );

	$zox_content_font = get_option('zox_content_font');
	$zox_content_font_style = get_option('zox_content_font_style');
	$zox_content_font_variant = get_option('zox_content_font_variant');
	$zox_feat_font = get_option('zox_feat_font');
	$zox_feat_font_style = get_option('zox_feat_font_style');
	$zox_feat_font_variant = get_option('zox_feat_font_variant');
	$zox_para_font = get_option('zox_para_font');
	$zox_para_font_style = get_option('zox_para_font_style');
	$zox_para_font_variant = get_option('zox_para_font_variant');
	$zox_head_font = get_option('zox_head_font');
	$zox_head_font_style = get_option('zox_head_font_style');
	$zox_head_font_variant = get_option('zox_head_font_variant');
	$zox_link_color = get_option('zox_link_color');
	$zox_link_style = get_option('zox_link_style');

	$zox_editor_options = "


	.editor-styles-wrapper,
	.editor-styles-wrapper table,
	.editor-styles-wrapper dl,
	.wp-block-pullquote blockquote>.block-editor-rich-text p {
		font-family: '$zox_content_font', sans-serif;
		font-weight: $zox_content_font_style;
		text-transform: $zox_content_font_variant;
	}

	.editor-post-title__block .editor-post-title__input,
	.editor-styles-wrapper p.has-large-font-size,
	.wp-block-freeform.block-library-rich-text__tinymce h1,
	.wp-block-freeform.block-library-rich-text__tinymce h2,
	.wp-block-freeform.block-library-rich-text__tinymce h3,
	.wp-block-freeform.block-library-rich-text__tinymce h4,
	.wp-block-freeform.block-library-rich-text__tinymce h5,
	.wp-block-freeform.block-library-rich-text__tinymce h6,
	.wp-block-heading h1,
	.wp-block-heading h2,
	.wp-block-heading h3,
	.wp-block-heading h4,
	.wp-block-heading h5,
	.wp-block-heading h6 {
		font-family: '$zox_feat_font', sans-serif;
		font-weight: $zox_feat_font_style;
		text-transform: $zox_feat_font_variant;
	}

	.editor-styles-wrapper p,
	.editor-styles-wrapper ul li,
	.editor-styles-wrapper ol li,
	.wp-block-image figcaption,
	.editor-styles-wrapper .wp-block-button__link,
	.editor-styles-wrapper .wp-block-quote p,
	.editor-styles-wrapper .wp-block-quote__citation,
	.wp-block-freeform.block-library-rich-text__tinymce blockquote p,
	.wp-block-pullquote__citation,
	.wp-block-pullquote cite,
	.wp-block-pullquote footer,
	.wp-block-audio figcaption,
	.wp-block-video figcaption,
	.wp-block-embed figcaption,
	.wp-block-verse pre,
	pre.wp-block-verse {
		font-family: '$zox_para_font', sans-serif;
		font-weight: $zox_para_font_style;
		text-transform: $zox_para_font_variant;
	}

	.block-editor-rich-text__editable a,
	.wp-block-freeform.block-library-rich-text__tinymce a {
		box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 $zox_link_color;
	}

	";

	if (isset($zox_editor_options)) { wp_kses_post(wp_add_inline_style( 'zox-editor-options', $zox_editor_options )); }
}
}
add_action( 'enqueue_block_editor_assets', 'zox_editor_styles' );

/////////////////////////////////////
// Bundled Plugins
/////////////////////////////////////

require_once get_template_directory() . '/plugins/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'zoxpress_register_required_plugins' );

function zoxpress_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'               => 'ZoxPress Plugin',
			'slug'               => 'zoxpress-plugin',
			'source'             => get_template_directory() . '/plugins/zoxpress-plugin.zip',
			'required'           => true,
			'version'            => '',
			'force_activation'   => true,
			'force_deactivation' => false,
		),

		array(
			'name'               => 'One Click Demo Import',
			'slug'               => 'one-click-demo-import',
			'source'             => get_template_directory() . '/plugins/one-click-demo-import.zip',
			'required'           => false,
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
		),

		array(
			'name'               => 'Google AMP',
			'slug'               => 'amp',
			'source'             => get_template_directory() . '/plugins/amp.zip',
			'required'           => false,
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
		),

		array(
			'name'               => 'Theia Sticky Sidebar',
			'slug'               => 'theia-sticky-sidebar',
			'source'             => get_template_directory() . '/plugins/theia-sticky-sidebar.zip',
			'required'           => false,
			'version'            => '',
			'force_activation'   => false,
			'force_deactivation' => false,
		),


	);

	$config = array(
		'id'           => 'zoxpress',              // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}


?>