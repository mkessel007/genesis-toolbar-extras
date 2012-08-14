<?php
/**
 * Helper functions for custom branding & capabilities
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Branding
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.0
 * @version 1.1
 */

/**
 * Helper functions for returning a few popular roles/capabilities.
 *
 * @since 1.0
 *
 * @return role/capability
 */
	/**
	 * Helper function for returning 'administrator' role/capability.
	 *
	 * @since 1.0
	 *
	 * @return 'administrator' role
	 */
	function __gtbe_admin_only() {

		return 'administrator';
	}

	/**
	 * Helper function for returning 'editor' role/capability.
	 *
	 * @since 1.0
	 *
	 * @return 'editor' role
	 */
	function __gtbe_role_editor() {

		return 'editor';
	}

	/**
	 * Helper function for returning 'edit_theme_options' capability.
	 *
	 * @since 1.0
	 *
	 * @return 'edit_theme_options' capability
	 */
	function __gtbe_cap_edit_theme_options() {

		return 'edit_theme_options';
	}

	/**
	 * Helper function for returning 'manage_options' capability.
	 *
	 * @since 1.0
	 *
	 * @return 'manage_options' capability
	 */
	function __gtbe_cap_manage_options() {

		return 'manage_options';
	}

	/**
	 * Helper function for returning 'install_plugins' capability.
	 *
	 * @since 1.0
	 *
	 * @return 'install_plugins' capability
	 */
	function __gtbe_cap_install_plugins() {

		return 'install_plugins';
	}

/** End of role/capability helper functions */


/**
 * Helper functions for returning colored icons.
 *
 * @since 1.0
 *
 * @return colored icon image
 */
	/**
	 * Helper function for returning the brown icon.
	 *
	 * @since 1.0
	 *
	 * @return brown icon
	 */
	function __gtbe_brown_icon() {

		return plugins_url( 'images/icon-genesistbe-brown.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the dark blue icon.
	 *
	 * @since 1.0
	 *
	 * @return dark blue icon
	 */
	function __gtbe_darkblue_icon() {

		return plugins_url( 'images/icon-genesistbe-darkblue.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the green icon.
	 *
	 * @since 1.0
	 *
	 * @return green icon
	 */
	function __gtbe_green_icon() {

		return plugins_url( 'images/icon-genesistbe-green.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the ivory icon.
	 *
	 * @since 1.0
	 *
	 * @return ivory icon
	 */
	function __gtbe_ivory_icon() {

		return plugins_url( 'images/icon-genesistbe-ivory.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the orange icon.
	 *
	 * @since 1.0
	 *
	 * @return orange icon
	 */
	function __gtbe_orange_icon() {

		return plugins_url( 'images/icon-genesistbe-orange.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the pink icon.
	 *
	 * @since 1.0
	 *
	 * @return pink icon
	 */
	function __gtbe_pink_icon() {

		return plugins_url( 'images/icon-genesistbe-pink.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the red icon.
	 *
	 * @since 1.0
	 *
	 * @return red icon
	 */
	function __gtbe_red_icon() {

		return plugins_url( 'images/icon-genesistbe-red.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the white icon (= Genesis Default!).
	 *
	 * @since 1.0
	 *
	 * @return white icon
	 */
	function __gtbe_white_icon() {

		return plugins_url( 'images/icon-genesistbe-white.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning the yellow icon.
	 *
	 * @since 1.0
	 *
	 * @return yellow icon
	 */
	function __gtbe_yellow_icon() {

		return plugins_url( 'images/icon-genesistbe-yellow.png', dirname( __FILE__ ) );
	}

	/**
	 * Helper function for returning a custom icon (icon-gtbe.png) from stylesheet/child theme "images" folder.
	 *
	 * @since 1.1
	 *
	 * @return gtbe custom icon
	 */
	function __gtbe_child_images_icon() {

		return get_stylesheet_directory_uri() . '/images/icon-gtbe.png';
	}

/** End of icon helper functions */


/**
 * Helper functions for returning icon class.
 *
 * @since 1.0
 *
 * @return icon class
 */
	/**
	 * Helper function for returning no icon class.
	 *
	 * @since 1.0
	 *
	 * @return no icon class
	 */
	function __gtbe_no_icon_display() {

		return NULL;
	}

/** End of icon class helper functions */


/**
 * Misc. helper functions
 *
 * @since 1.1
 */
	add_action( 'wp_before_admin_bar_render', 'ddw_gtbe_remove_wpseo_yoast_toolbar', 5 );
	/**
	 * Disable original toolbar items of "WordPress SEO by Yoast"
	 *
	 * @since 1.1
	 */
	function ddw_gtbe_remove_wpseo_yoast_toolbar() {

		if ( defined( 'GTBE_REMOVE_WPSEO_YOAST_TOOLBAR' ) ) {

			global $wp_admin_bar;

			$wp_admin_bar->remove_menu( 'wpseo-menu' );
		}

	}  // end of function

/** End of misc. helper functions */
