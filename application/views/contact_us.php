        <!-- Google Map
        ============================================= -->
        <section id="google-map" class="gmap slider-parallax"></section>

        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.gmap.js ' ;?>"></script>

        <script type="text/javascript">

            $('#google-map').gMap({

            address: 'IIIT Gymnasium, Gachibowli, Hyderabad, Telangana 500032',
            maptype: 'ROADMAP',
            zoom: 14,
            markers: [
                {
                    address: "IIIT Gymnasium, Gachibowli, Hyderabad, Telangana 500032",
                    html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>E-Cell@IIIT-H</span></h4></div>',
                    icon: {
                        image: "<?php echo base_url().'assets/images/icons/map-icon-red.png';?>",
                        iconsize: [32, 39],
                        iconanchor: [17.448208,78.348672]
                    }
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }

        });

        </script><!-- Google Map End -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Postcontent
                    ============================================= -->
                    <div class="postcontent nobottommargin">

                        <h3>Send us an Email</h3>

                        <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>
                        <?php echo form_open('send_contact_mail',array('class' => 'nobottommargin','name' => 'template-contactform')); ?>

                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
                            </div>

                            <div class="col_one_third">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
                            </div>

                            <!-- <div class="col_one_third col_last">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                            </div> -->

                            <div class="clear"></div>

                            <div class="col_two_third">
                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                            </div>

                            <!-- <div class="col_one_third col_last">
                                <label for="template-contactform-service">Services</label>
                                <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                    <option value="">-- Select One --</option>
                                    <option value="Wordpress">Wordpress</option>
                                    <option value="PHP / MySQL">PHP / MySQL</option>
                                    <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                </select>
                            </div> -->

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message">Message <small>*</small></label>
                                <textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                            </div>

                        </form>

                        <script type="text/javascript">

                            $("#template-contactform").validate({
                                submitHandler: function(form) {
                                    $('.form-process').fadeIn();
                                    $(form).ajaxSubmit({
                                        target: '#contact-form-result',
                                        success: function() {
                                            $('.form-process').fadeOut();
                                            $('#template-contactform').find('.sm-form-control').val('');
                                            $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
                                            SEMICOLON.widget.notifications($('#contact-form-result'));
                                        }
                                    });
                                }
                            });

                        </script>

                    </div><!-- .postcontent end -->


                </div>

            </div>

        </section>
