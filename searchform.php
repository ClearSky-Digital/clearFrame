<?php
/**
 * The search form.
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$clearframe_id = wp_unique_id( 'cf-search-' );
?>
<form role="search" method="get" class="cf-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $clearframe_id ); ?>" class="screen-reader-text"><?php esc_html_e( 'Search for:', 'clearframe' ); ?></label>
	<input type="search" id="<?php echo esc_attr( $clearframe_id ); ?>" class="cf-search__field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>">
	<button type="submit" class="cf-button"><?php esc_html_e( 'Search', 'clearframe' ); ?></button>
</form>
