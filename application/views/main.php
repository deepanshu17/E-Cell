
        <section id="slider" class="slider-parallax swiper_wrapper clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/1.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">
                                Dream the <span class="pi-text-base">impossible</span>. Do the <span class="pi-text-base">remarkable</span>
                                </h2>
<!--                                 <p data-caption-animate="fadeInUp" data-caption-delay="20   0">E Cell, IIIT Hyderabad. For people growing great ideas. <br/>
            A non-profit organization run by the students, has been established with the objective of creating,
            manifesting and that promotes and celebrates the entrepreneurial spirit amongst the students and encourages
            them to be budding entrepreneurs.</p>
 -->                            </div>
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
                        <h2>Updates</h2>
			<h4>Interaction with <span>RONNIE SCREWVALA</span>, Founder and former CEO of UTV group.</h4>
                        <a href="<?php echo site_url('events'); ?>" class="button button-dark button-xlarge button-rounded">More details
				<i class="icon-line-arrow-right"></i>
			</a>
                    </div>
                </div>

                <div class="container clearfix">

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <i class="i-alt noborder icon-bulb"></i>
                            </div>
                            <h3>Innovation</h3>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <i class="i-alt noborder icon-pencil"></i>
                            </div>
                            <h3>Creativity</h3>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <i class="i-alt noborder icon-line2-graph"></i>
                            </div>
                            <h3>Learning</h3>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin col_last">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <i class="i-alt noborder icon-group"></i>
                            </div>
                            <h3>Leadership</h3>
                        </div>
                    </div>


                    </div>


                </div>

            </div>
	</section>
        <!-- content end -->
