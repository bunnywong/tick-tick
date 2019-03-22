/* global jQuery:false */
/*jshint esversion: 6 */
jQuery(document).ready(function() {
	
	"use strict";
	
	window.theme_menu();
	window.sticky_menu();
	window.theme_function();
	
});


theme_menu = function () {
	
	"use strict";

	themeMenu();
	responsiveNavigation();
	
	function themeMenu() {

		jQuery('.lpdmobmenu-list li').has('.lpdmobmenu-submenu, .lpdmobmenu-submenu-sub, .lpdmobmenu-submenu-sub-sub, .megamenu').prepend('<span class="lpdmobmenu-click"><i class="material-icons">&#xE5DB;</i></span>');

		jQuery('.lpdmobmenu-click').on( "click",function(){
		jQuery(this).siblings('.lpdmobmenu-submenu').slideToggle('slow');
		jQuery(this).siblings('.lpdmobmenu-submenu-sub').slideToggle('slow');
		jQuery(this).siblings('.lpdmobmenu-submenu-sub-sub').slideToggle('slow');
		jQuery(this).siblings('.megamenu').slideToggle('slow');
		});
	    
	}
	
	function responsiveNavigation(){
		
		jQuery(".slide-panel-toggle").on('click', function(event) {
			jQuery('body').toggleClass("slide-panel-active");
			return false;
		});
		
		jQuery(document).on('click', function(event) {
			if (!jQuery(event.target).closest('#slide-panel').length) { jQuery('body').toggleClass('slide-panel-active', false); }
		});
		
	}
	

};

sticky_menu = function () {

	"use strict";

	stickyMenu();

	function stickyMenu() {
	
		var myWindow = jQuery(window);
		var myHeader = jQuery('.nav-sticky');
		
		myWindow.scroll( function (){
			if (myWindow.scrollTop() === 0){
				myHeader.removeClass("nav-is-sticky");
			}else{
				myHeader.addClass("nav-is-sticky");
			}
		});
		
		if (jQuery('.nav-sticky').length) {
			var sticky = new Waypoint.Sticky({
			  	element: jQuery('.nav-sticky')[0],
				offset: function() {
					return -this.element.clientHeight-100;
				}
			});
	
		}
		
	}

	
};

