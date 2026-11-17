<?php
/**
 * The comments area.
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="cf-comments">
	<?php if ( have_comments() ) : ?>
		<h2 class="cf-comments__title">
			<?php
			/* translators: %s: number of comments. */
			printf( esc_html( _n( '%s comment', '%s comments', get_comments_number(), 'clearframe' ) ), esc_html( number_format_i18n( get_comments_number() ) ) );
			?>
		</h2>
		<ol class="cf-comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 48,
				)
			);
			?>
		</ol>
		<?php the_comments_navigation(); ?>
	<?php endif; ?>
	<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="cf-comments__closed"><?php esc_html_e( 'Comments are closed.', 'clearframe' ); ?></p>
	<?php endif; ?>
	<?php comment_form(); ?>
</section>
