<?php
/**
 * Display links to active StudioPress Genesis Child Themes settings' pages
 * Only official StudioPress Themes
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
$gtbe_is_spchild = 'default';
$spgenesis_child_name = 'default';
$spgenesis_child_forum = 'default';
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
 * Default Admin URL for StudioPress Child Theme Settings
 *
 * @since 1.0
 *
 * @param $spgenesis_child_aurl
 */
$spgenesis_child_aurl = admin_url( 'admin.php?page=genesis#genesis-theme-settings-style-selector' );


/**
 * Official StudioPress Genesis Child Themes
 *
 * @since 1.0
 *
 * @param $gtbe_is_spchild
 * @param $spgenesis_child_name
 * @param $spgenesis_child_aurl
 * @param $spgenesis_child_forum
 */
	/** Check for official child themes */
		// AgentPress 2.0
	if ( CHILD_THEME_NAME == 'AgentPress Theme' || function_exists( 'agentpress_disclaimer' ) ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'AgentPress' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=188';

		// AgentPress 1.0
	} elseif ( function_exists( 'agentpress_include_slider' ) ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'AgentPress 1.0' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=86';

		// Agency 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Agency Theme' || get_current_theme() == 'Agency Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Agency' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=119';

		// Amped
	} elseif ( CHILD_THEME_NAME == 'Amped Theme' || get_current_theme() == 'Amped Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Amped' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=93';

		// Associate
	} elseif ( CHILD_THEME_NAME == 'Associate Theme' || get_current_theme() == 'Associate Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Associate' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=174';

		// Backcountry
	} elseif ( CHILD_THEME_NAME == 'Backcountry Theme' || get_current_theme() == 'Backcountry Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Backcountry' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=195';

		// Balance
	} elseif ( CHILD_THEME_NAME == 'Balance Theme' || get_current_theme() == 'Balance Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Balance' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=201';

		// Bee Crafty
	} elseif ( CHILD_THEME_NAME == 'Bee Crafty Theme' || get_current_theme() == 'Bee Crafty Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Bee Crafty' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=138';

		// Blissful
	} elseif ( CHILD_THEME_NAME == 'Blissful Theme' || get_current_theme() == 'Blissful Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Blissful' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=169';

		// Church 1.x
	} elseif ( CHILD_THEME_NAME == 'Church Theme' || 
			( get_current_theme() == 'Church Child Theme' || 
				get_current_theme() == 'Church Blue Child Theme' || 
				get_current_theme() == 'Church Brown Child Theme' || 
				get_current_theme() == 'Church Gray Child Theme' ) 
		) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Church' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=124';

		// Corporate
	} elseif ( CHILD_THEME_NAME == 'Corporate Theme' || get_current_theme() == 'Corporate Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Corporate' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=109';

		// Crystal
	} elseif ( CHILD_THEME_NAME == 'Crystal Theme' || get_current_theme() == 'Crystal Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Crystal' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=160';

		// Delicious
	} elseif ( CHILD_THEME_NAME == 'Delicious Theme' || 
			( get_current_theme() == 'Delicious Child Theme' || 
				get_current_theme() == 'Delicious Blue Child Theme' || 
				get_current_theme() == 'Delicious Brown Child Theme' ) 
		) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Delicious' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=130';

		// Education
	} elseif ( CHILD_THEME_NAME == 'Education Theme' || get_current_theme() == 'Education Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Education' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=126';

		// eleven40
	} elseif ( CHILD_THEME_NAME == 'eleven40 Theme' || get_current_theme() == 'eleven40 Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'eleven40' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=199';

		// Enterprise 1.x
	} elseif ( CHILD_THEME_NAME == 'Enterprise Theme' || get_current_theme() == 'Enterprise Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Enterprise' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=102';

		// Executive
	} elseif ( CHILD_THEME_NAME == 'Executive Theme' || get_current_theme() == 'Executive Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Executive' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=79';

		// Expose
	} elseif ( CHILD_THEME_NAME == 'Expose Theme' || get_current_theme() == 'Expose Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Expose' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=136';

		// Fabric
	} elseif ( CHILD_THEME_NAME == 'Fabric Theme' || get_current_theme() == 'Fabric Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Fabric' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=173';

		// Family Tree
	} elseif ( CHILD_THEME_NAME == 'Family Tree Theme' || get_current_theme() == 'Family Tree Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Family Tree' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=100';

		// Focus 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Focus Theme' || get_current_theme() == 'Focus Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Focus' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=167';

		// Freelance
	} elseif ( CHILD_THEME_NAME == 'Freelance Theme' || get_current_theme() == 'Freelance Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Freelance' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=121';

		// Generate
	} elseif ( CHILD_THEME_NAME == 'Generate Theme' || get_current_theme() == 'Generate Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Generate' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=197';

		// Going Green
	} elseif ( CHILD_THEME_NAME == 'Going Green Theme' || get_current_theme() == 'Going Green Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Going Green' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=116';

		// Landscape
	} elseif ( CHILD_THEME_NAME == 'Landscape Theme' || get_current_theme() == 'Landscape Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Landscape' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=108';

		// Lexicon
	} elseif ( CHILD_THEME_NAME == 'Lexicon Theme' || get_current_theme() == 'Lexicon Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Lexicon' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=142';

		// Lifestyle 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Lifestyle Theme' || 
			( get_current_theme() == 'Lifestyle Child Theme' || 
				get_current_theme() == 'Lifestyle Green Child Theme' || 
				get_current_theme() == 'Lifestyle Peach Child Theme' || 
				get_current_theme() == 'Lifestyle Pink Child Theme' || 
				get_current_theme() == 'Lifestyle Purple Child Theme' ) 
		) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Lifestyle' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=92';

		// Luscious
	} elseif ( CHILD_THEME_NAME == 'Luscious Theme' || get_current_theme() == 'Luscious Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Luscious' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=190';

		// Magazine 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Magazine Theme' || get_current_theme() == 'Magazine Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Magazine' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=128';

		// Manhattan
	} elseif ( CHILD_THEME_NAME == 'Manhattan Theme' || get_current_theme() == 'Manhattan Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Manhattan' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=152';

		// Metric
	} elseif ( CHILD_THEME_NAME == 'Metric Theme' || get_current_theme() == 'Metric Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Metric' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=114';

		// Midnight
	} elseif ( CHILD_THEME_NAME == 'Midnight Theme' || get_current_theme() == 'Midnight Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Midnight' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=170';

		// Minimum
	} elseif ( CHILD_THEME_NAME == 'Minimum Theme' || get_current_theme() == 'Minimum Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Minimum' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=172';

		// Mocha
	} elseif ( CHILD_THEME_NAME == 'Mocha Theme' || get_current_theme() == 'Mocha Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Mocha' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=80';

		// News 1.x - 2.x
	} elseif ( CHILD_THEME_NAME == 'News Theme' || get_current_theme() == 'News Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'News' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=118';

		// Nitrous
	} elseif ( CHILD_THEME_NAME == 'Nitrous Theme' || get_current_theme() == 'Nitrous Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Nitrous' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=183';

		// Outreach
	} elseif ( CHILD_THEME_NAME == 'Outreach Theme' || get_current_theme() == 'Outreach Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Outreach' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=112';

		// Pixel Happy
	} elseif ( CHILD_THEME_NAME == 'Pixel Happy Theme' || get_current_theme() == 'Pixel Happy Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Pixel Happy' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=87';

		// Platinum
	} elseif ( CHILD_THEME_NAME == 'Platinum Theme' || get_current_theme() == 'Platinum Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Platinum' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=73';

		// Pretty Young Thing
	} elseif ( CHILD_THEME_NAME == 'Pretty Young Thing Theme' || get_current_theme() == 'Pretty Young Thing Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Pretty Young Thing' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=166';

		// Prose 1.0 + 1.5
	} elseif ( defined( 'PROSE_DOMAIN' ) || CHILD_THEME_NAME == 'Prose Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Prose' . $gtbe_theme;
		$spgenesis_child_aurl = admin_url( 'admin.php?page=design-settings' );
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=147';

		// Scribble
	} elseif ( CHILD_THEME_NAME == 'Scribble Theme' || get_current_theme() == 'Scribble Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Scribble' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=186';

		// Serenity
	} elseif ( CHILD_THEME_NAME == 'Serenity Theme' || get_current_theme() == 'Serenity Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Serenity' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=84';

		// Sleek
	} elseif ( CHILD_THEME_NAME == 'Sleek Theme' || 
			( get_current_theme() == 'Sleek Child Theme' || 
				get_current_theme() == 'Sleek Dark Child Theme' ) 
		) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Sleek' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=132';

		// Social Eyes
	} elseif ( CHILD_THEME_NAME == 'Social Eyes Theme' || get_current_theme() == 'Social Eyes Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Social Eyes' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=165';

		// Streamline 1.x - 2.0
	} elseif ( CHILD_THEME_NAME == 'Streamline Theme' || get_current_theme() == 'Streamline Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Streamline' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=81';

		// Tapestry
	} elseif ( CHILD_THEME_NAME == 'Tapestry Theme' || get_current_theme() == 'Tapestry Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Tapestry' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=195';

		// Venture
	} elseif ( CHILD_THEME_NAME == 'Venture Theme' || get_current_theme() == 'Venture Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Venture' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=195';

		// Copyblogger (free)
	} elseif ( CHILD_THEME_NAME == 'Copyblogger Theme' || get_current_theme() == 'Copyblogger Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Copyblogger' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// Fairway (free)
	} elseif ( CHILD_THEME_NAME == 'Fairway Theme' || get_current_theme() == 'Fairway Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Fairway' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// Georgia (free)
	} elseif ( CHILD_THEME_NAME == 'Georgia Theme' || get_current_theme() == 'Georgia Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Georgia' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// Nomadic (free)
	} elseif ( CHILD_THEME_NAME == 'Nomadic Theme' || get_current_theme() == 'Nomadic Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Nomadic' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// 24k (free)
	} elseif ( CHILD_THEME_NAME == '24k Child Theme' || get_current_theme() == '24k Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = '24k' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// Sample Child (free)
	} elseif ( CHILD_THEME_NAME == 'Sample Theme' || get_current_theme() == 'Sample Child Theme' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Sample' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=171';

		// Genesis Default Theme, no child!
	} elseif ( get_current_theme() == 'Genesis' ) {
		$gtbe_is_spchild = 'spchild_yes';
		$spgenesis_child_name = 'Genesis Default' . $gtbe_theme;
		$spgenesis_child_forum = 'http://www.studiopress.com/support/forumdisplay.php?f=75';

	}  // end if Genesis child theme check


	/** Official Child Themes - display links */
	if ( $gtbe_is_spchild == 'spchild_yes' && current_user_can( 'edit_theme_options' ) ) {

		/** "Theme Group" menu items */
		$menu_items['spgenesischild'] = array(
			'parent' => $tgroup,
			'title'  => $spgenesis_child_name,
			'href'   => $spgenesis_child_aurl,
			'meta'   => array( 'target' => '', 'title' => $spgenesis_child_name )
		);

		/** Display Readme.txt Child Theme Info */
		if ( class_exists( 'Genesis_Admin_Readme' ) && file_exists( get_stylesheet_directory() . '/README.txt' ) ) {
			$menu_items['spgenesischild-readme'] = array(
				'parent' => $spgenesischild,
				'title'  => __( 'README Info', 'genesis-toolbar-extras' ),
				'href'   => admin_url( 'admin.php?page=genesis-readme' ),
				'meta'   => array( 'target' => '', 'title' => __( 'README Info', 'genesis-toolbar-extras' ) )
			);
		}  // end-if readme check

		/** Child Theme Support Forum */
		$menu_items['spgenesischild-support'] = array(
			'parent' => $spgenesischild,
			'title'  => __( 'Support Forum', 'genesis-toolbar-extras' ),
			'href'   => $spgenesis_child_forum,
			'meta'   => array( 'title' => _x( 'Support Forum for Child Theme', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);

	}  // end-if official child themes display


/**
 * Special child theme stuff
 * Official child theme: Prose 1.0 and 1.5+
 * Third-party child theme: Extended Magazine
 *
 * @since 1.0
 */
	/** Design settings section - only if "Prose" or "Extended Magazine" (third-party child theme ) is active */
	if ( ( defined( 'PROSE_DOMAIN' ) || defined( 'EXTENDED_DESIGN_FIELD' ) ) && current_user_can( 'manage_options' ) ) {
		$menu_items['designsettings'] = array(
			'parent' => $tgroup,
			'title'  => __( 'Design Settings', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=design-settings' ),
			'meta'   => array( 'target' => '', 'title' => __( 'Design Settings', 'genesis-toolbar-extras' ) )
		);
	}  // end-if Design Settings check

	/** Prose Custom section - only for "Prose" 1.5+ */
	if ( class_exists( 'Prose_Custom_Code' ) && current_user_can( 'manage_options' ) ) {
		$menu_items['prosecustom'] = array(
			'parent' => $tgroup,
			'title'  => __( 'Custom Code &amp; CSS', 'genesis-toolbar-extras' ),
			'href'   => admin_url( 'admin.php?page=prose-custom' ),
			'meta'   => array( 'target' => '', 'title' => _x( 'Custom Code &amp; CSS for Prose', 'Translators: For the tooltip', 'genesis-toolbar-extras' ) )
		);
	}  // end-if Prose Custom check
