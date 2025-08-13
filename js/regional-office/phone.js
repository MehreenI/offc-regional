jQuery(document).ready(function($) {
    'use strict';
    
    function initPhoneNumber() {
        if (typeof intlTelInput !== 'undefined') {
            var phoneInput = document.querySelector("#contact-phone");
            if (phoneInput) {
                var iti = intlTelInput(phoneInput, {
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                    preferredCountries: ['us', 'gb', 'de', 'fr'],
                    separateDialCode: true,
                    formatOnDisplay: true
                });

                // Keep dial code fixed
                phoneInput.addEventListener("keydown", function(e) {
                    var dialCode = "+" + iti.getSelectedCountryData().dialCode;
                    if (
                        phoneInput.selectionStart < dialCode.length &&
                        (e.key !== "ArrowLeft" && e.key !== "ArrowRight" && e.key !== "Tab")
                    ) {
                        e.preventDefault(); // Block deletion/edit inside dial code
                    }
                });

                // Reset dial code if somehow removed (e.g., paste)
                phoneInput.addEventListener("input", function() {
                    var dialCode = "+" + iti.getSelectedCountryData().dialCode;
                    if (!phoneInput.value.startsWith(dialCode)) {
                        phoneInput.value = dialCode + " " + phoneInput.value.replace(/\D/g, '');
                    }
                });
                phoneInput.value = "+1 "

                // Update dial code when flag changes
                phoneInput.addEventListener("countrychange", function() {
                    var dialCode = "+" + iti.getSelectedCountryData().dialCode;
                    phoneInput.value = dialCode + " ";
                });

                // Store for form submission
                window.iti = iti;
            }
        }
    }

    initPhoneNumber();
});
