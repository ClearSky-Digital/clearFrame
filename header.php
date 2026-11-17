<?php
/**
 * The header: document head, skip link, branding and the primary menu.
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'clearframe' ); ?></a>

<?php do_action( 'clearframe_before_header' ); ?>
<header id="masthead" class="cf-header">
	<div class="cf-header__inner">
		<?php do_action( 'clearframe_header_start' ); ?>
		<div class="cf-branding">
			<?php echo wp_kses_post( clearframe_get_site_branding() ); ?>
		</div>
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav class="cf-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'clearframe' ); ?>">
				<button type="button" class="cf-nav__toggle" aria-expanded="false" aria-controls="cf-primary-menu">
					<?php esc_html_e( 'Menu', 'clearframe' ); ?>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'cf-primary-menu',
						'menu_class'     => 'cf-menu',
						'container'      => false,
						'depth'          => 2,
					)
				);
				?>
			</nav>
		<?php endif; ?>
		<?php do_action( 'clearframe_header_end' ); ?>
	</div>
</header>
<?php do_action( 'clearframe_after_header' ); ?>

<?php do_action( 'clearframe_before_content' ); ?>
