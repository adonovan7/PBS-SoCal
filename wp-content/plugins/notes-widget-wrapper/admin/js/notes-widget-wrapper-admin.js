(function( $ ) {
	//'use strict';
	
	var bind_notes_wrapper_toggle = function(e) {	
		var $controls_container = $(e.target).closest('.notes-widget-wrapper-admin-container').find('#notes-widget-wrapper-controls .inner');
		var $toggle_use_wrapper = $(e.target).closest('.notes-widget-wrapper-admin-container').find('#use-notes-widget-wrapper-toggle-container > input');
		
		if ($(this).is(':checked')) {
			$controls_container.addClass('notes-widget-wrapper-active');
		} else {
			$controls_container.removeClass('notes-widget-wrapper-active');
		}

	}

	var set_control_visibility = function($widget_controls_container, $toggle_widget) {
		$widget_controls_container.removeClass('notes-widget-wrapper-active');
	 
	  if ($toggle_widget.is(':checked')) {
			$widget_controls_container.addClass('notes-widget-wrapper-active');
		}
		
	}

	jQuery( document ).ready(function() {
  	
  	//because of how Wordpress refreshes the widget forms after save, we need to bind the event listener to #widgets-right and delegate to the input
  	$('#widgets-right').on('change', '#use-notes-widget-wrapper-toggle-container > input', bind_notes_wrapper_toggle);


		jQuery(document).on('widget-updated', function(e, widget){
			//when the widget is saved the widget form is reloaded. We need to determine again if the widget form should be visible.

			var $widget_controls_container 	= $(widget).find('#notes-widget-wrapper-controls .inner');
			var $toggle_widget 							= $(widget).find('#use-notes-widget-wrapper-toggle-container > input');

			set_control_visibility($widget_controls_container, $toggle_widget);
		});

		
		$( '#widgets-right .widget' ).each(function( index ) {
		  //when the page loads we need to set whether the 'note widget wrapper' controls are visible for each individual widget 

		  var $widget_controls_container 	= $(this).find('#notes-widget-wrapper-controls .inner');
		  var $toggle_widget 							= $(this).find('#use-notes-widget-wrapper-toggle-container > input');

		  set_control_visibility($widget_controls_container, $toggle_widget);
		});

	});

})( jQuery );




