<form method="get" id="zox-search-form" action="<?php echo esc_url( home_url( '' ) ); ?>/">
	<input type="text" name="s" id="zox-search-input" value="<?php esc_html_e( 'Search', 'zoxpress' ); ?>" onfocus='if (this.value == "<?php esc_html_e( 'Search', 'zoxpress' ); ?>") { this.value = ""; }' onblur='if (this.value == "<?php esc_html_e( 'Search', 'zoxpress' ); ?>") { this.value = ""; }' />
	<input type="submit" id="zox-search-submit" value="<?php esc_html_e( 'Search', 'zoxpress' ); ?>" />
</form>