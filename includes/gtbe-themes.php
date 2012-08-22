<?php
/**
 * Display links to active Genesis Child Themes settings' pages
 *
 * @package    Genesis Toolbar Extras
 * @subpackage Theme Support
 * @author     David Decker - DECKERWEB
 * @copyright  Copyright 2012, David Decker - DECKERWEB
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://genesisthemes.de/en/wp-plugins/genesis-toolbar-extras/
 * @link       http://twitter.com/deckerweb
 *
 * @since 1.0
 */

/**
 * Setting default values for some variables & constants
 *
 * @since 1.0
 * @version 1.1
 */
$gtbe_is_spmarket = 'default';
$spmarket_child_name = 'default';
$spmarket_child_forum = 'default';
$gtbe_is_tpchild = 'default';
$tpchild_name = 'default';
$tpchild_is_support = 'default';
$tpchild_support = 'default';
$tpchild_is_codex = 'default';
$tpchild_codex = 'default';
$tpchild_file = 'default';
/** Only in case... to avoid ugly PHP notices */
if ( ! defined( 'CHILD_THEME_NAME' ) ) {
	define( 'CHILD_THEME_NAME', 'default' );
}
if ( ! defined( 'CHILD_THEME_URL' ) ) {
	define( 'CHILD_THEME_URL', 'default' );
}


/**
 * "Theme" Strings for all Child Themes
 *
 * @since 1.0
 * @version 1.1
 *
 * @param $gtbe_theme
 * @param $gtbe_theme_fallback
 */
$gtbe_theme = '&nbsp;' . __( 'Theme', 'genesis-toolbar-extras' );
$gtbe_theme_fallback = __( 'Theme', 'genesis-toolbar-extras' ) . ':&nbsp;';


