;(function ($) {
    $('.banner_section_slider').slick({
     slidesToShow: 1,
     arrows: false,
     dots: true,
     responsive: [
       {
         breakpoint: 768,
         settings: {
           arrows: true,
           dots: false,
              prevArrow: `<button type="button" class="slick-prev">
             <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M7.88999 1.58002L6.70332 0.400024L0.109985 7.00002L6.70999 13.6L7.88999 12.42L2.46999 7.00002L7.88999 1.58002Z" fill="#727DA3"/>
             </svg>
           </button>`, 
           nextArrow: `<button type="button" class="slick-next">
             <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M0.110015 12.42L1.29668 13.6L7.89002 6.99998L1.29002 0.399975L0.110015 1.57997L5.53002 6.99998L0.110015 12.42Z" fill="#727DA3"/>
             </svg>
           </button>`
         }
       }
     ]
   });
   
   
   // tab
   
   })(jQuery)