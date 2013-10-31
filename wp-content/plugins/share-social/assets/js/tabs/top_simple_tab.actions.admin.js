jQuery(function($)
{
	//get preview of wp
	$('#preview_top_simple_tab').on('show.bs.modal', function () {
		var wp_address = $(this).attr('wp_address');
	  	$('#preview_top_simple_tab .modal-body').html('<iframe src="'+wp_address+'" frameborder="0" style="width: 100%;"></iframe>');
		preview_modal('#preview_top_simple_tab');
	});
	$('#preview_top_simple_tab').on('hide.bs.modal', function () {
		$(document.body).css('overflow', 'initial');
	});
		
	/*extra actions*/
	//init social icon styles dropdown
	$('#top_simple_tab_bar_layout_design').on('show.bs.modal', function () {
	  	icon_dropdowns('1,0,top_simple_tab');
	});
	//init message icon styles dropdown
	$('#top_simple_tab_call_to_action').on('show.bs.modal', function () {
	  	icon_dropdowns('0,1,top_simple_tab');
	});
	$('#top_simple_tab_visibility_settings').on('show.bs.modal', function() {
		onload_checkbox_handler();
	});
	function JQSliderCreate()
	{
		$(this)
			.removeClass('ui-corner-all ui-widget-content')
			.wrap('<span class="ui-slider-wrap"></span>')
			.find('.ui-slider-handle')
			.removeClass('ui-corner-all ui-state-default');
	}
	//slider
	if ($('.slider-bar-width-top_simple_tab').size() > 0)
	{
		var has_value = $('.slider-bar-width-top_simple_tab .slider').attr('has_value');
		$( ".slider-bar-width-top_simple_tab .slider" ).slider({
			create: JQSliderCreate,
            range: "min",
            value: has_value,
            min: 20,
            max: 100,
            slide: function( event, ui ) {
                $( ".slider-bar-width-top_simple_tab .amount" ).val( ui.value );
            },
            start: function() { if (typeof mainYScroller != 'undefined') mainYScroller.disable(); },
	        stop: function() { if (typeof mainYScroller != 'undefined') mainYScroller.enable(); }
        });
        $( ".slider-bar-width-top_simple_tab .amount" ).val( $( ".slider-bar-width-top_simple_tab .slider" ).slider( "value" ) );
	}

	//show-hide call to action link settings
	$(document.body).on('change', '#message-has-link-top_simple_tab', function(e) {
		if($('#activatelink-group-top_simple_tab:visible :checkbox:checked').length > 0) {
			$('#messagebtncolor-group-top_simple_tab').fadeIn(300);
			$('#messagebtn-group-top_simple_tab').fadeIn(300);
			$('#messagebtntext-group-top_simple_tab').fadeIn(300);
			$('#messagelink-group-top_simple_tab').fadeIn(300);
		}
		else {
			$('#messagebtncolor-group-top_simple_tab').fadeOut(300);
			$('#messagebtn-group-top_simple_tab').fadeOut(300);
			$('#messagebtntext-group-top_simple_tab').fadeOut(300);
			$('#messagelink-group-top_simple_tab').fadeOut(300);
			$('#messagelink-top_simple_tab').attr('value', '');
		}
	});
});