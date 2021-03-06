
<div id = "wrapper" class="clearfix">
    <section id = "content">
        <div id = "content-wrapper">
            <div class = "container clearfix caption-center">
                    <p class="center">E Cell, IIIT Hyderabad will be one stop platform for all informational needs with regards to start up activities,
            funding, mentoring, networking and knowledge sharing. We want to build an ecosystem where networking and knowledge
            sharing happens.
            The cell conducts numerous workshops, seminars, events and interactive sessions with eminent entrepreneurs,
            thus, providing the students with unparalleled exposure to the entrepreneurial world. It also provides the students
            a platform to work on the live projects from start-ups which adds a star to their work experience and boosts management
            expertise.</p>
            </div>
        </div>
    </section>
</div>                    




<div class="section parallax">
    <div class="container clearfix">
        <div>

                    <p>E Cell, IIIT Hyderabad will be one stop platform for all informational needs with regards to start up activities,
            funding, mentoring, networking and knowledge sharing. We want to build an ecosystem where networking and knowledge
            sharing happens.
            The cell conducts numerous workshops, seminars, events and interactive sessions with eminent entrepreneurs,
            thus, providing the students with unparalleled exposure to the entrepreneurial world. It also provides the students
            a platform to work on the live projects from start-ups which adds a star to their work experience and boosts management
            expertise.</p>


        </div>
    </div>
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
