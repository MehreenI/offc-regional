<?php
    /*
   Template Name: Regional Off V2
   */
    get_header();
?>
<link rel="stylesheet"
    href="<?php echo get_template_directory_uri() ?>/css/regional-office/fonts.css?ver=<?php echo rand(1, 10000)?>">

<link rel="stylesheet"
    href="<?php echo get_template_directory_uri() ?>/css/regional-office/main.css?ver=<?php echo rand(1, 10000)?>">

<link rel="stylesheet"
    href="<?php echo get_template_directory_uri() ?>/css/regional-office/contact.css?ver=<?php echo rand(1, 10000)?>">
<link rel="stylesheet"
    href="<?php echo get_template_directory_uri() ?>/css/regional-office/custom.css?ver=<?php echo rand(1, 10000)?>">
    <link rel="stylesheet"
    href="<?php echo get_template_directory_uri() ?>/css/regional-office/mobile.css?ver=<?php echo rand(1, 10000)?>">

    <link rel="stylesheet"
    href="<?php echo get_template_directory_uri() ?>/css/regional-office/map.css?ver=<?php echo rand(1, 10000)?>">


<!-- Slick Carousel CSS -->
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<!-- Select2 CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css">

<!-- Intl Tel Input CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">

<!-- Flag Icons CSS (for country flags in Select2) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

<!-- Font Awesome (for interest icons in Select2) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



