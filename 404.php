<?php
/**
 * The page for an address that does not exist.
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="content" class="cf-main">
	<header class="cf-page-header">
		<h1 class="cf-page-title"><?php esc_html_e( 'This page can&rsquo;t be found.', 'clearframe' ); ?></h1>
	</header>
	<div class="cf-entry__content">
		<p><?php esc_html_e( 'Nothing was found at this address. Try a search instead.', 'clearframe' ); ?></p>
		<?php get_search_form(); ?>
	</div>
</main>
<?php
get_footer();
