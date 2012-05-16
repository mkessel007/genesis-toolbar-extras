<?php
/**
 * Helper functions for the admin - plugin links and help tabs.
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Admin
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/#!/deckerweb
 *
 * @since 1.0
 * @version 1.1
 */

add_filter( 'plugin_row_meta', 'ddw_gtbe_plugin_links', 10, 2 );
/**
 * Add various support links to plugin page
 *
 * @since 1.0
 *
 * @param  $gtbe_links
 * @param  $gtbe_file
 * @return strings plugin links
 */
function ddw_gtbe_plugin_links( $gtbe_links, $gtbe_file ) {

	if ( ! current_user_can( 'install_plugins' ) )
		return $gtbe_links;

	if ( $gtbe_file == GTBE_PLUGIN_BASEDIR . '/genesis-toolbar-extras.php' ) {
		$gtbe_links[] = '<a href="http://wordpress.org/extend/plugins/genesis-toolbar-extras/faq/" target="_new" title="' . __( 'FAQ', 'genesis-toolbar-extras' ) . '">' . __( 'FAQ', 'genesis-toolbar-extras' ) . '</a>';
		$gtbe_links[] = '<a href="http://wordpress.org/tags/genesis-toolbar-extras?forum_id=10" target="_new" title="' . _x( 'Support', 'Translators: Plugin support links', 'genesis-toolbar-extras' ) . '">' . _x( 'Support', 'Translators: Plugin support links', 'genesis-toolbar-extras' ) . '</a>';
		$gtbe_links[] = '<a href="' . __( 'http://genesisthemes.de/en/donate/', 'genesis-toolbar-extras' ) . '" target="_new" title="' . __( 'Donate', 'genesis-toolbar-extras' ) . '">' . __( 'Donate', 'genesis-toolbar-extras' ) . '</a>';
	}

	return $gtbe_links;
}
