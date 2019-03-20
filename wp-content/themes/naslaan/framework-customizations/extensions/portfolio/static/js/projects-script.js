jQuery(document).ready(function($) {
	var slider = $('#slider');
	if(slider.length>0){
		slider.nivoSlider({
			effect: 'fade',               // Specify sets like: 'fold,fade,sliceDown'
			slices: 15,                     // For slice animations
			boxCols: 8,                     // For box animations
			boxRows: 4,                     // For box animations
			animSpeed: 500,                 // Slide transition speed
			pauseTime: 30000,                // How long each slide will show
			startSlide: 0,                  // Set starting Slide (0 index)
			directionNav: true,             // Next & Prev navigation
			controlNav: true,               // 1,2,3... navigation
			controlNavThumbs: false,        // Use thumbnails for Control Nav
			pauseOnHover: true,             // Stop animation while hovering
			manualAdvance: false,           // Force manual transitions
			prevText: '<i class="material-icons">&#xE5C4;</i>',               // Prev directionNav text
			nextText: '<i class="material-icons">&#xE5C8;</i>',               // Next directionNav text
			randomStart: false,             // Start on a random slide
			beforeChange: function(){},     // Triggers before a slide transition
			afterChange: function(){},      // Triggers after a slide transition
			slideshowEnd: function(){},     // Triggers after all slides have been shown
			lastSlide: function(){},        // Triggers when last slide is shown
			afterLoad: function(){}

		});
	}
});

