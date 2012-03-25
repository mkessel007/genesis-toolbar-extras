<?php 
/**
 * Main plugin file. This plugin adds useful admin settings links and massive resources for Genesis Framework and its ecosystem to the WordPress Toolbar / Admin Bar.
 *
 * @package   Genesis Toolbar Extras
 * @author    David Decker
 * @link      http://twitter.com/#!/deckerweb
 * @copyright Copyright 2012, David Decker - DECKERWEB
 *
 * @credits   Inspired and based on the plugin "WooThemes Admin Bar Addition" by Remkus de Vries @defries.
 * @link      http://remkusdevries.com/
 * @link      http://twitter.com/#!/defries
 *
 * Plugin Name: Genesis Toolbar Extras
 * Plugin URI: http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * Description: This plugin adds useful admin settings links and massive resources for Genesis Framework and its ecosystem to the WordPress Toolbar / Admin Bar.
 * Version: 1.0
 * Author: David Decker - DECKERWEB
 * Author URI: http://deckerweb.de/
 * License: GPLv2
 * Text Domain: genesis-toolbar-extras
 * Domain Path: /languages/
 */

/**
 * Setting constants
 *
 * @since 1.0
 */
/** Plugin directory */
define( 'GTBE_PLUGIN_DIR', dirname( __FILE__ ) );

/** Plugin base directory */
define( 'GTBE_PLUGIN_BASEDIR', dirname( plugin_basename( __FILE__ ) ) );

/** Various link/content related helper constants */
define( 'GTBE_GBEGINNER_GDOCS', 'http://docs.google.com/viewer?url=http%3A%2F%2Fwww.studiopress.com%2Fdownload%2Fgenesis-for-beginners.pdf' );
define( 'GTBE_VTUTORIALS_YTBE', 'http://www.youtube.com/results?search_query=genesis+framework' );
define( 'GTBE_TOOLTIP', 'Translators: For the tooltip' );


add_action( 'init', 'ddw_gtbe_init' );
/**
 * Load the text domain for translation of the plugin
 * 
 * @since 1.0
 */
function ddw_gtbe_init() {

	/** First look in WordPress' "languages" folder = custom & update-secure! */
	load_plugin_textdomain( 'genesis-toolbar-extras', false, GTBE_PLUGIN_BASEDIR . '/../../languages/genesis-toolbar-extras/' );

	/** Then look in plugin's "languages" folder = default */
	load_plugin_textdomain( 'genesis-toolbar-extras', false, GTBE_PLUGIN_BASEDIR . '/languages/' );
}


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

	if ( !current_user_can( 'install_plugins' ) )
		return $gtbe_links;

	if ( $gtbe_file == GTBE_PLUGIN_BASEDIR . '/genesis-toolbar-extras.php' ) {
		$gtbe_links[] = '<a href="http://wordpress.org/extend/plugins/genesis-toolbar-extras/faq/" target="_new" title="' . __( 'FAQ', 'genesis-toolbar-extras' ) . '">' . __( 'FAQ', 'genesis-toolbar-extras' ) . '</a>';
		$gtbe_links[] = '<a href="http://wordpress.org/tags/genesis-toolbar-extras?forum_id=10" target="_new" title="' . _x( 'Support', 'Translators: Plugin support links', 'genesis-toolbar-extras' ) . '">' . _x( 'Support', 'Translators: Plugin support links', 'genesis-toolbar-extras' ) . '</a>';
		$gtbe_links[] = '<a href="' . __( 'http://genesisthemes.de/en/donate/', 'genesis-toolbar-extras' ) . '" target="_new" title="' . __( 'Donate', 'genesis-toolbar-extras' ) . '">' . __( 'Donate', 'genesis-toolbar-extras' ) . '</a>';
	}

	return $gtbe_links;
}


add_action( 'admin_bar_menu', 'ddw_gtbe_admin_bar_menu', 98 );
/**
 * Add new menu items to the WP Toolbar / Admin Bar.
 * 
 * @since 1.0
 *
 * @global mixed $wp_admin_bar, $locale, $gtbe_is_mcgroup
 * @param $gtbe_user
 */
