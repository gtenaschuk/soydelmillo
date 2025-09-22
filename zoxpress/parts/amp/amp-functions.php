<?php

$zox_enable_amp = get_option('zox_amp'); if ($zox_enable_amp == "true") {

add_filter( 'amp_post_template_file', 'zox_amp_set_custom_template', 10, 3 );
function zox_amp_set_custom_template( $file, $type, $post ) {
	if ( 'single' === $type ) {
		$file = dirname( __FILE__ ) . '/amp-single.php';
	}
	return $file;
}

if(function_exists( 'is_amp_endpoint' )) {
add_filter( 'the_content', 'zox_amp_video' );
function zox_amp_video( $content ) {
    global $post;
    $zox_video_url = get_post_meta($post->ID, "zox_video_embed", true);
	    if( is_single() && is_amp_endpoint() && get_post_meta($post->ID, "zox_video_embed", true) ) {
	    	$zox_video_cont = '<div class="zox-video-embed-wrap left zoxrel"><div class="zox-video-embed left zoxrel">'.esc_html($zox_video_url).'</div></div>';
	        return $zox_video_cont . $content;
	    }
    return $content;
}
}

add_action( 'amp_post_template_head', 'isa_remove_amp_google_fonts', 2 );
function isa_remove_amp_google_fonts() {
    remove_action( 'amp_post_template_head', 'amp_post_template_add_fonts' );
}

add_action('amp_post_template_head','zox_amp_google_font');
 function zox_amp_google_font( $amp_template ) {
	$zox_content_font = get_option('zox_content_font');
	$zox_amp_content_font = preg_replace("/ /","+",$zox_content_font);
	$zox_para_font = get_option('zox_para_font');
	$zox_amp_para_font = preg_replace("/ /","+",$zox_para_font);
	$zox_menu_font = get_option('zox_menu_font');
	$zox_amp_menu_font = preg_replace("/ /","+",$zox_menu_font);
	$zox_headline_font = get_option('zox_headline_font');
	$zox_amp_headline_font = preg_replace("/ /","+",$zox_headline_font);
	$zox_feat_font = get_option('zox_feat_font');
	$zox_amp_feat_font = preg_replace("/ /","+",$zox_feat_font);
	$zox_headp_font = get_option('zox_headp_font');
	$zox_amp_headp_font = preg_replace("/ /","+",$zox_headp_font);
 ?>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700,800,900|Alegreya:400,500,700,800,900|Josefin+Sans:300,400,600,700|Libre+Franklin:300,400,500,600,700,800,900|Frank+Ruhl+Libre:300,400,500,700,900|Nunito+Sans:300,400,600,700,800,900|Montserrat:300,400,500,600,700,800,900|Anton:400|Noto+Serif:400,700|Nunito:300,400,600,700,800,900|Rajdhani:300,400,500,600,700|Titillium+Web:300,400,600,700,900|PT+Serif:400,400i,700,700i|Amiri:400,400i,700,700i|Oswald:300,400,500,600,700|Roboto+Mono:400,700|Barlow+Semi+Condensed:700,800,900|Poppins:300,400,500,600,700,800,900|Roboto+Condensed:300,400,700|Roboto:300,400,500,700,900|PT+Serif:400,700|Open+Sans+Condensed:300,700|Open+Sans:700|Source+Serif+Pro:400,600,700|IM+Fell+French+Canon:400,400i|<?php echo esc_html($zox_amp_feat_font); ?>:100,200,300,400,500,600,700,800,900|<?php echo esc_html($zox_amp_headp_font); ?>:100,200,300,400,500,600,700,800,900|<?php echo esc_html($zox_amp_headline_font); ?>:100,200,300,400,500,600,700,800,900|<?php echo esc_html($zox_amp_content_font); ?>:100,200,300,400,500,600,700,800,900|<?php echo esc_html($zox_amp_para_font); ?>:100,200,300,400,500,600,700,800,900|<?php echo esc_html($zox_amp_menu_font); ?>:100,200,300,400,500,600,700,800,900&subset=arabic,latin,latin-ext,cyrillic,cyrillic-ext,greek-ext,greek,vietnamese">
 <?php
 }

add_action( 'amp_post_template_css', 'zox_amp_my_additional_css_styles' );
function zox_amp_my_additional_css_styles( $amp_template ) {
	$zox_skin = get_option('zox_skin');
	$zox_post_adimg = get_option('zox_post_adimg');
	$zox_primary = get_option('zox_primary');
	$zox_secondary = get_option('zox_secondary');
	$zox_bot_nav_bg = get_option('zox_bot_nav_bg');
	$zox_bot_nav_text = get_option('zox_bot_nav_text');
	$zox_bot_nav_hover = get_option('zox_bot_nav_hover');
	$zox_link_color = get_option('zox_link_color');
	$zox_headp_color = get_option('zox_headp_color');
	$zox_foot_bg = get_option('zox_foot_bg');
	$zox_foot_text = get_option('zox_foot_text');
	$zox_logo_navp = get_option('zox_logo_navp');
	$zox_postw = get_option('zox_postw');
	$zox_px = "px";
	$zox_content_font = get_option('zox_content_font');
	$zox_content_font_style = get_option('zox_content_font_style');
	$zox_content_font_variant = get_option('zox_content_font_variant');
	$zox_para_font = get_option('zox_para_font');
	$zox_para_font_style = get_option('zox_para_font_style');
	$zox_para_font_variant = get_option('zox_para_font_variant');
	$zox_menu_font = get_option('zox_menu_font');
	$zox_menu_font_style = get_option('zox_menu_font_style');
	$zox_menu_font_variant = get_option('zox_menu_font_variant');
	$zox_feat_font = get_option('zox_feat_font');
	$zox_feat_font_style = get_option('zox_feat_font_style');
	$zox_feat_font_variant = get_option('zox_feat_font_variant');
	$zox_headline_font = get_option('zox_headline_font');
	$zox_headline_font_style = get_option('zox_headline_font_style');
	$zox_headline_font_variant = get_option('zox_headline_font_variant');
	$zox_headp_font = get_option('zox_headp_font');
	$zox_headp_font_style = get_option('zox_headp_font_style');
	$zox_headp_font_variant = get_option('zox_headp_font_variant');
	?>

	a,
	a:visited,
	a:hover h2.zox-s-title2,
	a:hover h2.zox-s-title3,
	.zox-post-body p a,
	h3.zox-post-cat a {
		color: <?php echo esc_html($zox_link_color); ?>;
	}

	.zox-s8 a:hover h2.zox-s-title2,
	.zox-s8 a:hover h2.zox-s-title3 {
		box-shadow: 15px 0 0 #fff, -10px 0 0 #fff;
		color: <?php echo esc_html($zox_link_color); ?>;
	}

	span.zox-s-cat,
	h3.zox-post-cat a,
	.zox-s6 span.zox-s-cat,
	.zox-s8 span.zox-s-cat,
	.zox-widget-side-trend-wrap .zox-art-text:before {
		color: <?php echo esc_html($zox_primary); ?>;
	}

	.zox-s7 .zox-byline-wrap:before,
	.zox-s3 span.zox-s-cat,
	.zox-o1 span.zox-s-cat {
		background: <?php echo esc_html($zox_primary); ?>;
	}

	.zox-o3 h3.zox-s-cat {
		background: <?php echo esc_html($zox_secondary); ?>;
	}

	#zox-bot-head-wrap,
	#zox-fly-wrap {
		background: <?php echo esc_html($zox_bot_nav_bg); ?>;
	}

	.zox-nav-menu ul li a,
	nav.zox-fly-nav-menu ul li a {
		color: <?php echo esc_html($zox_bot_nav_text); ?>;
	}

	.zox-fly-but-wrap span {
		background: <?php echo esc_html($zox_bot_nav_text); ?>;
	}

	.zox-nav-menu ul li:hover a {
		color: <?php echo esc_html($zox_bot_nav_hover); ?>;
	}

	.zox-fly-but-wrap:hover span {
		background: <?php echo esc_html($zox_bot_nav_hover); ?>;
	}

	#zox-foot-wrap {
		background: <?php echo esc_html($zox_foot_bg); ?>;
	}

	#zox-foot-wrap p {
		color: <?php echo esc_html($zox_foot_text); ?>;
	}

	span.zox-post-main-title {
		color: <?php echo esc_html($zox_headp_color); ?>;
	}

	body,
	span.zox-s-cat,
	span.zox-ad-label,
	span.zox-post-excerpt p {
		font-family: '<?php echo esc_html($zox_content_font); ?>', sans-serif;
		font-weight: <?php echo esc_html($zox_content_font_style); ?>;
		text-transform: <?php echo esc_html($zox_content_font_variant); ?>;
	}

	p.zox-s-graph,
	.zox-post-body p {
		font-family: '<?php echo esc_html($zox_para_font); ?>', sans-serif;
		font-weight: <?php echo esc_html($zox_para_font_style); ?>;
		text-transform: <?php echo esc_html($zox_para_font_variant); ?>;
	}

	nav.zox-fly-nav-menu ul li a {
		font-family: '<?php echo esc_html($zox_menu_font); ?>', sans-serif;
		font-weight: <?php echo esc_html($zox_menu_font_style); ?>;
		text-transform: <?php echo esc_html($zox_menu_font_variant); ?>;
	}

	h1.zox-post-title,
	.zox-post-body blockquote p {
		font-family: '<?php echo esc_html($zox_feat_font); ?>', sans-serif;
		font-weight: <?php echo esc_html($zox_feat_font_style); ?>;
		text-transform: <?php echo esc_html($zox_feat_font_variant); ?>;
	}

	h2.zox-s-title2,
	h2.zox-s-title3 {
		font-family: '<?php echo esc_html($zox_headline_font); ?>', sans-serif;
		font-weight: <?php echo esc_html($zox_headline_font_style); ?>;
		text-transform: <?php echo esc_html($zox_headline_font_variant); ?>;
	}

	span.zox-post-main-title {
		font-family: '<?php echo esc_html($zox_headp_font); ?>', sans-serif;
		font-weight: <?php echo esc_html($zox_headp_font_style); ?>;
		text-transform: <?php echo esc_html($zox_headp_font_variant); ?>;
	}

	<?php if ($zox_skin == "2" || empty($zox_skin) ) { ?>
		body {
			font-family: 'Roboto', sans-serif;
			font-weight: 400;
			text-transform: none;
		}
		body,
		body.custom-background {
			background-color: #f0f0f0;
		}
		.zox-nav-menu ul li a {
			color: #000;
			font-family: 'Roboto Condensed', sans-serif;
			font-size: 20px;
			font-weight: 300;
			padding: 30px 10px;
			text-transform: capitalize;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #000;
		}
		span.zox-s-cat {
			font-family: 'Roboto', sans-serif;
			font-weight: 700;
			text-transform: uppercase;
		}
		h2.zox-s-title2,
		.zox-post-body blockquote p,
		.zox-widget-side-trend-wrap .zox-art-text:before {
			font-family: 'Heebo', sans-serif;
			font-weight: 700;
			text-transform: capitalize;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat,
		h1.zox-post-title,
		.zox-post-body blockquote p {
			font-family: 'Heebo', sans-serif;
			font-weight: 900;
			text-transform: capitalize;
		}

		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #ec2b8c;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #ec2b8c;
		}
	<?php } else if ($zox_skin == "3") { ?>
		body,
		body.custom-background {
			background-color: #f0f0f0;
		}
		#zox-bot-head-wrap,
		#zox-fly-wrap {
			background: #000;
		}
		.zox-fly-but-wrap span {
			background: rgba(255,255,255,0.75);
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: rgba(255,255,255,0.75);
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: rgba(255,255,255,0.75);
		}
		.zox-nav-menu ul li:hover a,
		span.zox-nav-search-but:hover,
		span.zox-night:hover {
			color: #fff;
		}
		#zox-foot-wrap {
			background: #000;
		}
		#zox-foot-wrap p {
			color: #777;
		}
		#zox-foot-wrap a {
			color: #777;
		}
		.zox-nav-menu ul li.menu-item-has-children a:after,
		.zox-nav-menu ul li.zox-mega-drop a:after {
			border-right: 2px solid rgba(255,255,255,0.75);
			border-bottom: 2px solid rgba(255,255,255,0.75);
		}
		.zox-nav-menu ul li.menu-item-has-children:hover a:after {
			border-right: 2px solid #fff;
			border-bottom: 2px solid #fff;
		}
		.zox-nav-menu ul li ul.zox-mega-list li a,
		.zox-nav-menu ul li ul.zox-mega-list li a p {
			font-weight: 400;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat,
		h2.zox-s-title2,
		h1.zox-post-title,
		.zox-post-body blockquote p,
		.zox-widget-side-trend-wrap .zox-art-text:before {
			color: #000;
			font-family: 'Roboto Condensed', sans-serif;
			font-weight: 700;
			text-transform: capitalize;
		}
		.zox-s3 span.zox-s-cat,
		.zox-o1 span.zox-s-cat,
		.zox-s3 .zox-widget-side-trend-wrap .zox-art-text:before {
			background: #111;
		}
		.zox-o3 h3.zox-s-cat {
			background: #ddd;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #bb332f;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #bb332f;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #bb332f;
		}
	<?php } else if ($zox_skin == "4") { ?>
		body {
			font-family: 'Roboto', sans-serif;
		}
		body,
		body.custom-background {
			background-color: #fff;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 76px;
		}
		.zox-nav-menu ul li a {
			color: #000;
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			font-weight: 800;
			padding: 30px 10px;
			text-transform: uppercase;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #000;
		}
		#zox-foot-wrap {
			background: #fff;
		}
		#zox-foot-wrap p {
			color: #aaa;
		}
		#zox-foot-wrap a {
			color: #aaa;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 76px;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat,
		h2.zox-s-title2,
		h1.zox-post-title,
		.zox-post-body blockquote p,
		.zox-widget-side-trend-wrap .zox-art-text:before {
			font-family: 'Montserrat', sans-serif;
			font-weight: 800;
			text-transform: uppercase;
		}
		h2.zox-s-title3 {
			font-family: 'Roboto', sans-serif;
			font-weight: 700;
		}
		.zox-feat-ent3-main-wrap h2.zox-s-title2 {
			background-color: #ec008c;
			box-shadow: 15px 0 0 #ec008c, -10px 0 0 #ec008c;
		}
		.zox-s8 span.zox-s-cat,
		.zox-s8 .zox-widget-txtw .zox-widget-featl-wrap span.zox-s-cat {
			color: #ec008c;
			font-family: 'Montserrat', sans-serif;
			font-weight: 800;
			letter-spacing: 0;
			text-transform: uppercase;
		}
		.zox-o1 span.zox-s-cat {
			background: #fff;
		}
		.zox-s8 a:hover h2.zox-s-title1,
		.zox-s8 a:hover h2.zox-s-title1-feat,
		.zox-s8 a:hover h2.zox-s-title2,
		.zox-s8 a:hover h2.zox-s-title3 {
			box-shadow: 15px 0 0 #fff, -10px 0 0 #fff;
			color: #ec008c;
		}
		.zox-feat-ent3-main-wrap a:hover h2.zox-s-title2 {
			color: #000;
		}
		a,
		a:visited,
		h3.zox-post-cat a {
			color: #ec008c;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #ec008c;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #ec008c;
		}
	<?php } else if ($zox_skin == "5") { ?>
		body,
		body.custom-background {
			background-color: #fff;
		}
		#zox-top-head-wrap {
			background: #fff;
		}
		#zox-top-head-wrap,
		#zox-top-head,
		#zox-top-head-left,
		#zox-top-head-mid,
		#zox-top-head-right,
		.zox-top-nav-menu ul {
			height: 40px;
		}
		span.zox-top-soc-but,
		.zox-top-nav-menu ul li a {
			color: #555;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #fff;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #fff;
		}
		#zox-foot-wrap {
			background: #000;
		}
		#zox-foot-wrap p {
			color: #777;
		}
		#zox-foot-wrap a {
			color: #777;
		}
		.zox-top-nav-menu ul li a,
		.zox-nav-menu ul li a {
			font-family: 'Roboto', sans-serif;
			text-transform: capitalize;
		}
		.zox-top-nav-menu ul li a {
			font-size: 14px;
			font-weight: 400;
			padding: 13px 10px;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 80px;
		}
		.zox-nav-menu ul li a {
			font-size: 22px;
			font-weight: 400;
			padding: 29px 15px;
		}
		.zox-nav-menu ul li.menu-item-has-children a:after,
		.zox-nav-menu ul li.zox-mega-drop a:after {
			border-right: 2px solid #fff;
			border-bottom: 2px solid #fff;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 80px;
		}
		.zox-fix-up .zox-nav-menu ul li a,
		.zox-fix-up span.zox-nav-search-but {
			margin: 0;
		}
		.zox-fix-up .zox-nav-menu ul li a {
			padding-top: 19px;
			padding-bottom: 19px;
		}
		.zox-fly-but-wrap span {
			background: #fff;
		}
		.zox-fix-up .zox-bot-head-logo img {
			top: auto;
		}
		#zox-bot-head-wrap {
			background: #23001b;
		}
		#zox-bot-head-mid {
			position: static;
		}
		span.zox-s-cat,
		.zox-byline-wrap span {
			font-family: 'Roboto Condensed', sans-serif;
			font-weight: 400;
		}
		span.zox-s-cat {
			color: #333;
			font-size: 13px;
			letter-spacing: .05em;
			text-transform: uppercase;
		}
		.zox-byline-wrap span,
		span.zox-byline-name a {
			color: #333;
			font-size: .75rem;
			font-weight: 400;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat {
			color: #6a0432;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat,
		h1.zox-post-title,
		.zox-post-body blockquote p,
		.zox-widget-side-trend-wrap .zox-art-text:before {
			font-family: 'Alegreya', sans-serif;
			font-weight: 900;
			text-transform: capitalize;
		}
		h2.zox-s-title2,
		h2.zox-s-title3 {
			font-family: 'Heebo', sans-serif;
			font-weight: 800;
			text-transform: capitalize;
		}
		.zox-widget-side-trend-wrap .zox-art-text:before {
			color: #bbb;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #ff0e50;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #ff0e50;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #ff0e50;
		}
	<?php } else if ($zox_skin == "6") { ?>
		body,
		body.custom-background {
			background-color: #fff;
		}
		#zox-top-head-wrap {
			background: #000;
		}
		#zox-top-head-wrap,
		#zox-top-head,
		#zox-top-head-left,
		#zox-top-head-mid,
		#zox-top-head-right,
		.zox-top-nav-menu ul {
			height: 50px;
		}
		span.zox-top-soc-but,
		.zox-top-nav-menu ul li a {
			color: #888;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #fff;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #fff;
		}
		#zox-foot-wrap {
			background: #000;
		}
		#zox-foot-wrap p {
			color: #777;
		}
		#zox-foot-wrap a {
			color: #777;
		}
		#zox-bot-head-mid {
			border-left: 1px solid rgba(2555,255,255,.2);
		}
		.zox-bot-head-logo {
			margin: 0 0 0 24px;
		}
		@media screen and (max-width: 1023px) {
			#zox-bot-head-mid {
				border-left: 0;
			}
			.zox-bot-head-logo {
				margin: 0;
			}
		}
		.zox-top-nav-menu ul li a,
		.zox-nav-menu ul li a {
			font-family: 'Barlow Semi Condensed', sans-serif;
			text-transform: uppercase;
		}
		.zox-top-nav-menu ul li a {
			font-size: 16px;
			font-weight: 800;
			padding: 0 10px;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 80px;
		}
		.zox-nav-menu ul li a {
			font-size: 16px;
			font-weight: 400;
			padding: 32px 15px;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 80px;
		}
		.zox-fly-but-wrap span {
			background: #fff;
		}
		#zox-bot-head-wrap,
		#zox-fly-wrap {
			background: #102039;
		}
		.zox-s4 span.zox-s-cat {
			color: #3061ff;
			font-family: 'Roboto Mono', sans-serif;
			font-weight: 400;
			text-transform: uppercase;
		}
		h2.zox-s-title2,
		h2.zox-s-title3 {
			font-family: 'Barlow Semi Condensed', sans-serif;
			font-weight: 700;
			text-transform: capitalize;
		}
		.zox-widget-side-trend-wrap .zox-art-text:before {
			color: #bbb;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #555;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #555;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #555;
		}
	<?php } else if ($zox_skin == "7") { ?>
		body,
		.zox-widget-side-trend-wrap .zox-art-text:before {
			background: #fff;
			font-family: 'Oswald', sans-serif;
		}
		body,
		body.custom-background {
			background-color: #fff;
		}
		#zox-top-head-wrap {
			background: #f0f0f0;
		}
		#zox-top-head-wrap,
		#zox-top-head,
		#zox-top-head-left,
		#zox-top-head-mid,
		#zox-top-head-right,
		.zox-top-nav-menu ul {
			height: 40px;
		}
		span.zox-top-soc-but,
		.zox-top-nav-menu ul li a {
			color: #9f9f9f;
		}
		.zox-top-nav-menu ul li a {
			font-family: 'Oswald', sans-serif;
			font-size: 12px;
			font-weight: 500;
			padding: 0 15px;
		}
		#zox-bot-head-wrap,
		#zox-fly-wrap {
			background: #fff;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 90px;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 90px;
		}
		.zox-nav-menu ul {
			height: auto;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #000;
		}
		#zox-foot-wrap {
			background: #fff;
		}
		#zox-foot-wrap p {
			color: #aaa;
		}
		#zox-foot-wrap a {
			color: #aaa;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #000;
		}
		.zox-fly-but-wrap span {
			background: #000;
		}
		.zox-nav-menu ul {
			float: left;
		}
		.zox-fix-up .zox-nav-menu ul,
		.zox-fix-up span.zox-nav-search-but {
			margin: 0;
		}
		.zox-nav-menu ul li a {
			font-family: 'Amiri', serif;
			font-size: 20px;
			font-weight: 700;
			padding: 35px 15px;
			text-transform: capitalize;
		}
		.zox-fix-up #zox-bot-head-right,
		.zox-fix-up span.zox-nav-search-but {
			align-content: center;
		}
		span.zox-s-cat {
			font-family: 'Oswald', sans-serif;
			font-weight: 700;
			text-transform: uppercase;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat,
		h2.zox-s-title2,
		.zox-nav-menu ul li ul.zox-mega-list li a,
		.zox-nav-menu ul li ul.zox-mega-list li a p {
			font-family: 'Amiri', serif;
			font-weight: 700;
		}
		h2.zox-s-title3 {
			font-family: 'Oswald', sans-serif;
			font-weight: 700;
		}
		.zox-nav-menu ul li ul.zox-mega-list li a,
		.zox-nav-menu ul li ul.zox-mega-list li a p {
			font-size: 1rem;
		}
		p.zox-s-graph {
			font-family: 'PT Serif', serif;
			font-style: italic;
			font-weight: 400;
		}
		.zox-byline-wrap span,
		span.zox-widget-home-title {
			font-family: 'Oswald', sans-serif;
			text-transform: uppercase;
		}
		.zox-net3 span.zox-widget-home-title {
			color: #ec2b8c;
		}
		.zox-widget-side-trend-wrap .zox-art-text:before {
			color: #ddd;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #777;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #777;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #777;
		}
	<?php } else if ($zox_skin == "8") { ?>
		body,
		body.custom-background {
			background-color: #f0f0f0;
		}
		#zox-bot-head-wrap,
		#zox-fly-wrap {
			background: #013369;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 64px;
		}
		.zox-nav-menu ul li.menu-item-has-children a:after,
		.zox-nav-menu ul li.zox-mega-drop a:after {
			border-right: 2px solid #fff;
			border-bottom: 2px solid #fff;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 64px;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #eee;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #eee;
		}
		#zox-foot-wrap {
			background: #000;
		}
		#zox-foot-wrap p {
			color: #777;
		}
		#zox-foot-wrap a {
			color: #777;
		}
		.zox-fly-but-wrap span {
			background: #eee;
		}
		.zox-nav-menu ul li a {
			font-family: 'Rajdhani', sans-serif;
			font-size: 16px;
			font-weight: 600;
			padding: 24px 10px;
			text-transform: uppercase;
		}
		.zox-nav-menu ul:hover li a {
			opacity: .7;
		}
		.zox-nav-menu ul li:hover a {
			color: #fff;
			opacity: 1;
		}
		span.zox-s-cat,
		.zox-sport1 span.zox-s-cat {
			color: #fe4020;
			font-family: 'Nunito', sans-serif;
			font-size: .875rem;
			text-transform: uppercase;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat,
		h2.zox-s-title2,
		h2.zox-s-title3 {
			color: #000;
			font-family: 'Rajdhani', sans-serif;
			font-weight: 700;
			text-transform: capitalize;
		}
		.zox-feat-sport1-main-wrap h2.zox-s-title1 {
			font-size: 2.25rem;
			line-height: 1.15;
		}
		.zox-feat-sport1-sub-wrap h2.zox-s-title2 {
			font-size: 1.375rem;
			line-height: 1.15;
		}
		.zox-feat-sport1-sub-wrap p.zox-s-graph {
			display: none;
		}
		p.zox-s-graph {
			color: #888;
			font-family: 'PT Serif', serif;
			font-size: 1.125rem;
			line-height: 1.45;
		}
		.zox-byline-wrap {
			margin: 12px 0 0;
		}
		.zox-byline-wrap span,
		.zox-byline-wrap span a {
			color: #222;
			font-family: 'Nunito', sans-serif;
			font-size: 11px;
		}
		ul.zox-widget-tab-head li a {
			color: #000;
			font-family: 'Rajdhani', sans-serif;
			font-size: 18px;
			font-weight: 700;
			text-transform: capitalize;
		}
		.zox-feat-sport1-side-wrap .zox-widget-tab-wrap h2.zox-s-title3 {
			font-family: 'Rajdhani', sans-serif;
			font-weight: 600;
			text-transform: capitalize;
		}
		.zox-sport1 span.zox-widget-home-title {
			font-family: 'Rajdhani', sans-serif;
			font-weight: 700;
			text-transform: uppercase;
		}
		.zox-s6 .zox-widget-side-trend-wrap .zox-art-text:before {
			color: #bbb;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #013369;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #013369;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #013369;
		}
	<?php } else if ($zox_skin == "9") { ?>
		body {
			font-family: 'Nunito Sans', sans-serif;
		}
		body,
		body.custom-background {
			background-color: #fff;
		}
		#zox-bot-head-wrap,
		#zox-fly-wrap {
			background: #000;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 60px;
		}
		.zox-nav-menu ul li.menu-item-has-children a:after,
		.zox-nav-menu ul li.zox-mega-drop a:after {
			border-right: 2px solid #fff;
			border-bottom: 2px solid #fff;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 60px;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #fff;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #fff;
		}
		.zox-fly-but-wrap span {
			background: #fff;
		}
		.zox-nav-menu ul li a {
			font-family: 'Nunito Sans', sans-serif;
			font-size: 16px;
			font-weight: 700;
			padding: 22px 13px;
			text-transform: capitalize;
		}
		.zox-nav-menu ul:hover li a {
			opacity: .7;
		}
		.zox-nav-menu ul li:hover a {
			color: #fff;
			opacity: 1;
		}
		#zox-foot-wrap {
			background: #000;
		}
		#zox-foot-wrap p {
			color: #777;
		}
		#zox-foot-wrap a {
			color: #777;
		}
		.zox-o3 h3.zox-s-cat {
			background: #03fc96;
		}
		.zox-s6 span.zox-s-cat {
			color: #000;
		}
		span.zox-s-cat {
			font-family: 'Nunito Sans', sans-serif;
			font-weight: 800;
			letter-spacing: .2em;
			text-transform: uppercase;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat,
		h2.zox-s-title2 {
			color: #000;
			font-family: 'Anton', sans-serif;
			font-weight: 400;
			text-transform: uppercase;
		}
		p.zox-s-graph,
		h2.zox-s-title3 {
			font-family: 'Nunito Sans', sans-serif;
		}
		span.zox-widget-home-title {
			color: #111;
			font-family: 'Nunito Sans', sans-serif;
			font-weight: 700;
			text-transform: uppercase;
		}
		.zox-s6 .zox-widget-side-trend-wrap .zox-art-text:before {
			color: #bbb;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #013369;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #013369;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #013369;
		}
	<?php } else if ($zox_skin == "10") { ?>
		body {
			font-family: 'Roboto', sans-serif;
		}
		body,
		body.custom-background {
			background-color: #f0f0f0;
		}
		#zox-bot-head-wrap,
		#zox-fly-wrap {
			background: #000;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 56px;
		}
		.zox-nav-menu ul li.menu-item-has-children a:after,
		.zox-nav-menu ul li.zox-mega-drop a:after {
			border-right: 2px solid #fff;
			border-bottom: 2px solid #fff;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 56px;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #fff;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #fff;
		}
		.zox-fly-but-wrap span {
			background: #fff;
		}
		.zox-nav-menu ul li a {
			font-family: 'Roboto', sans-serif;
			font-size: 14px;
			font-weight: 700;
			padding: 21px 10px;
			text-transform: uppercase;
		}
		.zox-nav-menu ul:hover li a {
			opacity: .7;
		}
		.zox-nav-menu ul li:hover a {
			color: #fff;
			opacity: 1;
		}
		#zox-foot-wrap {
			background: #000;
		}
		#zox-foot-wrap p {
			color: #777;
		}
		#zox-foot-wrap a {
			color: #777;
		}
		.zox-sport3 span.zox-s-cat {
			font-weight: 400;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat {
			font-family: 'Poppins', sans-serif;
			font-weight: 800;
		}
		h2.zox-s-title3 {
			font-family: 'Poppins', sans-serif;
		}
		ul.zox-widget-tab-head li a,
		h2.zox-s-title2,
		h2.zox-s-title3,
		p.zox-s-graph {
			font-family: 'Roboto', sans-serif;
		}
		span.zox-widget-home-title {
			color: #000;
			font-family: 'Poppins', sans-serif;
			font-weight: 800;
			text-transform: uppercase;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #013369;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #013369;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #013369;
		}
	<?php } else if ($zox_skin == "11") { ?>
		body {
			font-family: 'Libre Franklin', sans-serif;
		}
		body,
		body.custom-background {
			background-color: #fff;
		}
		#zox-top-head-wrap {
			background: #fff;
		}
		#zox-top-head-wrap,
		#zox-top-head,
		#zox-top-head-left,
		#zox-top-head-mid,
		#zox-top-head-right {
			height: 190px;
		}
		#zox-top-head-mid img {
			position: relative;
				top: 25px;
			max-height: none;
		}
		span.zox-top-soc-but,
		.zox-top-nav-menu ul li a {
			color: #212121;
		}
		.zox-fix-up .zox-nav-menu ul li a {
			padding-top: 24px;
			padding-bottom: 24px;
		}
		#zox-bot-head-wrap,
		#zox-fly-wrap {
			background: #fff;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 60px;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #000;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #000;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 60px;
		}
		.zox-fly-but-wrap span {
			background: #000;
		}
		.zox-nav-menu ul li a {
			font-family: 'Libre Franklin', sans-serif;
			font-size: 12px;
			font-weight: 600;
			letter-spacing: .15em;
			padding: 24px 15px;
			text-transform: uppercase;
		}
		#zox-foot-wrap {
			background: #fff;
		}
		#zox-foot-wrap p {
			color: #aaa;
		}
		#zox-foot-wrap a {
			color: #aaa;
		}
		span.zox-s-cat {
			font-family: 'Libre Franklin', sans-serif;
			text-transform: uppercase;
		}
		.zox-s7 .zox-byline-wrap:before {
			background: rgb(184, 154, 106);
		}
		.zox-o5 .zox-byline-wrap:before {
			background: #fff;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat {
			font-family: 'Frank Ruhl Libre', sans-serif;
			font-weight: 400;
		}
		h2.zox-s-title2 {
			font-family: 'Frank Ruhl Libre', sans-serif;
			font-weight: 500;
		}
		#zox-feat-fash1-wrap p.zox-s-graph,
		span.zox-byline-date {
			display: none;
			}
		.zox-widget-side-trend-wrap .zox-art-text:before {
			border: 1px solid #000;
			color: #000;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #777;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #777;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #777;
		}
	<?php } else if ($zox_skin == "12") { ?>
		body {
			font-family: 'Libre Franklin', sans-serif;
		}
		body,
		body.custom-background {
			background-color: #fff;
		}
		#zox-top-head-wrap {
			background: #fff;
		}
		#zox-top-head-wrap,
		#zox-top-head,
		#zox-top-head-left,
		#zox-top-head-mid,
		#zox-top-head-right {
			height: 100px;
		}
		#zox-top-head-mid img {
			max-height: none;
		}
		span.zox-top-soc-but {
			color: #2f3846;
		}
		#zox-bot-head-wrap,
		#zox-fly-wrap {
			background: #fff;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 50px;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 50px;
		}
		.zox-fix-up .zox-nav-menu ul li a {
			padding-top: 24px;
			padding-bottom: 24px;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #2f3846;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #2f3846;
		}
		.zox-fly-but-wrap span {
			background: #000;
		}
		.zox-nav-menu ul li a {
			font-family: 'Roboto', sans-serif;
			font-size: 12px;
			font-weight: 500;
			letter-spacing: .1em;
			padding: 19px 15px;
			text-transform: uppercase;
		}
		#zox-foot-wrap {
			background: #000;
		}
		#zox-foot-wrap p {
			color: #777;
		}
		#zox-foot-wrap a {
			color: #777;
		}
		span.zox-s-cat,
		.zox-fash2 span.zox-s-cat {
			color: #002fa7;
			font-family: 'Libre Franklin', sans-serif;
			font-weight: 700;
			text-transform: uppercase;
		}
		h2.zox-s-title2 {
			color: #2f3846;
			font-family: 'Frank Ruhl Libre', sans-serif;
			font-weight: 400;
		}
		span.zox-widget-home-title {
			font-family: 'Frank Ruhl Libre', sans-serif;
			font-weight: 700;
		}
		#zox-feat-fash2-wrap .zox-s-graph {
			display: none;
		}
		.zox-widget-side-trend-wrap .zox-art-text:before {
			border: 1px solid #002fa7;
			color: #002fa7;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #002fa7;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #002fa7;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #002fa7;
		}
	<?php } else if ($zox_skin == "13") { ?>
		body {
			font-family: 'Libre Franklin', sans-serif;
		}
		body,
		body.custom-background {
			background-color: #f0f0f0;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 54px;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 54px;
		}
		.zox-fix-up .zox-nav-menu ul li a {
			padding-top: 24px;
			padding-bottom: 24px;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #000;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #000;
		}
		#zox-foot-wrap {
			background: #fff;
		}
		#zox-foot-wrap p {
			color: #aaa;
		}
		#zox-foot-wrap a {
			color: #aaa;
		}
		.zox-fly-but-wrap span {
			background: #000;
		}
		.zox-nav-menu ul li a {
			font-family: 'Roboto', sans-serif;
			font-size: 12px;
			font-weight: 500;
			padding: 21px 15px;
			text-transform: uppercase;
		}
		span.zox-s-cat {
			font-family: 'Frank Ruhl Libre', sans-serif;
		}
		.zox-s7 .zox-byline-wrap:before {
			background: rgb(184, 154, 106);
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat {
			font-family: 'Josefin Sans', sans-serif;
			font-weight: 400;
			text-transform: uppercase;
		}
		h2.zox-s-title2,
		.zox-fash3 .zox-widget-featl-sub h2.zox-s-title3 {
			font-family: 'Frank Ruhl Libre', sans-serif;
			font-weight: 400;
			text-transform: capitalize;
		}
		#zox-feat-fash3-wrap .zox-s-graph,
		#zox-feat-fash3-wrap .zox-byline-wrap {
			display: none;
		}
		.zox-widget-side-trend-wrap .zox-art-text:before {
			border: 1px solid rgb(184, 154, 106);
			color: rgb(184, 154, 106);
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #777;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #777;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #777;
		}
	<?php } else if ($zox_skin == "14") { ?>
		body {
			font-family: 'Roboto', sans-serif;
		}
		body,
		body.custom-background {
			background-color: #fff;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 70px;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 70px;
		}
		.zox-nav-menu ul li.menu-item-has-children a:after,
		.zox-nav-menu ul li.zox-mega-drop a:after {
			border-right: 2px solid #fff;
			border-bottom: 2px solid #fff;
		}
		#zox-bot-head-wrap,
		#zox-bot-head-wrap.zox-trans-bot.zox-fix-up,
		#zox-bot-head-wrap.zox-trans-bot:hover,
		#zox-fly-wrap {
			background: #000;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #fff;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #fff;
		}
		.zox-trans-bot.zox-fix-up .zox-nav-menu ul li a,
		.zox-trans-bot.zox-fix-up span.zox-nav-search-but {
			color: #fff;
		}
		.zox-fly-but-wrap span {
			background: #fff;
		}
		.zox-trans-bot.zox-fix-up  .zox-fly-but-wrap span {
			background: #fff;
		}
		#zox-foot-wrap {
			background: #000;
		}
		#zox-foot-wrap p {
			color: #777;
		}
		#zox-foot-wrap a {
			color: #777;
		}
		.zox-nav-menu ul li a {
			font-family: 'Roboto', sans-serif;
			font-size: 12px;
			font-weight: 900;
			padding: 29px 15px;
			text-transform: uppercase;
		}
		.zox-s6 span.zox-s-cat {
			color: #000;
			letter-spacing: .2em;
			text-transform: uppercase;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat,
		h2.zox-s-title2 {
			font-family: 'Poppins', sans-serif;
			font-weight: 700;
			text-transform: capitalize;
		}
		span.zox-widget-home-title {
			font-family: 'Poppins', sans-serif;
			font-weight: 600;
			text-transform: uppercase;
		}
		.zox-widget-side-trend-wrap .zox-art-text:before {
			color: #bbb;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #002fa7;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #002fa7;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #002fa7;
		}
	<?php } else if ($zox_skin == "15") { ?>
		body {
			font-family: 'Roboto', sans-serif;
		}
		body,
		body.custom-background {
			background-color: #f0f0f0;
		}
		#zox-bot-head-wrap,
		#zox-fly-wrap {
			background: #fff;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 50px;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 50px;
		}
		.zox-fix-up .zox-nav-menu ul li a {
			padding-top: 24px;
			padding-bottom: 24px;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #000;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #000;
		}
		.zox-fly-but-wrap span {
			background: #000;
		}
		#zox-foot-wrap {
			background: #fff;
		}
		#zox-foot-wrap p {
			color: #aaa;
		}
		#zox-foot-wrap a {
			color: #aaa;
		}
		.zox-nav-menu ul li a {
			font-family: 'Roboto', sans-serif;
			font-size: 14px;
			font-weight: 400;
			padding: 18px 15px;
			text-transform: capitalize;
		}
		.zox-s6 .zox-art-wrap {
			background: none;
		}
		.zox-feat-tech2-sub .zox-art-text {
			padding: 13px 0 0;
		}
		.zox-s6 span.zox-s-cat {
			color: #000;
			text-transform: uppercase;
		}
		h2.zox-s-title2 {
			font-family: 'Poppins', sans-serif;
			font-weight: 700;
			text-transform: capitalize;
		}
		span.zox-widget-home-title {
			font-family: 'Poppins', sans-serif;
			font-weight: 700;
			text-transform: uppercase;
		}
		.zox-widget-side-trend-wrap .zox-art-text:before {
			color: #bbb;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #002fa7;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #002fa7;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #002fa7;
		}
	<?php } else if ($zox_skin == "16") { ?>
		body {
			font-family: 'Titillium Web', sans-serif;
		}
		body,
		body.custom-background {
			background-color: #fff;
		}
		#zox-top-head-wrap {
			background: #000;
		}
		#zox-top-head-wrap,
		#zox-top-head,
		#zox-top-head-left,
		#zox-top-head-mid,
		#zox-top-head-right,
		.zox-top-nav-menu ul {
			height: 32px;
		}
		span.zox-top-soc-but,
		.zox-top-nav-menu ul li a {
			color: #aaa;
		}
		.zox-top-nav-menu ul li a {
			font-family: 'Titillium Web', sans-serif;
			font-size: 14px;
			font-weight: 600;
			padding: 9px 10px;
			text-transform: capitalize;
		}
		#zox-bot-head-wrap,
		.zox-bot-head-menu,
		#zox-bot-head,
		#zox-bot-head-left,
		#zox-bot-head-right,
		#zox-bot-head-mid,
		.zox-bot-head-logo,
		.zox-bot-head-logo-main,
		.zox-nav-menu,
		.zox-nav-menu ul {
			height: 50px;
		}
		.zox-nav-menu ul li ul.sub-menu,
		.zox-nav-menu ul li.menu-item-object-category .zox-mega-dropdown {
			top: 50px;
		}
		.zox-fix-up .zox-nav-menu ul li a {
			padding-top: 24px;
			padding-bottom: 24px;
		}
		.zox-nav-menu ul li a,
		span.zox-nav-search-but,
		span.zox-night {
			color: #000;
		}
		nav.zox-fly-nav-menu ul li a,
		nav.zox-fly-nav-menu ul li.menu-item-has-children:after,
		span.zox-fly-soc-head,
		ul.zox-fly-soc-list li a {
			color: #000;
		}
		.zox-fly-but-wrap span {
			background: #000;
		}
		.zox-nav-menu ul li a {
			font-family: 'Titillium Web', sans-serif;
			font-size: 14px;
			font-weight: 600;
			padding: 18px 10px;
			text-transform: uppercase;
		}
		#zox-foot-wrap {
			background: #fff;
		}
		#zox-foot-wrap p {
			color: #aaa;
		}
		#zox-foot-wrap a {
			color: #aaa;
		}
		.zox-byline-wrap span,
		.zox-byline-wrap span a,
		span.zox-s-cat {
			font-family: 'Titillium Web', sans-serif;
		}
		span.zox-s-cat {
			text-transform: uppercase;
		}
		#zox-feat-tech3-wrap .zox-byline-wrap span,
		#zox-feat-tech3-wrap .zox-byline-wrap span a {
			font-weight: 600;
			text-transform: capitalize;
		}
		.zox-s6 span.zox-s-cat,
		.zox-s6 .zox-widget-side-trend-wrap .zox-art-text:before {
			color: #ff4422;
		}
		h2.zox-s-title1,
		h2.zox-s-title1-feat,
		h2.zox-s-title2 {
			font-family: 'Poppins', sans-serif;
			font-weight: 700;
			text-transform: capitalize;
		}
		span.zox-widget-home-title {
			font-family: 'Poppins', sans-serif;
			font-weight: 700;
			text-transform: capitalize;
		}
		a,
		a:visited,
		a:hover h2.zox-s-title1,
		a:hover h2.zox-s-title1-feat,
		a:hover h2.zox-s-title2,
		a:hover h2.zox-s-title3,
		h3.zox-post-cat a {
			color: #ff4422;
		}
		.zox-post-body p a {
			box-shadow: inset 0 -1px 0 0 #fff, inset 0 -2px 0 0 #ff4422;
			color: #000;
		}
		.zox-post-body p a:hover {
			color: #ff4422;
		}
	<?php } ?>

	<?php $zox_post_adimg = get_option('zox_post_adimg'); $zox_post_para = get_option('zox_post_para');
	if ($zox_post_para == "true" && !empty($zox_post_adimg)) {
	if (!empty($zox_post_adimg)) { ?>

		.zox-post-ad {
			height: calc(100vh - 100px);
		}
		.zox-post-ad-in1 {
			clip: rect(0,auto,auto,0);
			overflow: hidden;
			position: absolute;
				left: 0;
				top: 0;
			z-index: 1;
			zoom: 1;
			height: 100%;
		}
		.zox-post-ad-in2 {
			position: fixed;
				left: 0;
				top: 0;
			transform: translateZ(0);
		}

	<?php } } ?>

	<?php
}

}

?>