<main>
    <!-- banner -->
    <section class="banner_section">
        <div class="banner_section_slider">
            <div class="bg_div bg_div_1"
                style="background-image: url(https://staging.iec-telecom.com/wp-content/uploads/2025/08/bg_1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_content text_white">
                                <a href="#" class="gray_btn desk_show button_font"> LEARN MORE</a>
                                <h1>STARLINK PERFORMANCE KIT</h1>
                                <div class="sub_head">STAY CONNECTED AT 400 Mbps+</div>
                                <a href="#" class="gray_btn mob_show"> LEARN MORE</a>
                                <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/bg_1_sub-1.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg_div bg_div_2"
                style="background-image: url(https://staging.iec-telecom.com/wp-content/uploads/2025/08/bg_2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_content text_white">
                                <a href="#" class="gray_btn desk_show button_font"> LEARN MORE</a>
                                <h1>Portable <br>Starlink Kit</h1>
                                <div class="sub_head">RDK 2.0. Online. Anywhere.</div>
                                <a href="#" class="gray_btn mob_show"> LEARN MORE</a>
                                <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/bg_2_sub_img.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg_div bg_div_3"
                style="background-image: url(https://staging.iec-telecom.com/wp-content/uploads/2025/08/bg_3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_content text_white">
                                <a href="#" class="gray_btn desk_show button_font"> LEARN MORE</a>
                                <h1 style="color: #1B204C;">TRAKSAT PTT</h1>
                                <div class="sub_head" style="color: #1B204C;">Real-time field communications with
                                    complete control</div>
                                <a href="#" class="gray_btn mob_show"> LEARN MORE</a>
                                <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/bg_3_sub_img.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end-->
    <!-- tab section -->
    <section class="tab_section">
        <div class="container">
            <div class="custom-tab-container">
                <div class="custom-tab-buttons">
                    <button class="custom-tab-btn active" data-tab="0">REGIONAL NEWS</button>
                    <button class="custom-tab-btn" data-tab="1">ABOUT US</button>
                    <button class="custom-tab-btn" data-tab="2">Contacts</button>
                   
                </div>
                <div class="swiper tab-swiper">
                    <div class="swiper-wrapper">
                        <!-- News Tab Content - Slide 1 -->
                        <div class="swiper-slide " id="slide_news">
                            <h3 class="font_35 text_blue" style="margin-bottom: 20px">Featured News </h3>
                            <div class="row news_row">
                                <div class="col-md-4">
                                    <div class="news-item">
                                        <a href="#">
                                            <div class="img_wrap">
                                                <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/image-1.png"
                                                    alt="News Image">
                                            </div>
                                        </a>
                                        <div class="meta">
                                            <div class="d_flex justify_between">
                                                <div class="category_pill">Events</div>
                                                <div class="date text_gray">08 apr 2025</div>
                                            </div>
                                        </div>
                                        <h3 class="news_title">
                                            <a href="#">
                                                <p class="excerpt">IEC Telecom Group and Thuraya Telecommunications
                                                    Company to showcase the latest innovations in their joint
                                                    connectivity solution at DIHAD 2025</p>
                                            </a>
                                        </h3>
                                        <a href="#" class="read_more"><span>Read more</span> <img
                                                src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/arrow-right.svg"
                                                alt="Arrow"></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="news-item">
                                        <a href="#">
                                            <div class="img_wrap">
                                                <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/image-1.png"
                                                    alt="News Image">
                                            </div>
                                        </a>
                                        <div class="meta">
                                            <div class="d_flex justify_between">
                                                <div class="category_pill">Events</div>
                                                <div class="date text_gray">08 apr 2025</div>
                                            </div>
                                        </div>
                                        <h3 class="news_title">
                                            <a href="#">
                                                <p class="excerpt">IEC Telecom Group and Thuraya Telecommunications
                                                    Company to showcase the latest innovations in their joint
                                                    connectivity solution at DIHAD 2025</p>
                                            </a>
                                        </h3>
                                        <a href="#" class="read_more"><span>Read more </span><img
                                                src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/arrow-right.svg"
                                                alt="Arrow"></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="news-item">
                                        <a href="#">
                                            <div class="img_wrap">
                                                <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/image-1.png"
                                                    alt="News Image">
                                            </div>
                                        </a>
                                        <div class="meta">
                                            <div class="d_flex justify_between">
                                                <div class="category_pill">Events</div>
                                                <div class="date text_gray">08 apr 2025</div>
                                            </div>
                                        </div>
                                        <h3 class="news_title">
                                            <a href="#">
                                                <p class="excerpt">IEC Telecom Group and Thuraya Telecommunications
                                                    Company to showcase the latest innovations in their joint
                                                    connectivity solution at DIHAD 2025</p>
                                            </a>
                                        </h3>
                                        <a href="#" class="read_more"><span>Read more</span> <img
                                                src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/arrow-right.svg"
                                                alt="Arrow"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <!-- About us tab - Slide 2 -->
                        <div class="swiper-slide container" id="slide_about">
                            <h2 class="about-title">IEC TELECOM EUROPE</h2>
                            <div class="text">
                                <p>With nearly 30 years of experience, IEC Telecom Europe is one of the leading
                                    satellite service operators across Europe and Africa. Founded in 1995, IEC Telecom
                                    Europe is proud to have served the Humanitarian Sector since 1998 with intensive
                                    expertise in onsite needs analysis and a true customer oriented operational team.
                                    Today, we support various UN agencies and NGOs in more than 150 countries. IEC
                                    Telecom Europe is a committed partner in the Humanitarian World. Since 2008, IEC
                                    Telecom has also become one of the leading companies in the broadcast and event
                                    markets for L, Ku and Ka Bands.</p>
                                <p>In 2015, IEC Telecom Europe decided to ride the wave of the maritime sector and have
                                    a dedicated team to manage it. We quickly earned our Captain strips thanks to our
                                    presence on the pontoons. We are, today, one of the main satellite communications
                                    providers in the leisure, yachting, racing, and fishing markets. IEC Telecom Europe
                                    provides extensive support to the enterprise customer in mining, oil & gas,
                                    construction, and transport industries. Today, with offices around the globe, the
                                    communications expertise of the IEC Telecom Group is renowned in the humanitarian,
                                    maritime, and enterprise sectors. IEC Telecom Europe is a member of Fédération des
                                    Industries Nautiques and compliant with United Nations Global Compact regulations.
                                    IEC Telecom Europe is Trace certified, demonstrating our commitment to commercial
                                    transparency and supply chain integrity.</p>
                            </div>
                            <h3 class="small_heading">WHY WORK WITH US</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="icon_list">
                                        <li><i class="fa-solid fa-check"></i> We have nearly 30 years of experience in
                                            Europe and Africa</li>
                                        <li><i class="fa-solid fa-check"></i> We offer a unique network of technologies
                                        </li>
                                        <li><i class="fa-solid fa-check"></i>We provide tailormade solutions for every
                                            project</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="icon_list">
                                        <li><i class="fa-solid fa-check"></i> We support your critical operations with
                                            our rapid logistics</li>
                                        <li><i class="fa-solid fa-check"></i>We provide 24/7 support all year round</li>
                                        <li><i class="fa-solid fa-check"></i> We save you money through our cost-saving
                                            approaches</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text">
                                <p class="about-disclaimer">IEC Telecom Europe has a dedicated website with information
                                    about all major products and solutions in French. Feel free to browse it now!</p>
                            </div>
                        </div>

                         <!-- Contact tab - Slide 3 -->
                         <div class="swiper-slide " id="slide_contact">
                            <div class="row contact-section-pareent">
                                <div class="col-md-4 ">
                                    <h3 class="font_35 text_blue" style="margin-bottom:1rem">Cergy Pontoise</h3>

                                    <div class="about_text ">
                                        <p>Immeuble Le Cerame, 47 Avenue des Genottes, <br> Cergy Saint Christophe, <br>95800
                                            Cergy Pontoise, FRANCE</p>
                                            <ul class="contact_list">
                                            <li class="contact_list_item">
                                                <a href="tel:+330140170803">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.1 5C19.7256 5 22.2437 6.04303 24.1004 7.89964C25.957 9.75625 27 12.2744 27 14.9M17.1 9.4C18.5587 9.4 19.9576 9.97946 20.9891 11.0109C22.0205 12.0424 22.6 13.4413 22.6 14.9M18.0152 21.0248C18.2424 21.1291 18.4983 21.153 18.7409 21.0924C18.9834 21.0318 19.1981 20.8904 19.3495 20.6915L19.74 20.18C19.9449 19.9068 20.2106 19.685 20.5161 19.5323C20.8216 19.3795 21.1585 19.3 21.5 19.3H24.8C25.3835 19.3 25.9431 19.5318 26.3556 19.9444C26.7682 20.3569 27 20.9165 27 21.5V24.8C27 25.3835 26.7682 25.9431 26.3556 26.3556C25.9431 26.7682 25.3835 27 24.8 27C19.5487 27 14.5125 24.9139 10.7993 21.2007C7.08607 17.4875 5 12.4513 5 7.2C5 6.61652 5.23178 6.05695 5.64436 5.64436C6.05695 5.23178 6.61652 5 7.2 5H10.5C11.0835 5 11.6431 5.23178 12.0556 5.64436C12.4682 6.05695 12.7 6.61652 12.7 7.2V10.5C12.7 10.8415 12.6205 11.1784 12.4677 11.4839C12.315 11.7894 12.0932 12.0551 11.82 12.26L11.3052 12.6461C11.1033 12.8003 10.9609 13.0196 10.9024 13.2669C10.8438 13.5141 10.8727 13.774 10.984 14.0024C12.4873 17.0559 14.9599 19.5253 18.0152 21.0248Z"
                                                            stroke="#727DA3" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    +33 (0) 1 40 17 08 03
                                                </a>
                                            </li>
                                            <li class="contact_list_item">
                                                <a href="tel:+330140170805">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16 14H18V16H16V14ZM20 14H22V16H20V14ZM24 14H26V16H24V14ZM16 18H18V20H16V18ZM20 18H22V20H20V18ZM24 18H26V20H24V18ZM16 22H18V24H16V22ZM20 22H22V24H20V22ZM24 22H26V24H24V22ZM16 10H26V12H16V10Z"
                                                            fill="#727DA3" />
                                                        <path
                                                            d="M28 6H14V5C13.9992 4.46981 13.7882 3.96156 13.4133 3.58666C13.0384 3.21176 12.5302 3.00079 12 3H8C7.46981 3.00079 6.96156 3.21176 6.58666 3.58666C6.21176 3.96156 6.00079 4.46981 6 5V6H4C3.46981 6.00079 2.96156 6.21176 2.58666 6.58666C2.21176 6.96156 2.00079 7.46981 2 8V26C2.00079 26.5302 2.21176 27.0384 2.58666 27.4133C2.96156 27.7882 3.46981 27.9992 4 28H28C28.5302 27.9992 29.0384 27.7882 29.4133 27.4133C29.7882 27.0384 29.9992 26.5302 30 26V8C29.9992 7.46981 29.7882 6.96156 29.4133 6.58666C29.0384 6.21176 28.5302 6.00079 28 6ZM8 5H12V22H8V5ZM28 26H4V8H6V22C6.00079 22.5302 6.21176 23.0384 6.58666 23.4133C6.96156 23.7882 7.46981 23.9992 8 24H12C12.5302 23.9992 13.0384 23.7882 13.4133 23.4133C13.7882 23.0384 13.9992 22.5302 14 22V8H28V26Z"
                                                            fill="#727DA3" />
                                                    </svg>
                                                    +33 (0) 1 40 17 08 05
                                                </a>
                                            </li>
                                            <li class="contact_list_item">
                                                <a href="mailto:info-ea@iec-telecom.com">
                                                    <svg width="28" height="21" viewBox="0 0 28 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M26.25 0C26.7141 0 27.1592 0.184374 27.4874 0.512563C27.8156 0.840752 28 1.28587 28 1.75V19.25C28 19.7141 27.8156 20.1592 27.4874 20.4874C27.1592 20.8156 26.7141 21 26.25 21H1.75C1.28587 21 0.840752 20.8156 0.512563 20.4874C0.184374 20.1592 0 19.7141 0 19.25V1.75C0 1.28587 0.184374 0.840752 0.512563 0.512563C0.840752 0.184374 1.28587 0 1.75 0H26.25ZM26.25 2.98725L15.2513 14.0035C15.0888 14.1675 14.8956 14.2977 14.6826 14.3867C14.4696 14.4757 14.2412 14.5217 14.0104 14.522C13.7795 14.5223 13.5509 14.477 13.3377 14.3886C13.1245 14.3002 12.9309 14.1705 12.768 14.007L1.75 2.98725V18.011L7.2555 12.5055C7.33685 12.4241 7.43343 12.3596 7.53973 12.3156C7.64602 12.2716 7.75995 12.2489 7.875 12.2489C7.99005 12.2489 8.10398 12.2716 8.21027 12.3156C8.31657 12.3596 8.41315 12.4241 8.4945 12.5055C8.57585 12.5869 8.64039 12.6834 8.68442 12.7897C8.72844 12.896 8.75111 13.0099 8.75111 13.125C8.75111 13.2401 8.72844 13.354 8.68442 13.4603C8.64039 13.5666 8.57585 13.6631 8.4945 13.7445L2.9855 19.25H25.0128L19.5055 13.7445C19.3412 13.5802 19.2489 13.3574 19.2489 13.125C19.2489 12.8926 19.3412 12.6698 19.5055 12.5055C19.6698 12.3412 19.8926 12.2489 20.125 12.2489C20.3574 12.2489 20.5802 12.3412 20.7445 12.5055L26.25 18.0128V2.98725ZM25.011 1.75H2.98725L14.0087 12.7715L25.011 1.75Z"
                                                            fill="#727DA3" />
                                                    </svg>
                                                    info-ea@iec-telecom.com
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="col-md-8">
                                <div id="map">
            <div class="loading">Loading map...</div>
        </div>
        
        
                                </div>
                            </div>
                        </div>

                         
 
                       
                      

                    </div>
                    <!-- Closes swiper-wrapper -->
                </div>
                <!-- Closes swiper tab-swiper -->
            </div>
            <!-- Closes custom-tab-container -->
        </div>
        <!-- Closes container -->
    </section>
    <!-- Closes tab_section -->
    <!-- tab section end-->
    <!-- logo  -->
    <div class="about_logo_section">
        <div class="container ">
            <h3 class="small_heading">MEMBERSHIP & ASSOCIATION</h3>
            <div class="member-flex">
                <div class="logo_wrap">
                    <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/Logo_1-1.png">
                    <div class="slide-content">
                      <div class="content-inner">
                          <p>Membre depuis 2011 pour suivre les 10 principes du Global Compact & 17 objectifs de Développement Durable des Nations Unies</p>
                      </div>
                  </div>
                </div>
                <div class="logo_wrap">
                    <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/Logo_2-1.png">

                    <div class="slide-content">
                      <div class="content-inner">
                          <p>IEC Telecom Europe conducts its activities in compliance with professional ethics and international commitments to fight corruption.</p>
                      </div>
                    </div>
                </div>
                <div class="logo_wrap">
                    <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/Logo_3-1.png">
                    <div class="slide-content">
                      <div class="content-inner">
                          <p>Member since 2020 of the Federation of Nautical Industries which represents the professions of the French nautical sector.</p>
                      </div>
                  </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- explore section -->
    <div class="exlore_section bg_blue">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="font_38 text_white">EXPLORE OPTIVIEW</h2>
                    <div class="font_22 text_white">
                        <p class="sub_content">Ultimate gateway to network management</p>
                    </div>
                    <ul class="icon_list">
                        <li><i class="fa-solid fa-check"></i> Performance & Usage Insights</li>
                        <li><i class="fa-solid fa-check"></i> Voucher Monitoring</li>
                        <li><i class="fa-solid fa-check"></i> Credit Limit Management</li>
                        <li><i class="fa-solid fa-check"></i> Advanced Filtration</li>
                        <li><i class="fa-solid fa-check"></i> Value-Added Services</li>
                    </ul>
                    <a href="" class="gray_btn button_font">Learn More</a>
                </div>
                <div class="col-md-8 mobile-hidden">
                    <div class="explore_img">
                        <img src="https://faspaccargo.com/me/wp-content/uploads/2025/08/optview.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- explore section end-->
    <!-- solution section -->
    <section class="solution_section">

        <div class="container">
            <h2 class="font_38 text_blue" style="margin-bottom: 20px">Our Solutions</h2>
            <div class="swiper-wrapper-container">
                <div class="swiper-button-prev custom-arrow">
                    <svg width="26" height="31" viewBox="0 0 26 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5 31L13.1056 31L0.499999 15.978L13 -1.09278e-06L25.5 0L13 15.5L25.5 31Z"
                            fill="#727DA4" fill-opacity="0.5" />
                    </svg>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="solution_item">
                                <div class="solution_item_wrap">
                                    <a href="#">
                                        <div class="img_wrap">
                                            <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/image-2.png"
                                                alt="Starlink Land Portfolio">
                                        </div>
                                        <div class="solution_title">Starlink Land Portfolio</div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="solution_item">
                                <div class="solution_item_wrap">
                                    <a href="#">
                                        <div class="img_wrap">
                                            <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/image-2.png"
                                                alt="Starlink Land Portfolio">
                                        </div>
                                        <div class="solution_title">Advanced Connectivity Solutions</div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="solution_item">
                                <div class="solution_item_wrap">
                                    <a href="#">
                                        <div class="img_wrap">
                                            <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/image-2.png"
                                                alt="Starlink Land Portfolio">
                                        </div>
                                        <div class="solution_title">Satellite Technology Services</div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="solution_item">
                                <div class="solution_item_wrap">
                                    <a href="#">
                                        <div class="img_wrap">
                                            <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/image-2.png"
                                                alt="Starlink Land Portfolio">
                                        </div>
                                        <div class="solution_title">Network Infrastructure</div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="solution_item">
                                <div class="solution_item_wrap">
                                    <a href="#">
                                        <div class="img_wrap">
                                            <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/image-2.png"
                                                alt="Starlink Land Portfolio">
                                        </div>
                                        <div class="solution_title">Digital Solutions Platform</div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="swiper-slide">
                            <div class="solution_item">
                                <div class="solution_item_wrap">
                                    <a href="#">
                                        <div class="img_wrap">
                                            <img src="https://staging.iec-telecom.com/wp-content/uploads/2025/08/image-2.png"
                                                alt="Starlink Land Portfolio">
                                        </div>
                                        <div class="solution_title">Enterprise Communications</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="swiper-button-next custom-arrow">
                    <svg width="26" height="31" viewBox="0 0 26 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 0L12.8944 0L25.5 15.022L13 31H0.5L13 15.5L0.5 0Z" fill="#727DA4"
                            fill-opacity="0.5" />
                    </svg>
                </div>
            </div>

            <!-- Pagination + Button in one row -->
            <div class="swiper-controls">
                <div class="swiper-pagination"></div>
                <div class="solution_btn">
                    <a href="#" class="gradient_btn button_font">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- solution section end-->
    <!-- level section -->
    <div class="level_section"
        style="background-image:url('https://faspaccargo.com/me/wp-content/uploads/2025/08/bg_level-scaled.png')">
        <div class="container">
            <div class="row d-flex flex-end">
                <div class="col-md-5">
                    <h2 class="font_38 text_white">LEVEL UP WITH STARLINK MARITIME PORTFOLIO</h2>
                    <div class="mb_12 font_22 text_white">
                        <p class=sub_content>No matter where your journey takes you, ensure best user experience on
                            board</p>
                    </div>
                    <ul class="icon_list">
                        <li><i class="fa-solid fa-check"></i> Starlink Flat High Performance</li>
                        <li><i class="fa-solid fa-check"></i> Resilient back-up options</li>
                        <li><i class="fa-solid fa-check"></i> Advanced network management</li>
                        <li><i class="fa-solid fa-check"></i> Voucher system for crew welfare</li>
                        <li><i class="fa-solid fa-check"></i> Cyber-security services</li>
                        <li><i class="fa-solid fa-check"></i> Global Logistics 24/7 support and more</li>

                    </ul>
                    <a href="" class="gray_btn button_font">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- level section end-->
    <!-- product section -->
    <section class="product_section">
        <div class="container">
            <h2 class="main_heading">IN HIGH DEMAND</h2>
            <div class="row product_row mb_12">
                <?php
                $args = [
                    'post_type'      => 'product',
                    'posts_per_page' => 6,
                ];

                $query = new WP_Query($args);

                if ($query->have_posts()):
                    while ($query->have_posts()): $query->the_post();

                        $permalink     = get_permalink();
                        $caption       = get_field('caption');
                        $summary       = get_field('summary');
                        $landing_image = get_field('landing_image');
                        $applications  = get_field('ps_filter_application');
                        $app_filters   = get_ps_filter_choices('application');

                        if (empty($landing_image['url'])) {
                            continue;
                        }

                        $cat_class = ! empty($applications) && count($applications) > 1 ? 'cats cats-2' : 'cats';
                    ?>
                <div class="col-md-4">
                    <div class="product_item_wrap">
                        <a href="<?php echo esc_url($permalink); ?>">
                            <div class="img_wrap">
                                <div class="image-div"
                                    style="background-image: url('<?php echo esc_url($landing_image['url']); ?>');">
                                </div>
                                <?php if (! empty($applications)): ?>
                                <div class="<?php echo esc_attr($cat_class); ?>">
                                    <?php foreach ($applications as $application): ?>
                                    <div
                                        class="<?php echo esc_attr(strtolower(str_replace(' ', '-', $application))); ?>">
                                        <div>
                                            <?php echo esc_html($app_filters[$application]); ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="product_title">
                                <?php echo esc_html($caption); ?>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                        endwhile;
                        wp_reset_postdata();
                        endif;
                    ?>
            </div>
            <div class="right_text solution_btn">
                <a href="#" class="gradient_btn right button_font">View More</a>
            </div>
        </div>
    </section>

    <!-- prooduct section end-->

    <!-- contact section -->
    <section class="form-section ">
        <div class="form ">
            <div class="app-container container" data-select2-id="select2-data-8-t2a6">
                <h3 class="heading">CONTACT US</h3>
                <form method="post" id="ajax-contact-form" novalidate="" data-select2-id="select2-data-contact-form">
                    <input type="hidden" name="form_type" value="contact">
                    <input type="text" name="first_name" placeholder="First Name..." required=""
                        class="input form-control">
                    <input type="text" name="last_name" placeholder="Last Name..." required=""
                        class="input form-control">
                    <input type="text" name="company" class="input form-control" placeholder="Company...">
                    <input type="tel" name="phone" id="contact-phone" placeholder="Phone..." class="input">
                    <input type="email" name="email" placeholder="Email..." required="" class="input form-control">
                    <div class="country">
                        <select name="country" id="country-select" required="" class="input">
                            <option value="">Country...</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                        </select>
                    </div>
                    <div class="interest">
                        <select id="interests-select" name="interests[]" required multiple class="input interest"
                            aria-hidden="true">
                            <option value="">Interest...</option>
                            <option value="Shipping">Shipping</option>
                            <option value="Fishing">Fishing</option>
                            <option value="Offshore">Offshore</option>
                            <option value="Leisure">Leisure</option>
                            <option value="Government">Government</option>
                            <option value="Humanitarian">Humanitarian</option>
                            <option value="Energy">Energy</option>
                            <option value="Enterprise">Enterprise</option>
                            <option value="Media">Media</option>
                            <option value="Else">Else</option>
                        </select>
                    </div>
                    <input type="text" name="message" placeholder="Message" class="input ">
                    <div class="how hear" id="hear">
                        <select name="hear_source" id="hear-source" required="" class="input hear" aria-hidden="true">
                            <option value="">How did you hear about us?</option>
                            <option value="Google">Google</option>
                            <option value="LinkedIn">LinkedIn</option>
                            <option value="Other Social networks">Other Social networks</option>
                            <option value="Event">Event</option>
                            <option value="Media advertising">Media advertising</option>
                            <option value="E-mailing">E-mailing</option>
                        </select>
                    </div>
                </form>
                <div class="right_text solution_btn">
                <div class="captcha-wrapper">
    <div class="g-recaptcha" data-sitekey="<?php echo get_config('bbpress_google_captcha_site_key'); ?>"></div>
