<?php
  //namespace WP_Notes_Widget_PRO;


  /**
   * Default Settings Header Content
   *
   * @since 1.0.0  
   */
  function notes_widget_wrapper_default_settings_callback(  ) {
    ?>

    <p class="notes-widget-wrapper-limit-width" >
      <?php esc_html_e( 'Default settings for the widget and shortcode.', 'notes-widget-wrapper' ); ?>
    </p>

    <?php
  }

  /**
   * Default Shortcode Settings Header Content
   *
   * @since 1.0.0   
   */
  function notes_widget_wrapper_default_shortcode_settings_callback(  ) {
    ?>
    <p class="notes-widget-wrapper-limit-width" >
      <?php esc_html_e( 'Default shortcode specific settings.', 'notes-widget-wrapper' ); ?>
    </p>

    <?php
  }



  /*============================================================================
    DEFAULT SETTINGS FIELDS AND CALLBACKS
  ==============================================================================*/

  if( false == get_option( 'notes_widget_wrapper_defaults' ) ) {
    add_option( 'notes_widget_wrapper_defaults' );
  }

  /**
   * Default Thumb Tack Color Settings Callback
   *
   * @since 1.0.0    
   */
  function notes_widget_wrapper_default_thumb_tack_color_callback() {

    $thumb_tack_colour = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('thumb_tack_colour');

    ?>
      <label for="notes_widget_wrapper_defaults--thumb_tack_color" ><?php esc_html_e('Thumb Tack Color', 'notes-widget-wrapper' ) ?></label>
      <select id="notes_widget_wrapper_defaults--thumb_tack_color" name='notes_widget_wrapper_defaults[thumb_tack_colour]' >
        <option value="red"     <?php selected( $thumb_tack_colour, 'red' ); ?> >     <?php esc_html_e('Red', 'notes-widget-wrapper' ) ?></option>
        <option value="blue"    <?php selected( $thumb_tack_colour, 'blue' ); ?> >    <?php esc_html_e('Blue', 'notes-widget-wrapper' ) ?></option>
        <option value="green"   <?php selected( $thumb_tack_colour, 'green' ); ?> >   <?php esc_html_e('Green', 'notes-widget-wrapper' ) ?></option>
        <option value="gray"    <?php selected( $thumb_tack_colour, 'gray' ); ?> >    <?php esc_html_e('Gray', 'notes-widget-wrapper' ) ?></option>
        <option value="orange"  <?php selected( $thumb_tack_colour, 'orange' ); ?> >  <?php esc_html_e('Orange', 'notes-widget-wrapper' ) ?></option>
        <option value="pink"    <?php selected( $thumb_tack_colour, 'pink' ); ?> >    <?php esc_html_e('Pink', 'notes-widget-wrapper' ) ?></option>
        <option value="teal"    <?php selected( $thumb_tack_colour, 'teal' ); ?> >    <?php esc_html_e('Teal', 'notes-widget-wrapper' ) ?></option>
        <option value="yellow"  <?php selected( $thumb_tack_colour, 'yellow' ); ?> >  <?php esc_html_e('Yellow', 'notes-widget-wrapper' ) ?></option>
      </select>

    <?php
  }

  /**
   * Default Background Color Settings Callback
   *
   * @since 1.0.0    
   */
  function notes_widget_wrapper_default_background_callback() {

    $background_colour = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('background_colour');
    ?>
      <label for="notes_widget_wrapper_defaults--background_color" ><?php esc_html_e('Background Color', 'notes-widget-wrapper' ) ?></label>
      <select id="notes_widget_wrapper_defaults--background_color" name='notes_widget_wrapper_defaults[background_colour]' >
        <option value="yellow"      <?php selected( $background_colour, 'yellow' ); ?> >    <?php esc_html_e('Yellow', 'notes-widget-wrapper' ) ?>      </option>
        <option value="blue"        <?php selected( $background_colour, 'blue' ); ?> >      <?php esc_html_e('Blue', 'notes-widget-wrapper' ) ?>        </option>
        <option value="green"       <?php selected( $background_colour, 'green' ); ?> >     <?php esc_html_e('Green', 'notes-widget-wrapper' ) ?>      </option>
        <option value="pink"        <?php selected( $background_colour, 'pink' ); ?> >      <?php esc_html_e('Pink', 'notes-widget-wrapper' ) ?>        </option>
        <option value="orange"      <?php selected( $background_colour, 'orange' ); ?> >    <?php esc_html_e('Orange', 'notes-widget-wrapper' ) ?>      </option>
        <option value="white"       <?php selected( $background_colour, 'white' ); ?> >     <?php esc_html_e('White', 'notes-widget-wrapper' ) ?>      </option>
        <option value="dark-grey"   <?php selected( $background_colour, 'dark-grey' ); ?> > <?php esc_html_e('Dark Grey', 'notes-widget-wrapper' ) ?>  </option>
        <option value="light-grey"  <?php selected( $background_colour, 'light-grey' ); ?> ><?php esc_html_e('Light Grey', 'notes-widget-wrapper' ) ?>  </option>
      </select>

    <?php
  }

  /**
   * Default Text Color Settings Callback
   *
   * @since 1.0.0    
   */
  function notes_widget_wrapper_default_text_color_callback() {

    $text_colour = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('text_colour');
    ?>
      <label for="notes_widget_wrapper_defaults--text_color" ><?php esc_html_e('Text Color', 'notes-widget-wrapper' ) ?></label>
      <select id="notes_widget_wrapper_defaults--text_color" name='notes_widget_wrapper_defaults[text_colour]' >
        <option value="red"         <?php selected( $text_colour, 'red' ); ?> >  <?php esc_html_e('Red', 'notes-widget-wrapper' ) ?>        </option>
        <option value="blue"        <?php selected( $text_colour, 'blue' ); ?> >  <?php esc_html_e('Blue', 'notes-widget-wrapper' ) ?>        </option>
        <option value="black"       <?php selected( $text_colour, 'black' ); ?> >  <?php esc_html_e('Black', 'notes-widget-wrapper' ) ?>      </option>
        <option value="pink"        <?php selected( $text_colour, 'pink' ); ?> >  <?php esc_html_e('Pink', 'notes-widget-wrapper' ) ?>        </option>
        <option value="white"       <?php selected( $text_colour, 'white' ); ?> >  <?php esc_html_e('White', 'notes-widget-wrapper' ) ?>      </option>
        <option value="dark-grey"   <?php selected( $text_colour, 'dark-grey' ); ?> >  <?php esc_html_e('Dark Grey', 'notes-widget-wrapper' ) ?>  </option>
        <option value="light-grey"  <?php selected( $text_colour, 'light-grey' ); ?> >  <?php esc_html_e('Light Grey', 'notes-widget-wrapper' ) ?>  </option>
      </select>

    <?php
  }

  /**
   * Default Font Size Settings Callback
   *
   * @since 1.0.0    
   */
  function notes_widget_wrapper_default_font_size_callback() {

    $font_size = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('font_size');
    ?>
      <div class="form-group">
        <label for="notes_widget_wrapper_defaults--font_size" ><?php esc_html_e('Font Size', 'notes-widget-wrapper' ) ?></label>
        <select id="notes_widget_wrapper_defaults--font_size" name='notes_widget_wrapper_defaults[font_size]' >
          <option value="minus-50" <?php selected( $font_size, 'minus-50' ); ?> > <?php esc_html_e('50% smaller', 'notes-widget-wrapper' ) ?>  </option>
          <option value="minus-45" <?php selected( $font_size, 'minus-45' ); ?> > <?php esc_html_e('45% smaller', 'notes-widget-wrapper' ) ?>  </option>
          <option value="minus-40" <?php selected( $font_size, 'minus-40' ); ?> > <?php esc_html_e('40% smaller', 'notes-widget-wrapper' ) ?>  </option>
          <option value="minus-35" <?php selected( $font_size, 'minus-35' ); ?> > <?php esc_html_e('35% smaller', 'notes-widget-wrapper' ) ?>  </option>
          <option value="minus-30" <?php selected( $font_size, 'minus-30' ); ?> > <?php esc_html_e('30% smaller', 'notes-widget-wrapper' ) ?>  </option>
          <option value="minus-25" <?php selected( $font_size, 'minus-25' ); ?> > <?php esc_html_e('25% smaller', 'notes-widget-wrapper' ) ?>  </option>
          <option value="minus-20" <?php selected( $font_size, 'minus-20' ); ?> > <?php esc_html_e('20% smaller', 'notes-widget-wrapper' ) ?>  </option>
          <option value="minus-15" <?php selected( $font_size, 'minus-15' ); ?> > <?php esc_html_e('15% smaller', 'notes-widget-wrapper' ) ?>  </option>
          <option value="minus-10" <?php selected( $font_size, 'minus-10' ); ?> > <?php esc_html_e('10% smaller', 'notes-widget-wrapper' ) ?>  </option>
          <option value="minus-5"  <?php selected( $font_size, 'minus-5' ); ?> > <?php esc_html_e('5% smaller', 'notes-widget-wrapper' ) ?>  </option>

          <option value="normal" <?php selected( $font_size, 'normal' ); ?> >    <?php esc_html_e('Normal', 'notes-widget-wrapper' ) ?></option>

          <option value="plus-5"  <?php selected( $font_size, 'plus-5' ); ?> >   <?php esc_html_e('5% larger', 'notes-widget-wrapper' ) ?>  </option>
          <option value="plus-10" <?php selected( $font_size, 'plus-10' ); ?> >  <?php esc_html_e('10% larger', 'notes-widget-wrapper' ) ?>  </option>
          <option value="plus-15" <?php selected( $font_size, 'plus-15' ); ?> >  <?php esc_html_e('15% larger', 'notes-widget-wrapper' ) ?>  </option>
          <option value="plus-20" <?php selected( $font_size, 'plus-20' ); ?> >  <?php esc_html_e('20% larger', 'notes-widget-wrapper' ) ?>  </option>
          <option value="plus-25" <?php selected( $font_size, 'plus-25' ); ?> >  <?php esc_html_e('25% larger', 'notes-widget-wrapper' ) ?>  </option>
          <option value="plus-30" <?php selected( $font_size, 'plus-30' ); ?> >  <?php esc_html_e('30% larger', 'notes-widget-wrapper' ) ?>  </option>
          <option value="plus-35" <?php selected( $font_size, 'plus-35' ); ?> >  <?php esc_html_e('35% larger', 'notes-widget-wrapper' ) ?>  </option>
          <option value="plus-40" <?php selected( $font_size, 'plus-40' ); ?> >  <?php esc_html_e('40% larger', 'notes-widget-wrapper' ) ?>  </option>
          <option value="plus-45" <?php selected( $font_size, 'plus-45' ); ?> >  <?php esc_html_e('45% larger', 'notes-widget-wrapper' ) ?>  </option>
          <option value="plus-50" <?php selected( $font_size, 'plus-50' ); ?> >  <?php esc_html_e('50% larger', 'notes-widget-wrapper' ) ?>  </option>
        </select>
      </div>
    <?php
  }


  /**
   * Default Use Own CSS Boolean Settings Callback
   *
   * @since 1.0.0   
   */
  function notes_widget_wrapper_default_use_own_css_callback() {

    $use_custom_style = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('use_custom_style');
    
    ?>
      <div class="checkbox">
        <label for="notes_widget_wrapper_defaults--use_own_css" >
        <input type='checkbox' id="notes_widget_wrapper_defaults--use_own_css" <?php checked($use_custom_style, 'checked'); ?> name='notes_widget_wrapper_defaults[use_custom_style]' value='checked' ><?php esc_html_e('Use Custom CSS','notes-widget-wrapper'); ?></label>
      </div>
    <?php
  }



  /**
   * Default Force Uppercase Boolean Settings Callback
   *
   * @since 1.0.0    
   */
  function notes_widget_wrapper_default_force_uppercase_callback() {

    $force_uppercase = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('force_uppercase');
    ?>

      <div class="checkbox">
        <label><input type='checkbox' id="notes_widget_wrapper_defaults--force_uppercase" <?php checked($force_uppercase, 'checked'); ?> name='notes_widget_wrapper_defaults[force_uppercase]' value='checked' ><?php esc_html_e('Force Uppercase Letters','notes-widget-wrapper'); ?></label>
      </div>

    <?php
  }


  /**
   * Default Font Style Settings Callback
   *
   * @since 1.0.0    
   */
  function notes_widget_wrapper_default_font_style_callback() {

    $font_style = NOTES_WIDGET_WRAPPER::get_plugin_default_setting('font_style');
    ?>
      <div class="font-style-selection-container" >
        <?php

          $font_mapping = array(
            'kalam'                   => 'Kalam',
            'dancing-script'          => 'Dancing Script',
            'kaushan-script'          => 'Kaushan Script',
            'gloria-hallelujah'       => 'Gloria Hallelujah',
            'covered-by-your-grace'   => 'Covered By Your Grace',
            'courgette'               => 'Courgette',
            'coming-soon'             => 'Coming Soon',
            'satisfy'                 => 'Satisfy',
            'permanent-marker'        => 'Permanent Marker',
            'shadows-into-light-two'  => 'Shadows Into Light Two',
            'rock-salt'               => 'Rock Salt',
            'cookie'                  => 'Cookie',
            'handlee'                 => 'Handlee',
            'tangerine'               => 'Tangerine',
            'great-vibes'             => 'Great Vibes'
          );
        ?>
        <ul class="notes-widget-wrapper-font-list" >
          <?php
            foreach ($font_mapping as $key => $font_mapping_item) {
              ?>
              <li class="notes-widget-wrapper__settings__radio-checkbox-input-item font-style-item font-<?php echo $key ?>" >
                <input type="radio" id="<?php echo  $key ; ?>" <?php checked($font_style, $key); ?> name="notes_widget_wrapper_defaults[font_style]" value="<?php echo $key ?>" />
                <label for="<?php echo $key ; ?>" id="font-selection-<?php echo $key ?>-label"  ><?php esc_html_e('Font Style','notes-widget-wrapper'); ?> - <?php echo $font_mapping_item ?></label>
              </li>
              <?php
            }
          ?>
        </ul>
      </div>
    <?php
  }

  /**
   *
   * Default Settings
   *
   */
  add_settings_section(
    'notes_widget_wrapper_default_settings',                 // ID used to identify this section and with which to register options
    esc_html__('Default Settings','notes-widget-wrapper'),                                 // Title to be displayed on the administration page
    'notes_widget_wrapper_default_settings_callback',        // Callback used to render the description of the section
    'notes_widget_wrapper_default_settings_page_partial'                     // Page on which to add this section of options
  );


  add_settings_field(
    'notes_widget_wrapper_default_thumb_tack_color',           // ID used to identify the field throughout the theme
    '<small class="text-muted" >'.esc_html__('Thumb tack color for notes','notes-widget-wrapper').'</small>',                                   // The label to the left of the option interface element
    'notes_widget_wrapper_default_thumb_tack_color_callback',  // The name of the function responsible for rendering the option interface
    'notes_widget_wrapper_default_settings_page_partial',                      // The page on which this option will be displayed
    'notes_widget_wrapper_default_settings'                    // The name of the section to which this field belongs
  );

  add_settings_field(
    'notes_widget_wrapper_default_background_color',
    '<small class="text-muted" >'.esc_html__('Background color for notes','notes-widget-wrapper').'</small>',
    'notes_widget_wrapper_default_background_callback',
    'notes_widget_wrapper_default_settings_page_partial',
    'notes_widget_wrapper_default_settings'
  );

  add_settings_field(
    'notes_widget_wrapper_default_text_color',
    '<small class="text-muted" >'.esc_html__('Text color for notes','notes-widget-wrapper').'</small>',
    'notes_widget_wrapper_default_text_color_callback',
    'notes_widget_wrapper_default_settings_page_partial',
    'notes_widget_wrapper_default_settings'
  );

  add_settings_field(
    'notes_widget_wrapper_default_font_size',
    '<small class="text-muted" >'.esc_html__('Font size for notes','notes-widget-wrapper').'</small>',
    'notes_widget_wrapper_default_font_size_callback',
    'notes_widget_wrapper_default_settings_page_partial',
    'notes_widget_wrapper_default_settings'
  );

  add_settings_field(
    'notes_widget_wrapper_default_use_own_css',
    '<small class="text-muted" >'.esc_html__('Do not include the built in note CSS style. Only enable if you have advanced CSS knowledge.','notes-widget-wrapper').'</small>',
    'notes_widget_wrapper_default_use_own_css_callback',
    'notes_widget_wrapper_default_settings_page_partial',
    'notes_widget_wrapper_default_settings'
  );

  add_settings_field(
    'notes_widget_wrapper_default_force_uppercase',
    '<small class="text-muted" >'.esc_html__('Convert all the text to uppercase letters','notes-widget-wrapper').'</small>',
    'notes_widget_wrapper_default_force_uppercase_callback',
    'notes_widget_wrapper_default_settings_page_partial',
    'notes_widget_wrapper_default_settings'
  );

  add_settings_field(
    'notes-widget-wrapper_default_font_style',
    '<small class="text-muted" >'.esc_html__('Font style for the note','notes-widget-wrapper').'</small>',
    'notes_widget_wrapper_default_font_style_callback',
    'notes_widget_wrapper_default_settings_page_partial',
    'notes_widget_wrapper_default_settings'
  );

  register_setting(
    'notes_widget_wrapper_settings_page',
    'notes_widget_wrapper_defaults'
  );


  /*============================================================================
    SHORTCODE DEFAULT SETTINGS FIELDS AND CALLBACKS
  ==============================================================================*/

  if( false == get_option( 'notes_widget_wrapper_default_shortcode_settings' ) ) {
    add_option( 'notes_widget_wrapper_default_shortcode_settings' );
  }

  /**
   *
   * Shortcode Default Max Width Setting
   *
   * @since 1.0.0 
   */
  function notes_widget_wrapper_default_shortcode__max_width_callback() {

    $max_width = NOTES_WIDGET_WRAPPER::get_plugin_default_shortcode_setting('max_width');
    ?>

      <div class="form-group">
        <label for="notes_widget_wrapper__shortcode-defaults__max-width"><?php esc_html_e('Max Width','notes-widget-wrapper'); ?></label>
        <input type='number' min="1" id="notes_widget_wrapper__shortcode-defaults__max-width" name='notes_widget_wrapper_default_shortcode_settings[max_width]' value='<?php echo $max_width ?>' >
      </div>

    <?php
  }

  /**
   *
   * Shortcode Default Max Width Units Setting
   *
   * @since 1.0.0 
   */
  function notes_widget_wrapper_default_shortcode__max_width_units_callback() {

    $max_width_units = NOTES_WIDGET_WRAPPER::get_plugin_default_shortcode_setting('max_width_units');
    ?>
    <div class="form-group">
      <label for="notes_widget_wrapper__shortcode-defaults__max-width-units" ><?php esc_html_e('Max Width Units','notes-widget-wrapper'); ?></label>

      <select id="notes_widget_wrapper__shortcode-defaults__max-width-units" name='notes_widget_wrapper_default_shortcode_settings[max_width_units]' >
        <option value="px" <?php selected( $max_width_units, 'px' ); ?> >  px</option>
        <option value="em" <?php selected( $max_width_units, 'em' ); ?> >  em</option>
        <option value="rem" <?php selected( $max_width_units, 'rem' ); ?> >rem</option>
        <option value="percent" <?php selected( $max_width_units, 'percent' ); ?> >    %</option>
      </select>
    </div>

    <?php
  }

  /**
   *
   * Shortcode Default Alignment Setting
   *
   * @since 1.0.0 
   */
  function notes_widget_wrapper_default_shortcode__alignment_callback() {

    $alignment = NOTES_WIDGET_WRAPPER::get_plugin_default_shortcode_setting('alignment');
    ?>
    <label for="notes-widget-wrapper__settings__alignment-container" ><?php esc_html_e('Alignment','notes-widget-wrapper'); ?></label>
    <div id="notes-widget-wrapper__settings__alignment-container" >
      <label class="radio-inline"><input type="radio" name="notes_widget_wrapper_default_shortcode_settings[alignment]" <?php checked( $alignment, 'left' ); ?> value="left"><?php esc_html_e('Left','notes-widget-wrapper'); ?></label>
      <label class="radio-inline"><input type="radio" name="notes_widget_wrapper_default_shortcode_settings[alignment]" <?php checked( $alignment, 'center' ); ?> value="center"><?php esc_html_e('Center','notes-widget-wrapper'); ?></label>
      <label class="radio-inline"><input type="radio" name="notes_widget_wrapper_default_shortcode_settings[alignment]" <?php checked( $alignment, 'right' ); ?> value="right"><?php esc_html_e('Right','notes-widget-wrapper'); ?></label>
    </div>

    <?php
  }



  add_settings_section(
    'notes_widget_wrapper_default_shortcode_settings',                 // ID used to identify this section and with which to register options
     esc_html__('Default Shortcode Settings','notes-widget-wrapper'),                                // Title to be displayed on the administration page
    'notes_widget_wrapper_default_shortcode_settings_callback',        // Callback used to render the description of the section
    'notes_widget_wrapper_default_shortcode_settings_page_partial'     // Page on which to add this section of options
  );

  add_settings_field(
    'notes_widget_wrapper_default_shortcode__max_width',
    '<small class="text-muted" >'.esc_html__('Max width of the note container','notes-widget-wrapper').'</small>',
    'notes_widget_wrapper_default_shortcode__max_width_callback',
    'notes_widget_wrapper_default_shortcode_settings_page_partial',
    'notes_widget_wrapper_default_shortcode_settings'
  );

  add_settings_field(
    'notes_widget_wrapper_default_shortcode__max_width_units',
    '<small class="text-muted" >'.esc_html__('CSS units of the max width note container','notes-widget-wrapper').'</small>',
    'notes_widget_wrapper_default_shortcode__max_width_units_callback',
    'notes_widget_wrapper_default_shortcode_settings_page_partial',
    'notes_widget_wrapper_default_shortcode_settings'
  );
  
  add_settings_field(
    'notes_widget_wrapper_default_shortcode__alignment',
    '<small class="text-muted" >'.esc_html__('Alignment of the note container','notes-widget-wrapper').'</small>',
    'notes_widget_wrapper_default_shortcode__alignment_callback',
    'notes_widget_wrapper_default_shortcode_settings_page_partial',
    'notes_widget_wrapper_default_shortcode_settings'
  );

  register_setting(
    'notes_widget_wrapper_settings_page',
    'notes_widget_wrapper_default_shortcode_settings'
  );


