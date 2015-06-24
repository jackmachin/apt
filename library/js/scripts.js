/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function (el, pseudo) {
        "use strict";
        this.el = el;
        this.getPropertyValue = function (prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop === 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        };
        return this;
    };
}
  // Function
function selectThis(id) {
		//Off to a fine start, could search the DOM Element and do a .each function on the divs inside, or just hide all of that class...
		jQuery('.TextContainer').hide();
		// ID of Body plus whatever param we pass down,
		jQuery('#Body_' + id).fadeIn(500);
		//Remove that pesky selected from all
		jQuery('.HeaderButton').removeClass('HeaderButtonSelected');
		// And add to the now selected one
		jQuery('#Button_' + id).addClass('HeaderButtonSelected');
	}
// as the page loads, call these scripts
jQuery(document).ready(function($) {

    $(".menu-button").click(function() {
        $( ".top-nav" ).toggle( "slide" );
    });

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */

    /* getting viewport width */
    var responsive_viewport = $(window).width();

    /* if is below 481px */
    if (responsive_viewport < 481) {

    } /* end smallest screen */

    /* if is larger than 481px */
    if (responsive_viewport > 481) {

    } /* end larger than 481px */

    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {

        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src', $(this).attr('data-gravatar'));
        });

    }

    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {

    }


	// add all your scripts here

}); /* end of as page load scripts */

