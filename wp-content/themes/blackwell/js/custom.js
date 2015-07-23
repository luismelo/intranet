// initialise plugins
jQuery(function(){
    jQuery('ul.sf-menu').superfish();
});
//Home page Animation
jQuery(document).ready(function(jQuery) {
var animated_element = jQuery('.animated');
function image_animation() {
  animated_element.each(function(){
  var get_offset = jQuery(this).offset();
    if ( jQuery(window).scrollTop() + jQuery(window).height() > get_offset.top+jQuery(this).height()/2) {
      jQuery(this).addClass('animation_started');
     // var el = $(this).find('.animated');
      setTimeout(function(){
        jQuery(this).removeClass('animated').removeAttr('style');
      }, 300);
    }
  });
}
  jQuery(window).scroll(function() {
    image_animation();
  });  
  jQuery(window).load(function() {
    setInterval(image_animation,300);
  });
});

// The actual plugin
(function(jQuery){
			jQuery(window).ready(function(){				
				/* Page Scroll to id fn call */
				jQuery(".left_panal a").mPageScroll2id({
					highlightSelector:".left_panal a"
				});				
				/* demo functions */
				jQuery("a[rel='next1']").click(function(e){
					e.preventDefault();
					var to=jQuery(this).parent().parent(".section").next().attr("id");
					jQuery.mPageScroll2id("scrollTo",to);
				});				
			});
		})(jQuery);
jQuery(document).ready(function(){
	jQuery(".left_panal").css("height", jQuery(window).height());
	jQuery(".left_panal1").css("height", jQuery(window).height());
});
jQuery(window).resize(function() {
	jQuery(".left_panal").css("height", jQuery(window).height());
	jQuery(".sidebar_container_small1").css("height", jQuery(window).height());
});