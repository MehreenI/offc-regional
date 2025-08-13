/**
 * Regional Office Form Validation
 * Handles contact form validation and submission
 */

jQuery(document).ready(function($) {
    'use strict';
    
    // Form validation function
    function validateForm($form) {
        var isValid = true;
        
        // Clear previous errors
        $form.find('.form-control').removeClass('error');
        
        // Check required fields
        $form.find('input[required], select[required], textarea[required]').each(function() {
            var $field = $(this);
            if (!$field.val()) {
                $field.addClass('error');
                isValid = false;
            }
        });
        
        // Validate email
        var $email = $form.find("input[type=email]");
        if ($email.length && $email.val()) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test($email.val())) {
                $email.addClass("error");
                isValid = false;
            }
        }
        
        return isValid;
    }
    
    // Form submission handler
    function initFormSubmission() {
        $("#ajax-contact-form").on("submit", function(e) {
            e.preventDefault();
            
            var $form = $(this);
            var $submitBtn = $form.find(".submit-button");
            var $btnText = $submitBtn.find(".button-text");
            var $btnLoader = $submitBtn.find(".button-loader");
            var $response = $("#form-response");
            
            // Validate form
            if (!validateForm($form)) {
                $response.removeClass("success").addClass("error")
                    .html("Please fill in all required fields correctly.").show();
                return;
            }
            
            // Show loading state
            $submitBtn.prop("disabled", true);
            $btnText.hide();
            $btnLoader.show();
            $response.hide();
            
            // Get full phone number if iti is available
            if (typeof iti !== "undefined") {
                var fullPhone = iti.getNumber();
                $form.find("#contact-phone").val(fullPhone);
            }
            
            // Submit form via AJAX
            $.ajax({
                url: contact_form_ajax.ajax_url,
                type: "POST",
                data: $form.serialize() + "&action=submit_contact_form",
                success: function(response) {
                    if (response.success) {
                        $response.removeClass("error").addClass("success")
                            .html(response.data).show();
                        $form[0].reset();
                        $("#country-select, #interests-select, #hear-source").val(null).trigger("change");
                    } else {
                        $response.removeClass("success").addClass("error")
                            .html(response.data).show();
                    }
                },
                error: function() {
                    $response.removeClass("success").addClass("error")
                        .html("Connection error. Please try again.").show();
                },
                complete: function() {
                    $submitBtn.prop("disabled", false);
                    $btnText.show();
                    $btnLoader.hide();
                    
                    $("html, body").animate({
                        scrollTop: $response.offset().top - 100
                    }, 500);
                }
            });
        });
    }
    
    // Real-time validation
    function initRealTimeValidation() {
        $(".form-control").on("blur", function() {
            var $field = $(this);
            if ($field.attr("required") && !$field.val()) {
                $field.addClass("error");
            } else {
                $field.removeClass("error");
            }
        });
        
        $("input[type=email]").on("blur", function() {
            var $field = $(this);
            var email = $field.val();
            if (email) {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    $field.addClass("error");
                } else {
                    $field.removeClass("error");
                }
            }
        });
    }
    
    // Initialize all form functionality
    function init() {
        initFormSubmission();
        initRealTimeValidation();
    }
    
    // Initialize when DOM is ready
    init();
});
