/**
 * Regional Office Main JavaScript
 * Main entry point for all regional office functionality
 */

jQuery(document).ready(function($) {
    'use strict';
    
    // Main initialization function
    function initRegionalOffice() {
        console.log('Regional Office initialized');
        
        // Add any global functionality here
        initScrollEffects();
        initResponsiveBehavior();
    }
    
    // Scroll effects
    function initScrollEffects() {
        // Smooth scroll for anchor links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var target = $(this.getAttribute('href'));
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        });
        
        // Add scroll-based animations
        $(window).on('scroll', function() {
            var scrollTop = $(window).scrollTop();
            
            // Add sticky behavior to header if needed
            if (scrollTop > 100) {
                $('.header').addClass('sticky');
            } else {
                $('.header').removeClass('sticky');
            }
        });
    }
    
    // Responsive behavior
    function initResponsiveBehavior() {
        // Handle mobile menu toggle
        $('.mobile-menu-toggle').on('click', function() {
            $('.mobile-menu').toggleClass('active');
            $(this).toggleClass('active');
        });
        
        // Close mobile menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.mobile-menu, .mobile-menu-toggle').length) {
                $('.mobile-menu').removeClass('active');
                $('.mobile-menu-toggle').removeClass('active');
            }
        });
    }
    
    // Initialize when DOM is ready
    initRegionalOffice();
});
