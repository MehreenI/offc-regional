document.addEventListener('DOMContentLoaded', function() {
    
    // Check if required elements exist
    const swiperContainer = document.querySelector('.tab-swiper');
    const tabButtons = document.querySelectorAll('.custom-tab-btn');
    
    if (!swiperContainer) {
        console.error('Swiper container not found!');
        return;
    }
    
    if (tabButtons.length === 0) {
        console.error('Tab buttons not found!');
        return;
    }
    
    
    // Initialize Swiper with error handling
    let tabSwiper;
    
    try {
        tabSwiper = new Swiper('.tab-swiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            allowTouchMove: true,
            speed: 600,
            effect: 'slide',
            autoHeight: true,
            on: {
                slideChange: function () {
                    updateActiveTab(this.activeIndex);
                },
                init: function() {
                },
                error: function(error) {
                    console.error('Swiper error:', error);
                }
            }
        });
        
        
    } catch (error) {
        console.error('Failed to initialize Swiper:', error);
        return;
    }
    
    // Add click event listeners to tab buttons with error handling
    tabButtons.forEach((button, index) => {
        if (!button) {
            console.error('Button at index', index, 'is null or undefined');
            return;
        }
        
        button.addEventListener('click', function() {
            
            try {
                // Check if swiper is available
                if (!tabSwiper) {
                    console.error('Swiper not initialized');
                    return;
                }
                
                // Slide to corresponding tab content
                tabSwiper.slideTo(index);
                
                // Update active tab
                updateActiveTab(index);
                
            } catch (error) {
                console.error('Error handling tab click:', error);
            }
        });
    });
    
    // Function to update active tab styling with error handling
    function updateActiveTab(index) {
        try {
            
            // Remove active class from all buttons
            tabButtons.forEach(btn => {
                if (btn && btn.classList) {
                    btn.classList.remove('active');
                }
            });
            
            // Add active class to current button
            if (tabButtons[index] && tabButtons[index].classList) {
                tabButtons[index].classList.add('active');
            } else {
                console.error('Cannot update tab at index:', index);
            }
            
        } catch (error) {
            console.error('Error updating active tab:', error);
        }
    }
    
    // Handle keyboard navigation with error handling
    document.addEventListener('keydown', function(e) {
        try {
            if (!tabSwiper) return;
            
            if (e.key === 'ArrowLeft') {
                tabSwiper.slidePrev();
            } else if (e.key === 'ArrowRight') {
                tabSwiper.slideNext();
            }
        } catch (error) {
            console.error('Error handling keyboard navigation:', error);
        }
    });
    
});

// Fallback error handler
window.addEventListener('error', function(e) {
    console.error('Global error:', e.error);
});