</div>
                    <button class="gradient_btn right button_font" style="margin-left: 1rem">Send</button>
                </div>
                <div id="form-response" style="display: none;"></div>
            </div>
        </div>
    </section>
</main>
<?php
    // First, load WordPress' built-in jQuery
    wp_enqueue_script('jQuery');

?>


<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!-- Core JavaScript Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Slick Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>

<!-- Intl Tel Input JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


<!-- Regional Office JavaScript -->
<script src="<?php echo get_template_directory_uri() ?>/js/regional-office/main.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/regional-office/main-slider.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/regional-office/tab-system.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/regional-office/swiper-init.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/regional-office/select2-init.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/regional-office/form-validation.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/regional-office/phone.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/regional-office/map.js"></script>

<script async defer 
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOXd5PhKAqxPVxsOVU-k5X93e6fArjc9c&libraries=geometry&callback=initMap">
    </script>
<!-- Our Solution -->
<script>
    let swiperInstance = null;

    function initSwiper() {
        if (window.innerWidth >= 768) {
            if (!swiperInstance) {
                swiperInstance = new Swiper(".mySwiper", {
                    slidesPerView: 2,
                    spaceBetween: 25,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                        dynamicBullets: false,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        }
                    }
                });
            }
        } else {
            if (swiperInstance) {
                swiperInstance.destroy(true, true);
                swiperInstance = null;
            }
        }
    }

    // Initialize on load
    document.addEventListener("DOMContentLoaded", initSwiper);

    // Re-evaluate on resize
    window.addEventListener("resize", function () {
        initSwiper();
    });



    jQuery(document).ready(function($) {
    function initSlick() {
        if ($(window).width() < 768) {
            if (!$('.news_row').hasClass('slick-initialized')) {
                $('.news_row').slick({
                    slidesToShow: 1,
                    arrows: true,
                    dots: false,
                    prevArrow: `
                        <button class="slick-prev" aria-label="Previous" type="button">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.88999 1.58002L6.70332 0.400024L0.109985 7.00002L6.70999 13.6L7.88999 12.42L2.46999 7.00002L7.88999 1.58002Z" fill="#727DA3"></path>
                            </svg>
                        </button>
                    `,
                    nextArrow: `
                        <button class="slick-next" aria-label="Next" type="button">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.110015 12.42L1.29668 13.6L7.89002 6.99998L1.29002 0.399975L0.110015 1.57997L5.53002 6.99998L0.110015 12.42Z" fill="#727DA3"></path>
                            </svg>
                        </button>
                    `
                });
            }
        } else {
            if ($('.news_row').hasClass('slick-initialized')) {
                $('.news_row').slick('unslick');
            }
        }
    }

    initSlick();
    $(window).on('resize', function() {
        initSlick();
    });
});

</script>


<?php
get_footer();