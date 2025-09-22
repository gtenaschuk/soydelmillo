<amp-sidebar id="sidebar" layout="nodisplay" side="left">
<div id="zox-fly-wrap">
	<div id="zox-fly-menu-top" class="left relative">
		<div class="zox-fly-but-wrap zox-fly-but-menu ampstart-btn caps m2" on="tap:sidebar.toggle" role="button" tabindex="0">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div><!--zox-fly-but-wrap-->
	</div><!--zox-fly-menu-top-->
	<div id="zox-fly-menu-wrap">
		<nav class="zox-fly-nav-menu left relative">
			<?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?>
		</nav>
	</div><!--zox-fly-menu-wrap-->
</div><!--zox-fly-wrap-->
</amp-sidebar>