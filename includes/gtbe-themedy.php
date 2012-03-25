<?php
/**
 * Display links to active Themedy Genesis Child Themes settings' pages
 * Only Themes by Themedy brand
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Theme Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/#!/deckerweb
 *
 * @since 1.0
 */

/**
 * Setting default values for some variables
 *
 * @since 1.0
 */
$themedy_child_name = 'default';
$themedy_child_forum = 'default';
$gtbe_is_themedy_slide = 'default';
$gtbe_is_themedy_product = 'default';
$gtbe_is_themedy_portfolio = 'default';
$gtbe_is_themedy_photo = 'default';


/**
 * "Theme Settings" String for all Child Themes
 *
 * @since 1.0
 *
 * @param $gtbe_themesettings
 */
$gtbe_themesettings = '&nbsp;' . __( 'Theme Settings', 'genesis-toolbar-extras' );


/**
 * Display link to active Themedy Child theme settings page (premium, by Themedy)
 *
 * @since 1.0
 *
 * @param $themedy_child_name
 * @param $themedy_child_forum
 * @param $gtbe_is_themedy_slide
 * @param $gtbe_is_themedy_product
 * @param $gtbe_is_themedy_portfolio
 * @param $gtbe_is_themedy_photo
 */
	/** Check for Themedy Child Theme name */
		// Themedy: Cinchpress (premium)
	if ( CHILD_THEME_NAME == 'Cinchpress' || get_current_theme() == 'Cinchpress Child Theme' ) {
		$themedy_child_name = 'Cinchpress' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/cinchpress';

		// Themedy: Clip Cart (premium)
	} elseif ( CHILD_THEME_NAME == 'Clip Cart' || get_current_theme() == 'Clip Cart Child Theme' ) {
		$themedy_child_name = 'Clip Cart' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/clip-cart';
		$gtbe_is_themedy_slide = 'themedy_slide_yes';
		$gtbe_is_themedy_product = 'themedy_product_yes';

		// Themedy: Feedpop (premium)
	} elseif ( CHILD_THEME_NAME == 'Feedpop' || get_current_theme() == 'Feedpop Child Theme' ) {
		$themedy_child_name = 'Feedpop' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/feedpop';

		// Themedy: Foxy News (premium)
	} elseif ( CHILD_THEME_NAME == 'Foxy News' || get_current_theme() == 'Foxy News Child Theme' ) {
		$themedy_child_name = 'Foxy News' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/foxynews';

		// Themedy: Fremedy (free)
	} elseif ( CHILD_THEME_NAME == 'Fremedy' || get_current_theme() == 'Fremedy Child Theme' ) {
		$themedy_child_name = 'Fremedy' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/fremedy';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';

		// Themedy: Line It Up (premium)
	} elseif ( CHILD_THEME_NAME == 'Line It Up' || get_current_theme() == 'Line It Up Child Theme' ) {
		$themedy_child_name = 'Line It Up' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/line-it-up';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';
		$gtbe_is_themedy_slide = 'themedy_slide_yes';

		// Themedy: MockFive (premium)
	} elseif ( CHILD_THEME_NAME == 'MockFive' || get_current_theme() == 'MockFive Child Theme' ) {
		$themedy_child_name = 'MockFive' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/mockfive';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';

		// Themedy: Reactiv (premium)
	} elseif ( CHILD_THEME_NAME == 'Reactiv' || get_current_theme() == 'Reactiv Child Theme' ) {
		$themedy_child_name = 'Reactiv' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/reactiv';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';

		// Themedy: Readyfolio (premium)
	} elseif ( CHILD_THEME_NAME == 'Readyfolio' || get_current_theme() == 'Readyfolio Child Theme' ) {
		$themedy_child_name = 'Readyfolio' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/readyfolio';

		// Themedy: Rough Print (premium)
	} elseif ( CHILD_THEME_NAME == 'Rough Print' || get_current_theme() == 'Rough Print Child Theme' ) {
		$themedy_child_name = 'Rough Print' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/rough-print';
		$gtbe_is_themedy_portfolio = 'themedy_portfolio_yes';

		// Themedy: Smooth Post (premium)
	} elseif ( CHILD_THEME_NAME == 'Smooth Post' || get_current_theme() == 'Smooth Post Child Theme' ) {
		$themedy_child_name = 'Smooth Post' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/smooth-post';

		// Themedy: Stage (premium)
	} elseif ( CHILD_THEME_NAME == 'Stage' || get_current_theme() == 'Stage Child Theme' ) {
		$themedy_child_name = 'Stage' . $gtbe_themesettings;
		$themedy_child_forum = 'http://themedy.com/forum/categories/stage';
		$gtbe_is_themedy_photo = 'themedy_photo_yes';
	}  // end-if Themedy Child name check


	/** "Theme Group" menu items */
	if ( current_user_can( 'edit_theme_options' ) ) {
		$menu_items['themedysettings'] = array(
			'parent' => $tgroup,
			'title'  => $themedy_child_name,
			'href'   => admin_url( 'themes.php?page=themedy' ),
			'meta'   => array( 'target' => '', 'title' => $themedy_child_name )
		);
	}  // end-if cap check

	/** Display Readme.txt Child Theme Info */
	if ( class_exists( 'Genesis_Admin_Readme' ) && file_exists( get_stylesheet_directory() . '/README.txt' ) ) {
		$menu_items['themedy-readme'] = array(
			'parent' => $themedysettings,
			'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'themes.php?page=genesis-readme' ),
			'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
		);
	}  // end-if readme check

	/** Child Theme Support Forum */
	$menu_items['themedy-support'] = array(
		'parent' => $themedysettings,
		'title'  => __( 'Support Forum', 'genesis-toolbar-extras' ),
		'href'   => $themedy_child_forum,
		'meta'   => array( 'title' => __( 'Support Forum for Child Theme', 'genesis-toolbar-extras' ) )
	);

	/** Check for custom background support */
	if ( current_theme_supports( 'custom-background' ) ) {
		$menu_items['themedy-background'] = array(
			'parent' => $themedysettings,
			'title'  => __( 'Custom Background', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'themes.php?page=custom-background' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Background', 'genesis-toolbar-extras' ) )
		);
	}  // end-if custom background

	/** Check for custom header support */
	if ( current_theme_supports( 'custom-header' ) ) {
		$menu_items['themedy-header'] = array(
			'parent' => $themedysettings,
			'title'  => __( 'Custom Header', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'themes.php?page=custom-header' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Custom Header', 'genesis-toolbar-extras' ) )
		);
	}  // end-if custom header


/** Portfolio CPT entries - only if available */
if ( ( $gtbe_is_themedy_portfolio == 'themedy_portfolio_yes' ) && current_user_can( 'edit_posts' ) ) {
	$gtbe_is_mcgroup = 'mcgroup_yes';
	// Entries at "Child Theme" section
	$menu_items['themedyportfolio'] = array(
		'parent' => $themedysettings,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyportfolio-add'] = array(
		'parent' => $themedyportfolio,
		'title'  => __( 'Add new Portfolio', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Portfolio', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyportfolio-categories'] = array(
		'parent' => $themedyportfolio,
		'title'  => __( 'Portfolio Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=portfolio-category&post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Portfolio Categories', 'genesis-toolbar-extras' ) )
	);
	// Entries at "Manage Content" section
	$menu_items['mcgthemedyportfolio'] = array(
		'parent' => $mcgroupstart,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Portfolio Items', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyportfolio-add'] = array(
		'parent' => $mcgthemedyportfolio,
		'title'  => __( 'Add new Portfolio', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Portfolio', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyportfolio-categories'] = array(
		'parent' => $mcgthemedyportfolio,
		'title'  => __( 'Portfolio Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=portfolio-category&post_type=portfolio' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Portfolio Categories', 'genesis-toolbar-extras' ) )
	);
}  // end-if portfolio section


/** Slide CPT entries - only if available */
if ( ( $gtbe_is_themedy_slide == 'themedy_slide_yes' ) && current_user_can( 'edit_posts' ) ) {
	$gtbe_is_mcgroup = 'mcgroup_yes';
	// Entries at "Child Theme" section
	$menu_items['themedyslide'] = array(
		'parent' => $themedysettings,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Slides', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Slides', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyportfolio-add'] = array(
		'parent' => $themedyslide,
		'title'  => __( 'Add new Slide', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Slide', 'genesis-toolbar-extras' ) )
	);
	// Entries at "Manage Content" section
	$menu_items['mcgthemedyslide'] = array(
		'parent' => $mcgroupstart,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Slides', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Slides', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyslide-add'] = array(
		'parent' => $mcgthemedyslide,
		'title'  => __( 'Add new Slide', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=slide' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Slide', 'genesis-toolbar-extras' ) )
	);
}  // end-if slide section


/** Photo CPT entries - only if available */
if ( ( $gtbe_is_themedy_photo == 'themedy_photo_yes' ) && current_user_can( 'edit_posts' ) ) {
	$gtbe_is_mcgroup = 'mcgroup_yes';
	// Entries at "Child Theme" section
	$menu_items['themedyphoto'] = array(
		'parent' => $themedysettings,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Photos', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Photos', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyphoto-add'] = array(
		'parent' => $themedyphoto,
		'title'  => __( 'Add new Photo', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Photo', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyphoto-galleries'] = array(
		'parent' => $themedyphoto,
		'title'  => __( 'Photo Galleries', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=galleries&post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Photo Galleries', 'genesis-toolbar-extras' ) )
	);
	// Entries at "Manage Content" section
	$menu_items['mcgthemedyphoto'] = array(
		'parent' => $mcgroupstart,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Photos', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Photos', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyphoto-add'] = array(
		'parent' => $mcgthemedyphoto,
		'title'  => __( 'Add new Photo', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Photo', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyphoto-galleries'] = array(
		'parent' => $mcgthemedyphoto,
		'title'  => __( 'Photo Galleries', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=galleries&post_type=photo' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Photo Galleries', 'genesis-toolbar-extras' ) )
	);
}  // end-if photo section


/** Product CPT entries - only if available */
if ( ( $gtbe_is_themedy_product == 'themedy_product_yes' ) && current_user_can( 'edit_posts' ) ) {
	$gtbe_is_mcgroup = 'mcgroup_yes';
	// Entries at "Child Theme" section
	$menu_items['themedyproduct'] = array(
		'parent' => $themedysettings,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Products', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Products', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyproduct-add'] = array(
		'parent' => $themedyproduct,
		'title'  => __( 'Add new Product', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Product', 'genesis-toolbar-extras' ) )
	);
	$menu_items['themedyproduct-categories'] = array(
		'parent' => $themedyproduct,
		'title'  => __( 'Product Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=product-category&post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Product Categories', 'genesis-toolbar-extras' ) )
	);
	// GCPTA Plugin
	if ( function_exists( 'gcpta_init' ) ) {
		$menu_items['themedyproduct-gcpta'] = array(
			'parent' => $themedyproduct,
			'title'  => __( 'Product Archives Settings', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit.php?post_type=products&page=gcpta-products' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Product Archives Settings', 'genesis-toolbar-extras' ) )
		);
	}  // end-if GCPTA check

	// Entries at "Manage Content" section
	$menu_items['mcgthemedyproduct'] = array(
		'parent' => $mcgroupstart,
		'title'  => CHILD_THEME_NAME . ' ' . __( 'Products', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit.php?post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => CHILD_THEME_NAME . ' ' . __( 'Products', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyproduct-add'] = array(
		'parent' => $mcgthemedyproduct,
		'title'  => __( 'Add new Product', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'post-new.php?post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Add new Product', 'genesis-toolbar-extras' ) )
	);
	$menu_items['mcgthemedyproduct-categories'] = array(
		'parent' => $mcgthemedyproduct,
		'title'  => __( 'Product Categories', 'genesis-toolbar-extras' ),
		'href'   => admin_url( 'edit-tags.php?taxonomy=product-category&post_type=products' ),
		'meta'   => array( 'target' => '', 'title' => __( 'Product Categories', 'genesis-toolbar-extras' ) )
	);
	// GCPTA Plugin
	if ( function_exists( 'gcpta_init' ) && current_user_can( 'manage_options' ) ) {
		$menu_items['mcgthemedyproduct-gcpta'] = array(
			'parent' => $mcgthemedyproduct,
			'title'  => __( 'Product Archives Settings', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'edit.php?post_type=products&page=gcpta-products' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Product Archives Settings', 'genesis-toolbar-extras' ) )
		);
	}  // end-if GCPTA check

}  // end-if product section


/** Entries at "Genesis Support" section */
$menu_items['genesissupport-themedy'] = array(
	'parent' => $tpsgroup,
	'title'  => __( 'Themedy Support Forum', 'genesis-toolbar-extras' ),
	'href'   => 'http://themedy.com/forum/',
	'meta'   => array( 'title' => __( 'Themedy Support Forum', 'genesis-toolbar-extras' ) )
);
$menu_items['genesissupport-themedyprofile'] = array(
	'parent' => $tpsgroup,
	'title'  => __( 'Themedy User Profile', 'genesis-toolbar-extras' ),
	'href'   => 'http://themedy.com/forum/profile',
	'meta'   => array( 'title' => __( 'Themedy User Profile', 'genesis-toolbar-extras' ) )
);
