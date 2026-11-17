<?php
/**
 * The main template: posts, archives and search results.
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="content" class="cf-main">
	<?php if ( is_archive() || is_search() || ( is_home() && ! is_front_page() ) ) : ?>
		<header class="cf-page-header">
			<h1 class="cf-page-title">
				<?php
				if ( is_search() ) {
					/* translators: %s: search words. */
					printf( esc_html__( 'Search results for %s', 'clearframe' ), esc_html( get_search_query() ) );
				} elseif ( is_home() ) {
					single_post_title();
				} else {
					the_archive_title();
				}
				?>
			</h1>
			<?php the_archive_description( '<div class="cf-archive-description">', '</div>' ); ?>
		</header>
	<?php endif; ?>

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'summary' );
		endwhile;
		the_posts_pagination();
		?>
	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>
</main>
<?php
get_footer();