/**
 * StudioPress Community/Marketplace - Genesis Child Themes
 *
 * @since 1.0
 * @version 1.1
 *
 * @param $gtbe_is_spmarket
 * @param $spmarket_child_name
 * @param $spmarket_child_forum
 * @param $spmarket_child_aurl
 * @param $gtbe_stylesheet_name
 */
	/** Default Admin URL for Community/Marketplace Child Theme Settings */
	$spmarket_child_aurl = admin_url( 'admin.php?page=genesis#genesis-theme-settings-style-selector' );

	/** StudioPress Community/Marketplace child Theme check */
		// Blingless 1.0+
	if ( CHILD_THEME_NAME == 'Blingless Theme' || $gtbe_stylesheet_name == 'Blingless Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Blingless' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=181';

		// Adorable 1.0+
	} elseif ( CHILD_THEME_NAME == 'Adorable Child Theme' || $gtbe_stylesheet_name == 'Adorable' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Adorable' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=208';

		// Craftiness 1.0+
	} elseif ( CHILD_THEME_NAME == 'Craftiness Theme' || $gtbe_stylesheet_name == 'Craftiness Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Craftiness' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=215';

		// Cre8tive Burst 1.0+
	} elseif ( CHILD_THEME_NAME == 'Cre8tive Burst Child Theme' || $gtbe_stylesheet_name == 'Cre8tive Burst Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Cre8tive Burst' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=200';

		// Curtail 1.0/2.0
	} elseif ( defined( 'CURTAIL_SETTINGS_FIELD' ) ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Curtail' . $gtbe_theme;
		$spmarket_child_aurl = admin_url( 'admin.php?page=curtail-settings' );
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=191';

		// Driskill 1.0+
	} elseif ( CHILD_THEME_NAME == 'Driskill Theme' || $gtbe_stylesheet_name == 'Driskill Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Diskill' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=189';

		// Elle 1.0/2.0/2.0.1+
	} elseif ( CHILD_THEME_NAME == 'Elle Theme' || CHILD_THEME_NAME == 'Elle Theme by Northbound Design' || $gtbe_stylesheet_name == 'Elle Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Elle' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=176';

		// Fashionista 1.0+
	} elseif ( CHILD_THEME_NAME == 'Fashionista Theme' || $gtbe_stylesheet_name == 'Fashionista Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Church' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=185';

		// Glitter and Lace 1.0+
	} elseif ( CHILD_THEME_NAME == 'Glitter Theme' || $gtbe_stylesheet_name == 'Glitter' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Glitter &amp; Lace' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=214';

		// (in)SPYR 1.0/1.0.1+
	} elseif ( class_exists( 'inspyr_theme' ) ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = '(in)SPYR' . $gtbe_theme;
		$spmarket_child_aurl = admin_url( 'admin.php?page=spyr_options' );
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=204';

		// Innov8tive 1.0 - 1.0.2+
	} elseif ( CHILD_THEME_NAME == 'innov8tive' || $gtbe_stylesheet_name == 'Innov8tive Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Innov8tive' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=212';

		// Inspired 1.0+
	} elseif ( CHILD_THEME_NAME == 'Inspired Theme' || $gtbe_stylesheet_name == 'Inspired Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Inspired' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=211';

		// Legacy 1.0 - 1.2.1+
	} elseif ( CHILD_THEME_NAME == 'Legacy Theme' || $gtbe_stylesheet_name == 'Legacy Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Legacy' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=184';

		// Maximum 1.0+
	} elseif ( CHILD_THEME_NAME == 'Maximum Theme' || $gtbe_stylesheet_name == 'Maximum Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Maximum' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=177';

		// Modern Blogger 1.0+
	} elseif ( CHILD_THEME_NAME == 'Modern Blogger Theme' || $gtbe_stylesheet_name == 'Modern Blogger Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Modern Blogger' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=187';

		// Optimal 1.0 - 1.2.1+
	} elseif ( CHILD_THEME_URL == 'http://www.studiopress.com/themes/optimal' && ( CHILD_THEME_NAME == 'Optimal Theme' || $gtbe_stylesheet_name == 'Optimal Child Theme' ) ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Optimal' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=205';

		// Politica 1.0+
	} elseif ( CHILD_THEME_NAME == 'Politica Theme' || $gtbe_stylesheet_name == 'Politica Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Politica' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=192';

		// Production 1.0+
	} elseif ( CHILD_THEME_NAME == 'Production Child Theme' || $gtbe_stylesheet_name == 'Production' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Production' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=202';

		// Pure Elegance 1.0 - 1.1+
	} elseif ( CHILD_THEME_NAME == 'Pure Elegance Theme' || $gtbe_stylesheet_name == 'Pure Elegance' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Pure Elegance' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=198';

		// RealPro
	} elseif ( CHILD_THEME_NAME == 'RealPro Theme' || $gtbe_stylesheet_name == 'RealPro' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'RealPro' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=209';

		// Vintage
	} elseif ( CHILD_THEME_NAME == 'Vintage Theme' || $gtbe_stylesheet_name == 'Vintage Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Vintage' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=178';

	} // end if else SP marketplace theme check

	/** Community/Marketplace Themes Display */
	if ( ( $gtbe_is_spmarket == 'spmarket_yes' ) && current_user_can( 'edit_theme_options' ) ) {
		/** "Theme Group" menu items */
		$menu_items['spmarket'] = array(
			'parent' => $tgroup,
			'title'  => $spmarket_child_name,
			'href'   => $spmarket_child_aurl,
			'meta'   => array( 'target' => '', 'title' => $spmarket_child_name )
		);

		/** Display theme editor links for proper caps */
		if ( !( defined( 'DISALLOW_FILE_EDIT' ) && DISALLOW_FILE_EDIT ) && current_user_can( 'edit_themes' ) && current_theme_supports( 'gtbe-theme-editor' ) ) {

			/** Include plugin file with edit files plugin support links */
			require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-editfiles.php' );

		}  // end-if theme editor check

		/** Display Readme.txt Child Theme Info */
		if ( class_exists( 'Genesis_Admin_Readme' ) && file_exists( ddw_gtbe_filter_url_child_readme() ) ) {
			$menu_items['spmarket-readme'] = array(
				'parent' => $spmarket,
				'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=genesis-readme' ),
				'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
			);
		}  /** If Genesis class not exists use own class */
		elseif ( class_exists( 'DDW_GTBE_Admin_Readme' ) && file_exists( ddw_gtbe_filter_url_child_readme() ) ) {
			$menu_items['spmarket-readme'] = array(
				'parent' => $spmarket,
				'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=gtbe-readme' ),
				'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
			);
		}  // end-if readme check

		/** Display changelog.txt Child Theme Info */
		if ( class_exists( 'DDW_GTBE_Admin_Changelog' ) && file_exists( ddw_gtbe_filter_url_child_changelog() ) ) {
			$menu_items['spmarket-changelog'] = array(
				'parent' => $spmarket,
				'title'  => __( 'Changelog Info', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=gtbe-changelog' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Changelog Info', 'genesis-toolbar-extras' ) )
			);
		}  // end-if changelog check

		/** Child Theme Support Forum */
		$menu_items['spmarket-support'] = array(
			'parent' => $spmarket,
			'title'  => __( 'Support Forum', 'genesis-toolbar-extras' ),
			'href'   => $spmarket_child_forum,
			'meta'   => array( 'title' => _x( 'Support Forum for Child Theme', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);

		/** (in)SPYR Theme Specials: */
		if ( class_exists( 'inspyr_theme' ) ) {

			/** Include plugin file with theme specials */
			require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-themes-specials-inspyr.php' );

		}  // end-if (in)SPYR Theme specials

	}  // end-if SP community/marketplace themes display

/** End StudioPress Community/Marketplace Child Themes */


/**
 * Third-Party Genesis Child Themes
 *
 * @since 1.0
 * @version 1.2
 *
 * @param $gtbe_is_tpchild
 * @param $tpchild_name
 * @param $tpchild_aurl
 * @param $tpchild_is_support
 * @param $tpchild_support
 * @param $tpchild_is_codex
 * @param $tpchild_codex
 * @param $gtbe_stylesheet_name
 */
	/** Default Admin URL for Third-Party Child Theme Settings */
	$tpchild_aurl = admin_url( 'admin.php?page=genesis#genesis-theme-settings-style-selector' );

	/** Default Admin URL for Child Theme Settings by "Web Savvy Marketing LLC" */
	if ( class_exists( 'WSM_Settings' ) && ! ( $gtbe_stylesheet_name == 'Carla Anna' || $gtbe_stylesheet_name == 'Carla Anna Theme' ) ) {
		$tpchild_aurl = admin_url( 'admin.php?page=' . strtolower( urlencode( $gtbe_stylesheet_name ) ) . '' );
	}

	/** Third-Party Child Theme check */
		// by DECKERWEB: Autobahn, Easy Downloads
	if ( CHILD_THEME_NAME == 'Autobahn Theme' || $gtbe_stylesheet_name == 'Autobahn' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Autobahn' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://genesisthemes.de/en/contact/';

	} elseif ( CHILD_THEME_NAME == 'Easy Downloads Theme' || $gtbe_stylesheet_name == 'Easy Downloads' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Easy Downloads' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=ged-settings' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://genesisthemes.de/en/contact/';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://genesisthemes.de/en/genesis-child-themes/easy-downloads/documentation/';

		// by Appfinite (Wes Straham): Optimal, Agile, Adapt, Skope, Imagery, Classik
	} elseif ( CHILD_THEME_URL == 'http://appfinite.com/themes/optimal' && CHILD_THEME_NAME == 'Optimal Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Optimal' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://appfinite.com/forum/optimal-theme-support/';

	} elseif ( CHILD_THEME_NAME == 'Agile Theme' || $gtbe_stylesheet_name == 'Agile' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Agile' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://appfinite.com/forum/agile-theme-support/';

	} elseif ( CHILD_THEME_NAME == 'Adapt Theme' || $gtbe_stylesheet_name == 'Adapt' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Adapt' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=genesis#genesis-theme-settings-adapt-portfolio' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://appfinite.com/forum/adapt-theme-support/';

	} elseif ( CHILD_THEME_NAME == 'Skope Theme' || $gtbe_stylesheet_name == 'Skope' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Skope' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=genesis#genesis-theme-settings-skope-portfolio' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://appfinite.com/forum/skope-theme-support/';

	} elseif ( CHILD_THEME_NAME == 'Imagery Theme' || $gtbe_stylesheet_name == 'Imagery' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Imagery' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=genesis#genesis-theme-settings-imagery-portfolio' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://appfinite.com/forum/imagery-theme-support/';

	} elseif ( CHILD_THEME_NAME == 'Classik Theme' || $gtbe_stylesheet_name == 'Classik' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Classik' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=genesis#genesis-theme-settings-classik-portfolio' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://appfinite.com/forum/classik-theme-support/';

		// by Catalyst Themes: Dynamik Website Builder (Dynamik Genesis)
	} elseif ( CHILD_THEME_NAME == 'Dynamik Website Builder' || $gtbe_stylesheet_name == 'Dynamik-Gen' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Dynamik Genesis' . $gtbe_theme;
		if ( ! get_the_author_meta( 'disable_dynamik_gen_settings_menu', $gtbe_user->ID ) ) {
			$tpchild_aurl = admin_url( 'admin.php?page=dynamik-settings' );
		} else {
			$tpchild_aurl = admin_url( 'admin.php?page=genesis' );
		}
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://deckerweb.de/go/dynamik-genesis-support/';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://deckerweb.de/go/dynamik-genesis-videos/';

		$wp_admin_bar->add_group( array(
			'parent' => $tpchild,
			'id'     => $tpchild_dynamik,
		) );

		$tpchild_file = 'dynamik_file_yes';

		// by Okay Themes - Mike McAlister: DocPress
	} elseif ( function_exists( 'of_theme_settings_init' ) || $gtbe_stylesheet_name == 'DocPress' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'DocPress' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=optionsframework' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://okaythemes.tenderapp.com/discussions/docpress-genesis-wordpress';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://okaythemes.tenderapp.com/kb/theme-documentation/docpress-genesis-documentation';

		// by Kuba Sto: Improvement
	} elseif ( function_exists( 'imp_init' ) || $gtbe_stylesheet_name == 'Improvement' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Improvement' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'themes.php?page=imp-options' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ddwb.me/support-improvement';

		// by Lauren Mancke/Northbound Design: Hightech
	} elseif ( CHILD_THEME_NAME == 'Hightech Theme' || $gtbe_stylesheet_name == 'Hightech Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Hightech' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ddwb.me/support-hightech';

		// by KidThemes at ThemeForest: Avett
	} elseif ( $gtbe_stylesheet_name == 'Avett' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Avett' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ddwb.me/support-avett';

		// by themedizain at ThemeForest: Nzig
	} elseif ( class_exists( 'Dizain' ) || CHILD_THEME_NAME == 'Dizain 01' || $gtbe_stylesheet_name == 'Dizain 01' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Dizain 01' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'themes.php?page=ot-theme-options' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ddwb.me/support-dizain01';

		// by haikbvn at ThemeForest: Nzig
	} elseif ( CHILD_THEME_NAME == 'Nzig' || $gtbe_stylesheet_name == 'Nzig' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Nzig' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'themes.php?page=option_tree' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ddwb.me/support-nzig';

		// by WPSmith (Travis Smith): Pinkalicious, MinFocus, minFolio
	} elseif ( CHILD_THEME_NAME == 'Pinkalicious Theme' || $gtbe_stylesheet_name == 'Pinkalicious' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Pinkalicious' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpsmith.net/contact/';

	} elseif ( $gtbe_stylesheet_name == 'minFolio' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'minFolio' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpsmith.net/contact/';

	} elseif ( CHILD_THEME_NAME == 'MinFocus Theme' || $gtbe_stylesheet_name == 'MinFocus' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'MinFocus' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpsmith.net/contact/';

		// by Bradley Potter: Buster
	} elseif ( CHILD_THEME_NAME == 'Buster Theme' || $gtbe_stylesheet_name == 'Buster Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Buster' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://bradleypotter.com/contact/';

		// by Auxano Creative: Simply Sweet
	} elseif ( $gtbe_stylesheet_name == 'Simply Sweet Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Simply Sweet' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://auxanocreative.com/contact/';

		// by FlashingCursor: Endeavor, Photo-Genic
	} elseif ( CHILD_THEME_NAME == 'Endeavor Theme' || $gtbe_stylesheet_name == 'Endavor Child Theme' || $gtbe_stylesheet_name == 'Endeavor Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Endeavor' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://flashingcursor.com/contact-me';

	} elseif ( CHILD_THEME_NAME == 'Photo-Genic by FlashingCursor' || $gtbe_stylesheet_name == 'Photo-Genic Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Photo-Genic' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://flashingcursor.com/contact-me';

		// by Marco Galasso aka teethgrinder: Allegro, Birow, Inzornade, Okeko, Saetta, Stargazer
	} elseif ( CHILD_THEME_NAME == 'Allegro' || $gtbe_stylesheet_name == 'Allegro' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Allegro' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ddwb.me/support-allegro';

	} elseif ( function_exists( 'birow_post_info' ) || $gtbe_stylesheet_name == 'Birow' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Birow' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://teethgrinder.net/contact/';

	} elseif ( CHILD_THEME_NAME == 'Inzornade' || $gtbe_stylesheet_name == 'Inzornade' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Inzornade' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://teethgrinder.net/contact/';

	} elseif ( CHILD_THEME_NAME == 'Okeko' || $gtbe_stylesheet_name == 'Okeko' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Okeko' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://teethgrinder.net/contact/';

	} elseif ( function_exists( 'saetta_post_info' ) || $gtbe_stylesheet_name == 'Saetta' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Allegro' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://teethgrinder.net/contact/';

	} elseif ( CHILD_THEME_NAME == 'Stargazer' || $gtbe_stylesheet_name == 'Stargazer' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Stargazer' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://teethgrinder.net/contact/';

		/**
		 * by WPCanada - Len Kutchma:
		 * BlogNews, Conrad, Conrad Full, GoGreen, Humphrey, Linky Loo, Manifest, NewsBeat, Simple, Theodore, Winfield, Winfield Dark
		 */
	} elseif ( CHILD_THEME_NAME == 'BlogNews' || $gtbe_stylesheet_name == 'BlogNews Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'BlogNews' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Conrad Theme' || $gtbe_stylesheet_name == 'Conrad Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Conrad' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Conrad Full Theme' || $gtbe_stylesheet_name == 'Conrad Full Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Conrad Full' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'GoGreen Theme' || $gtbe_stylesheet_name == 'GoGreen Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'GoGreen' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Humphrey Theme' || $gtbe_stylesheet_name == 'Humphrey Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Humphrey' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Linky Loo Child Theme' || $gtbe_stylesheet_name == 'Linky Loo Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Linky Loo' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Manifest Theme' || $gtbe_stylesheet_name == 'Manifest Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Manifest' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'NewsBeat Child Theme' || $gtbe_stylesheet_name == 'NewsBeat Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'NewsBeat' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Simple Theme' || $gtbe_stylesheet_name == 'Simple Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Simple' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Theodore Theme' || $gtbe_stylesheet_name == 'Theodore Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Theodore' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Winfield Theme' || $gtbe_stylesheet_name == 'Winfield Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Winfield' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Winfield Dark Theme' || $gtbe_stylesheet_name == 'Winfield Dark Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Winfield Dark' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

		// by Web Savvy Marketing, LLC.: Carla Anna, Alexandra, Elsa, Frederik, Hans, Mariah, Rasmus, Robert, Soren
	} elseif ( $gtbe_stylesheet_name == 'Carla Anna' || $gtbe_stylesheet_name == 'Carla Anna Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Carla Anna' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/carla-anna/';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://www.web-savvy-marketing.com/forum/carla-anna-instructions/';

	} elseif ( function_exists( 'alexandra_add_settings' ) || $gtbe_stylesheet_name == 'Alexandra' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Alexandra' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/alexandra/';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://www.web-savvy-marketing.com/forum/alexandra-instructions/';

	} elseif ( function_exists( 'elsa_add_settings' ) || $gtbe_stylesheet_name == 'Elsa' || $gtbe_stylesheet_name == 'Elsa Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Elsa' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/elsa/';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://www.web-savvy-marketing.com/forum/elsa-instructions/';

	} elseif ( ( function_exists( 'frederik_phone' ) || function_exists( 'frederik_add_settings' ) ) || $gtbe_stylesheet_name == 'Frederik' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Frederik' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/frederik/';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://www.web-savvy-marketing.com/forum/frederik-instructions/';

	} elseif ( function_exists( 'hans_add_settings' ) || $gtbe_stylesheet_name == 'Hans' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Hans' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/hans/';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://www.web-savvy-marketing.com/forum/hans-instructions/';

	} elseif ( function_exists( 'mariah_add_settings' ) || $gtbe_stylesheet_name == 'Mariah' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Mariah' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/mariah/';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://www.web-savvy-marketing.com/forum/mariah-instructions/';

	} elseif ( function_exists( 'rasmus_add_settings' ) || $gtbe_stylesheet_name == 'Rasmus' || $gtbe_stylesheet_name == 'Rasmus Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Rasmus' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/rasmus/';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://www.web-savvy-marketing.com/forum/rasmus-instructions/';

	} elseif ( function_exists( 'robert_add_settings' ) || $gtbe_stylesheet_name == 'Robert' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Robert' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/robert/';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://www.web-savvy-marketing.com/forum/robert-instructions/';

	} elseif ( function_exists( 'soren_add_settings' ) || $gtbe_stylesheet_name == 'Soren' || $gtbe_stylesheet_name == 'Soren Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Soren' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/soren/';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://www.web-savvy-marketing.com/forum/soren-instructions/';

		// by Aaron Hartland: Adaption, Latitude
	} elseif ( CHILD_THEME_NAME == 'Adaptation Theme' || $gtbe_stylesheet_name == 'Adaptation' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Adaptation' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.aaronhartland.com/contact/';

	} elseif ( CHILD_THEME_NAME == 'Latitude Theme' || $gtbe_stylesheet_name == 'Latitude' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Latitude' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.aaronhartland.com/contact/';

		// by Josh Stauffer: Transchild, Sinatra
	} elseif ( CHILD_THEME_NAME == 'Transchild Theme' || $gtbe_stylesheet_name == 'Transchild Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Transchild' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.joshstauffer.com/contact/';

	} elseif ( CHILD_THEME_NAME == 'Sinatra Theme' || $gtbe_stylesheet_name == 'Sinatra Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Sinatra' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.joshstauffer.com/contact/';

		// by MediaCairn Design Studio: Terragon, Photomode
	} elseif ( CHILD_THEME_NAME == 'Terragon' || $gtbe_stylesheet_name == 'Terragon' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Terragon' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.media-cairn.com/forum/terragon-child-theme/';

	} elseif ( CHILD_THEME_NAME == 'Photomode Child Theme' || $gtbe_stylesheet_name == 'Photomode' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Photomode' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.media-cairn.com/forum/photomode-child-theme/';

		// by Rafal Tomal: Gridspiration, Mini Press
	} elseif ( $gtbe_stylesheet_name == 'Gridspiration' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Gridspiration' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.rafaltomal.com/contact/';

	} elseif ( $gtbe_stylesheet_name == 'Mini Press' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Mini Press' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.rafaltomal.com/contact/';

		// by Nick Croft - Designs by Nickthe_Geek: Fluid
	} elseif ( CHILD_THEME_NAME == 'Fluid' || $gtbe_stylesheet_name == 'Fluid Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Fluid' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://designsbynickthegeek.com/designs/themes/fluid';

		// by Sara Greenlaw - Swoon Media: Peppermint
	} elseif ( $gtbe_stylesheet_name == 'Peppermint' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Peppermint' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://bloggersitedesign.com/contact/';

		// by Jared Atchison: Twenty Diez, Matrimony
	} elseif ( $gtbe_stylesheet_name == 'Twenty Diez' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Twenty Diez' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.jaredatchison.com/';

	} elseif ( CHILD_THEME_NAME == 'Matrimony Wedding Theme' || 
			( $gtbe_stylesheet_name == 'Matrimony' || 
				$gtbe_stylesheet_name == 'Matrimony Brown' || 
				$gtbe_stylesheet_name == 'Matrimony Green' || 
				$gtbe_stylesheet_name == 'Matrimony Pink' || 
				$gtbe_stylesheet_name == 'Matrimony Purple' ) 
	) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Matrimony' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.jaredatchison.com/';

		// by Jessica Barnard - The Pixelista: Color, Celebrate
	} elseif ( CHILD_THEME_NAME == 'Color Me Happy theme' || $gtbe_stylesheet_name == 'Color Me Happy Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Color Me Happy' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'themes.php?page=siteoptions' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://thepixelista.com/contact/';

	} elseif ( $gtbe_stylesheet_name == 'Celebrate' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Celebrate' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://thepixelista.com/contact/';

		// by Eddie Machado/Themble: Bones
	} elseif ( CHILD_THEME_NAME == 'Bones for Genesis' || $gtbe_stylesheet_name == 'Bones Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Bones' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://themble.com/contact/';

		// by Daniel Shamburger/Code Chirps: Code Chirps
	} elseif ( CHILD_THEME_NAME == 'Code Chirps Theme' || $gtbe_stylesheet_name == 'Code Chirps Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Code Chirps' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.danielshamburger.com/contact.html';

		// by OC^2 & Pixelterra: Speaker
	} elseif ( CHILD_THEME_NAME == 'Speaker Child Theme' || $gtbe_stylesheet_name == 'Speaker' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Speaker' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpthe.com/support/';

		// by Press75: On Demand [Genesis Version]
	} elseif ( function_exists( 'on_demand_custom_styles' ) || $gtbe_stylesheet_name == 'On Demand' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'On Demand' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=sf_ondemand_admin_menu' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://press75.com/support/';

		// by Bill Erickson: BE Gallery, Genesis CRM
	} elseif ( function_exists( 'be_gallery_count' ) || $gtbe_stylesheet_name == 'BE Gallery' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'BE Gallery' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'https://github.com/billerickson/BE-Gallery/issues';

	} elseif ( $gtbe_stylesheet_name == 'Genesis CRM' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Genesis CRM' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'https://github.com/billerickson/Genesis-CRM/issues';

		// by Dee Teal - the Web Princess: myTunes
	} elseif ( function_exists( 'mogsettings_social_sharing_buttons' ) || $gtbe_stylesheet_name == 'myTunes' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'myTunes' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=mog-settings' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://thewebprincess.com/contact';

		// by Cristian Antohe/Cozmoslabs: Charisma
	} elseif ( function_exists( 'charisma_extrajs' ) || $gtbe_stylesheet_name == 'Charisma' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Charisma' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.cozmoslabs.com/forums/';

		// by Greg Rickaby: Fringe, Radio
	} elseif ( CHILD_THEME_NAME == 'Fringe Theme' || $gtbe_stylesheet_name == 'Fringe' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Fringe' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://gregrickaby.com/contact';

	} elseif ( CHILD_THEME_NAME == 'Radio Theme' || $gtbe_stylesheet_name == 'Radio Theme for Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Radio' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=radio-theme-settings' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'https://github.com/gregrickaby/Radio-Theme-for-Genesis/issues';

		// by Mark Howe/Next Level Innovation: Zirconium
	} elseif ( CHILD_THEME_NAME == 'Zirconium Theme' || $gtbe_stylesheet_name == 'Zirconium Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Zirconium' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.nextlevelinnovation.com/contact/';

		// by Ryan Holder: Belvedere
	} elseif ( CHILD_THEME_NAME == 'Belvedere Theme' || 
			( $gtbe_stylesheet_name == 'Belvedere Child Theme' || 
				$gtbe_stylesheet_name == 'Belvedere Child Theme (Blue)' || 
				$gtbe_stylesheet_name == 'Belvedere Child Theme (Brown)' || 
				$gtbe_stylesheet_name == 'Belvedere Child Theme (Burgandy)' || 
				$gtbe_stylesheet_name == 'Belvedere Child Theme (Charcoal)' || 
				$gtbe_stylesheet_name == 'Belvedere Child Theme (Lilac)' ) 
		) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Belvedere' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ryanholder.com/';

		// by Allure Themes: April, Corky, Dabble, Happy Hour, Hatbox, Lightness, Lovesong, October
	} elseif ( /* CHILD_THEME_NAME == 'April Genesis' || */ $gtbe_stylesheet_name == 'April Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'April' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( $gtbe_stylesheet_name == 'Corky Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Corky' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( $gtbe_stylesheet_name == 'Dabble Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Dabble' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( CHILD_THEME_NAME == 'Happy Hour Genesis' || $gtbe_stylesheet_name == 'Happy Hour Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Happy Hour' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( $gtbe_stylesheet_name == 'Hatbox Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Hatbox' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( CHILD_THEME_NAME == 'Lightness Genesis' || $gtbe_stylesheet_name == 'Lightness Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Lightness' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( CHILD_THEME_NAME == 'Lovesong Genesis' || $gtbe_stylesheet_name == 'Lovesong Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Lovesong' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( CHILD_THEME_NAME == 'October Genesis' || $gtbe_stylesheet_name == 'October Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'October' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

		// by Pat Ramsey: WP Presenter
	} elseif ( CHILD_THEME_NAME == 'WP Presenter' || $gtbe_stylesheet_name == 'WP Presenter for Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'WP Presenter' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'https://github.com/ramseyp/genesis-wp-presenter/issues';

		// by Creativity Included: Photo Pro
	} elseif ( function_exists( 'photopro_load_scripts' ) || CHILD_THEME_NAME == 'PhotoPro Theme' || $gtbe_stylesheet_name == 'PhotoPro Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Photo Pro' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.creativityincluded.com/contact/';

		// by WPChildThemes: Extended Magazine
	} elseif ( defined( 'EXTENDED_DESIGN_FIELD' ) ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Extended Magazine' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=design-settings' );

		// by Alan Smith/Media317: Tee Box
	} elseif ( CHILD_THEME_NAME == 'Tee Box' || $gtbe_stylesheet_name == 'Tee Box Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Tee Box' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://media317.net/themes/tee-box/';

		// by Selena - PLR Diva: Weight Loss
	} elseif ( CHILD_THEME_NAME == 'Tee Box' || $gtbe_stylesheet_name == 'Weight Loss Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Weight Loss' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://plr-diva.com/contact/';

	} elseif ( ( get_template() == 'genesis' ) && ( $gtbe_is_spchild !== 'spchild_yes' ) && ( $gtbe_is_spmarket !== 'spmarket_yes' ) && !function_exists( 'themedy_load_styles' ) ) {

		// Simple fallback for any other Genesis child theme (name)
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = $gtbe_theme_fallback . $gtbe_stylesheet_name;

	} // end

	/** Third-Party Themes Display */
	if ( ( $gtbe_is_tpchild == 'tpchild_yes' ) && current_user_can( 'edit_theme_options' ) ) {
		/** "Theme Group" menu items */
		$menu_items['tpchild'] = array(
			'parent' => $tgroup,
			'title'  => $tpchild_name,
			'href'   => $tpchild_aurl,
			'meta'   => array( 'target' => '', 'title' => $tpchild_name )
		);

		/** Display theme editor links for proper caps */
		if ( !( defined( 'DISALLOW_FILE_EDIT' ) && DISALLOW_FILE_EDIT ) && ! function_exists( 'dynamik_theme_settings' ) && current_user_can( 'edit_themes' ) && current_theme_supports( 'gtbe-theme-editor' ) ) {

			/** Include plugin file with seo plugin support links */
			require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-editfiles.php' );

		}  // end-if theme editor check

		/** Display Readme.txt Child Theme Info */
		if ( class_exists( 'Genesis_Admin_Readme' ) && file_exists( ddw_gtbe_filter_url_child_readme() ) ) {
			$menu_items['tpchild-readme'] = array(
				'parent' => $tpchild,
				'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=genesis-readme' ),
				'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
			);
		}  /** If Genesis class not exists use own class */
		elseif ( class_exists( 'DDW_GTBE_Admin_Readme' ) && file_exists( ddw_gtbe_filter_url_child_readme() ) ) {
			$menu_items['tpchild-readme'] = array(
				'parent' => $tpchild,
				'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=gtbe-readme' ),
				'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
			);
		}  // end-if readme check

		/** Display changelog.txt Child Theme Info */
		if ( class_exists( 'DDW_GTBE_Admin_Changelog' ) && file_exists( ddw_gtbe_filter_url_child_changelog() ) ) {
			$menu_items['tpchild-changelog'] = array(
				'parent' => $tpchild,
				'title'  => __( 'Changelog Info', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=gtbe-changelog' ),
				'meta'   => array( 'target' => '', 'title' => __( 'Changelog Info', 'genesis-toolbar-extras' ) )
			);
		}  // end-if changelog check

		/** Child Theme Support */
		if ( $tpchild_is_support == 'tpsupport_yes' ) {
			$menu_items['tpchild-support'] = array(
				'parent' => $tpchild,
				'title'  => __( 'Support Site', 'genesis-toolbar-extras' ),
				'href'   => esc_url_raw( apply_filters( 'gtbe_filter_theme_support_url', $tpchild_support ) ),
				'meta'   => array( 'title' => _x( 'Support Site/Info for Child Theme', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
		}  // end-if child support check

		/** Child Theme Codex */
		if ( $tpchild_is_codex == 'tpcodex_yes' ) {
			$menu_items['tpchild-codex'] = array(
				'parent' => $tpchild,
				'title'  => __( 'Knowledge Base', 'genesis-toolbar-extras' ),
				'href'   => esc_url_raw( apply_filters( 'gtbe_filter_theme_docs_url', $tpchild_codex ) ),
				'meta'   => array( 'title' => _x( 'Documentation/ Knowledge Base for Child Theme', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
		}  // end-if child codex check

		/** Include additional code parts for some child themes */
		if ( $tpchild_file == 'dynamik_file_yes' ) {
			/** Include plugin file with special Dynamik stuff */
			require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-themes-dynamik.php' );
		}  // end-if child file check

		/** Dizain 01 Theme Specials: */
		if ( class_exists( 'Dizain' ) ) {
			/** Include plugin file with theme specials */
			require_once( GTBE_PLUGIN_DIR . '/includes/gtbe-themes-specials-dizain01.php' );
		}  // end-if Dizain 01 Theme specials

	}  // end-if third-party themes display

/** End Third-Party Child Themes */
