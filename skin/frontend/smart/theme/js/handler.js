/**
 * Main Smart Theme js handler
 *
 *
 *
*/

jQuery(document).ready(function () {
    /*
    -- Animate event during scroll to current element --
    jQuery('.footer-container').scrollClass({
        delay: 20,
        threshold: 100,
        offsetTop: 10,
        callback: function () {
            var selector = jQuery(this);
            var img = jQuery("<img />").attr('src', jQuery(this).data("img")).one('load', function() {
                selector.append(img);
            });
        }
    });
    */


    /*
    -- 'To top' button handler --
    var windowScroll_t;
    jQuery(window).scroll(function(){
        clearTimeout(windowScroll_t);
        windowScroll_t = setTimeout(function(){
            if(jQuery(this).scrollTop() > 100){
                jQuery('#totop').fadeIn();
            }else{
                jQuery('#totop').fadeOut();
            }
        }, 500);
    });
    jQuery('#totop').click(function(){
        jQuery('html, body').animate({scrollTop: 0}, 600);
        return false;
    });
    */

    jQuery('.header-form .title').on('click', function(event){
        if(jQuery(window).width() < 500){
            event.preventDefault();
            jQuery(this).next('ul').slideToggle();
        }
        return;
    });

    jQuery('#mobile-header').on('click', function(){
        jQuery('#header').slideToggle('slow');
        jQuery('body').toggleClass('overflow');
        jQuery(this).toggleClass('fixed');
    });

    /**
     * Adding special class for adding to sidebar class 'fixed'
     */
    jQuery(window).scroll(function() {
        var header  = jQuery('#header');
        var $window = jQuery(window);

        if ( $window.scrollTop() > header.position().top ) {
            if(header.hasClass('fixed')) {
                return;
            }
            header.addClass('fixed');
        }else {
            header.removeClass('fixed');
        }
    });
});