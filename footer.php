<?php
/**
 * The footer: widgets, footer menu and text, then the closing tags.
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php do_action( 'clearframe_after_content' ); ?>

<?php do_action( 'clearframe_before_footer' ); ?>
<footer id="colophon" class="cf-footer">
	<div class="cf-footer__inner">
		<?php do_action( 'clearframe_footer_start' ); ?>
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<div class="cf-footer__widgets">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="cf-footer-nav" aria-label="<?php esc_attr_e( 'Footer menu', 'clearframe' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_class'     => 'cf-menu cf-menu--footer',
						'container'      => false,
						'depth'          => 1,
					)
				);
				?>
			</nav>
		<?php endif; ?>
		<div class="cf-footer__text">
			<?php echo wp_kses_post( clearframe_get_footer_text() ); ?>
		</div>
		<?php do_action( 'clearframe_footer_end' ); ?>
	</div>
</footer>
<?php do_action( 'clearframe_after_footer' ); ?>

<?php wp_footer(); ?>
</body>
</html>
