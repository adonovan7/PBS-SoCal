  <div style="">
    <div class="notes-widget-wrapper-bootstrap" >
      <div class="modal fade" id="notes-widget-wrapper__shortcode-editor-modal"  tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><?php esc_html_e('Note Wrapper Shortcode Editor','notes-widget-wrapper'); ?></h4>
            </div>
            <div class="modal-body">
              
              <div class="alert alert-info" role="alert">
                <i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo sprintf('This is a preview of the shortcode editor available in %1$s. Shortcodes allows for a section of content to have sticky note styling. %2$s about Notes Widget Wrapper PRO.', '<a href="'. NOTES_WIDGET_WRAPPER_PRO_LINK .'?utm_source=notes-widget-wrapper-plugin&utm-medium=shortcode-editor-modal-header">Notes Widget Wrapper PRO</a>', '<a href="'. NOTES_WIDGET_WRAPPER_PRO_LINK .'?utm_source=notes-widget-wrapper-plugin&utm-medium=shortcode-editor-modal-header">Learn more</a>'); ?>  
              </div>

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#nww-visual" aria-controls="visual" role="tab" data-toggle="tab"><?php esc_html_e('Visual Settings','notes-widget-wrapper'); ?></a></li>
                <li role="presentation"><a href="#nww-general" aria-controls="general" role="tab" data-toggle="tab"><?php esc_html_e('General Settings','notes-widget-wrapper'); ?></a></li>
                <li role="presentation"><a href="#nww-font-style" aria-controls="font-style" role="tab" data-toggle="tab"><?php esc_html_e('Font Style','notes-widget-wrapper'); ?></a></li>
                <li role="presentation"><a href="#nww-shortcode" aria-controls="shortcode" role="tab" data-toggle="tab"><?php esc_html_e('Shortcode Settings','notes-widget-wrapper'); ?></a></li>
              </ul>

              <!-- Tab panes -->
              <div class="notes-widget-wrapper--tab-content-container">
                <div class="tab-content">
                  <section role="tabpanel" class="tab-pane active fade in" id="nww-visual">
                    <a href='#' class="notes-widget-wrapper__scroll-to-bottom hidden" ><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                    <header>
                      <h4><?php esc_html_e('Visual Settings','notes-widget-wrapper'); ?></h4>
                    </header>

                    <div class="notes-widget-wrapper__settings__select-container" >
                      <label for="notes-widget-wrapper__settings__thumb-tack-color" ><?php esc_html_e('Thumb Tack Color', 'notes-widget-wrapper' ) ?></label>
                      <select id="notes-widget-wrapper__settings__thumb-tack-color" name='notes-widget-wrapper__settings__thumb-tack-color' >
                        <option value="red"     <?php selected( $default_val['thumb_tack_colour'], 'red' ); ?> >     <?php esc_html_e('Red', 'notes-widget-wrapper' ) ?></option>
                        <option value="blue"    <?php selected( $default_val['thumb_tack_colour'], 'blue' ); ?> >    <?php esc_html_e('Blue', 'notes-widget-wrapper' ) ?></option>
                        <option value="green"   <?php selected( $default_val['thumb_tack_colour'], 'green' ); ?> >   <?php esc_html_e('Green', 'notes-widget-wrapper' ) ?></option>
                        <option value="gray"    <?php selected( $default_val['thumb_tack_colour'], 'gray' ); ?> >    <?php esc_html_e('Gray', 'notes-widget-wrapper' ) ?></option>
                        <option value="orange"  <?php selected( $default_val['thumb_tack_colour'], 'orange' ); ?> >  <?php esc_html_e('Orange', 'notes-widget-wrapper' ) ?></option>
                        <option value="pink"    <?php selected( $default_val['thumb_tack_colour'], 'pink' ); ?> >     <?php esc_html_e('Pink', 'notes-widget-wrapper' ) ?></option>
                        <option value="teal"    <?php selected( $default_val['thumb_tack_colour'], 'teal' ); ?> >    <?php esc_html_e('Teal', 'notes-widget-wrapper' ) ?></option>
                        <option value="yellow"  <?php selected( $default_val['thumb_tack_colour'], 'yellow' ); ?> >  <?php esc_html_e('Yellow', 'notes-widget-wrapper' ) ?></option>
                      </select>                    
                    </div>

                    <div class="notes-widget-wrapper__settings__select-container" >
                      <label for="notes-widget-wrapper__settings__text-color" ><?php esc_html_e('Text Color', 'notes-widget-wrapper' ) ?></label>
                      <select id="notes-widget-wrapper__settings__text-color" name='notes-widget-wrapper__settings__text-color' >
                        <option value="red"         <?php selected( $default_val['text_colour'], 'red' ); ?> >  <?php esc_html_e('Red', 'notes-widget-wrapper' ) ?>        </option>
                        <option value="blue"        <?php selected( $default_val['text_colour'], 'blue' ); ?> >  <?php esc_html_e('Blue', 'notes-widget-wrapper' ) ?>        </option>
                        <option value="black"       <?php selected( $default_val['text_colour'], 'black' ); ?> >  <?php esc_html_e('Black', 'notes-widget-wrapper' ) ?>      </option>
                        <option value="pink"        <?php selected( $default_val['text_colour'], 'pink' ); ?> >  <?php esc_html_e('Pink', 'notes-widget-wrapper' ) ?>        </option>
                        <option value="white"       <?php selected( $default_val['text_colour'], 'white' ); ?> >  <?php esc_html_e('White', 'notes-widget-wrapper' ) ?>      </option>
                        <option value="dark-grey"   <?php selected( $default_val['text_colour'], 'dark-grey' ); ?> >  <?php esc_html_e('Dark Grey', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="light-grey"  <?php selected( $default_val['text_colour'], 'light-grey' ); ?> >  <?php esc_html_e('Light Grey', 'notes-widget-wrapper' ) ?>  </option>
                      </select>                    
                    </div>

                    <div class="notes-widget-wrapper__settings__select-container" >
                      <label for="notes-widget-wrapper__settings__background-color" ><?php esc_html_e('Background Color', 'notes-widget-wrapper' ) ?></label>
                      <select id="notes-widget-wrapper__settings__background-color" name='notes-widget-wrapper__settings__background-color' >
                        <option value="yellow"      <?php selected( $default_val['background_colour'], 'yellow' ); ?> >    <?php esc_html_e('Yellow', 'notes-widget-wrapper' ) ?>      </option>
                        <option value="blue"        <?php selected( $default_val['background_colour'], 'blue' ); ?> >      <?php esc_html_e('Blue', 'notes-widget-wrapper' ) ?>        </option>
                        <option value="green"       <?php selected( $default_val['background_colour'], 'green' ); ?> >     <?php esc_html_e('Green', 'notes-widget-wrapper' ) ?>      </option>
                        <option value="pink"        <?php selected( $default_val['background_colour'], 'pink' ); ?> >      <?php esc_html_e('Pink', 'notes-widget-wrapper' ) ?>        </option>
                        <option value="orange"      <?php selected( $default_val['background_colour'], 'orange' ); ?> >    <?php esc_html_e('Orange', 'notes-widget-wrapper' ) ?>      </option>
                        <option value="white"       <?php selected( $default_val['background_colour'], 'white' ); ?> >     <?php esc_html_e('White', 'notes-widget-wrapper' ) ?>      </option>
                        <option value="dark-grey"   <?php selected( $default_val['background_colour'], 'dark-grey' ); ?> > <?php esc_html_e('Dark Grey', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="light-grey"  <?php selected( $default_val['background_colour'], 'light-grey' ); ?> ><?php esc_html_e('Light Grey', 'notes-widget-wrapper' ) ?>  </option>
                      </select>                    
                    </div>

                    <div class="notes-widget-wrapper__settings__select-container" >
                      <label for="notes-widget-wrapper__settings__font-size" ><?php esc_html_e('Font Size', 'notes-widget-wrapper' ) ?></label>
                      <select id="notes-widget-wrapper__settings__font-size" name='notes-widget-wrapper__settings__font-size' >
                        <option value="minus-50" <?php selected( $default_val['font_size'], 'minus-50' ); ?> > <?php esc_html_e('50% smaller', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="minus-45" <?php selected( $default_val['font_size'], 'minus-45' ); ?> > <?php esc_html_e('45% smaller', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="minus-40" <?php selected( $default_val['font_size'], 'minus-40' ); ?> > <?php esc_html_e('40% smaller', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="minus-35" <?php selected( $default_val['font_size'], 'minus-35' ); ?> > <?php esc_html_e('35% smaller', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="minus-30" <?php selected( $default_val['font_size'], 'minus-30' ); ?> > <?php esc_html_e('30% smaller', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="minus-25" <?php selected( $default_val['font_size'], 'minus-25' ); ?> > <?php esc_html_e('25% smaller', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="minus-20" <?php selected( $default_val['font_size'], 'minus-20' ); ?> > <?php esc_html_e('20% smaller', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="minus-15" <?php selected( $default_val['font_size'], 'minus-15' ); ?> > <?php esc_html_e('15% smaller', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="minus-10" <?php selected( $default_val['font_size'], 'minus-10' ); ?> > <?php esc_html_e('10% smaller', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="minus-5"  <?php selected( $default_val['font_size'], 'minus-5' ); ?> > <?php esc_html_e('5% smaller', 'notes-widget-wrapper' ) ?>  </option>
                        
                        <option value="normal" <?php selected( $default_val['font_size'], 'normal' ); ?> >    <?php esc_html_e('Normal', 'notes-widget-wrapper' ) ?></option>
                        
                        <option value="plus-5"  <?php selected( $default_val['font_size'], 'plus-5' ); ?> >   <?php esc_html_e('5% larger', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="plus-10" <?php selected( $default_val['font_size'], 'plus-10' ); ?> >  <?php esc_html_e('10% larger', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="plus-15" <?php selected( $default_val['font_size'], 'plus-15' ); ?> >  <?php esc_html_e('15% larger', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="plus-20" <?php selected( $default_val['font_size'], 'plus-20' ); ?> >  <?php esc_html_e('20% larger', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="plus-25" <?php selected( $default_val['font_size'], 'plus-25' ); ?> >  <?php esc_html_e('25% larger', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="plus-30" <?php selected( $default_val['font_size'], 'plus-30' ); ?> >  <?php esc_html_e('30% larger', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="plus-35" <?php selected( $default_val['font_size'], 'plus-35' ); ?> >  <?php esc_html_e('35% larger', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="plus-40" <?php selected( $default_val['font_size'], 'plus-40' ); ?> >  <?php esc_html_e('40% larger', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="plus-45" <?php selected( $default_val['font_size'], 'plus-45' ); ?> >  <?php esc_html_e('45% larger', 'notes-widget-wrapper' ) ?>  </option>
                        <option value="plus-50" <?php selected( $default_val['font_size'], 'plus-50' ); ?> >  <?php esc_html_e('50% larger', 'notes-widget-wrapper' ) ?>  </option>
                      </select>                    
                    </div>

                  </section>

                  <section role="tabpanel" class="tab-pane fade " id="nww-general">
                    <a href='#' class="notes-widget-wrapper__scroll-to-bottom hidden" ><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                    <header>
                      <h4><?php esc_html_e('General Settings', 'notes-widget-wrapper'); ?></h4> 
                    </header>
                    
                    <ul>
                      <li class="notes-widget-wrapper__settings__radio-checkbox-input-item" >
                        <input type="checkbox" <?php checked((bool)$default_val['force_uppercase']); ?> value="true" name="notes-widget-wrapper__settings__uppercase" id="notes-widget-wrapper__settings__uppercase" />
                        <label for="notes-widget-wrapper__settings__uppercase"><?php esc_html_e('Force uppercase letters', 'notes-widget-wrapper'); ?></label>
                      </li>
                      <li class="notes-widget-wrapper__settings__radio-checkbox-input-item" >
                        <input type="checkbox" <?php checked((bool)$default_val['use_custom_style']); ?> value="true" name="notes-widget-wrapper__settings__use-own-css" id="notes-widget-wrapper__settings__use-own-css" />
                        <label for="notes-widget-wrapper__settings__use-own-css"><?php esc_html_e('I will use my own CSS styles for WP Notes Widget', 'notes-widget-wrapper'); ?></label>
                          
                      </li>
                    </ul>                  
                  </section>
                  <section role="tabpanel" class="tab-pane fade" id="nww-font-style">
                    <a href='#' class="notes-widget-wrapper__scroll-to-bottom hidden" ><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                    <header>
                      <h4><?php esc_html_e('Font Style', 'notes-widget-wrapper'); ?></h4>
                    </header>
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
                              <input type="radio" id="<?php echo  $key ; ?>" <?php checked($default_val['font_style'], $key); ?> name="notes-widget-wrapper__settings__font" value="<?php echo $key ?>" />          
                              <label for="<?php echo $key ; ?>" id="font-selection-<?php echo $key ?>-label"  ><?php esc_html_e('Font Style','notes-widget-wrapper'); ?> - <?php echo $font_mapping_item ?></label>
                            </li>
                            <?php
                          }
                        ?>
                      </ul>
                    </div>                   
                  </section>
                  <section role="tabpanel" class="tab-pane fade" id="nww-shortcode">
                    <a href='#' class="notes-widget-wrapper__scroll-to-bottom hidden" ><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                    <header>
                      <h4><?php esc_html_e('Shortcode Settings', 'notes-widget-wrapper'); ?></h4>
                    </header>
                    
                    <div class="form-group">
                      <label for="notes-widget-wrapper__settings__max-width"><?php esc_html_e('Max Width of Note Container:', 'notes-widget-wrapper'); ?></label>
                      <label for="notes-widget-wrapper__settings__max-width-units" class="sr-only" ><?php esc_html_e('Units:', 'notes-widget-wrapper'); ?></label>
                      <div class="notes-widget-wrapper__flex-container">
                        <input type="number" min="1" class="form-control notes-widget-wrapper__settings--small" id="notes-widget-wrapper__settings__max-width" name="notes-widget-wrapper__settings__max-width" value="<?php echo $default_setting_val['max_width']; ?>" >
                        <select id="notes-widget-wrapper__settings__max-width-units" name="notes-widget-wrapper__settings__max-width-units" >
                          <option value="px" <?php selected($default_setting_val['max_width_units'], 'px'); ?> >px</option>
                          <option value="percent" <?php selected($default_setting_val['max_width_units'], 'percent'); ?> >%</option>
                          <option value="rem" <?php selected($default_setting_val['max_width_units'], 'rem'); ?> >rem</option>
                          <option value="em" <?php selected($default_setting_val['max_width_units'], 'em'); ?> >em</option>
                        </select>
                      </div>
                    
                    </div>
                    
                    <div class="form-group">
                      <label for="notes-widget-wrapper__settings__alignment-options" ><?php esc_html_e('Alignment', 'notes-widget-wrapper'); ?></label>
                      <div id="notes-widget-wrapper__settings__alignment-options" >
                        <label class="radio-inline"><input type="radio" name="notes-widget-wrapper__settings__alignment" value="left" <?php checked($default_setting_val['alignment'], 'left'); ?> ><?php esc_html_e('Left', 'notes-widget-wrapper'); ?></label>
                        <label class="radio-inline"><input type="radio" name="notes-widget-wrapper__settings__alignment" value="center" <?php checked($default_setting_val['alignment'], 'center'); ?> ><?php esc_html_e('Center', 'notes-widget-wrapper'); ?></label>
                        <label class="radio-inline"><input type="radio" name="notes-widget-wrapper__settings__alignment" value="right" <?php checked($default_setting_val['alignment'], 'right'); ?> ><?php esc_html_e('Right', 'notes-widget-wrapper'); ?></label>
                      </div>
                    </div>

                  </section>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="well">
                    <h5 id="notes-widget-wrapper__rendered-shortcode" ><?php esc_html_e('Your Shortcode', 'notes-widget-wrapper'); ?></h5>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="button"   class="btn btn-default" data-dismiss="modal"><?php esc_html_e('Close', 'notes-widget-wrapper'); ?></button>
              <!--
                <button type="button" id="notes-widget-wrapper--insert-shortcode"  class="btn btn-primary"><?php esc_html_e('Insert and Close', 'notes-widget-wrapper'); ?></button>
              -->
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>
  </div>