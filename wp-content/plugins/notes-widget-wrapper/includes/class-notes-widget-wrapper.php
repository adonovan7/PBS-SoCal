<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the dashboard.
 *
 * @link       https://wordpress.org/plugins/notes-widget-wrapper/
 * @since      0.0.1
 *
 * @package    Notes_Widget_Wrapper
 * @subpackage Notes_Widget_Wrapper/includes
 */

if(!defined("NOTES_WIDGET_WRAPPER_PRO_LINK")){
  define("NOTES_WIDGET_WRAPPER_PRO_LINK",     "http://webrockstar.net/downloads/notes-widget-wrapper-pro");
}

/**
 * The core plugin class.
 *
 * This is used to define internationalization, dashboard-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      0.0.1
 * @package    Notes_Widget_Wrapper
 * @subpackage Notes_Widget_Wrapper/includes
 * @author     Steve Puddick <steve@webrockstar.net>
 */
class Notes_Widget_Wrapper {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    0.0.1
	 * @access   protected
	 * @var      Notes_Widget_Wrapper_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    0.0.1
	 * @access   protected
	 * @var      string    $Notes_Widget_Wrapper    The string used to uniquely identify this plugin.
	 */
	protected $Notes_Widget_Wrapper;

	/**
	 * The current version of the plugin.
	 *
	 * @since    0.0.1
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the Dashboard and
	 * the public-facing side of the site.
	 *
	 * @since    0.0.1
	 */
	public function __construct() {

		$this->Notes_Widget_Wrapper = 'notes-widget-wrapper';
		$this->version = '1.2.0';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Notes_Widget_Wrapper_Loader. Orchestrates the hooks of the plugin.
	 * - Notes_Widget_Wrapper_i18n. Defines internationalization functionality.
	 * - Notes_Widget_Wrapper_Admin. Defines all hooks for the dashboard.
	 * - Notes_Widget_Wrapper_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    0.0.1
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-notes-widget-wrapper-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-notes-widget-wrapper-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the Dashboard.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-notes-widget-wrapper-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-notes-widget-wrapper-public.php';

		$this->loader = new Notes_Widget_Wrapper_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Notes_Widget_Wrapper_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    0.0.1
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Notes_Widget_Wrapper_i18n();
		$plugin_i18n->set_domain( $this->get_Notes_Widget_Wrapper() );

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the dashboard functionality
	 * of the plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Notes_Widget_Wrapper_Admin( $this->get_Notes_Widget_Wrapper(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		$this->loader->add_action( 'in_widget_form' , $plugin_admin, 'notes_widget_wrapper_form',5,3 );
		$this->loader->add_filter( 'widget_update_callback' , $plugin_admin, 'notes_widget_wrapper_form_update',5,3 );

		$this->loader->add_action( 'admin_menu',            $plugin_admin, 'add_settings_page'); 
    $this->loader->add_action( 'admin_init',            $plugin_admin, 'initialize_settings'); 
    //$this->loader->add_filter( 'admin_body_class',      $plugin_admin, 'set_wrs_admin_branding');
    $this->loader->add_filter( 'media_buttons',         $plugin_admin, 'shortcode_editor_button', 15);
    $this->loader->add_filter( 'admin_footer',          $plugin_admin, 'shortcode_editor_modal');
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Notes_Widget_Wrapper_Public( $this->get_Notes_Widget_Wrapper(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		
		$this->loader->add_filter( 'dynamic_sidebar_params' , $plugin_public, 'notes_widget_wrapper_update_callback' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    0.0.1
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     0.0.1
	 * @return    string    The name of the plugin.
	 */
	public function get_Notes_Widget_Wrapper() {
		return $this->Notes_Widget_Wrapper;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     0.0.1
	 * @return    Notes_Widget_Wrapper_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     0.0.1
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

  /**
   * Retrieve plugin level default values
   *
   * @since     
   * @return    string    Value for default setting. Returns false if key is invalid.
   */
  public static function get_plugin_default_setting($key) {
  	$default_val = get_option( 'notes_widget_wrapper_defaults' );
    if (!$default_val) {
      $default_val = array();
    }

    switch($key) {
      case 'thumb_tack_colour':
        if (isset($default_val['thumb_tack_colour'])){
		      return $default_val['thumb_tack_colour'];
		    } else {
		    	return "red";
		    }
        
        break;
      case 'text_colour':
        if (isset($default_val['text_colour'])){
		      return $default_val['text_colour'];
		    } else {
		    	return "red";
		    }

        break;
      case 'background_colour':
        if (isset($default_val['background_colour'])){
		      return $default_val['background_colour'];
		    } else {
		    	return "yellow";
		    }

        break;
      case 'use_custom_style':
        if (isset($default_val['use_custom_style'])){
		      return $default_val['use_custom_style'];
		    } else {
		    	return false;
		    }

        break;
      case 'font_size':
        if (isset($default_val['font_size'])){
		      return $default_val['font_size'];
		    } else {
		    	return "normal";
		    }

        break;
      case 'font_style':
        if (isset($default_val['font_style'])){
		      return $default_val['font_style'];
		    } else {
		    	return "kalam";
		    }

        break;
      case 'force_uppercase':
        if (isset($default_val['force_uppercase'])){
		      return $default_val['force_uppercase'];
		    } else {
		    	return false;
		    }

        break;
      default:
        return false;
        break;
    }

  }

  /**
   * Retrieve plugin level shortcode default values
   *
   * @since     
   * @return    string    Value for shortcode default setting. Returns false if key is invalid.
   */
  public static function get_plugin_default_shortcode_setting($key) {

    $default_setting_val = get_option( 'notes_widget_wrapper_default_shortcode_settings' );
    if (!$default_setting_val) {
      $default_setting_val = array();
    }

    switch($key) {
      case 'max_width':
        if (isset($default_val['max_width'])){
		      return $default_val['max_width'];
		    } else {
		    	return "100";
		    }

        break;
      case 'max_width_units':
        if (isset($default_val['max_width_units'])){
		      return $default_val['max_width_units'];
		    } else {
		    	return "percent";
		    }

        break;
      case 'alignment':
        if (isset($default_val['alignment'])){
		      return $default_val['alignment'];
		    } else {
		    	return "left";
		    }

        break;
      default:
        return false;
        break;
    }

  }

}
