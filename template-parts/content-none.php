<?php
/**
 * Nothing to list.
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="cf-entry">
	<p><?php esc_html_e( 'Nothing was found here. Try a search.', 'clearframe' ); ?></p>
	<?php get_search_form(); ?>
</section>
