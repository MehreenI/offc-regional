/**
 * Regional Office Select2 Initialization
 * Handles Select2 dropdown enhancements for better UX
 */

jQuery(document).ready(function($) {
    'use strict';
    
    // Initialize Select2 for enhanced dropdowns
    function initSelect2() {
        // Check if Select2 is available
        if (typeof $.fn.select2 === 'undefined') {
            console.warn('Select2 library not loaded');
            return;
        }
        
        // Initialize country select
        if ($('#country-select').length) {
            $('#country-select').select2({
                placeholder: 'Select a country',
                allowClear: true,
                width: '100%',
                dropdownParent: $('#country-select').parent(),
                templateResult: formatCountryOption,
                templateSelection: formatCountrySelection
            });
        }
        
        // Initialize interests select
        if ($('#interests-select').length) {
            $('#interests-select').select2({
                placeholder: 'Interest',
                allowClear: true,
                width: '100%',
                dropdownParent: $('#interests-select').parent(),
                multiple: true,
                maximumSelectionLength: 5,
                templateResult: formatInterestOption,
                templateSelection: formatInterestSelection
            });
        }
        
        // Initialize source select
        if ($('#hear-source').length) {
            $('#hear-source').select2({
                placeholder: 'How did you hear about us?',
                allowClear: true,
                width: '100%',
                dropdownParent: $('#hear-source').parent()
            });
        }
    }
    
    // Format country options with flag icons
    function formatCountryOption(country) {
        if (!country.id) return country.text;
        
        var flagClass = getCountryFlagClass(country.id);
        return $(`
            <span class="select2-option-with-flag">
                <i class="flag-icon ${flagClass}"></i>
                <span class="country-name">${country.text}</span>
            </span>
        `);
    }
    
    // Format country selection
    function formatCountrySelection(country) {
        if (!country.id) return country.text;
        
        var flagClass = getCountryFlagClass(country.id);
        return $(`
            <span class="select2-selection-with-flag">
                <i class="flag-icon ${flagClass}"></i>
                <span class="country-name">${country.text}</span>
            </span>
        `);
    }
    
    // Format interest options
    function formatInterestOption(interest) {
        if (!interest.id) return interest.text;
        
        return $(`
            <span class="select2-option-with-icon">
                <i class="interest-icon fas fa-star"></i>
                <span class="interest-name">${interest.text}</span>
            </span>
        `);
    }
    
    // Format interest selection
    function formatInterestSelection(interest) {
        if (!interest.id) return interest.text;
        
        return $(`
            <span class="select2-selection-with-icon">
                <i class="interest-icon fas fa-star"></i>
                <span class="interest-name">${interest.text}</span>
            </span>
        `);
    }
    
    // Get country flag CSS class based on country code
    function getCountryFlagClass(countryCode) {
        var flagMap = {
            'us': 'flag-icon-us',
            'gb': 'flag-icon-gb',
            'de': 'flag-icon-de',
            'fr': 'flag-icon-fr',
            'ca': 'flag-icon-ca',
            'au': 'flag-icon-au',
            'jp': 'flag-icon-jp',
            'cn': 'flag-icon-cn',
            'in': 'flag-icon-in',
            'br': 'flag-icon-br'
        };
        
        return flagMap[countryCode.toLowerCase()] || 'flag-icon-xx';
    }
    
    // Handle Select2 events
    function initSelect2Events() {
        // Country select change event
        $('#country-select').on('change', function() {
            var selectedCountry = $(this).val();
            if (selectedCountry) {
                // Update phone country code if phone input exists
                if (typeof iti !== 'undefined') {
                    iti.setCountry(selectedCountry.toLowerCase());
                }
                
                // Trigger custom event for other components
                $(document).trigger('countryChanged', [selectedCountry]);
            }
        });
        
        // Interests select change event
        $('#interests-select').on('change', function() {
            var selectedInterests = $(this).val();
            if (selectedInterests && selectedInterests.length > 0) {
                // Trigger custom event for other components
                $(document).trigger('interestsChanged', [selectedInterests]);
            }
        });
        
        // Source select change event
        $('#hear-source').on('change', function() {
            var selectedSource = $(this).val();
            if (selectedSource) {
                // Trigger custom event for other components
                $(document).trigger('sourceChanged', [selectedSource]);
            }
        });
    }
    
    // Initialize Select2 search functionality
    function initSelect2Search() {
        // Custom search for countries
        $('#country-select').on('select2:open', function() {
            setTimeout(function() {
                $('.select2-search__field').attr('placeholder', 'Search countries...');
            }, 10);
        });
        
        // Custom search for interests
        $('#interests-select').on('select2:open', function() {
            setTimeout(function() {
                $('.select2-search__field').attr('placeholder', 'Search interests...');
            }, 10);
        });
        
        // Custom search for source
        $('#hear-source').on('select2:open', function() {
            setTimeout(function() {
                $('.select2-search__field').attr('placeholder', 'Search sources...');
            }, 10);
        });
    }
    
    // Initialize responsive behavior
    function initSelect2Responsive() {
        // Handle mobile viewport
        function handleMobileViewport() {
            if (window.innerWidth <= 768) {
                $('.select2-container').css('width', '100%');
                $('.select2-dropdown').css('width', '100%');
            }
        }
        
        // Initial call
        handleMobileViewport();
        
        // Handle resize
        $(window).on('resize', handleMobileViewport);
    }
    
    // Main initialization function
    function init() {
        initSelect2();
        initSelect2Events();
        initSelect2Search();
        initSelect2Responsive();
    }
    
    // Initialize when DOM is ready
    init();
});