theme_function = function () {
	
	"use strict";
	
	pagePreloader();
	gradientTitle();
	gradientCallTo();
	overlaySearch();
	overlayWpml();
	parallaxRow();
	sticky_panel_toggle();
	back_to_top();
	highlightedLink();
	
	
	function pagePreloader(){
		if(jQuery('.lpd-preloader').length){
			jQuery(window).load(function(){jQuery(".lpd-preloader").fadeOut(400);});
		};

	}
	
	function gradientTitle(){
	
		if (jQuery('#title-gradient').length) {
		
		var color_1 = jQuery('#title-gradient').data( 'color-1' );
		var color_2 = jQuery('#title-gradient').data( 'color-2' );
		
		var hexToRgb = hex => hex.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i,(m, r, g, b) => '#' + r + r + g + g + b + b).substring(1).match(/.{2}/g).map(x => parseInt(x, 16));

		var color_1 = hexToRgb(color_1);
		var color_2 = hexToRgb(color_2);
		
		var colors = new Array( color_1,color_1,color_2,color_2);
		
		var step = 0;
		
		var colorIndices = [0,1,2,3];
		
		var gradientSpeed = 0.002;
		
		function updateGradient(){
		  
		var c0_0 = colors[colorIndices[0]];
		var c0_1 = colors[colorIndices[1]];
		var c1_0 = colors[colorIndices[2]];
		var c1_1 = colors[colorIndices[3]];
		
		var istep = 1 - step;
		var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
		var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
		var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
		var color1 = "rgb("+r1+","+g1+","+b1+")";
		
		var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
		var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
		var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
		var color2 = "rgb("+r2+","+g2+","+b2+")";
		
		 jQuery('#title-gradient').css({
		   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
		    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
		  
		  step += gradientSpeed;
		  if ( step >= 1 )
		  {
		    step %= 1;
		    colorIndices[0] = colorIndices[1];
		    colorIndices[2] = colorIndices[3];
		    
		    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
		    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
		    
		  }
		}
		updateGradient();
		
		setInterval(updateGradient,10);
		
		}
				
	}
	
	function gradientCallTo(){
	
		if (jQuery('#footer-call-to-action-gradient').length) {
		
		var color_1 = jQuery('#footer-call-to-action-gradient').data( 'color-1' );
		var color_2 = jQuery('#footer-call-to-action-gradient').data( 'color-2' );
		
		var hexToRgb = hex => hex.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i,(m, r, g, b) => '#' + r + r + g + g + b + b).substring(1).match(/.{2}/g).map(x => parseInt(x, 16));

		var color_1 = hexToRgb(color_1);
		var color_2 = hexToRgb(color_2);
		
		var colors = new Array( color_1,color_1,color_2,color_2);
		
		var step = 0;
		
		var colorIndices = [0,1,2,3];
		
		var gradientSpeed = 0.002;
		
		function updateGradient(){
		  
		var c0_0 = colors[colorIndices[0]];
		var c0_1 = colors[colorIndices[1]];
		var c1_0 = colors[colorIndices[2]];
		var c1_1 = colors[colorIndices[3]];
		
		var istep = 1 - step;
		var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
		var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
		var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
		var color1 = "rgb("+r1+","+g1+","+b1+")";
		
		var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
		var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
		var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
		var color2 = "rgb("+r2+","+g2+","+b2+")";
		
		 jQuery('#footer-call-to-action-gradient').css({
		   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
		    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
		  
		  step += gradientSpeed;
		  if ( step >= 1 )
		  {
		    step %= 1;
		    colorIndices[0] = colorIndices[1];
		    colorIndices[2] = colorIndices[3];
		    
		    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
		    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
		    
		  }
		}
		updateGradient();
		
		setInterval(updateGradient,10);
		
		}
				
	}

	function overlaySearch() {
		
		jQuery( '.search-btn > div' ).on( "click",function() {
			jQuery('.search-overlay').addClass('overlay-open');
		});
		
		jQuery( ".overlay-close" ).on( "click",function() {
			jQuery('.search-overlay').removeClass('overlay-open');
		});
		
	}

	function overlayWpml() {
		
		jQuery( '.wpml-button' ).on( "click",function() {
			jQuery('.wpml-switcher-overlay').addClass('wpml-switcher-overlay-open');
		});
		
		jQuery( ".wpml-switcher-overlay-close" ).on( "click",function() {
			jQuery('.wpml-switcher-overlay').removeClass('wpml-switcher-overlay-open');
		});
		
	}
	
	function videoBg() {
		jQuery( '.row-video-bg' ).each( function () {
	
			if ( jQuery(this).data( 'row-video-bg' ) ) {
			
				var video_url = jQuery(this).data( 'row-video-bg' );
				var video_id = getVideoId( video_url );
	
				if ( video_id ) {
					createVideoBg( jQuery(this), video_id );
				}
		
			}
			
		} );
	}

	function getVideoId( video_url ) {
	
		var video_id = video_url.match( /(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/ );
	
		if(video_id !== null) {
			return video_id[ 1 ];
		}
	}

	function resizeVideoBg( videoBg ) {
	
		var videoInnerHeight = videoBg.innerHeight();	
		var videoInnerWidth = videoBg.innerWidth();
	
		if ( ( videoInnerHeight / videoInnerWidth ) < ( 9 / 16 ) ) {
			
			var iframeHeight = videoInnerWidth * ( 9 / 16 );
			var iframeWidth = videoInnerWidth;
			var marginTop = ( iframeHeight - videoInnerHeight ) / 2 * -1;
			var marginLeft = ( iframeWidth - videoInnerWidth ) / 2 * -1;
	
		} else {
		
			iframeWidth = videoInnerHeight * ( 16 / 9 );
			iframeHeight = videoInnerHeight;
			marginLeft = ( iframeWidth - videoInnerWidth ) / 2 * -1;
			marginTop = ( iframeHeight - videoInnerHeight ) / 2 * -1;
	
		}
	
		videoBg.find( '.video-bg iframe' ).css( { marginLeft: marginLeft + 'px', marginTop: marginTop + 'px', width: iframeWidth + 'px', height: iframeHeight + 'px' } );
	}
	
	function createVideoBg( videoBg, videoId) {
	
		if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
		
			$.getScript('//www.youtube.com/iframe_api');
			
			setTimeout( function () {
				createVideoBg( videoBg, videoId);
			}, 100 );
	
			return;
		}
	
		var iframe = videoBg
		.prepend( '<div class="video-bg"><div class="iframe"></div></div>' )
		.find( '.iframe' );
	
		new YT.Player( iframe[ 0 ], {
			width: '100%',
			height: '100%',
			videoId: videoId,
			playerVars: {autoplay: 1,controls: 0,enablejsapi: 1,iv_load_policy: 3,rel: 0,showinfo: 0,playlist: videoId},
			events: { onReady: function ( event ) { event.target.setLoop( true ).mute();}
			}
		} );
	
		resizeVideoBg( videoBg );
	
		jQuery( window ).on( 'resize', function () { resizeVideoBg( videoBg ); } );
		
	}

	function parallaxRow() {

		jQuery( '.parallax-bg' ).each( function () {
		
			if(!jQuery( this ).data( 'parallax-value' )){
				var parallaxValue = 1.5 * 100;
			}else{
				parallaxValue = jQuery( this ).data( 'vc-parallax' ) * 100;
			}
			
			var parallaxImage = jQuery( this ).data( 'parallax-image-bg' );
			var videoId = getVideoId( parallaxImage );
			
			var parallaxBg = jQuery( '<div class="parallax-img">' ).prependTo( jQuery( this ) );
			parallaxBg.height( parallaxValue + '%' );

			if ( videoId ) {
				createVideoBg( parallaxBg, videoId );
			} else {
				parallaxBg.css( 'background-image', 'url(' + parallaxImage + ')' );
			}

			var parallaxSpeed = (parallaxValue - 100)* -1;

			parallaxBg.attr( 'data-bottom-top', 'top: ' + parallaxSpeed + '%;' ).attr( 'data-top-bottom','top: 0%;' );
			
		} );

		// check if VC plugin skrollr active
		if(typeof vc_rowBehaviour == 'function'){
		    return;
		}else{
			if ( window.skrollr ) {
				skrollr.init({
					forceHeight: false,
					smoothScrolling: true,
					mobileCheck: function () {
						return false;
					}
				});
				return;
			}
			
		}	
		
	}
	
	function sticky_panel_toggle() {
		if (jQuery('.sticky-slide-panel-toggle').length) {
		    var scrollTrigger = 100,
	        backToTop = function () {
	            var scrollTop = jQuery(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                jQuery('.sticky-slide-panel-toggle').addClass('show');
	            } else {
	                jQuery('.sticky-slide-panel-toggle').removeClass('show');
	            }
	        };
		    backToTop();
		    jQuery(window).on('scroll', function () {
		        backToTop();
		    });
		}
	}
	
	function back_to_top() {
		if (jQuery('#back-to-top').length) {
		    var scrollTrigger = 100,
		        backToTop = function () {
		            var scrollTop = jQuery(window).scrollTop();
		            if (scrollTop > scrollTrigger) {
		                jQuery('#back-to-top').addClass('show');
		            } else {
		                jQuery('#back-to-top').removeClass('show');
		            }
		        };
		    backToTop();
		    jQuery(window).on('scroll', function () {
		        backToTop();
		    });
		    jQuery('#back-to-top').on('click', function (e) {
		        e.preventDefault();
		        jQuery('html,body').animate({
		            scrollTop: 0
		        }, 500);
		    });
		}
	}

	function highlightedLink() {


        var aChildren = jQuery(".one-page-template .lpdmobmenu-list li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i=0; i < aChildren.length; i++) {    
            var aChild = aChildren[i];
            var ahref = jQuery(aChild).attr('href');
            aArray.push(ahref);
        } // this for loop fills the aArray with attribute href values
        
        jQuery(window).scroll(function(){
            var windowPos = jQuery(window).scrollTop(); // get the offset of the window from the top of page
            var windowHeight = jQuery(window).height(); // get the height of the window
            var docHeight = jQuery(document).height();
            
            for (var i=0; i < aArray.length; i++) {
                var theID = aArray[i];
                if (jQuery('.sticky-middle-header').length) {
	                var extraOffset = jQuery('.sticky-middle-header').innerHeight()+2;
                }else{
	                var extraOffset = 0+2;
                }
                var divPos = jQuery(theID).offset().top-extraOffset; // get the offset of the div from the top of page
                var divHeight = jQuery(theID).innerHeight(); // get the height of the div in question
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    jQuery("a[href='" + theID + "']").parent('.lpdmobmenu-list li').addClass("current-menu-item");
                } else {
                    jQuery("a[href='" + theID + "']").parent('.lpdmobmenu-list li').removeClass("current-menu-item");
                }
            }
            
            if(windowPos + windowHeight == docHeight) {
                if (!jQuery("nav li:last-child a").parent('.lpdmobmenu-list li').hasClass("current-menu-item")) {
                    var navActiveCurrent = jQuery(".current-menu-item").attr("href");
                    jQuery("a[href='" + navActiveCurrent + "']").parent('.lpdmobmenu-list li').removeClass("current-menu-item");
                    jQuery("nav li:last-child a").parent('.lpdmobmenu-list li').addClass("current-menu-item");
                }
            }
        });
	
	}


};
