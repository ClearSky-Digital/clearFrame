<?php
/**
 * One full entry.
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf-entry' ); ?>>
	<header class="cf-entry__header">
		<?php the_title( '<h1 class="cf-entry__title">', '</h1>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>
			<p class="cf-entry__meta">
				<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
				<span class="cf-entry__author"><?php echo esc_html( get_the_author() ); ?></span>
			</p>
		<?php endif; ?>
	</header>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="cf-entry__image"><?php the_post_thumbnail( 'large' ); ?></div>
	<?php endif; ?>
	<div class="cf-entry__content">
		<?php
		the_content();
		wp_link_pages();
		?>
	</div>
	<?php if ( 'post' === get_post_type() ) : ?>
		<footer class="cf-entry__footer">
			<p class="cf-entry__cats"><?php the_category( ', ' ); ?></p>
			<?php the_tags( '<p class="cf-entry__tags">', ', ', '</p>' ); ?>
		</footer>
	<?php endif; ?>
</article>