function ddw_gtbe_admin_bar_menu() {

	global $wp_admin_bar, $locale, $gtbe_is_mcgroup;

	/** Get current user - we need this for checking Genesis admin menu display options */
	$gtbe_user = wp_get_current_user();

	/**
	 * Allows for filtering the general user capability to see main & sub-level items
	 *
	 * Default capability: 'edit_posts' (needed for the "manage content" stuff...)
	 *
	 * @since 1.0
	 */
	$gtbe_filter_capability = apply_filters( 'gtbe_filter_capability_all', 'edit_posts' );

	/**
	 * Required WordPress cabability to display new admin bar entry
	 * Only showing items if toolbar / admin bar is activated and user is logged in!
	 *
	 * @since 1.0
	 */
	if ( !is_user_logged_in() || 
		!is_admin_bar_showing() || 
		!current_user_can( $gtbe_filter_capability ) ||  // allows for custom filtering the required capability
		!get_the_author_meta( 'genesis_admin_menu', $gtbe_user->ID ) ||  // users who can't see left G icon won't see toolbar items!
		defined( 'GTBE_DISPLAY' )  // allows for custom disabling
	)
		return;

	/** Set unique prefix */
	$prefix = 'ddw-genesis-';
	
	/** Create parent menu item references */
	$genesisbar = $prefix . 'admin-bar';				// root level
		$genesissupport = $prefix . 'genesissupport';			// sub level: genesis support
		$genesisguide = $prefix . 'genesisguide';			// sub level: genesis user guide
		$genesistutorials = $prefix . 'genesistutorials';			// third level: genesis tutorials
		$genesissites = $prefix . 'genesissites';			// sub level: genesis sites
			$genesisblog = $prefix . 'genesisblog';				// third level: genesis blog
			$genesisresources = $prefix . 'genesisresources';		// third level: genesis resources
			$genesisaffiliates = $prefix . 'genesisaffiliates';		// third level: genesis affiliates
		$genesissettings = $prefix . 'genesissettings';			// sub level: genesis settings
			$genesiscustom = $prefix . 'genesiscustom';			// third level: genesis custom file editor
			$genesisimportexport = $prefix . 'genesisimportexport';		// third level: genesis export/import
		$extgroup = $prefix . 'extgroup';				// sub level: extend group ("hook" place)
			$tgroup = $prefix . 'tgroup';				// sub level: theme group ("hook" place)
				$spgenesischild = $prefix . 'spgenesischild';		// third level theme: sp genesis child themes
				$spmarket = $prefix . 'spmarket';			// third level theme: sp marketplace child themes
				$themedysettings = $prefix . 'themedysettings';		// third level theme: themedy child themes
					$themedyportfolio = $prefix . 'themedyportfolio';	// third level theme: themedy portfolio cpt
					$themedyslide = $prefix . 'themedyslide';	// third level theme: themedy slide cpt
					$themedyphoto = $prefix . 'themedyphoto';	// third level theme: themedy photo cpt
					$themedyproduct = $prefix . 'themedyproduct';	// third level theme: themedy product cpt
				$tpchild = $prefix . 'tpchild';				// third level theme: third-party child themes
			$pgroup = $prefix . 'pgroup';				// sub level: plugins group ("hook" place)
				$extensions = $prefix . 'extensions';		// sub level: extensions
			$mcgroup = $prefix . 'mcgroup';				// sub level: manage content group ("hook" place)
				$mcgroupstart = $prefix . 'mcgroupstart';		// third level: mc group start
					$mcgthemedyportfolio = $prefix . 'mcgthemedyportfolio';	// third level theme: themedy portfolio cpt
					$mcgthemedyslide = $prefix . 'mcgthemedyslide';	// third level theme: themedy slide cpt
					$mcgthemedyphoto = $prefix . 'mcgthemedyphoto';	// third level theme: themedy photo cpt
					$mcgthemedyproduct = $prefix . 'mcgthemedyproduct';	// third level theme: themedy product cpt
					$mcginspyr = $prefix . 'mcginspyr';		// third level theme: (in)spyr
					$mcgspapl = $prefix . 'mcgspapl';		// third level plugin: agentpress listings
					$mcggmp = $prefix . 'mcggmp';			// third level plugin: genesis media project
					$mcggppt = $prefix . 'mcggppt';			// third level plugin: genesis press post type
					$mcggpbox = $prefix . 'mcggpbox';		// third level plugin: genesis promotion box
					$mcgspsurls = $prefix . 'mcgspsurls';		// third level plugin: simple urls
				$premise = $prefix . 'premise';				// third level: premise
					$premiselanding = $prefix . 'premiselanding';	// third level: premise landing pages
					$premisesettings = $prefix . 'premisesettings';	// third level: premise settings
				$premisemember = $prefix . 'premisemember';		// third level: premise member access
		$genesisgroup = $prefix . 'genesisgroup';			// sub level: genesis group (resources)
			$tpsgroup = $prefix . 'tpsgroup';				// third level: tps group (third-party support)
			$languagesde = $prefix . 'languagesde';				// third level: german language packs
			$translate = $prefix . 'translate';				// third level: genesis translations


	/** Make the "Genesis" name filterable within menu items */
	$gtbe_genesis_name = apply_filters( 'gtbe_filter_genesis_name', __( 'Genesis', 'genesis-toolbar-extras' ) );

	/** Make the "Genesis" name's tooltip filterable within menu items */
	$gtbe_genesis_name_tooltip = apply_filters( 'gtbe_filter_genesis_name_tooltip', _x( 'Genesis', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) );

	/** Display these items also when Genesis Framework is not installed */
	if ( !defined( 'GTBE_RESOURCES_DISPLAY' ) ) {
		$genesisgroup_menu_items = array(

			// Support menu items
			'genesissupport' => array(
				'parent' => $genesisgroup,
				'title'  => $gtbe_genesis_name . ' ' . _x( 'Support', 'Translators: Genesis support forums', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/support/',
				'meta'   => array( 'title' => $gtbe_genesis_name_tooltip . ' ' . _x( 'Support - official StudioPress Support Forum for Members', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
			'genesissupportsearch' => array(
				'parent' => $genesissupport,
				'title'  => __( 'Search Forum', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/support/search.php',
				'meta'   => array( 'title' => __( 'Search Forum', 'genesis-toolbar-extras' ) )
			),
			'genesissupportsubscribed' => array(
				'parent' => $genesissupport,
				'title'  => __( 'My Subscribed Topics', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/support/subscription.php',
				'meta'   => array( 'title' => __( 'My Subscribed Topics', 'genesis-toolbar-extras' ) )
			),
			'genesissupportnew' => array(
				'parent' => $genesissupport,
				'title'  => __( 'New Topics since last visit', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/support/search.php?do=getnew',
				'meta'   => array( 'title' => __( 'New Topics since last visit', 'genesis-toolbar-extras' ) )
			),
			'genesissupportnewtoday' => array(
				'parent' => $genesissupport,
				'title'  => __( 'New Topics Today', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/support/search.php?do=getdaily',
				'meta'   => array( 'title' => __( 'New Topics Today', 'genesis-toolbar-extras' ) )
			),
			'genesissupportuser' => array(
				'parent' => $genesissupport,
				'title'  => __( 'User Account at Support Site', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/support/usercp.php',
				'meta'   => array( 'title' => __( 'User Account at Support Site', 'genesis-toolbar-extras' ) )
			),

			// User Guide menu items
			'genesisguide' => array(
				'parent' => $genesisgroup,
				'title'  => __( 'Ultimate User Guide', 'genesis-toolbar-extras' ),
				'href'   => GTBE_GBEGINNER_GDOCS,
				'meta'   => array( 'title' => _x( 'Ultimate User Guide (PDF/ EBook)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
			'genesisguide-explained' => array(
				'parent' => $genesisguide,
				'title'  => $gtbe_genesis_name . ' ' . __( 'Explained Series', 'genesis-toolbar-extras' ),
				'href'   => 'http://designsbynickthegeek.com/tag/genesis-explained',
				'meta'   => array( 'title' => $gtbe_genesis_name . ' ' . _x( 'Explained Series by Nick Croft (Community Resource)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
			'genesisguide-hooks' => array(
				'parent' => $genesisguide,
				'title'  => __( 'Hook Reference', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/tutorials/hook-reference',
				'meta'   => array( 'title' => __( 'Hook Reference', 'genesis-toolbar-extras' ) )
			),
			'genesisguide-visualhooks' => array(
				'parent' => $genesisguide,
				'title'  => __( 'Visual Hook Guide', 'genesis-toolbar-extras' ),
				'href'   => 'http://genesistutorials.com/visual-hook-guide',
				'meta'   => array( 'title' => __( 'Visual Hook Guide', 'genesis-toolbar-extras' ) )
			),
			'genesisguide-filter' => array(
				'parent' => $genesisguide,
				'title'  => __( 'Filter Reference', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/tutorials/filter-reference',
				'meta'   => array( 'title' => __( 'Filter Reference', 'genesis-toolbar-extras' ) )
			),
			'genesisguide-shortcodes' => array(
				'parent' => $genesisguide,
				'title'  => __( 'Shortcode Reference', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/tutorials/shortcode-reference',
				'meta'   => array( 'title' => __( 'Shortcode Reference', 'genesis-toolbar-extras' ) )
			),
			'genesisguide-visualmarkup' => array(
				'parent' => $genesisguide,
				'title'  => __( 'Visual Markup Guide', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/tutorials/visual-markup-guide',
				'meta'   => array( 'title' => __( 'Visual Markup Guide', 'genesis-toolbar-extras' ) )
			),

			// Tutorials menu items
			'genesistutorials' => array(
				'parent' => $genesisgroup,
				'title'  => __( 'Tutorials &amp; Snippets', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/tutorials',
				'meta'   => array( 'title' => __( 'Tutorials &amp; Snippets', 'genesis-toolbar-extras' ) )
			),
			'genesistutorials-bgardner' => array(
				'parent' => $genesistutorials,
				'title'  => __( 'Tutorials by Brian Gardner', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.briangardner.com/tutorials/',
				'meta'   => array( 'title' => _x( 'Genesis Tutorials by Brian Gardner', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
			'genesistutorials-bgardner-snippets' => array(
				'parent' => $genesistutorials,
				'title'  => __( 'Snippets by Brian Gardner', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.briangardner.com/code/',
				'meta'   => array( 'title' => _x( 'Genesis Code Snippets by Brian Gardner', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
			'genesistutorials-berickson' => array(
				'parent' => $genesistutorials,
				'title'  => __( 'Tutorials by Bill Erickson', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.billerickson.net/contributions/tutorials/',
				'meta'   => array( 'title' => _x( 'Genesis &amp; WordPress Tutorials by Bill Erickson', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
			'genesistutorials-berickson-snippets' => array(
				'parent' => $genesistutorials,
				'title'  => __( 'Snippets by Bill Erickson', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.billerickson.net/code-tag/genesis-code/',
				'meta'   => array( 'title' => _x( 'Genesis Code Snippets by Bill Erickson', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
			'genesistutorials-wpsmith' => array(
				'parent' => $genesistutorials,
				'title'  => __( 'Tutorials by Travis Smith', 'genesis-toolbar-extras' ),
				'href'   => 'http://wpsmith.net/category/genesis/',
				'meta'   => array( 'title' => _x( 'Genesis Tutorials by Travis Smith', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
			'genesistutorials-wpsmith-gloop' => array(
				'parent' => $genesistutorials,
				'title'  => __( 'Grid Loop by Travis Smith', 'genesis-toolbar-extras' ),
				'href'   => 'http://wpsmith.net/category/genesis-grid-loop/',
				'meta'   => array( 'title' => _x( 'Genesis Grid Loop Tutorials by Travis Smith', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
			'genesistutorials-garyj' => array(
				'parent' => $genesistutorials,
				'title'  => __( 'Tuturials by Gary Jones', 'genesis-toolbar-extras' ),
				'href'   => 'http://code.garyjones.co.uk/category/genesis/',
				'meta'   => array( 'title' => _x( 'Genesis Tutorials by Gary Jones', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
			'genesistutorials-nicktg' => array(
				'parent' => $genesistutorials,
				'title'  => __( 'Tuturials by Nick Croft', 'genesis-toolbar-extras' ),
				'href'   => 'http://designsbynickthegeek.com/category/tutorials',
				'meta'   => array( 'title' => _x( 'Genesis Tutorials by Nick Croft', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
			'genesistutorials-videos' => array(
				'parent' => $genesistutorials,
				'title'  => __( 'Video Tutorials', 'genesis-toolbar-extras' ),
				'href'   => GTBE_VTUTORIALS_YTBE,
				'meta'   => array( 'title' => _x( 'Community Video Tutorials from the Community', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),

			// Genesis HQ menu items
			'genesissites' => array(
				'parent' => $genesisgroup,
				'title'  => $gtbe_genesis_name . ' ' . __( 'HQ', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/',
				'meta'   => array( 'title' => $gtbe_genesis_name_tooltip . ' ' . __( 'HQ', 'genesis-toolbar-extras' ) )
			),
			'genesisblog' => array(
				'parent' => $genesissites,
				'title'  => __( 'Official Blog', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/blog/',
				'meta'   => array( 'title' => __( 'Official Blog (StudioPress.com)', 'genesis-toolbar-extras' ) )
			),
			'genesisblog-bgardner' => array(
				'parent' => $genesisblog,
				'title'  => __( 'Brian Gardner Blog', 'genesis-toolbar-extras' ),
				'href'   => 'http://briangardner.com/',
				'meta'   => array( 'title' => __( 'Brian Gardner Blog (The Genesis Leader - briangardner.com)', 'genesis-toolbar-extras' ) )
			),
			'genesisblog-copyblogger' => array(
				'parent' => $genesisblog,
				'title'  => __( 'CopyBlogger Blog', 'genesis-toolbar-extras' ),
				'href'   => 'http://copyblogger.com/blog/',
				'meta'   => array( 'title' => __( 'CopyBlogger Blog (Genesis Backing Company - copyblogger.com)', 'genesis-toolbar-extras' ) )
			),
			'genesisshowcase' => array(
				'parent' => $genesissites,
				'title'  => __( 'Showcase Gallery', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/showcase/',
				'meta'   => array( 'title' => __( 'Showcase Gallery', 'genesis-toolbar-extras' ) )
			),
			'genesisresources' => array(
				'parent' => $genesissites,
				'title'  => __( 'Resources', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/resources/',
				'meta'   => array( 'title' => __( 'Resources', 'genesis-toolbar-extras' ) )
			),
			'genesisresources-graphics' => array(
				'parent' => $genesisresources,
				'title'  => __( 'Free Web Graphics', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/graphics',
				'meta'   => array( 'title' => __( 'Free Web Graphics', 'genesis-toolbar-extras' ) )
			),
			'genesisresources-palettes' => array(
				'parent' => $genesisresources,
				'title'  => __( 'Color Palettes', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/palettes',
				'meta'   => array( 'title' => __( 'Color Palettes', 'genesis-toolbar-extras' ) )
			),
			'genesisresources-responsivetest' => array(
				'parent' => $genesisresources,
				'title'  => __( 'Mobile Responsive Testing', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/responsive/?' . get_home_url(),
				'meta'   => array( 'title' => __( 'Mobile Responsive Design Testing', 'genesis-toolbar-extras' ) )
			),
			'genesisresources-mediaqueries' => array(
				'parent' => $genesisresources,
				'title'  => __( 'Media Queries Tester', 'genesis-toolbar-extras' ),
				'href'   => 'http://bueltge.de/test/media-query-tester.php?testurl=' . get_home_url(),
				'meta'   => array( 'title' => __( 'Media Queries Tester', 'genesis-toolbar-extras' ) )
			),
			'genesisaffiliates' => array(
				'parent' => $genesissites,
				'title'  => __( 'Affiliate Program', 'genesis-toolbar-extras' ),
				'href'   => 'http://www.studiopress.com/affiliates/',
				'meta'   => array( 'title' => __( 'Affiliate Program', 'genesis-toolbar-extras' ) )
			),
			'genesisaffiliateslogin' => array(
				'parent' => $genesisaffiliates,
				'title'  => __( 'Affiliate Login', 'genesis-toolbar-extras' ),
				'href'   => 'https://shareasale.com/a-login.cfm',
				'meta'   => array( 'title' => __( 'Affiliate Login', 'genesis-toolbar-extras' ) )
			),
			'genesispluginswporg' => array(
				'parent' => $genesissites,
				'title'  => __( 'More free plugins/extensions at WP.org', 'genesis-toolbar-extras' ),
				'href'   => 'http://wordpress.org/extend/plugins/tags/genesis',
				'meta'   => array( 'title' => __( 'More free plugins/extensions at WP.org', 'genesis-toolbar-extras' ) )
			),
			'genesisffnews' => array(
				'parent' => $genesissites,
				'title'  => $gtbe_genesis_name . ' ' . __( 'News Planet', 'genesis-toolbar-extras' ),
				'href'   => 'http://friendfeed.com/genesisnews',
				'meta'   => array( 'title' => $gtbe_genesis_name_tooltip . ' ' . __( 'News Planet (official and community news via FriendFeed service)', 'genesis-toolbar-extras' ) )
			),

			// Genesis Finder menu item
			'genesisfinder' => array(
				'parent' => $genesisgroup,
				'title'  => __( 'GenesisFinder (Search)', 'genesis-toolbar-extras' ),
				'href'   => 'http://genesisfinder.com/',
				'meta'   => array( 'title' => _x( 'GenesisFinder.com - Genesis Search Engine', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			),
		);

	}  // end-if constant check for displaying resources


	/** Display language specific links only for these locales: de_DE, de_AT, de_CH, de_LU */
	if ( !defined( 'GTBE_DE_DISPLAY' ) && ( get_locale() == 'de_DE' || get_locale() == 'de_AT' || get_locale() == 'de_CH' || get_locale() == 'de_LU' ) ) {
		// German Genesis Framework language packs
		$genesisgroup_menu_items['languagesde'] = array(
			'parent' => $genesisgroup,
			'title'  => __( 'German language files', 'genesis-toolbar-extras' ),
			'href'   => 'http://deckerweb.de/material/sprachdateien/genesis-framework/',
			'meta'   => array( 'title' => _x( 'German language files for Genesis Framework, Child Themes and more extensions', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);
		// German Genesis Child Themes language packs
		$genesisgroup_menu_items['languagesde-childthemes'] = array(
			'parent' => $languagesde,
			'title'  => __( 'For Child Themes', 'genesis-toolbar-extras' ),
			'href'   => 'http://deckerweb.de/material/sprachdateien/genesis-child-themes/',
			'meta'   => array( 'title' => _x( 'For Child Themes', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);
		// German Genesis Plugins language packs
		$genesisgroup_menu_items['languagesde-plugins'] = array(
			'parent' => $languagesde,
			'title'  => __( 'For Plugins', 'genesis-toolbar-extras' ),
			'href'   => 'http://deckerweb.de/material/sprachdateien/genesis-plugins/',
			'meta'   => array( 'title' => _x( 'For Plugins', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);
	}  // end-if German locales


	/** Translate Genesis section - only display for non-English locales */
	if ( !defined( 'GTBE_TRANSLATIONS_DISPLAY' ) && ( empty( $locale ) || !( get_locale() == 'en_US' || get_locale() == 'en_GB' || get_locale() == 'en_NZ' || get_locale() == 'en' ) ) ) {
		// Translate Genesis section
		$genesisgroup_menu_items['translate'] = array(
			'parent' => $genesisgroup,
			'title'  => sprintf( __( 'Help Translate %s', 'genesis-toolbar-extras' ), $gtbe_genesis_name ),
			'href'   => 'http://translate.studiopress.com/projects',
			'meta'   => array( 'title' => sprintf( _x( '%s Translation Project', 'Translators: For the tooltip', 'genesis-toolbar-extras' ), $gtbe_genesis_name ) )
		);
		$genesisgroup_menu_items['translate-register'] = array(
			'parent' => $translate,
			'title'  => __( 'Register to Translate', 'genesis-toolbar-extras' ),
			'href'   => 'http://translate.studiopress.com/home/',
			'meta'   => array( 'title' => sprintf( _x( 'Register to Translate %s', 'Translators: For the tooltip', 'genesis-toolbar-extras' ), $gtbe_genesis_name ) )
		);
		// Translations Forum
		$genesisgroup_menu_items['translate-forum'] = array(
			'parent' => $translate,
			'title'  => __( 'Translations Forum', 'genesis-toolbar-extras' ),
			'href'   => 'http://www.studiopress.com/support/forumdisplay.php?f=168',
			'meta'   => array( 'title' => sprintf( _x( 'Translations Forum (%s Support Forum)', 'Translators: For the tooltip', 'genesis-toolbar-extras' ), $gtbe_genesis_name ) )
		);
	}  // end-if translate genesis


	/** Show these items only if Genesis Framework is actually installed */
	if ( defined( 'GENESIS_SETTINGS_FIELD' ) && current_user_can( 'edit_theme_options' ) ) {

		/** Genesis Theme Settings section */
		if ( current_theme_supports( 'genesis-admin-menu' ) && get_the_author_meta( 'genesis_admin_menu', $gtbe_user->ID ) ) {
			$menu_items['genesissettings'] = array(
				'parent' => $genesisbar,
				'title'  => __( 'Theme Settings', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=genesis' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Theme Settings', 'genesis-toolbar-extras' ) )
			);
			$menu_items['genesiswidgets'] = array(
				'parent' => $genesissettings,
				'title'  => $gtbe_genesis_name . ' ' . __( 'Widgets', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'widgets.php' ),
				'meta'   => array( 'target' => '', 'title' => $gtbe_genesis_name_tooltip . ' ' . __( 'Widgets', 'genesis-toolbar-extras' ) )
			);
			$menu_items['genesismenus'] = array(
				'parent' => $genesissettings,
				'title'  => $gtbe_genesis_name . ' ' . __( 'Menus', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'nav-menus.php' ),
				'meta'   => array( 'target' => '', 'title' => $gtbe_genesis_name_tooltip . ' ' . __( 'Menus', 'genesis-toolbar-extras' ) )
			);

			/** Check for custom background support */
			if ( current_theme_supports( 'custom-background' ) ) {
				$menu_items['theme-background'] = array(
					'parent' => $genesissettings,
					'title'  => __( 'Custom Background', 'genesis-toolbar-extras' ),
					'href'   => admin_url( 'themes.php?page=custom-background' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Custom Background', 'genesis-toolbar-extras' ) )
				);
			}  // end-if custom background

			/** Header Image section - Check for custom header support */
			if ( current_theme_supports( 'custom-header' ) ) {
				$menu_items['theme-header'] = array(
					'parent' => $genesissettings,
					'title'  => __( 'Custom Header', 'genesis-toolbar-extras' ),
					'href'   => admin_url( 'themes.php?page=custom-header' ),
					'meta'   => array( 'target' => '', 'title' => __( 'Custom Header', 'genesis-toolbar-extras' ) )
				);
			}  // end-if custom header

		}  // end-if admin/theme menu check

		/** Genesis SEO Options section */
		if ( current_theme_supports( 'genesis-seo-settings-menu' ) && get_the_author_meta( 'genesis_seo_settings_menu', $gtbe_user->ID ) ) {
			$menu_items['genesisseo'] = array(
				'parent' => $genesisbar,
				'title'  => __( 'SEO Settings', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=seo-settings' ),
				'meta'   => array( 'target' => '', 'title' => __( 'SEO Settings', 'genesis-toolbar-extras' ) )
			);
		}  // end-if seo menu check

		/** Import & Export section */
		if ( current_theme_supports( 'genesis-import-export-menu' ) && get_the_author_meta( 'genesis_import_export_menu', $gtbe_user->ID ) ) {
			$menu_items['genesisimportexport'] = array(
				'parent' => $genesisbar,
				'title'  => __( 'Import &amp; Export', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=genesis-import-export' ),
				'meta'   => array( 'target' => '', 'title' => _x( 'Import &amp; Export', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
		}  // end-if import/export menu check

		/**
		 * Display last main item in the menu for active extensions/plugins
		 * ATTENTION: This is where plugins/extensions hook in on the sub-level hierarchy
		 *
		 * @since 1.0
		 */
		if ( !defined( 'GTBE_EXTENSIONS_DISPLAY' ) && 
			( current_theme_supports( 'genesis-admin-menu' ) && get_the_author_meta( 'genesis_admin_menu', $gtbe_user->ID ) ) 
		) {
			$menu_items['extensions'] = array(
				'parent' => $pgroup,
				'title'  => __( 'Active Extensions', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'plugins.php' ),
				'meta'   => array( 'target' => '', 'title' => sprintf( _x( 'Active %s Extensions Plugins', 'Translators: For the tooltip', 'genesis-toolbar-extras' ), $gtbe_genesis_name ) )
			);
		}  // end-if constant check for displaying extensions

	} else {

		$menu_items = $genesisgroup_menu_items;

	}  // end-if Genesis conditional


	/**
	 * Display links to active StudioPress Genesis Child Themes settings' pages
	 *
	 * @since 1.0
	 */
		/** Include plugin file with theme support links */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-studiopress.php' );


	/**
	 * Display links to active Themedy Genesis Child Themes settings' pages
	 *
	 * @since 1.0
	 */
	if ( function_exists( 'themedy_load_styles' ) ) {
		/** Include plugin file with theme support links */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-themedy.php' );
	}  // end-if Themedy Genesis child theme check


	/**
	 * Display links to active (non-StudioPress/Themedy) Genesis Child Themes settings' pages
	 *
	 * @since 1.0
	 */
		/** Include plugin file with theme support links */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-themes.php' );


	/**
	 * Display links to active Genesis plugins/extensions settings' pages
	 *
	 * @since 1.0
	 */
		/** Include plugin file with plugin support links */
		require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-plugins.php' );


	/** Allow menu items to be filtered, but pass in parent menu item IDs */
	$menu_items = (array) apply_filters( 'ddw_gtbe_menu_items', $menu_items, $genesisgroup_menu_items, $prefix, $genesisbar, 
						$genesissupport, $genesisguide, $genesistutorials, $genesissites, $genesisaffiliates, 
							$genesisblog, $genesisresources, $genesissettings, $genesiscustom, 
							$genesisimportexport, 
						$extensions, $extgroup, 
						$spgenesischild, $spmarket, $themedysettings, $themedyportfolio, $themedyslide, 
							$themedyphoto, $themedyproduct, $tpchild, $mcgroup, $mcgroupstart, 
							$mcgthemedyportfolio, $mcgthemedyslide, $mcgthemedyphoto, $mcgthemedyproduct, 
							$mcginspyr, $mcgspapl, $mcggmp, $mcggppt, $mcggpbox, $mcgspsurls, $premise, 
							$premiselanding, $premisesettings, $premisemember, 
							$tgroup, $pgroup, 
						$genesisgroup, $tpsgroup, $languagesde );


	/**
	 * Add the Genesis top-level menu item
	 *
	 * @since 1.0
	 *
	 * @param $gtbe_main_item_title
	 * @param $gtbe_main_item_title_tooltip
	 */
		/** Filter the main item name */
		$gtbe_main_item_title = apply_filters( 'gtbe_filter_main_item', __( 'Genesis', 'genesis-toolbar-extras' ) );

		/** Filter the main item name's tooltip */
		$gtbe_main_item_title_tooltip = apply_filters( 'gtbe_filter_main_item_tooltip', _x( 'Genesis Framework', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) );

		/** Filter the main item icon's class/display */
		$gtbe_main_item_icon_display = apply_filters( 'gtbe_filter_main_item_icon_display', 'icon-genesistbe' );

		/** Add the main item */
		$wp_admin_bar->add_menu( array(
			'id'    => $genesisbar,
			'title' => $gtbe_main_item_title,
			'href'  => admin_url( 'admin.php?page=genesis' ),
			'meta'  => array( 'class' => $gtbe_main_item_icon_display, 'title' => $gtbe_main_item_title_tooltip )
		) );


	/** Loop through the menu items */
	foreach ( $menu_items as $id => $menu_item ) {
		
		// Add in the item ID
		$menu_item['id'] = $prefix . $id;

		// Add meta target to each item where it's not already set, so links open in new window/tab
		if ( ! isset( $menu_item['meta']['target'] ) )		
			$menu_item['meta']['target'] = '_blank';

		// Add class to links that open up in a new window/tab
		if ( '_blank' === $menu_item['meta']['target'] ) {
			if ( ! isset( $menu_item['meta']['class'] ) )
				$menu_item['meta']['class'] = '';
			$menu_item['meta']['class'] .= $prefix . 'gtbe-new-tab';
		}

		// Add item
		$wp_admin_bar->add_menu( $menu_item );

	}  // end foreach menu items


	/** Extend Group: Main Entry */
	$wp_admin_bar->add_group( array(
		'parent' => $genesisbar,
		'id'     => $extgroup,
	) );

		/** Theme Group: Main Entry */
		if ( !defined( 'GTBE_CHILD_THEME_DISPLAY' ) ) {
			$wp_admin_bar->add_group( array(
				'parent' => $extgroup,
				'id'     => $tgroup,
			) );
		}  // end-if constant check for displaying theme group

		/** Plugin Group: Main Entry */
		$wp_admin_bar->add_group( array(
			'parent' => $extgroup,
			'id'     => $pgroup,
		) );

		/** Manage Content Group: Main Entry */
		if ( !defined( 'GTBE_MANAGE_CONTENT_DISPLAY' ) ) {
			$wp_admin_bar->add_group( array(
				'parent' => $extgroup,
				'id'     => $mcgroup,
			) );
		}  // end-if constant check for displaying manage content group


	/** Genesis Group: Main Entry */
	$wp_admin_bar->add_group( array(
		'parent' => $genesisbar,
		'id'     => $genesisgroup,
		'meta'   => array( 'class' => 'ab-sub-secondary' )
	) );


	/** Genesis Group: Loop through the group menu items */
	foreach ( $genesisgroup_menu_items as $id => $genesisgroup_menu_item ) {
		
		// Genesis Group: Add in the item ID
		$genesisgroup_menu_item['id'] = $prefix . $id;

		// Genesis Group: Add meta target to each item where it's not already set, so links open in new window/tab
		if ( ! isset( $genesisgroup_menu_item['meta']['target'] ) )		
			$genesisgroup_menu_item['meta']['target'] = '_blank';

		// Genesis Group: Add class to links that open up in a new window/tab
		if ( '_blank' === $genesisgroup_menu_item['meta']['target'] ) {
			if ( ! isset( $genesisgroup_menu_item['meta']['class'] ) )
				$genesisgroup_menu_item['meta']['class'] = '';
			$genesisgroup_menu_item['meta']['class'] .= $prefix . 'gtbe-new-tab';
		}

		// Genesis Group: Add item
		$wp_admin_bar->add_menu( $genesisgroup_menu_item );

	}  // end foreach Genesis Group


	/** TPS (Third-Party-Support) Group: Sub-Level Entry (under "Genesis Support") */
	$wp_admin_bar->add_group( array(
		'parent' => $genesissupport,
		'id'     => $tpsgroup,
	) );

}  // end of main function ddw_gtbe_admin_bar_menu


add_action( 'wp_head', 'ddw_gtbe_admin_style' );
add_action( 'admin_head', 'ddw_gtbe_admin_style' );
/**
 * Add the styles for new WP Toolbar / Admin Bar entry
 * 
 * @since 1.0
 *
 * @param $gtbe_main_icon
 */
function ddw_gtbe_admin_style() {

	/** No styles if admin bar is disabled or user is not logged in */
	if ( !is_admin_bar_showing() || !is_user_logged_in() )
		return;

	/** Add CSS styles to wp_head/admin_head */
	$gtbe_main_icon = apply_filters( 'gtbe_filter_main_icon', plugins_url( 'genesis-toolbar-extras/images/icon-genesistbe.png', dirname( __FILE__ ) ) );

	?>
	<style type="text/css">
		#wpadminbar.nojs .ab-top-menu > li.menupop.icon-genesistbe:hover > .ab-item,
		#wpadminbar .ab-top-menu > li.menupop.icon-genesistbe.hover > .ab-item,
		#wpadminbar.nojs .ab-top-menu > li.menupop.icon-genesistbe > .ab-item,
		#wpadminbar .ab-top-menu > li.menupop.icon-genesistbe > .ab-item {
      			background-image: url(<?php echo $gtbe_main_icon; ?>);
			background-repeat: no-repeat;
			background-position: 0.85em 50%;
			padding-left: 30px;
		}
		#wp-admin-bar-ddw-genesis-languagesde > .ab-item:before,
		#wp-admin-bar-ddw-genesis-translate > .ab-item:before {
			color: #ff9900;
			content: '• ';
		}
		#wpadminbar li:hover ul ul {
			left: 0;
		}
	</style>
	<?php

}  // end of function ddw_gtbe_admin_style


/**
 * Helper functions for custom branding of the plugin
 *
 * @since 1.0
 */
	/** Include plugin file with special custom stuff */
	require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-branding.php' );
