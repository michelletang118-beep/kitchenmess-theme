<?php
/**
 * Kitchenmess theme functions.
 *
 * @package kitchenmess
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'KITCHENMESS_VERSION', '0.1.0' );

/**
 * Theme supports and editor styles.
 */
function kitchenmess_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/theme.css' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );

	// Image sizes used by recipe cards and the gear shelf.
	add_image_size( 'kitchenmess-portrait', 800, 1000, true );
	add_image_size( 'kitchenmess-square', 600, 600, true );
}
add_action( 'after_setup_theme', 'kitchenmess_setup' );

/**
 * Front-end stylesheet.
 */
function kitchenmess_enqueue() {
	wp_enqueue_style(
		'kitchenmess',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		KITCHENMESS_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'kitchenmess_enqueue' );

/**
 * Preload the two fonts every page needs above the fold.
 */
function kitchenmess_preload_fonts() {
	$fonts = array(
		'assets/fonts/cormorant-garamond-latin-300-normal.woff2',
		'assets/fonts/montserrat-latin-300-normal.woff2',
	);
	foreach ( $fonts as $font ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
			esc_url( get_theme_file_uri( $font ) )
		);
	}
}
add_action( 'wp_head', 'kitchenmess_preload_fonts', 1 );

/**
 * Block style variations the patterns use.
 */
function kitchenmess_block_styles() {
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'label',
			'label' => __( 'Small caps label', 'kitchenmess' ),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'hairline',
			'label' => __( 'Hairline box', 'kitchenmess' ),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'answer',
			'label' => __( 'Quick answer', 'kitchenmess' ),
		)
	);
	register_block_style(
		'core/list',
		array(
			'name'  => 'dash',
			'label' => __( 'Dash list', 'kitchenmess' ),
		)
	);
	register_block_style(
		'core/columns',
		array(
			'name'  => 'ruled',
			'label' => __( 'Ruled columns', 'kitchenmess' ),
		)
	);
}
add_action( 'init', 'kitchenmess_block_styles' );

/**
 * Pattern categories.
 */
function kitchenmess_pattern_categories() {
	register_block_pattern_category(
		'kitchenmess',
		array( 'label' => __( 'Kitchenmess', 'kitchenmess' ) )
	);
	register_block_pattern_category(
		'kitchenmess-brands',
		array( 'label' => __( 'Kitchenmess: brands and affiliates', 'kitchenmess' ) )
	);
}
add_action( 'init', 'kitchenmess_pattern_categories' );

/**
 * Speed: remove scripts WordPress loads by default that this theme does not need.
 */
function kitchenmess_cleanup() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
}
add_action( 'init', 'kitchenmess_cleanup' );

/**
 * Affiliate links: any link with the class "aff" (or inside a block with class "km-aff")
 * gets rel="sponsored nofollow noopener" and opens in a new tab, as Google and the FTC expect.
 *
 * @param string $content Post content.
 * @return string
 */
function kitchenmess_affiliate_rel( $content ) {
	if ( false === strpos( $content, 'aff' ) || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $content;
	}
	$p = new WP_HTML_Tag_Processor( $content );
	while ( $p->next_tag( 'a' ) ) {
		$class = (string) $p->get_attribute( 'class' );
		if ( preg_match( '/(^|\s)aff(\s|$)/', $class ) ) {
			$p->set_attribute( 'rel', 'sponsored nofollow noopener' );
			$p->set_attribute( 'target', '_blank' );
		}
	}
	return $p->get_updated_html();
}
add_filter( 'the_content', 'kitchenmess_affiliate_rel', 20 );

/**
 * Show a short affiliate disclosure above posts that have the "has-affiliate-links" tag.
 *
 * @param string $content Post content.
 * @return string
 */
function kitchenmess_disclosure( $content ) {
	if ( ! is_singular( 'post' ) || ! in_the_loop() || ! is_main_query() ) {
		return $content;
	}
	if ( ! has_tag( 'has-affiliate-links' ) ) {
		return $content;
	}
	$page = get_page_by_path( 'affiliate-disclosure' );
	$link = $page ? get_permalink( $page ) : '';
	$note = __( 'This post contains affiliate links. If you buy through them I may earn a small commission at no extra cost to you.', 'kitchenmess' );
	if ( $link ) {
		$note .= ' <a href="' . esc_url( $link ) . '">' . esc_html__( 'Read my disclosure', 'kitchenmess' ) . '</a>.';
	}
	return '<p class="km-aff-note">' . wp_kses_post( $note ) . '</p>' . $content;
}
add_filter( 'the_content', 'kitchenmess_disclosure', 5 );

/**
 * Use the round KM logo as the browser tab icon until a Site Icon is set in Settings.
 */
function kitchenmess_fallback_icon() {
	if ( has_site_icon() ) {
		return;
	}
	printf( '<link rel="icon" href="%s" type="image/png">' . "\n", esc_url( get_theme_file_uri( 'assets/images/logo-icon.png' ) ) );
}
add_action( 'wp_head', 'kitchenmess_fallback_icon' );
