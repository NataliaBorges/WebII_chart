<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Blank</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
    <!--Themes Jquery Bar Rating-->
    <link href="assets/css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!--Themes Jquery Bar Rating-->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

        <?php
            require_once "Menu.php";
        ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">UC-Range-Slider-Basic</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Start without params</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_01" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Set min value, max value and start point</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_02" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Set type grid and adding prefix "$"</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_03" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Set up range with negative values</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_04" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Using step 250</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_05" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Set up range with fractional values, using fractional step</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_06" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Set up you own numbers</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_07" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Using any strings as your values</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_08" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>One more example with strings</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_09" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>No prettify. Big numbers are ugly and unreadable</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_10" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Prettify enabled. Much better!</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_11" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Don't like space as separator? Use anything you like!</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_12" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>You don't like default prettify function? Use your own!</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_13" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Using prefixes</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_14" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Using postfixes</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_15" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Whant to show that max number is not the biggest one?</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_16" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Taking care about how from and to values connect? Use decorate_both option:</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_17" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Remove double decoration</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_18" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Use your own separator symbol with values_separator option. Like →</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_19" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Or " to ":</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_20" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>You can disable all the sliders visual details, if you wish. Like this:</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_21" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>Or hide any part you wish</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_22" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>And some more</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_23" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-6">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>And some more</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="rangeslider">
                                    <div>
                                        <input type="text" id="range_24" value="" name="range" />
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>



    
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
	<script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->


    <!--ION Range Slider JS-->
    <script src="assets/js/lib/rangeSlider/ion.rangeSlider.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/rangeSlider/moment.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/rangeSlider/moment-with-locales.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/rangeSlider/rangeslider.init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
</body>

</html>