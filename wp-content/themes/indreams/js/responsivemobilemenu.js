/*

Responsive Mobile Menu v1.0
Plugin URI: responsivemobilemenu.com

Author: Sergio Vitov
Author URI: http://xmacros.com

License: CC BY 3.0 http://creativecommons.org/licenses/by/3.0/

*/

function responsiveMobileMenu() {	
		jQuery('.rmm').each(function() {
			
			
			
			jQuery(this).children('ul').addClass('rmm-main-list');	// mark main menu list
			
			
			var $style = jQuery(this).attr('data-menu-style');	// get menu style
				if ( typeof $style == 'undefined' ||  $style == false )
					{
						jQuery(this).addClass('graphite'); // set graphite style if style is not defined
					}
				else {
						jQuery(this).addClass($style);
					}
					
					
			/* 	width of menu list (non-toggled) */
			
			var $width = 0;
				jQuery(this).find('ul li').each(function() {
					$width += jQuery(this).outerWidth();
				});
				
			// if modern browser
			
			if (jQuery.support.leadingWhitespace) {
				jQuery(this).css('max-width' , $width*1.05+'px');
			}
			// 
			else {
				jQuery(this).css('width' , $width*1.05+'px');
			}
		
	 	});
}
function getMobileMenu() {

	/* 	build toggled dropdown menu list */
	
	jQuery('.rmm').each(function() {	
				var menutitle = jQuery(this).attr("data-menu-title");
				if ( menutitle == "" ) {
					menutitle = "Menu";
				}
				else if ( menutitle == undefined ) {
					menutitle = "Menu";
				}
				var $menulist = jQuery(this).children('.rmm-main-list').html();
				var $menucontrols ="<div class='rmm-toggled-controls'><div class='rmm-toggled-title'>" + menutitle + "</div><div class='rmm-button'><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></div></div>";
				jQuery(this).prepend("<div class='rmm-toggled rmm-closed'>"+$menucontrols+"<ul>"+$menulist+"</ul></div>");

		});
}

function adaptMenu() {
	
	/* 	toggle menu on resize */
	
	jQuery('.rmm').each(function() {
			var $width = jQuery(this).css('max-width');
			$width = $width.replace('px', ''); 
			if ( jQuery(this).parent().width() < $width*1.05 ) {
				jQuery(this).children('.rmm-main-list').hide(0);
				jQuery(this).children('.rmm-toggled').show(0);
			}
			else {
				jQuery(this).children('.rmm-main-list').show(0);
				jQuery(this).children('.rmm-toggled').hide(0);
			}
		});
		
}

jQuery(function() {

	 responsiveMobileMenu();
	 getMobileMenu();
	 adaptMenu();
	 
	 /* slide down mobile menu on click */
	 
	 jQuery('.rmm-toggled, .rmm-toggled .rmm-button').click(function(){
	 	if ( jQuery(this).is(".rmm-closed")) {
		 	 jQuery(this).find('ul').stop().show(300);
		 	 jQuery(this).removeClass("rmm-closed");
	 	}
	 	else {
		 	jQuery(this).find('ul').stop().hide(300);
		 	 jQuery(this).addClass("rmm-closed");
	 	}
		
	});	

});
	/* 	hide mobile menu on resize */
jQuery(window).resize(function() {
 	adaptMenu();
});