var nww_shortcode_settingss = {};
var nww_stripHTML = function(dirtyString) {
 	cleanString = dirtyString.replace(/<\/?[^>]+(>|$)/g, "");
 	return cleanString;
}
var nww = {
	renderShortcode : function(changed_input_name) {

		/**
		 *
		 * Initialize variables
		 *
		 */

		nww_shortcode_settingss.max_width 						= jQuery('input#notes-widget-wrapper__settings__max-width').val();
		nww_shortcode_settingss.max_width_units 			= jQuery('select#notes-widget-wrapper__settings__max-width-units').val();
		nww_shortcode_settingss.alignment 						= jQuery('input[name=notes-widget-wrapper__settings__alignment]:checked').val();
		nww_shortcode_settingss.thumb_tack_color 			= jQuery('select#notes-widget-wrapper__settings__thumb-tack-color').val();
		nww_shortcode_settingss.background_color 			= jQuery('select#notes-widget-wrapper__settings__background-color').val();
		nww_shortcode_settingss.text_color 						= jQuery('select#notes-widget-wrapper__settings__text-color').val();
		nww_shortcode_settingss.font_size 						= jQuery('select#notes-widget-wrapper__settings__font-size').val();
		nww_shortcode_settingss.show_date 						= jQuery('input[name=notes-widget-wrapper__settings__display-date]:checked').val();
		nww_shortcode_settingss.use_own_css 					= jQuery('input[name=notes-widget-wrapper__settings__use-own-css]:checked').val();
		nww_shortcode_settingss.uppercase 						= jQuery('input[name=notes-widget-wrapper__settings__uppercase]:checked').val();
		nww_shortcode_settingss.font_style	 					= jQuery("input[name='notes-widget-wrapper__settings__font']:checked").val();

		if (!nww_shortcode_settingss.uppercase) {
			nww_shortcode_settingss.uppercase = 'false';
		}
		if (!nww_shortcode_settingss.use_own_css) {
			nww_shortcode_settingss.use_own_css = 'false';
		}

		shortcode_string = '';

		/**
		 *
		 * Create shortcode output string
		 *
		 */

		if (changed_input_name == 'notes-widget-wrapper__settings__thumb-tack-color') {
			shortcode_string += ' <span class="notes-widget-wrapper__shortcode__display--settings-change">thumb-tack-color="' + nww_shortcode_settingss.thumb_tack_color + '"</span> ';
		} else {
			shortcode_string += ' thumb-tack-color="' + nww_shortcode_settingss.thumb_tack_color + '" ';
		}

		if (changed_input_name == 'notes-widget-wrapper__settings__text-color') {
			shortcode_string += ' <span class="notes-widget-wrapper__shortcode__display--settings-change">text-color="' + nww_shortcode_settingss.text_color + '"</span> ';
		} else {
			shortcode_string += ' text-color="' + nww_shortcode_settingss.text_color + '" ';
		}

		if (changed_input_name == 'notes-widget-wrapper__settings__background-color') {
			shortcode_string += ' <span class="notes-widget-wrapper__shortcode__display--settings-change">background-color="' + nww_shortcode_settingss.background_color + '"</span> ';
		} else {
			shortcode_string += ' background-color="' + nww_shortcode_settingss.background_color + '" ';
		}

		if (changed_input_name == 'notes-widget-wrapper__settings__font-size') {
			shortcode_string += ' <span class="notes-widget-wrapper__shortcode__display--settings-change">font-size="' + nww_shortcode_settingss.font_size + '"</span> ';
		} else {
			shortcode_string += ' font-size="' + nww_shortcode_settingss.font_size + '" ';
		}

		if (changed_input_name == 'notes-widget-wrapper__settings__use-own-css') {
			shortcode_string += ' <span class="notes-widget-wrapper__shortcode__display--settings-change">use-own-css="' + nww_shortcode_settingss.use_own_css + '"</span> ';
		} else {
			shortcode_string += ' use-own-css="' + nww_shortcode_settingss.use_own_css + '" ';
		}

		if (changed_input_name == 'notes-widget-wrapper__settings__uppercase') {
			shortcode_string += ' <span class="notes-widget-wrapper__shortcode__display--settings-change">uppercase="' + nww_shortcode_settingss.uppercase + '"</span> ';
		} else {
			shortcode_string += ' uppercase="' + nww_shortcode_settingss.uppercase + '" ';
		}

		if (changed_input_name == 'notes-widget-wrapper__settings__font') {
			shortcode_string += ' <span class="notes-widget-wrapper__shortcode__display--settings-change">font-style="' + nww_shortcode_settingss.font_style + '"</span> ';
		} else {
			shortcode_string += ' font-style="' + nww_shortcode_settingss.font_style + '" ';
		}

		if (nww_shortcode_settingss.max_width_units == 'percent') {
			nww_shortcode_settingss.max_width_units = '%';
		}
		if (changed_input_name == 'notes-widget-wrapper__settings__max-width' || changed_input_name == 'notes-widget-wrapper__settings__max-width-units') {
			shortcode_string += ' <span class="notes-widget-wrapper__shortcode__display--settings-change">max-width="' + nww_shortcode_settingss.max_width + nww_shortcode_settingss.max_width_units + '"</span> ';
		} else {
			shortcode_string += ' max-width="' + nww_shortcode_settingss.max_width + nww_shortcode_settingss.max_width_units + '" ';
		}

		if (changed_input_name == 'notes-widget-wrapper__settings__alignment') {
			shortcode_string += ' <span class="notes-widget-wrapper__shortcode__display--settings-change">alignment="' + nww_shortcode_settingss.alignment + '"</span> ';
		} else {
			shortcode_string += ' alignment="' + nww_shortcode_settingss.alignment + '" ';
		}


		jQuery("#notes-widget-wrapper__rendered-shortcode").html('[notes-widget-wrapper ' + shortcode_string + ' ]</br></br>&lt;!-- '+ translations.add_your_content_here +' --&gt;</br></br>[/notes-widget-wrapper]');

	},

	initShortcodeSettingsChangeListeners : function() {
		// Visual Settings
		jQuery('.notes-widget-wrapper--tab-content-container').find('input[type=checkbox],input[type=number],input[type=radio],input[type=text],select').on('change keyup', function(e){
			console.log('input changed');
			nww.renderShortcode(jQuery(e.target).attr('name'));
		});
		nww.renderShortcode();
	},

	initShortcodeModalScrollDisplay : function(){
		jQuery('.notes-widget-wrapper--tab-content-container .tab-pane').each( function( index, element ){
		  $this = jQuery(this);
		  if (this.scrollHeight > $this.outerHeight() ) {
		  	$this.find('a.notes-widget-wrapper__scroll-to-bottom').removeClass('hidden');
		  } else {
		  	$this.find('a.notes-widget-wrapper__scroll-to-bottom').addClass('hidden');
		  }
		});
	},

	initScrollListeners : function() {
		jQuery('a.notes-widget-wrapper__scroll-to-bottom').click(function(e){
			$this = jQuery(this);
			$tab_pane = $this.parent();
			$tab_pane
	    $tab_pane.animate({
	        scrollTop: $tab_pane[0].scrollHeight
	    }, 1000);
	    $this.fadeOut( 1000, function() {

		  });
		});
	},

	initHelpTabListeners : function() {
	  jQuery('#notes-widget-wrapper__open-shortcode-help-link').on('click', function(){
			jQuery('#notes-widget-wrapper__shortcode-editor-modal').modal('hide');

	    setTimeout(function(){
	      jQuery('.contextual-help-tabs ul li').removeClass('active');
	      jQuery('.contextual-help-tabs-wrap > div.help-tab-content').removeClass('active');

	      //jQuery('#screen-options-link-wrap').css('visibility','hidden');
	      jQuery('#tab-link-wp_notes_widget_shortcode_help').addClass('active');
	      jQuery('#tab-panel-wp_notes_widget_shortcode_help').addClass('active');

	      jQuery('button#contextual-help-link').trigger('click');

	    }, 300);

		});
	},

	initHorizontalDisplayNoticeToggle : function() {
		jQuery(document).on('change','input[name=notes-widget-wrapper__settings__direction]', function(e){
			var $this = jQuery(this);
			if ($this.val() == 'horizontal') {
				jQuery('p#notes-widget-wrapper__horizontal-display-notice').fadeIn();
			} else {
				jQuery('p#notes-widget-wrapper__horizontal-display-notice').fadeOut();
			}
		});
	}
};


jQuery(function($) {
	jQuery('#insert-notes-widget-wrapper-shortcode').on('click', function(){
		jQuery('#notes-widget-wrapper__shortcode-editor-modal').modal('show');
	});

	jQuery('#notes-widget-wrapper--insert-shortcode').on('click', function(){
		wp.media.editor.insert('[notes-widget-wrapper ' + nww_stripHTML(shortcode_string) + ' ]');
		jQuery('#notes-widget-wrapper__shortcode-editor-modal').modal('hide');
	});

	$("#notes-widget-wrapper__shortcode-editor-modal").on('shown.bs.modal', function () {
    nww.initShortcodeModalScrollDisplay();
  });
	$("#notes-widget-wrapper__shortcode-editor-modal a[data-toggle='tab']").on('shown.bs.tab', function () {
    nww.initShortcodeModalScrollDisplay();
  });

	nww.initShortcodeSettingsChangeListeners();
	nww.initScrollListeners();
  nww.initHelpTabListeners();
  nww.initHorizontalDisplayNoticeToggle();
});
