<?php
/**
 * Display links to active "Premise" settings' pages
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Plugin/Extension Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/#!/deckerweb
 *
 * @since 1.0
 * @version 1.1
 */

/**
 * Premise (premium, by Copyblogger Media LLC)
 *
 * @since 1.0
 * @version 1.1
 */
/** Premise Landing Pages Module */
$menu_items['premise'] = array(
	'parent' => $mcgroup,
	'title'  => __( 'Premise', 'genesis-toolbar-extras' ),
	'href'   => admin_url( 'admin.php?page=premise-main' ),
	'meta'   => array( 'target' => '', 'title' => __( 'Premise Landing Pages &amp; Membership Content', 'genesis-toolbar-extras' ) )
);
$menu_items['premiselanding'] = array(
	'parent' => $premise,
	'title'  => __( 'Landing Pages', 'genesis-toolbar-extras' ),
	'href'   => admin_url( 'edit.php?post_type=landing_page' ),
	'meta'   => array( 'target' => '', 'title' => __( 'Landing Pages', 'genesis-toolbar-extras' ) )
);
$menu_items['premiselanding-add'] = array(
	'parent' => $premiselanding,
	'title'  => __( 'Add new Landing Page', 'genesis-toolbar-extras' ),
	'href'   => admin_url( 'post-new.php?post_type=landing_page' ),
	'meta'   => array( 'target' => '', 'title' => __( 'Add new Landing Page', 'genesis-toolbar-extras' ) )
);


/** Display only for WP capability 'manage_options' */
if ( current_user_can( 'manage_options' ) ) {

	$menu_items['premisesettings'] = array(
		'parent' => $premise,
		'title'  => __( 'Main Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-main' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Main Settings', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisesettings-styles'] = array(
		'parent' => $premisesettings,
		'title'  => __( 'Style Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-styles' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Style Settings', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisesettings-addstyle'] = array(
		'parent' => $premisesettings,
		'title'  => __( 'Add new Style', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-style-settings' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Style', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisesettings-help'] = array(
		'parent' => $premisesettings,
		'title'  => __( 'Premise Help', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-help' ),
		'meta'   => array( 'title' => __( 'Premise Help', 'genesis-toolbar-extras' ) )
	);

}  // end-if cap check


/** Premise Membership Module */
if ( defined( 'PREMISE_MEMBER_DIR' ) && current_user_can( 'manage_options' ) ) {

	$menu_items['premisemember'] = array(
		'parent' => $mcgroup,
		'title'  => __( 'Premise Member Access', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-member' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Premise Member Access', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisemember-products'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Products', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=acp-products' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Products', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisemember-orders'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Orders', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=acp-orders' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Orders', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisemember-linkmanager'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Link Manager', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=member-access-links' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Link Manager', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisemember-reports'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Reports', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-reports' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Reports', 'genesis-toolbar-extras' ) )
	);
	$menu_items['premisemember-settings'] = array(
		'parent' => $premisemember,
		'title'  => __( 'Settings', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'admin.php?page=premise-member' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Settings', 'genesis-toolbar-extras' ) )
	);

}  // end-if premise member module
