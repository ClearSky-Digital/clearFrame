<?php
/**
 * One entry in a list.
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf-entry cf-entry--summary' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="cf-entry__thumb" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1"><?php the_post_thumbnail( 'medium_large' ); ?></a>
	<?php endif; ?>
	<header class="cf-entry__header">
		<h2 class="cf-entry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php if ( 'post' === get_post_type() ) : ?>
			<p class="cf-entry__meta"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></p>
		<?php endif; ?>
	</header>
	<div class="cf-entry__content"><?php the_excerpt(); ?></div>
</article>
