<?php
namespace MyPlugin\Shortcode;

use MyPlugin\Shortcode\ShortcodeAbout;
use MyPlugin\Shortcode\ShortcodeFeedBack;
use MyPlugin\Shortcode\ShortcodeEvents;
//use MyPlugin\Shortcode\ShortcodeLatestPosts;

use MyPlugin\Shortcode\ShortcodeFreshlyTaste;
use MyPlugin\Shortcode\ShortcodeContacts;
use MyPlugin\Shortcode\ShortcodeBannerAbout;
use MyPlugin\Shortcode\About\ShortcodeGeneralIntroduction;
use MyPlugin\Shortcode\About\ShortcodeAboutFrist;
use MyPlugin\Shortcode\About\ShortcodeAboutSecond;
use MyPlugin\Shortcode\About\ShortcodeAboutGallery;
use MyPlugin\Shortcode\About\ShortcodeAboutBenefits;
use MyPlugin\Shortcode\Contact\ShortcodeContactGeneral;
use MyPlugin\Shortcode\Contact\ShortcodeMap;
use MyPlugin\Shortcode\Contact\ShortcodeContactImg;
use MyPlugin\Shortcode\Contact\ShortcodeContactForm;
use MyPlugin\Shortcode\Menu\ShortcodeMenu1;
use MyPlugin\Shortcode\ShortcodeBookTable;

/**
 * @author lookawesome team
 * @version 1.0
 * @package Shortcode
 * 
 * Init shortCode for theme lookAwesome
*/
class ShortcodeInit 
{
	function __construct() {
		add_action( 'plugins_loaded', array($this, 'includeTemplate') );
	}

	public function includeTemplate() {
        new ShortcodeFreshlyTaste($this);
		new ShortcodeAbout($this);
		new ShortcodeFeedBack($this);
		new ShortcodeEvents($this);
		new ShortcodeContacts($this);
		new ShortcodeBannerAbout($this);
		new ShortcodeGeneralIntroduction($this);
		new ShortcodeAboutFrist($this);
		new ShortcodeAboutSecond($this);
		new ShortcodeAboutGallery($this);
		new ShortcodeAboutBenefits($this);
		new ShortcodeContactGeneral($this);
		new ShortcodeMap($this);
		new ShortcodeContactImg($this);
		new ShortcodeContactForm($this);
		new ShortcodeMenu1($this);
		new ShortcodeBookTable($this);
//		new ShortcodeLatestPosts($this);

	}

	/**
	 * Get template path.
	 *
	 * @param  string $filename Filename with extension.
	 * @return string           Template path.
	 */
	public function locateTemplate( $filename ) {
		$theme_dir = apply_filters( 'lookawesome_shortcode_template_theme_dir', 'shortcodes/' );
		$plugin_path = MYPLUGIN_PLUGIN_DIR . 'templates/shortcodes/';

		$path = '';

		if ( locate_template( $theme_dir . $filename ) ) {
			$path = locate_template( $theme_dir . $filename );
		} elseif ( file_exists( $plugin_path . $filename ) ) {
			$path = $plugin_path . $filename;
		}

		return apply_filters( 'lookawesome_shortcode_locate_template', $path, $filename );
	}
}
