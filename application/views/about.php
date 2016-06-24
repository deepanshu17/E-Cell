

    <div id="wrapper" class="clearfix">

        <section id="page-title">

            <div class="container clearfix">
                <h1>Services</h1>
                <span>We provide Amazing Solutions</span>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Services</li>
                </ol>
            </div>

        </section><!-- #page-title end -->
</div>
        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                </div>

                <div class="section">

                    <div class="container clearfix">

                        <div class="col_full">

                            <img data-animate="fadeIn" class="aligncenter" src="assets/images//services/macbook.png" alt="Macbook">

                        </div>

                        <div class="col_one_third nobottommargin">

                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="i-alt">1.</i></a>
                                </div>
                                <h3>Choose a Product.</h3>
                                <p>Perferendis, nam. Eum aperiam vel animi beatae corporis dignissimos, molestias, placeat, maxime optio ipsam nostrum atque quidem.</p>
                            </div>

                        </div>

                        <div class="col_one_third nobottommargin">

                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="i-alt">2.</i></a>
                                </div>
                                <h3>Enter Shipping Info.</h3>
                                <p>Saepe qui enim at animi. Repellendus, blanditiis doloremque asperiores reprehenderit deleniti. Ipsam nam accusantium ex!</p>
                            </div>

                        </div>

                        <div class="col_one_third nobottommargin col_last">

                            <div class="feature-box fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="i-alt">3.</i></a>
                                </div>
                                <h3>Complete your Payment.</h3>
                                <p>Necessitatibus accusamus, inventore atque commodi, animi architecto ea sed, suscipit tempora ex deleniti quae. Consectetur, sint velit.</p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="container clearfix">

                    <div class="col_two_fifth topmargin nobottommargin" id="radarChart" style="opacity: 0;">
                        <canvas id="radarChartCanvas" width="430" height="300"></canvas>
                    </div>

                    <div class="col_three_fifth nobottommargin col_last">

                        <div class="heading-block">
                            <h3>Powerful insights to help grow your business.</h3>
                            <span>Reports let you easily track and analyze your product sales, orders, and payments.</span>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.</p>

                        <a href="#">Learn more &rarr;</a>

                    </div>

                    <div class="clear"></div><div class="line"></div>

                    <div class="col_three_fifth">

                        <div class="heading-block">
                            <h3>Advanced store statistics.</h3>
                            <span>Benchmarking your website's performance helps you make great choices for your business.</span>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.</p>

                        <a href="#">Learn more &rarr;</a>

                    </div>

                    <div class="col_two_fifth topmargin col_last" id="doughnutChart" style="opacity: 0;">
                        <canvas id="doughnutChartCanvas" width="430" height="300"></canvas>
                    </div>

                    <script type="text/javascript">

                    jQuery(window).load( function(){

                        var radarChartData = {
                            labels : ["A","B","C","D","E","F","G"],
                            datasets : [
                                {
                                    fillColor : "rgba(220,220,220,0.5)",
                                    strokeColor : "rgba(220,220,220,1)",
                                    pointColor : "rgba(220,220,220,1)",
                                    pointStrokeColor : "#fff",
                                    data : [65,59,90,81,56,55,40]
                                },
                                {
                                    fillColor : "rgba(151,187,205,0.5)",
                                    strokeColor : "rgba(151,187,205,1)",
                                    pointColor : "rgba(151,187,205,1)",
                                    pointStrokeColor : "#fff",
                                    data : [28,48,40,19,96,27,100]
                                }
                            ]

                        };

                        var doughnutChartData = [
                            {
                                value: 30,
                                color:"#F7464A"
                            },
                            {
                                value : 50,
                                color : "#46BFBD"
                            },
                            {
                                value : 100,
                                color : "#FDB45C"
                            },
                            {
                                value : 40,
                                color : "#949FB1"
                            },
                            {
                                value : 120,
                                color : "#4D5360"
                            }
                        ];

                        var globalGraphSettings = {animation : Modernizr.canvas};

                        function showRadarChart(){
                            var ctx = document.getElementById("radarChartCanvas").getContext("2d");
                            new Chart(ctx).Radar(radarChartData,globalGraphSettings);
                        }

                        function showDoughnutChart(){
                            var ctx = document.getElementById("doughnutChartCanvas").getContext("2d");
                            new Chart(ctx).Doughnut(doughnutChartData,globalGraphSettings);
                        }

                        $('#radarChart').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showRadarChart,300); },{accX: 0, accY: -155},'easeInCubic');

                        $('#doughnutChart').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showDoughnutChart,300); },{accX: 0, accY: -155},'easeInCubic');

                    });

                    </script>

                </div>

                <a class="button button-full center tright topmargin footer-stick">
                    <div class="container clearfix">
                        Need help with your Account? <strong>Start here</strong> <i class="icon-caret-right" style="top:4px;"></i>
                    </div>
                </a>

            </div>

        </section><!-- #content end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
