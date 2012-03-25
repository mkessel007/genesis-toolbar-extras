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
 * @link       http://twitter.com/#!/deckerweb
 *
 * @since 1.0
 */

/**
 * Setting default values for some variables & constants
 *
 * @since 1.0
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
/** Only in case... to avoid ugly PHP notices */
if ( !defined( 'CHILD_THEME_NAME' ) ) {
	define( 'CHILD_THEME_NAME', 'default' );
}


/**
 * "Theme" String for all Child Themes
 *
 * @since 1.0
 *
 * @param $gtbe_theme
 */
$gtbe_theme = '&nbsp;' . __( 'Theme', 'genesis-toolbar-extras' );


/**
 * StudioPress Community/Marketplace - Genesis Child Themes
 *
 * @since 1.0
 *
 * @param $gtbe_is_spmarket
 * @param $spmarket_child_name
 * @param $spmarket_child_forum
 * @param $spmarket_child_aurl
 */
	/** Default Admin URL for Community/Marketplace Child Theme Settings */
	$spmarket_child_aurl = admin_url( 'admin.php?page=genesis#genesis-theme-settings-style-selector' );

	/** StudioPress Community/Marketplace child Theme check */
		// Blingless
	if ( CHILD_THEME_NAME == 'Blingless Theme' || get_current_theme() == 'Blingless Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Blingless' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=181';

		// Cre8tive Burst
	} elseif ( CHILD_THEME_NAME == 'Cre8tive Burst Child Theme' || get_current_theme() == 'Cre8tive Burst Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Cre8tive Burst' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=200';

		// Curtail
	} elseif ( defined( 'CURTAIL_SETTINGS_FIELD' ) ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Curtail' . $gtbe_theme;
		$spmarket_child_aurl = admin_url( 'admin.php?page=curtail-settings' );
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=191';

		// Driskill
	} elseif ( CHILD_THEME_NAME == 'Driskill Theme' || get_current_theme() == 'Driskill Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Diskill' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=189';

		// Elle 1.0/2.0
	} elseif ( CHILD_THEME_NAME == 'Elle Theme' || CHILD_THEME_NAME == 'Elle Theme by Northbound Design' || get_current_theme() == 'Elle Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Elle' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=176';

		// Fashionista
	} elseif ( CHILD_THEME_NAME == 'Fashionista Theme' || get_current_theme() == 'Fashionista Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Church' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=185';

		// (in)SPYR
	} elseif ( class_exists( 'inspyr_theme' ) ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = '(in)SPYR' . $gtbe_theme;
		$spmarket_child_aurl = admin_url( 'admin.php?page=spyr_options' );
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=204';

		// Legacy
	} elseif ( CHILD_THEME_NAME == 'Legacy Theme' || get_current_theme() == 'Legacy Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Legacy' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=184';

		// Maximum
	} elseif ( CHILD_THEME_NAME == 'Maximum Theme' || get_current_theme() == 'Maximum Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Maximum' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=177';

		// Modern Blogger
	} elseif ( CHILD_THEME_NAME == 'Modern Blogger Theme' || get_current_theme() == 'Modern Blogger Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Modern Blogger' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=187';

		// Politica
	} elseif ( CHILD_THEME_NAME == 'Politica Theme' || get_current_theme() == 'Politica Child Theme' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Politica' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=192';

		// Production
	} elseif ( CHILD_THEME_NAME == 'Production Child Theme' || get_current_theme() == 'Production' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Production' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=202';

		// Pure Elegance
	} elseif ( CHILD_THEME_NAME == 'Pure Elegance Theme' || get_current_theme() == 'Pure Elegance' ) {
		$gtbe_is_spmarket = 'spmarket_yes';
		$spmarket_child_name = 'Pure Elegance' . $gtbe_theme;
		$spmarket_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=198';

		// Vintage
	} elseif ( CHILD_THEME_NAME == 'Vintage Theme' || get_current_theme() == 'Vintage Child Theme' ) {
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

		/** Display Readme.txt Child Theme Info */
		if ( class_exists( 'Genesis_Admin_Readme' ) && file_exists( get_stylesheet_directory() . '/README.txt' ) ) {
			$menu_items['spmarket-readme'] = array(
				'parent' => $spmarket,
				'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=genesis-readme' ),
				'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
			);
		}  // end-if readme check

		/** Child Theme Support Forum */
		$menu_items['spmarket-support'] = array(
			'parent' => $spmarket,
			'title'  => __( 'Support Forum', 'genesis-toolbar-extras' ),
			'href'   => $spmarket_child_forum,
			'meta'   => array( 'title' => _x( 'Support Forum for Child Theme', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);

		/** (in)SPYR Theme Specials: */
		if ( class_exists( 'inspyr_theme' ) ) {
			// Theme How To
			$menu_items['spmarket-inspyr-howto'] = array(
				'parent' => $spmarket,
				'title'  => __( 'Theme How To', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=inspyr_howto' ),
				'meta'   => array( 'target' => '', 'title' => _x( 'Theme How To', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
			// Slides at Child Theme section:
			$menu_items['spmarket-inspyr-slides'] = array(
				'parent' => $spmarket,
				'title'  => __( '(in)SPYR Slides', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'edit.php?post_type=inspyr-slide' ),
				'meta'   => array( 'target' => '', 'title' => _x( '(in)SPYR Slides', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
			$menu_items['spmarket-inspyr-slidesadd'] = array(
				'parent' => $spmarket,
				'title'  => __( '(in)SPYR Add new Slide', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'post-new.php?post_type=inspyr-slide' ),
				'meta'   => array( 'target' => '', 'title' => _x( '(in)SPYR Add new Slide', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
			// Slides at "Manage Content" section:
			$gtbe_is_mcgroup = 'mcgroup_yes';
			$menu_items['mcginspyr'] = array(
				'parent' => $mcgroupstart,
				'title'  => __( '(in)SPYR Slides', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'edit.php?post_type=inspyr-slide' ),
				'meta'   => array( 'target' => '', 'title' => _x( '(in)SPYR Slides', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
			$menu_items['mcginspyr-add'] = array(
				'parent' => $mcginspyr,
				'title'  => __( '(in)SPYR Add new Slide', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'post-new.php?post_type=inspyr-slide' ),
				'meta'   => array( 'target' => '', 'title' => _x( '(in)SPYR Add new Slide', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
		}  // end-if (in)SPYR Theme specials

	}  // end-if SP community/marketplace themes display

/** End StudioPress Community/Marketplace Child Themes */


/**
 * Third-Party Genesis Child Themes
 *
 * @since 1.0
 *
 * @param $gtbe_is_tpchild
 * @param $tpchild_name
 * @param $tpchild_aurl
 * @param $tpchild_is_support
 * @param $tpchild_support
 * @param $tpchild_is_codex
 * @param $tpchild_codex
 */
	/** Default Admin URL for Third-Party Child Theme Settings */
	$tpchild_aurl = admin_url( 'admin.php?page=genesis#genesis-theme-settings-style-selector' );

	/** Third-Party Child Theme check */
		// by DECKERWEB: Autobahn
	if ( CHILD_THEME_NAME == 'Autobahn Theme' || get_current_theme() == 'Autobahn' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Autobahn' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://genesisthemes.de/en/contact/';

		// by Appfinite (Wes Straham): Optimal, Agile
	} elseif ( CHILD_THEME_NAME == 'Optimal Theme' || get_current_theme() == 'Optimal Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Optimal' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://appfinite.com/forum/optimal-theme-support/';

	} elseif ( CHILD_THEME_NAME == 'Agile Theme' || get_current_theme() == 'Agile' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Agile' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://appfinite.com/forum/agile-2/';

		// by Okay Themes - Mike McAlister: DocPress
	} elseif ( function_exists( 'of_theme_settings_init' ) || get_current_theme() == 'DocPress' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'DocPress' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=optionsframework' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://okaythemes.tenderapp.com/discussions/docpress-genesis-wordpress';
		$tpchild_is_codex = 'tpcodex_yes';
			$tpchild_codex = 'http://okaythemes.tenderapp.com/kb/theme-documentation/docpress-genesis-documentation';

		// by Kuba Sto: Improvement
	} elseif ( function_exists( 'imp_init' ) || get_current_theme() == 'Improvement' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Improvement' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'themes.php?page=imp-options' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ddwb.me/support-improvement';

		// by Lauren Mancke/Northbound Design: Hightech
	} elseif ( CHILD_THEME_NAME == 'Hightech Theme' || get_current_theme() == 'Hightech Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Hightech' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ddwb.me/support-hightech';

		// by KidThemes at ThemeForest: Avett
	} elseif ( get_current_theme() == 'Avett' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Avett' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ddwb.me/support-avett';

		// by haikbvn at ThemeForest: Nzig
	} elseif ( CHILD_THEME_NAME == 'Nzig' || get_current_theme() == 'Nzig' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Nzig' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'themes.php?page=option_tree' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ddwb.me/support-nzig';

		// by WPSmith (Travis Smith): Pinkalicious, MinFocus
	} elseif ( CHILD_THEME_NAME == 'Pinkalicious Theme' || get_current_theme() == 'Pinkalicious' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Pinkalicious' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpsmith.net/contact/';

	} elseif ( CHILD_THEME_NAME == 'MinFocus Theme' || get_current_theme() == 'MinFocus' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'MinFocus' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpsmith.net/contact/';

		// by Bradley Potter: Buster
	} elseif ( CHILD_THEME_NAME == 'Buster Theme' || get_current_theme() == 'Buster Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Buster' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://bradleypotter.com/contact/';

		// by Auxano Creative: Simply Sweet
	} elseif ( get_current_theme() == 'Simply Sweet Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Simply Sweet' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://auxanocreative.com/contact/';

		// by FlashingCursor: Endeavor, Photo-Genic
	} elseif ( CHILD_THEME_NAME == 'Endeavor Theme' || get_current_theme() == 'Endavor Child Theme' || get_current_theme() == 'Endeavor Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Endeavor' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://flashingcursor.com/contact-me';

	} elseif ( CHILD_THEME_NAME == 'Photo-Genic by FlashingCursor' || get_current_theme() == 'Photo-Genic Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Photo-Genic' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://flashingcursor.com/contact-me';

		// by Marco Galasso aka teethgrinder: Allegro, Birow, Inzornade, Okeko, Saetta, Stargazer
	} elseif ( CHILD_THEME_NAME == 'Allegro' || get_current_theme() == 'Allegro' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Allegro' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ddwb.me/support-allegro';

	} elseif ( function_exists( 'birow_post_info' ) || get_current_theme() == 'Birow' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Birow' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://teethgrinder.net/contact/';

	} elseif ( CHILD_THEME_NAME == 'Inzornade' || get_current_theme() == 'Inzornade' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Inzornade' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://teethgrinder.net/contact/';

	} elseif ( CHILD_THEME_NAME == 'Okeko' || get_current_theme() == 'Okeko' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Okeko' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://teethgrinder.net/contact/';

	} elseif ( function_exists( 'saetta_post_info' ) || get_current_theme() == 'Saetta' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Allegro' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://teethgrinder.net/contact/';

	} elseif ( CHILD_THEME_NAME == 'Stargazer' || get_current_theme() == 'Stargazer' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Stargazer' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://teethgrinder.net/contact/';

		/**
		 * by WPCanada - Len Kutchma:
		 * BlogNews, Conrad, Conrad Full, GoGreen, Humphrey, Manifest, NewsBeat, Simple, Theodore, Winfield, Winfield Dark
		 */
	} elseif ( CHILD_THEME_NAME == 'BlogNews' || get_current_theme() == 'BlogNews Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'BlogNews' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Conrad Theme' || get_current_theme() == 'Conrad Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Conrad' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Conrad Full Theme' || get_current_theme() == 'Conrad Full Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Conrad Full' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'GoGreen Theme' || get_current_theme() == 'GoGreen Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'GoGreen' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Humphrey Theme' || get_current_theme() == 'Humphrey Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Humphrey' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Manifest Theme' || get_current_theme() == 'Manifest Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Manifest' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'NewsBeat Child Theme' || get_current_theme() == 'NewsBeat Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'NewsBeat' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Simple Theme' || get_current_theme() == 'Simple Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Simple' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Theodore Theme' || get_current_theme() == 'Theodore Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Theodore' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Winfield Theme' || get_current_theme() == 'Winfield Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Winfield' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

	} elseif ( CHILD_THEME_NAME == 'Winfield Dark Theme' || get_current_theme() == 'Winfield Dark Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Winfield Dark' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpcanada.ca/contact/';

		// by Web Savvy Marketing, LLC.: Carla Anna, Elsa, Rasmus, Soren
	} elseif ( get_current_theme() == 'Carla Anna Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Carla Anna' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/carla-anna/';

	} elseif ( get_current_theme() == 'Elsa Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Elsa' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/elsa/';

	} elseif ( get_current_theme() == 'Rasmus Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Rasmus' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/rasmus/';

	} elseif ( get_current_theme() == 'Soren Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Soren' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.web-savvy-marketing.com/forum/soren/';

		// by Aaron Hartland: Adaption, Latitude
	} elseif ( CHILD_THEME_NAME == 'Adaptation Theme' || get_current_theme() == 'Adaptation' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Adaptation' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.aaronhartland.com/contact/';

	} elseif ( CHILD_THEME_NAME == 'Latitude Theme' || get_current_theme() == 'Latitude' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Latitude' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.aaronhartland.com/contact/';

		// by Josh Stauffer: Transchild, Sinatra
	} elseif ( CHILD_THEME_NAME == 'Transchild Theme' || get_current_theme() == 'Transchild Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Transchild' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.joshstauffer.com/contact/';

	} elseif ( CHILD_THEME_NAME == 'Sinatra Theme' || get_current_theme() == 'Sinatra Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Sinatra' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.joshstauffer.com/contact/';

		// by MediaCairn Design Studio: Terragon, Photomode
	} elseif ( CHILD_THEME_NAME == 'Terragon' || get_current_theme() == 'Terragon' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Terragon' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.media-cairn.com/forum/terragon-child-theme/';

	} elseif ( CHILD_THEME_NAME == 'Photomode Child Theme' || get_current_theme() == 'Photomode' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Photomode' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.media-cairn.com/forum/photomode-child-theme/';

		// by Rafal Tomal: Gridspiration, Mini Press
	} elseif ( get_current_theme() == 'Gridspiration' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Gridspiration' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.rafaltomal.com/contact/';

	} elseif ( get_current_theme() == 'Mini Press' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Mini Press' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.rafaltomal.com/contact/';

		// by Nick Croft - Designs by Nickthe_Geek: Fluid
	} elseif ( CHILD_THEME_NAME == 'Fluid' || get_current_theme() == 'Fluid Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Fluid' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://designsbynickthegeek.com/designs/themes/fluid';

		// by Jared Atchison: Twenty Diez, Matrimony
	} elseif ( get_current_theme() == 'Twenty Diez' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Twenty Diez' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.jaredatchison.com/';

	} elseif ( CHILD_THEME_NAME == 'Matrimony Wedding Theme' || 
			( get_current_theme() == 'Matrimony' || 
				get_current_theme() == 'Matrimony Brown' || 
				get_current_theme() == 'Matrimony Green' || 
				get_current_theme() == 'Matrimony Pink' || 
				get_current_theme() == 'Matrimony Purple' ) 
	) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Matrimony' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.jaredatchison.com/';

		// by Eddie Machado/Themble: Bones
	} elseif ( CHILD_THEME_NAME == 'Bones for Genesis' || get_current_theme() == 'Bones Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Bones' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://themble.com/contact/';

		// by Daniel Shamburger/Code Chirps: Code Chirps
	} elseif ( CHILD_THEME_NAME == 'Code Chirps Theme' || get_current_theme() == 'Code Chirps Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Code Chirps' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.danielshamburger.com/contact.html';

		// by OC^2 & Pixelterra: Speaker
	} elseif ( CHILD_THEME_NAME == 'Speaker Child Theme' || get_current_theme() == 'Speaker' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Speaker' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://wpthe.com/support/';

		// by Press75: On Demand [Genesis Version]
	} elseif ( function_exists( 'on_demand_custom_styles' ) || get_current_theme() == 'On Demand' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'On Demand' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=sf_ondemand_admin_menu' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://press75.com/support/';

		// by Bill Erickson: BE Gallery, Genesis CRM
	} elseif ( function_exists( 'be_gallery_count' ) || get_current_theme() == 'BE Gallery' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'BE Gallery' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'https://github.com/billerickson/BE-Gallery/issues';

	} elseif ( get_current_theme() == 'Genesis CRM' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Genesis CRM' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'https://github.com/billerickson/Genesis-CRM/issues';

		// by Dee Teal - the Web Princess: myTunes
	} elseif ( function_exists( 'mogsettings_social_sharing_buttons' ) || get_current_theme() == 'myTunes' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'myTunes' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=mog-settings' );
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://thewebprincess.com/contact';

		// by Cristian Antohe/Cozmoslabs: Charisma
	} elseif ( function_exists( 'charisma_extrajs' ) || get_current_theme() == 'Charisma' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Charisma' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.cozmoslabs.com/forums/';

		// by Greg Rickaby: Fringe
	} elseif ( CHILD_THEME_NAME == 'Fringe Theme' || get_current_theme() == 'Fringe' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Fringe' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://gregrickaby.com/contact';

		// by Mark Howe/Next Level Innovation: Zirconium
	} elseif ( CHILD_THEME_NAME == 'Zirconium Theme' || get_current_theme() == 'Zirconium Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Zirconium' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://www.nextlevelinnovation.com/contact/';

		// by Ryan Holder: Belvedere
	} elseif ( CHILD_THEME_NAME == 'Belvedere Theme' || 
			( get_current_theme() == 'Belvedere Child Theme' || 
				get_current_theme() == 'Belvedere Child Theme (Blue)' || 
				get_current_theme() == 'Belvedere Child Theme (Brown)' || 
				get_current_theme() == 'Belvedere Child Theme (Burgandy)' || 
				get_current_theme() == 'Belvedere Child Theme (Charcoal)' || 
				get_current_theme() == 'Belvedere Child Theme (Lilac)' ) 
		) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Belvedere' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://ryanholder.com/';

		// by Allure Themes: April, Corky, Dabble, Happy Hour, Hatbox, Lightness, Lovesong, October
	} elseif ( CHILD_THEME_NAME == 'April Genesis' || get_current_theme() == 'April Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'April' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( get_current_theme() == 'Corky Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Corky' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( get_current_theme() == 'Dabble Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Dabble' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( CHILD_THEME_NAME == 'Happy Hour Genesis' || get_current_theme() == 'Happy Hour Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Happy Hour' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( get_current_theme() == 'Hatbox Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Hatbox' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( CHILD_THEME_NAME == 'Lightness Genesis' || get_current_theme() == 'Lightness Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Lightness' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( CHILD_THEME_NAME == 'Lovesong Genesis' || get_current_theme() == 'Lovesong Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Lovesong' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

	} elseif ( CHILD_THEME_NAME == 'October Genesis' || get_current_theme() == 'October Genesis' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'October' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://support.allurethemes.com/';

		// by WPChildThemes: Extended Magazine
	} elseif ( defined( 'EXTENDED_DESIGN_FIELD' ) ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Extended Magazine' . $gtbe_theme;
		$tpchild_aurl = admin_url( 'admin.php?page=design-settings' );

		// by Alan Smith/Media317: Tee Box
	} elseif ( CHILD_THEME_NAME == 'Tee Box' || get_current_theme() == 'Tee Box Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Tee Box' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://media317.net/themes/tee-box/';

		// by Selena - PLR Diva: Weight Loss
	} elseif ( CHILD_THEME_NAME == 'Tee Box' || get_current_theme() == 'Weight Loss Child Theme' ) {
		$gtbe_is_tpchild = 'tpchild_yes';
		$tpchild_name = 'Weight Loss' . $gtbe_theme;
		$tpchild_is_support = 'tpsupport_yes';
			$tpchild_support = 'http://plr-diva.com/contact/';

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

		/** Display Readme.txt Child Theme Info */
		if ( class_exists( 'Genesis_Admin_Readme' ) && file_exists( get_stylesheet_directory() . '/README.txt' ) ) {
			$menu_items['tpchild-readme'] = array(
				'parent' => $tpchild,
				'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=genesis-readme' ),
				'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
			);
		}  // end-if readme check

		/** Child Theme Support */
		if ( $tpchild_is_support == 'tpsupport_yes' ) {
			$menu_items['tpchild-support'] = array(
				'parent' => $tpchild,
				'title'  => __( 'Support Site', 'genesis-toolbar-extras' ),
				'href'   => $tpchild_support,
				'meta'   => array( 'title' => _x( 'Support Site/Info for Child Theme', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
		}  // end-if child support check

		/** Child Theme Codex */
		if ( $tpchild_is_codex == 'tpcodex_yes' ) {
			$menu_items['tpchild-codex'] = array(
				'parent' => $tpchild,
				'title'  => __( 'Knowledge Base', 'genesis-toolbar-extras' ),
				'href'   => $tpchild_codex,
				'meta'   => array( 'title' => _x( 'Documentation/ Knowledge Base for Child Theme', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
			);
		}  // end-if child codex check

	}  // end-if third-party themes display

/** End Third-Party Child Themes */
