<?php

namespace MyPlugin;

/**
 * @author Nguyen Anh Tuan
 * @version 1.0
 * @package MyPlugin
 * 
 * Init plugin for theme myTheme
*/
class MyPlugin
{
    static $getInstance = null;

    public $version = '1.0';

    public static function getInstance()
    {
        if (!(self::$getInstance instanceof self)) {
            self::$getInstance = new self();
        }
        return self::$getInstance;
    }

    protected function __construct(){
        $this->loadModule();

        $this->init();
    }

    public function init(){

        do_action('nautzick_before_init');

         new PostType\PostTypeInit;
        // new Taxonomies\TaxonomiesInit;

        $this->themeSettings();

         if ( in_array( 'js_composer/js_composer.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
             $this->shortcode = new Shortcode\ShortcodeInit;
         }

        $this->widgets = new Widgets\InitWidget;

        do_action('nautzick_after_init');
    }

    public function themeSettings(){
        $this->themeSettings = new ThemeSettings\ThemeSettingInit;
    }

    /**
     * load_module.
     * Load module for blog.
     */
    protected function loadModule()
    {
        require_once 'Autoload/MyPluginAutoload.php';

        do_action('nautzick_load_module');
       
        MyPluginAutoload::getInstance();
    }
}

function MyPlugin(){
    return MyPlugin::getInstance();
}

$GLOBALS['myplugin'] = MyPlugin();