<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       https://wordpress.org/plugins/notes-widget-wrapper/
 * @since      0.0.1
 *
 * @package    Notes_Widget_Wrapper
 * @subpackage Notes_Widget_Wrapper/admin
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Notes_Widget_Wrapper
 * @subpackage Notes_Widget_Wrapper/admin
 * @author     Steve Puddick <steve@webrockstar.net>
 */
class Notes_Widget_Wrapper_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $Notes_Widget_Wrapper    The ID of this plugin.
	 */
	private $Notes_Widget_Wrapper;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.0.1
	 * @param      string    $Notes_Widget_Wrapper       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $Notes_Widget_Wrapper, $version ) {

		$this->Notes_Widget_Wrapper = $Notes_Widget_Wrapper;
		$this->version = $version;

	}

	/**
	 * 
	 *
	 * @since    0.0.1
	 */
	public function notes_widget_wrapper_form($t,$return,$instance){

		// Mapping input names used in 1.0.0 to new names. This resolves the conflict with input names from the WP Notes Widget plugin.
		if (isset($instance['thumb_tack_colour']) && !isset($instance['nww_thumb_tack_colour']) ) {
			$instance['nww_thumb_tack_colour'] = $instance['thumb_tack_colour'];
		}
		if (isset($instance['background_colour']) && !isset($instance['nww_background_colour']) ) {
			$instance['nww_background_colour'] = $instance['background_colour'];
		}
		if (isset($instance['text_colour']) && !isset($instance['nww_text_colour']) ) {
			$instance['nww_text_colour'] = $instance['text_colour'];
		}
		if (isset($instance['font_size']) && !isset($instance['nww_font_size']) ) {
			$instance['nww_font_size'] = $instance['font_size'];
		}
		if (isset($instance['iframe_height']) && !isset($instance['nww_iframe_height']) ) {
			$instance['nww_iframe_height'] = $instance['iframe_height'];
		}
		if (isset($instance['wrapper_css']) && !isset($instance['nww_wrapper_css']) ) {
			$instance['nww_wrapper_css'] = $instance['wrapper_css'];
		}
		if (isset($instance['font_style']) && !isset($instance['nww_font_style']) ) {
			$instance['nww_font_style'] = $instance['font_style'];
		}
		if (isset($instance['use_notes_widget_style']) && !isset($instance['nww_use_notes_widget_style']) ) {
			$instance['nww_use_notes_widget_style'] = $instance['use_notes_widget_style'];
		}

    $default_val = get_option( 'notes_widget_wrapper_defaults' );
    if (!$default_val) {
      $default_val = array(
        'thumb_tack_colour' => null,
        'background_colour' => null,
        'text_colour'       => null,
        'font_size'         => null,
        'font_style'        => null,
        'force_uppercase'   => null
      );
    }

		$instance = wp_parse_args( 
			(array) $instance, 
			array( 
				'nww_thumb_tack_colour' => NOTES_WIDGET_WRAPPER::get_plugin_default_setting('thumb_tack_colour'), 
				'nww_background_colour' => NOTES_WIDGET_WRAPPER::get_plugin_default_setting('background_colour'), 
				'nww_text_colour' 			=> NOTES_WIDGET_WRAPPER::get_plugin_default_setting('text_colour'),
				'nww_font_size' 				=> NOTES_WIDGET_WRAPPER::get_plugin_default_setting('font_size'),
				'nww_iframe_height' 		=> '200',
				'nww_wrapper_css' 			=> '',
				'nww_font_style' 				=> NOTES_WIDGET_WRAPPER::get_plugin_default_setting('font_style'),
        'nww_force_uppercase_letters' => NOTES_WIDGET_WRAPPER::get_plugin_default_setting('force_uppercase')
			) 
		);
		
		include( plugin_dir_path( dirname( __FILE__ ) ) . 'admin/view-notes-widget-wrapper-admin.php' );

		$retrun = null;
		
		return array($t,$return,$instance);

	}


	public function notes_widget_wrapper_form_update($instance, $new_instance, $old_instance){
		
		$instance['nww_use_notes_widget_style'] 	= isset($new_instance['nww_use_notes_widget_style']);
		$instance['nww_force_uppercase_letters'] 	= isset($new_instance['nww_force_uppercase_letters']);
		$instance['nww_thumb_tack_colour'] 				= sanitize_html_class($new_instance['nww_thumb_tack_colour']);
		$instance['nww_background_colour'] 				= sanitize_html_class($new_instance['nww_background_colour']);
		$instance['nww_text_colour'] 							= sanitize_html_class($new_instance['nww_text_colour']);
		$instance['nww_font_size'] 								= sanitize_html_class($new_instance['nww_font_size']);
		$instance['nww_font_style'] 							= sanitize_html_class($new_instance['nww_font_style']);
		$instance['nww_iframe_height'] 						= filter_var($new_instance['nww_iframe_height'], FILTER_SANITIZE_NUMBER_INT);
		$instance['nww_wrapper_css'] 							= sanitize_text_field($new_instance['nww_wrapper_css']);

		return $instance;
	}


	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_styles($hook) {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Notes_Widget_Wrapper_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Notes_Widget_Wrapper_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
    if ('settings_page_notes-widget-wrapper-widget-settings' == $hook || 'post.php' == $hook || 'post-new.php' == $hook ) {
      wp_enqueue_style( 'notes-widget-wrapper-bootstrap-theme-css', plugin_dir_url( __FILE__ ) . 'css/notes-widget-wrapper-bootstrap-theme.css', array(), $this->version, 'all' );
      wp_enqueue_style( 'notes-widget-wrapper-bootstrap-css', plugin_dir_url( __FILE__ ) . 'css/notes-widget-wrapper-bootstrap.css', array(), $this->version, 'all' );
      wp_enqueue_style( 'notes-widget-wrapper-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all' );
    }


		wp_enqueue_style( $this->Notes_Widget_Wrapper, plugin_dir_url( __FILE__ ) . 'css/notes-widget-wrapper-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the dashboard.
	 *
	 * @since    0.0.1
	 */
	public function enqueue_scripts($hook) {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Notes_Widget_Wrapper_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Notes_Widget_Wrapper_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */



		if ('widgets.php' == $hook) {
			wp_enqueue_script( $this->Notes_Widget_Wrapper, plugin_dir_url( __FILE__ ) . 'js/notes-widget-wrapper-admin.js', array( 'jquery' ), $this->version, false );
    } elseif ('settings_page_notes-widget-wrapper-widget-settings' == $hook ) {
      wp_enqueue_script('jquery');
      wp_enqueue_script( 'wp-ace-bootstrap-js', plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false ); 
      //wp_enqueue_script( 'notes-widget-wrapper-settings-js', plugin_dir_url( __FILE__ ) . 'js/notes-widget-wrapper-settings-admin.js', array( 'jquery' ), filemtime(plugin_dir_path( __FILE__ ) . 'js/notes-widget-wrapper-settings-admin.js'), false ); 
    } elseif (('post.php' == $hook && isset($_GET['post'])) || 'post-new.php' == $hook ) {
      wp_enqueue_script('jquery');
      wp_enqueue_script( 'notes-widget-wrapper-sc-editor', plugin_dir_url( __FILE__ ) . 'js/shortcode-editor.js', array( 'jquery' ), filemtime(plugin_dir_path( __FILE__ ) . 'js/shortcode-editor.js'), false );
      
      $translation_array = array(
        'add_your_content_here'    => esc_html__( 'Note styling will be applied to content between the opening and closing shortcode tag. Replace this line with your content.', 'notes-widget-wrapper' )
      );

      wp_localize_script( 'notes-widget-wrapper-sc-editor', 'translations', $translation_array );

      wp_enqueue_script( 'wp-ace-bootstrap-js', plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false );  
    }

	}

/**
   * Add Shortcode editor modal activation button to content editor interface 
   *
   * @since   
   */
  function shortcode_editor_button() {
    $screen = get_current_screen();
    if ( $screen->parent_base == 'edit' ) {
    ?>
      <a href="#" id="insert-notes-widget-wrapper-shortcode" class="button">
        <span>
          <?php esc_html_e('Add Note Wrapper', 'notes-widget-wrapper'); ?>
        </span>
      </a>
    <?php
    }
  }

    /**
   * Shortcode editor modal content output
   *
   * @since   
   */
  function shortcode_editor_modal() {
    $screen = get_current_screen();
    if ($screen->base == 'post' ) {
    
      $default_val = get_option( 'notes_widget_wrapper_defaults' );
      if (!$default_val) {
        $default_val = array();
      }

      if (!isset($default_val['thumb_tack_colour'])){
        $default_val['thumb_tack_colour'] = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('thumb_tack_colour');
      }
      if (!isset($default_val['background_colour'])){
        $default_val['background_colour'] = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('background_colour');
      }
      if (!isset($default_val['text_colour'])){
        $default_val['text_colour'] = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('text_colour');
      }
      if (!isset($default_val['font_size'])){
        $default_val['font_size'] = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('font_size');
      }
      if (!isset($default_val['show_date'])){
        $default_val['show_date'] = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('show_date');
      }
      if (!isset($default_val['use_custom_style'])){
        $default_val['use_custom_style'] = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('use_custom_style');
      }
      if (!isset($default_val['hide_if_empty'])){
        $default_val['hide_if_empty'] = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('hide_if_empty');
      }
      if (!isset($default_val['multiple_notes'])){
        $default_val['multiple_notes'] = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('multiple_notes');
      }
      if (!isset($default_val['enable_social_share'])){
        $default_val['enable_social_share'] = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('enable_social_share');
      }
      if (!isset($default_val['force_uppercase'])){
        $default_val['force_uppercase'] = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('force_uppercase');
      }
      if (!isset($default_val['font_style'])){
        $default_val['font_style'] = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('font_style');
      }
      
      $default_setting_val = get_option( 'notes_widget_wrapper_default_shortcode_settings' );
      if (!$default_setting_val) {
        $default_setting_val = array();
      }
      if (!isset($default_setting_val['max_width'])){
        $default_setting_val['max_width'] = NOTES_WIDGET_WRAPPER::get_plugin_default_shortcode_setting('max_width');
      }
      if (!isset($default_setting_val['max_width_units'])){
        $default_setting_val['max_width_units'] = NOTES_WIDGET_WRAPPER::get_plugin_default_shortcode_setting('max_width_units');
      }
      if (!isset($default_setting_val['alignment'])){
        $default_setting_val['alignment'] = NOTES_WIDGET_WRAPPER::get_plugin_default_shortcode_setting('alignment');
      }
      if (!isset($default_setting_val['direction'])){
        $default_setting_val['direction'] = NOTES_WIDGET_WRAPPER::get_plugin_default_shortcode_setting('direction');
      }

      require plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/admin-post-shortcode-editor-modal.php';
    }

  }

  /*============================================================================
    SETTINGS PAGE
  ==============================================================================*/

  /**
   *
   * Add Settings Page to menu
   *
   * @since 1.0.0 
   */
  function add_settings_page() {

    add_submenu_page(
      'options-general.php',
      'Notes Widget Wrapper Settings',                           // The title to be displayed in the browser window for this page.
      'Notes Widget Wrapper',                                    // The text to be displayed for this menu item
      'manage_options',                                     // Which type of users can see this menu item
      'notes-widget-wrapper-widget-settings',                           // The unique ID - that is, the slug - for this menu item
       array( $this, 'notes_widget_wrapper_settings_display')    // The name of the function to call when rendering this menu's page
    );
   
  } 
 
  /**
   *
   * Output default settings page content
   *
   * @since 1.0.0 
   */
  function notes_widget_wrapper_settings_display() {

    require plugin_dir_path( dirname( __FILE__ ) ) . 'admin/admin-settings-page-promo-sidebar.php';

  }


  /**
  * 
  *
  * @since 
  */
  function initialize_settings() {
    require plugin_dir_path( dirname( __FILE__ ) ) . 'admin/admin-settings-page-setup.php';
  } //end wp_notes_initialize_settings


}






