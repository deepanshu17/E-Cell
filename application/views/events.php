
        <section class="parallax full-screen " style = " background: url('<? php echo base_url().'assets/images/events/1.jpg' ; ?>')  no-repeat center center; background-size: cover;">

            <div class="container clearfix vertical-middle" style="z-index: 3;">

                <div class="heading-block title-center ">
                    <h1>The Apple WWDC Event starts in:</h1>
                </div>

            </div>

        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="bottommargin">
                            <h1>Past Events </h1>
                    </div>

                    <!-- Posts
                    ============================================= -->
                    <div id="posts" class="small-thumbs">

                        <div>
                            <div class="entry-image">
                                <a href="<?php echo base_url().'assets/images/blog/blog1.jpg' ?>" data-lightbox="image"><img class="image_fade" src="<?php echo base_url().'assets/images/blog/blog1.jpg' ?>" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-c">
                                <div>
                                    <h2>An Interactive Session with Mr. Chaitanya Chokkareddy</h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3" style="margin: 10px;"></i> 30th March 2016</li>
                                </ul>
                                <div class="entry-content" style="font-size:15px;">
                                    <p>We invite you to an Interactive Session with Mr. Chaitanya Chokkareddy, <strong>Chief Innovation Officer at Ozonetel Systems</strong> followed by discussion on interesting journeys of some of the most successful startups.</p>
                                    <!-- <a href="blog-single.html"class="more-link">Read More</a> -->
                                </div>
                            </div>
                        </div>                      
                     
                    </div>
                </div>
            </div>
        </section>


         <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <h1>Gallery</h1>

                    <div class="section footer-stick">

                        <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel">

                            <div class="oc-item">
                                <a href="<?php echo base_url().'assets/images/team/1.jpg' ?>" data-lightbox="image"><img src="<?php echo base_url().'assets/images/clients/1.png' ?>" alt="Brands"></a>
                            </div>
                            <div class="oc-item">
                                <a href="<?php echo base_url().'assets/images/team/1.jpg' ?>" data-lightbox="image"><img src="<?php echo base_url().'assets/images/clients/1.png' ?>" alt="Brands"></a>
                            </div>
                            <div class="oc-item">
                                <a href="<?php echo base_url().'assets/images/team/1.jpg' ?>" data-lightbox="image"><img src="<?php echo base_url().'assets/images/clients/1.png' ?>" alt="Brands"></a>
                            </div>
                            <div class="oc-item">
                                <a href="<?php echo base_url().'assets/images/team/1.jpg' ?>" data-lightbox="image"><img src="<?php echo base_url().'assets/images/clients/1.png' ?>" alt="Brands"></a>
                            </div>
                            <div class="oc-item">
                                <a href="<?php echo base_url().'assets/images/team/1.jpg' ?>" data-lightbox="image"><img src="<?php echo base_url().'assets/images/clients/1.png' ?>" alt="Brands"></a>
                            </div>
                            <div class="oc-item">
                                <a href="<?php echo base_url().'assets/images/team/1.jpg' ?>" data-lightbox="image"><img src="<?php echo base_url().'assets/images/clients/1.png' ?>" alt="Brands"></a>
                            </div>
                            <div class="oc-item">
                                <a href="<?php echo base_url().'assets/images/team/1.jpg' ?>" data-lightbox="image"><img src="<?php echo base_url().'assets/images/clients/1.png' ?>" alt="Brands"></a>
                            </div>
                            <div class="oc-item">
                                <a href="<?php echo base_url().'assets/images/team/1.jpg' ?>" data-lightbox="image"><img src="<?php echo base_url().'assets/images/clients/1.png' ?>" alt="Brands"></a>
                            </div>
                            <div class="oc-item">
                                <a href="<?php echo base_url().'assets/images/team/1.jpg' ?>" data-lightbox="image"><img src="<?php echo base_url().'assets/images/clients/1.png' ?>" alt="Brands"></a>
                            </div>
                            
                        </div>

                        <script type="text/javascript">

                            jQuery(document).ready(function($) {

                                var ocClientsFull = $("#oc-clients-full");

                                ocClientsFull.owlCarousel({
                                    items: 5,
                                    margin: 30,
                                    loop: true,
                                    nav: true,
                                    navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                    autoplay: true,
                                    autoplayHoverPause: false,
                                    dots: false,
                                    navRewind: false,
                                    responsive:{
                                        0:{ items:2 },
                                        480:{ items:3 },
                                        768:{ items:4 },
                                        992:{ items:5 },
                                        1200:{ items:7 },
                                        1400:{ items:8 }
                                    }
                                });

                            });

                        </script>

                    </div>
                </div>
            </div>
        </section>