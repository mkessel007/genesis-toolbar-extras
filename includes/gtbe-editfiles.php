<?php
/**
 * Display links to theme editor for style.css & functions.php
 * Only if theme support enable and proper capabilities are set
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Theme Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.1
 */

/**
 * Display theme edit links if theme support is enabled
 * For these child types: Official StudioPress, Community/Marketplace, Third-Party
 * Except: Themedy Brand! (see gtbe-themedy.php)
 *
 * @since 1.1
 * @version 1.1
 *
 * @param $gtbe_edit_themes_style
 * @param $gtbe_edit_themes_functions
 * @param $gtbe_stylesheet_name
 */

/** WordPress 3.4+ check */
	// Is WordPress 3.4 or higher
if ( function_exists( 'wp_get_theme' ) ) {
	$gtbe_edit_themes_style = network_admin_url( 'theme-editor.php?file=style.css&amp;theme=' . get_stylesheet() );
	$gtbe_edit_themes_functions = network_admin_url( 'theme-editor.php?file=functions.php&amp;theme=' . get_stylesheet() );

}
	// Is WordPress prior 3.4
else {
	$gtbe_edit_themes_style = network_admin_url( 'theme-editor.php?file=' . get_stylesheet_directory() . '/style.css&amp;theme=' . urlencode( $gtbe_stylesheet_name ) );
	$gtbe_edit_themes_functions = network_admin_url( 'theme-editor.php?file=' . get_stylesheet_directory() . '/functions.php&amp;theme=' . urlencode( $gtbe_stylesheet_name ) );
}  // end-if WP 3.4+ check

/** Child type check */
	// Is StudioPress Child
if ( $gtbe_is_spchild == 'spchild_yes' ) {
	$gtbe_child_type_check = $spgenesischild;

	// Is Marketplace/Community Child
} elseif ( $gtbe_is_spmarket == 'spmarket_yes' ) {
	$gtbe_child_type_check = $spmarket;

	// Is Third-Party Child
} elseif ( $gtbe_is_tpchild == 'tpchild_yes' ) {
	$gtbe_child_type_check = $tpchild;
}  // end-if child type check

/** Display Theme Editor links, depending on Prose child theme check */
if ( ! defined( 'PROSE_DOMAIN' ) ) {

	/** Edit child theme stylesheet (style.css) */
	$menu_items['child-editstyle'] = array(
		'parent' => $gtbe_child_type_check,
		'title'  => __( 'Edit style.css', 'genesis-toolbar-extras' ),
		'href'   => $gtbe_edit_themes_style,
		'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme stylesheet: style.css', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

	/** Edit child theme functions (functions.php) */
	$menu_items['child-editfunctions'] = array(
		'parent' => $gtbe_child_type_check,
		'title'  => __( 'Edit functions.php', 'genesis-toolbar-extras' ),
		'href'   => $gtbe_edit_themes_functions,
		'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme functions: functions.php', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

} elseif ( defined( 'PROSE_DOMAIN' ) && current_theme_supports( 'gtbe-theme-editor-prose' ) ) {

	/** Edit Prose 1.0/1.5.x child theme functions (functions.php) */
	$menu_items['child-editfunctions'] = array(
		'parent' => $gtbe_child_type_check,
		'title'  => __( 'Edit functions.php', 'genesis-toolbar-extras' ),
		'href'   => $gtbe_edit_themes_functions,
		'meta'   => array( 'target' => '', 'title' => _x( 'Edit current child theme functions: functions.php', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
	);

}  // end-if theme editor & prose check
