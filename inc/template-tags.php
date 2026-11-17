<?php
/**
 * Template tags for the header and footer. Each can be changed with the filter named in HOOKS.md.
 *
 * @package ClearFrame
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Markup for the logo or the site title.
 *
 * @return string
 */
function clearframe_get_site_branding() {
	$html = '';
	if ( has_custom_logo() ) {
		$html .= '<div class="cf-site-logo">' . get_custom_logo() . '</div>';
	}
	$name = get_bloginfo( 'name' );
	if ( '' !== $name ) {
		$tag   = ( is_front_page() && is_home() ) ? 'h1' : 'p';
		$html .= sprintf(
			'<%1$s class="cf-site-title"><a href="%2$s" rel="home">%3$s</a></%1$s>',
			$tag,
			esc_url( home_url( '/' ) ),
			esc_html( $name )
		);
	}
	$desc = get_bloginfo( 'description', 'display' );
	if ( '' !== $desc ) {
		$html .= '<p class="cf-site-tagline">' . esc_html( $desc ) . '</p>';
	}
	/**
	 * Filters the logo and title markup.
	 *
	 * @param string $html Branding markup.
	 */
	return apply_filters( 'clearframe_site_branding', $html );
}

/**
 * The footer text: the owner's copyright, and the credit when the site owner turned it on.
 *
 * @return string
 */
function clearframe_get_footer_text() {
	$owner = get_theme_mod( 'clearframe_owner_name', '' );
	if ( '' === $owner ) {
		$owner = get_bloginfo( 'name' );
	}
	$html = '<p class="cf-copyright">&copy; ' . esc_html( wp_date( 'Y' ) ) . ' ' . esc_html( $owner ) . '</p>';

	if ( get_theme_mod( 'clearframe_show_credit', false ) ) {
		$uri = wp_get_theme( get_template() )->get( 'ThemeURI' );
		if ( $uri ) {
			$html .= '<p class="cf-credit"><a href="' . esc_url( $uri ) . '" rel="nofollow">' . esc_html__( 'Built on ClearFrame', 'clearframe' ) . '</a></p>';
		}
	}
	/**
	 * Filters the footer text markup.
	 *
	 * @param string $html Footer text markup.
	 */
	return apply_filters( 'clearframe_footer_text', $html );
}
