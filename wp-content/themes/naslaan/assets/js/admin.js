/* global jQuery:false */
jQuery(document).ready(function() {
	
	"use strict";
	
	window.templates();

});


templates = function () {

	"use strict";
	
	slider_template();
	
	function slider_template() {
		
		var getCurrentTemplate = jQuery("#page_template").val();

		if (getCurrentTemplate == "slider-template.php"){
		    jQuery("#fw-options-box-post_header_sub_title-hide").attr("checked", false);
		    jQuery("#fw-options-box-post_header_sub_title").css({"display":"none"});
		    jQuery("#fw-options-box-post_header_options-hide").attr("checked", false);
		    jQuery("#fw-options-box-post_header_options").css({"display":"none"});
		    
		    jQuery("#fw-options-box-slider-hide").attr("checked", true);
		    jQuery("#fw-options-box-slider").css({"display":"block"});
		}else if(getCurrentTemplate == "default"){
		    jQuery("#fw-options-box-slider-hide").attr("checked", false);
		    jQuery("#fw-options-box-slider").css({"display":"none"});
		}

		jQuery("#page_template").live("change",function(){
		
		    var getCurrentTemplate = jQuery("#page_template").val(); 
		
			if (getCurrentTemplate == "slider-template.php"){
			    jQuery("#fw-options-box-post_header_sub_title-hide").attr("checked", false);
			    jQuery("#fw-options-box-post_header_sub_title").css({"display":"none"});
			    jQuery("#fw-options-box-post_header_options-hide").attr("checked", false);
			    jQuery("#fw-options-box-post_header_options").css({"display":"none"});
			    
			    jQuery("#fw-options-box-slider-hide").attr("checked", true);
			    jQuery("#fw-options-box-slider").css({"display":"block"});
			}else if(getCurrentTemplate == "default"){
			    jQuery("#fw-options-box-post_header_sub_title-hide").attr("checked", true);
			    jQuery("#fw-options-box-post_header_sub_title").css({"display":"block"});
			    jQuery("#fw-options-box-post_header_options-hide").attr("checked", true);
			    jQuery("#fw-options-box-post_header_options").css({"display":"block"});
			    
			    jQuery("#fw-options-box-slider-hide").attr("checked", false);
			    jQuery("#fw-options-box-slider").css({"display":"none"});
			}
		
		});
		
	}
	
};
