<?php 
  //namespace WP_Notes_Widget_PRO; 
?>
<!-- Create a header in the default WordPress 'wrap' container -->
<div class="wrap">
 
  <div id="icon-themes" class="icon32"></div>
  <div class="notes-widget-wrapper-bootstrap" >
    <div class="row">
      <div class="col-lg-9 col-md-8">
        <section>
          <h2><?php esc_html_e('Notes Widget Wrapper Settings','notes-widget-wrapper'); ?></h2>
          
          <form method="post" action="options.php">
          
            <?php settings_fields( 'notes_widget_wrapper_settings_page' ); ?>
            
            <div class="" >
              
                <!-- Nav tabs -->
                <ul id="notes-widget-wrapper__settings-tab-list" class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#general" aria-controls="home" role="tab" data-toggle="tab"><?php esc_html_e('General','wp-notes-widget'); ?></a></li>
                  <li role="presentation" class=""><a href="#shortcode" aria-controls="shortcode" role="tab" data-toggle="tab"><?php esc_html_e('Shortcode','notes-widget-wrapper'); ?></a></li>
                  
                </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <section role="tabpanel" class="tab-pane active" id="general">
                  <?php do_settings_sections( 'notes_widget_wrapper_default_settings_page_partial' ); ?>
                  <div class="notes-widget-wrapper__submit-button-container">
                    <?php submit_button(); ?>
                  </div>
                </section>
                <section role="tabpanel" class="tab-pane" id="shortcode">
                  <?php do_settings_sections( 'notes_widget_wrapper_default_shortcode_settings_page_partial' ); ?>
                  <div class="notes-widget-wrapper__submit-button-container">
                    <?php submit_button(); ?>
                  </div>
                </section>
              </div>

            </div>

            </form>
          </section>
      </div>
      <div class="col-lg-3 col-md-4">
        <div  id="notes-widget-wrapper--settings-page-plugin-callout" class="panel panel-default">
          <div class="panel-heading">
            <h4>
            <i class="fa fa-info-circle" aria-hidden="true"></i> You Might Also Like...
            </h4>
          </div>
          
          <div class="panel-body">
            <p>Notes Widget Wrapper is built by <a target="_blank" href='http://webrockstar.net?utm_source=notes-widget-wrapper-plugin&utm-medium=settings-callout'>Web Rockstar</a>. Web Rockstar also offers several other free plugins:</p>
            <div class="">
              
              <!-- WP Notes Widget Promo Item -->
              <div class="notes-widget-wrapper__plugin-promo-item">
                <a target="_blank" href='https://wordpress.org/plugins/wp-notes-widget/' >
                  <h4>WP Notes Widget</h4>
                  <div class="notes-widget-wrapper__plugin-promo-item__banner" id="promo-banner--wp-notes-widget" ></div>
                </a>
              </div>

              <!-- Admin Code Editor Promo Item -->
              <div class="notes-widget-wrapper__plugin-promo-item">
                <a target="_blank" href='https://github.com/spuddick/admin-code-editor' >
                  <h4>Admin Code Editor</h4>
                  <div class="notes-widget-wrapper__plugin-promo-item__banner" id="promo-banner--admin-code-editor" ></div>
                </a>
              </div>

              <!-- Custom Ratings Promo Item -->
              <div class="notes-widget-wrapper__plugin-promo-item">
                <a target="_blank" href='https://wordpress.org/plugins/custom-ratings/' >
                  <h4>Custom Ratings</h4>
                  <div class="notes-widget-wrapper__plugin-promo-item__banner" id="promo-banner--custom-ratings" ></div>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>         

      
    </div> 
  </div>

       
</div><!-- /.wrap -->