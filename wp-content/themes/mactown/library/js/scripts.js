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
    window.getComputedStyle = function(el, pseudo) {
        this.pseudo = pseudo;
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop === 'float') { prop = 'styleFloat'; }
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

// as the page loads, call these scripts
jQuery(document).ready(function($) {

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
            $(this).attr('src',$(this).attr('data-gravatar'));
        });
        
    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }
    
	
	// add all your scripts here
	$("#meet-the-team-button").on('click', function(event) {
        event.preventDefault();
        $("#meet-the-team-section").animate({ height: "toggle" });
    });

    $("#meet-the-team-close").on('click', function(event) {
        event.preventDefault();
        $("#meet-the-team-section").animate({ height: "toggle" });
    });

    $(".team-photo").hover(function() {
        $(this).children().show();
    }, function() {
        $(this).children().hide();
    });

    $("#specialist-link").on('click', function(event) {
        event.preventDefault();
        $("#sessions-link").removeClass('active');
        $("#business-solutions-link").removeClass('active');
        $("#service-link").removeClass('active');
        $("#sessions-content").slideUp();
        $("#business-solutions-content").slideUp();
        $("#service-content").slideUp();

        $("#specialist-link").toggleClass('active');
        $("#apple-specialist-content").animate({ height: 'toggle' });
    });

    $("#sessions-link").on('click', function(event) {
        event.preventDefault();
        $("#specialist-link").removeClass('active');
        $("#business-solutions-link").removeClass('active');
        $("#service-link").removeClass('active');
        $("#apple-specialist-content").slideUp();
        $("#business-solutions-content").slideUp();
        $("#service-content").slideUp();
        
        $("#sessions-link").toggleClass('active');
        $("#sessions-content").animate({ height: 'toggle' });
    });

    $("#business-solutions-link").on('click', function(event) {
        event.preventDefault();
        $("#sessions-link").removeClass('active');
        $("#specialist-link").removeClass('active');
        $("#service-link").removeClass('active');
        $("#sessions-content").slideUp();
        $("#apple-specialist-content").slideUp();
        $("#service-content").slideUp();
        
        $("#business-solutions-link").toggleClass('active');
        $("#business-solutions-content").animate({ height: 'toggle' });
    });

    $("#service-link").on('click', function(event) {
        event.preventDefault();
        $("#sessions-link").removeClass('active');
        $("#business-solutions-link").removeClass('active');
        $("#specialist-link").removeClass('active');
        $("#sessions-content").slideUp();
        $("#business-solutions-content").slideUp();
        $("#apple-specialist-content").slideUp();
        
        $("#service-link").toggleClass('active');
        $("#service-content").animate({ height: 'toggle' });
    });

    $("#apple-specialist-close").on('click', function(event) {
        event.preventDefault();
        $("#specialist-link").removeClass('active');
        $("#apple-specialist-content").slideUp();
    });

    $("#sessions-close").on('click', function(event) {
        event.preventDefault();
        $("#sessions-link").removeClass('active');
        $("#sessions-content").slideUp();
    });

    $("#business-solutions-close").on('click', function(event) {
        event.preventDefault();
        $("#business-solutions-link").removeClass('active');
        $("#business-solutions-content").slideUp();
    });

    $("#service-close").on('click', function(event) {
        event.preventDefault();
        $("#service-link").removeClass('active');
        $("#service-content").slideUp();
    });

    $("#team-carousel").owlCarousel({
        items: 4,
        navigation: true,
        navigationText: ["<i class='icon-chevron-left'></i>", "<i class='icon-chevron-right'></i>"],
        pagination: false
    });

    $("#partners-carousel").owlCarousel({
        items: 3,
        navigation: true,
        navigationText: ["<i class='icon-chevron-left'></i>", "<i class='icon-chevron-right'></i>"],
        pagination: false
    });

    $("#testimonials-carousel").owlCarousel({
        items: 3,
        navigation: true,
        navigationText: ["<i class='icon-chevron-left'></i>", "<i class='icon-chevron-right'></i>"],
        pagination: false
    });
 
}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );