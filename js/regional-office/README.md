# Regional Office JavaScript Organization

This directory contains all JavaScript functionality for the Regional Office page template.

## File Structure

### Core Files
- **`main.js`** - Main entry point and initialization file
- **`main-slider.js`** - Banner slider functionality using Slick Carousel
- **`tab-system.js`** - Custom tab system for news, about us, and contacts
- **`swiper-init.js`** - Swiper slider initialization for tab content
- **`select2-init.js`** - Select2 dropdown enhancements with country flags and icons
- **`form-validation.js`** - Contact form validation and AJAX submission
- **`phone.js`** - Phone number formatting and international input handling

### Legacy Files (Empty - Can be removed)
- **`slick-slider.js`** - Empty file, functionality moved to main-slider.js

## Dependencies

The following external libraries are required:
- jQuery 3.7.1+
- Slick Carousel 1.8.1+
- Swiper 11.0.5+
- Select2 4.1.0+ (for enhanced dropdowns)
- Intl Tel Input 17.0.8+ (for phone number formatting)
- Flag Icons CSS (for country flags)
- Font Awesome (for interest icons)

## Usage

Include these files in your template in the following order:

```html
<!-- Core libraries -->
<script src="jquery.min.js"></script>
<script src="swiper-bundle.min.js"></script>
<script src="slick.min.js"></script>
<script src="select2.min.js"></script>
<script src="intlTelInput.min.js"></script>

<!-- Regional Office JavaScript -->
<script src="js/regional-office/main.js"></script>
<script src="js/regional-office/main-slider.js"></script>
<script src="js/regional-office/tab-system.js"></script>
<script src="js/regional-office/swiper-init.js"></script>
<script src="js/regional-office/select2-init.js"></script>
<script src="js/regional-office/form-validation.js"></script>
<script src="js/regional-office/phone.js"></script>
```

## Features

- **Banner Slider**: Auto-playing banner slider with fade transitions
- **Tab System**: Custom tab navigation with Swiper integration
- **Select2 Dropdowns**: Enhanced dropdowns with search, country flags, and icons
- **Form Validation**: Real-time validation and AJAX submission
- **Phone Input**: International phone number formatting
- **Responsive Design**: Mobile-friendly interactions and animations
- **Scroll Effects**: Smooth scrolling and scroll-based animations

## Maintenance

- Each file has a specific responsibility and can be modified independently
- All files use jQuery and follow consistent coding standards
- Functions are properly namespaced to avoid conflicts
- Error handling and fallbacks are implemented where appropriate
