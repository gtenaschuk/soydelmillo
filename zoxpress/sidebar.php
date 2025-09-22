<div id="zox-side-wrap" class="zoxrel zox-divs">
	<?php if ( is_home() || is_front_page() ) { ?>
		<?php if ( is_active_sidebar( 'zox-home-sidebar-widget' ) ) { ?>
			<?php dynamic_sidebar( 'zox-home-sidebar-widget' ); ?>
		<?php } ?>
	<?php } else if ( is_single() || is_page() ) { ?>
		<?php if ( is_active_sidebar( 'zox-sidebar-widget-post' ) ) { ?>
			<?php dynamic_sidebar( 'zox-sidebar-widget-post' ); ?>
		<?php } ?>
	<?php } else { ?>
		<?php if ( is_active_sidebar( 'zox-sidebar-widget' ) ) { ?>
			<?php dynamic_sidebar( 'zox-sidebar-widget' ); ?>
		<?php } ?>
	<?php } ?>
</div><!--zox-side-wrap-->
