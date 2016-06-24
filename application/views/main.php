
        <section id="slider" class="slider-parallax swiper_wrapper clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center col_full">
                                <h2 style="font-size:30px;" data-caption-animate="fadeInUp">Dream the <span> impossible</span>. Do the <span>remarkable</span></h2>
                                <p style="font-size:25px;" data-caption-animate="fadeInUp" data-caption-delay="200">E Cell, IIIT Hyderabad. For people growing great ideas. <br/>
            A non-profit organization run by the students, has been established with the objective of creating,
            manifesting and that promotes and celebrates the entrepreneurial spirit amongst the students and encourages
            them to be budding entrepreneurs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                jQuery(document).ready(function($){
                    var swiperSlider = new Swiper('.swiper-parent',{
                        paginationClickable: false,
                        slidesPerView: 1,
                        grabCursor: true,
                        onSwiperCreated: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                        },
                        onSlideChangeStart: function(swiper){
                            $('#slide-number-current').html(swiper.activeIndex + 1);
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                            });
                        },
                        onSlideChangeEnd: function(swiper){
                            $('#slider .swiper-slide').each(function(){
                                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                            });
                            $('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
                                if($(this).find('video').length > 0) {
                                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                                }
                            });
                            if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

                            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                        }
                    });

                    $('#slider-arrow-left').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipePrev();
                    });

                    $('#slider-arrow-right').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipeNext();
                    });

                    $('#slide-number-current').html(swiperSlider.activeIndex + 1);
                    $('#slide-number-total').html(swiperSlider.slides.length);
                });
            </script>

        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="promo promo-light promo-full bottommargin-lg header-stick notopborder">
                    <div class="container clearfix">
                        <h3>Call us today at <span>+91.22.57412541</span> or Email us at <span>support@canvas.com</span></h3>
                        <span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
                        <a href="#" class="button button-dark button-xlarge button-rounded">Start Browsing</a>
                    </div>
                </div>

                <div class="container clearfix">

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="#"><i class="i-alt noborder icon-shop"></i></a>
                            </div>
                            <h3>e-Commerce Solutions<span class="subtitle">Start your Own Shop today</span></h3>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="#"><i class="i-alt noborder icon-wallet"></i></a>
                            </div>
                            <h3>Easy Payment Options<span class="subtitle">Credit Cards &amp; PayPal Support</span></h3>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="#"><i class="i-alt noborder icon-megaphone"></i></a>
                            </div>
                            <h3>Instant Notifications<span class="subtitle">Realtime Email &amp; SMS Support</span></h3>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin col_last">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="#"><i class="i-alt noborder icon-fire"></i></a>
                            </div>
                            <h3>Hot Offers Daily<span class="subtitle">Upto 50% Discounts</span></h3>
                        </div>
                    </div>

                    <div class="clear"></div><div class="line bottommargin-lg"></div>

                    <div class="col_two_fifth nobottommargin">
                        <a href="http://vimeo.com/101373765" data-lightbox="iframe">
                            <img src="assets/images/others/1.jpg" alt="Image">
                            <span class="i-overlay"><img src="assets/images/icons/play.png" alt="Play"></span>
                        </a>
                    </div>

                    <div class="col_three_fifth nobottommargin col_last">

                        <div class="heading-block">
                            <h2>Globally Preferred Ecommerce Platform</h2>
                        </div>

                        <p>Worldwide John Lennon, mobilize humanitarian; emergency response donors; cause human experience effect. Volunteer Action Against Hunger Aga Khan safeguards women's.</p>

                        <div class="col_half nobottommargin">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><i class="icon-caret-right"></i> Responsive Ready Layout</li>
                                <li><i class="icon-caret-right"></i> Retina Display Supported</li>
                                <li><i class="icon-caret-right"></i> Powerful &amp; Optimized Code</li>
                                <li><i class="icon-caret-right"></i> 380+ Templates Included</li>
                            </ul>
                        </div>

                        <div class="col_half nobottommargin col_last">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><i class="icon-caret-right"></i> 12+ Headers &amp; Menu Designs</li>
                                <li><i class="icon-caret-right"></i> Premium Sliders Included</li>
                                <li><i class="icon-caret-right"></i> Light &amp; Dark Colors</li>
                                <li><i class="icon-caret-right"></i> e-Commerce Design Included</li>
                            </ul>
                        </div>

                    </div>

                    <div class="clear"></div>

                </div>

                <div class="section topmargin-lg">
                    <div class="container clearfix">

                        <div class="heading-block center">
                            <h2>Features that you are gonna Love</h2>
                            <span>Canvas comes with 100+ Feature oriented Shortcodes that are easy to use too.</span>
                        </div>

                        <div class="clear bottommargin-sm"></div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-phone2"></i></a>
                                </div>
                                <h3>Responsive Layout</h3>
                                <p>Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                            </div>
                        </div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-eye"></i></a>
                                </div>
                                <h3>Retina Ready Graphics</h3>
                                <p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp; Images.</p>
                            </div>
                        </div>

                        <div class="col_one_third col_last">
                            <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="400">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-star2"></i></a>
                                </div>
                                <h3>Powerful Performance</h3>
                                <p>Optimized code that are completely customizable and deliver unmatched fast performance.</p>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-video"></i></a>
                                </div>
                                <h3>HTML5 Video</h3>
                                <p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width Background.</p>
                            </div>
                        </div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-params"></i></a>
                                </div>
                                <h3>Parallax Support</h3>
                                <p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
                            </div>
                        </div>

                        <div class="col_one_third col_last">
                            <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1000">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-fire"></i></a>
                                </div>
                                <h3>Endless Possibilities</h3>
                                <p>Complete control on each &amp; every element that provides endless customization possibilities.</p>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="col_one_third nobottommargin">
                            <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-bulb"></i></a>
                                </div>
                                <h3>Light &amp; Dark Color Schemes</h3>
                                <p>Change your Website's Primary Scheme instantly by simply adding the dark class to the body.</p>
                            </div>
                        </div>

                        <div class="col_one_third nobottommargin">
                            <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1400">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-heart2"></i></a>
                                </div>
                                <h3>Boxed &amp; Wide Layouts</h3>
                                <p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
                            </div>
                        </div>

                        <div class="col_one_third nobottommargin col_last">
                            <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1600">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-note"></i></a>
                                </div>
                                <h3>Extensive Documentation</h3>
                                <p>We have covered each &amp; everything in our Documentation including Videos &amp; Screenshots.</p>
                            </div>
                        </div>

                        <div class="clear"></div>

                    </div>
                </div>

                <div class="container clearfix">

                    <div class="heading-block center">
                        <h3>Some of our <span>Featured</span> Works</h3>
                        <span>We have worked on some Awesome Projects that are worth boasting of.</span>
                    </div>

                    <div id="oc-portfolio" class="owl-carousel portfolio-carousel portfolio-nomargin">

                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="assets/images/portfolio/4/1.jpg" alt="Open Imagination">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="assets/images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                    <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="assets/images/portfolio/4/2.jpg" alt="Locked Steel Gate">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="assets/images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                                    <span><a href="#">Illustrations</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="assets/images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                    <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="assets/images/portfolio/4/5.jpg" alt="Console Activity">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="assets/images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Console Activity</a></h3>
                                    <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="portfolio-single-video.html">
                                        <img src="assets/images/portfolio/4/7.jpg" alt="Backpack Contents">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                                    <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="assets/images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="assets/images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                                    <span><a href="#">Graphics</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="portfolio-single-video.html">
                                        <img src="assets/images/portfolio/4/10.jpg" alt="Study Table">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="http://vimeo.com/91973305" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-video.html">Study Table</a></h3>
                                    <span><a href="#">Graphics</a>, <a href="#">Media</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="iportfolio">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="assets/images/portfolio/4/11.jpg" alt="Workspace Stuff">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="assets/images/portfolio/full/11.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Workspace Stuff</a></h3>
                                    <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocPortfolio = $("#oc-portfolio");

                            ocPortfolio.owlCarousel({
                                margin: 1,
                                autoplay: true,
                                autoplayHoverPause: true,
                                dots: false,
                                nav: true,
                                navText : ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                responsive:{
                                    0:{ items:1 },
                                    600:{ items:2 },
                                    1000:{ items:3 },
                                    1200:{ items:4 }
                                }
                            });

                        });

                    </script>

                </div>

                <div class="section topmargin-sm nobottommargin">

                    <div class="container clearfix">

                        <div class="heading-block center">
                            <h3>Testimonials</h3>
                            <span>Check out some of our Client Reviews</span>
                        </div>

                        <ul class="testimonials-grid grid-3 clearfix nobottommargin">
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="assets/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
                                        <div class="testi-meta">
                                            John Doe
                                            <span>XYZ Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="assets/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                        <div class="testi-meta">
                                            Collis Ta'eed
                                            <span>Envato Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="assets/images/testimonials/7.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
                                        <div class="testi-meta">
                                            Mary Jane
                                            <span>Google Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="assets/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                        <div class="testi-meta">
                                            Steve Jobs
                                            <span>Apple Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="assets/images/testimonials/4.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
                                        <div class="testi-meta">
                                            Jamie Morrison
                                            <span>Adobe Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <div class="testi-image">
                                        <a href="#"><img src="assets/images/testimonials/8.jpg" alt="Customer Testimonails"></a>
                                    </div>
                                    <div class="testi-content">
                                        <p>Porro dolorem saepe reiciendis nihil minus neque. Ducimus rem necessitatibus repellat laborum nemo quod.</p>
                                        <div class="testi-meta">
                                            Cyan Ta'eed
                                            <span>Tutsplus</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="container clearfix">

                    <div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel" style="padding: 20px 0;">

                        <div class="oc-item"><a href="http://logofury.com/"><img src="assets/images/clients/1.png" alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="assets/images/clients/2.png" alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="assets/images/clients/3.png" alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="assets/images/clients/4.png" alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="assets/images/clients/5.png" alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="assets/images/clients/6.png" alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="assets/images/clients/7.png" alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="assets/images/clients/8.png" alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="assets/images/clients/9.png" alt="Clients"></a></div>
                        <div class="oc-item"><a href="http://logofury.com/"><img src="assets/images/clients/10.png" alt="Clients"></a></div>

                    </div>

                    <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocClients = $("#oc-clients");

                            ocClients.owlCarousel({
                                margin: 30,
                                loop: true,
                                nav: false,
                                autoplay: true,
                                dots: false,
                                autoplayHoverPause: true,
                                responsive:{
                                    0:{ items:2 },
                                    480:{ items:3 },
                                    768:{ items:4 },
                                    992:{ items:5 },
                                    1200:{ items:6 }
                                }
                            });

                        });

                    </script>

                </div>

                <a class="button button-full center tright footer-stick">
                    <div class="container clearfix">
                        Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong> <i class="icon-caret-right" style="top:4px;"></i>
                    </div>
                </a>

            </div>

        <!-- </section>#content end -->


    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
