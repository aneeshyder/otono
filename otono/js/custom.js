jQuery(document).ready(function(){
	jQuery('.menu-btn').on('click', function() {
		jQuery('body').toggleClass('menu-open');
	});	
});
var headerOffSet = jQuery('#page #navbar').height() - 60;
console.log(headerOffSet);
function top_sticky_header() {	
    if (jQuery(window).scrollTop() >= headerOffSet  ) {
        jQuery('body').addClass('header-fixed')
    } else {
        jQuery('body').removeClass('header-fixed')
    }
}
jQuery(window).scroll(function () {
	top_sticky_header();
});
