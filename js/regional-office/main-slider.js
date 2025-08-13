/**
 * Regional Office Main Slider
 * Handles the banner slider functionality
 */

jQuery(document).ready(function($) {
    'use strict';
    
    // Initialize banner slider
    function initBannerSlider() {
        var $slider = $('.banner_section_slider');
        if ($slider.length && !$slider.hasClass('slick-initialized')) {
            $slider.slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: true,
                            arrows: false
                        }
                    }
                ]
            });
        }
    }
    
    
    // Initialize when DOM is ready
    initBannerSlider();
    
    // Reinitialize on window resize
    $(window).on('resize', function() {
        setTimeout(function() {
            initBannerSlider();
        }, 100);
    });
});
