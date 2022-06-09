<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Chartist</title>

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
    <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
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
                                    <li class="breadcrumb-item active">Chartist</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Product line Chart</h4>
                                    <ul class="list-inline text-right">
                                        <li>
                                            <h5><i class="fa fa-circle m-r-5 text-inverse"></i>iPhone</h5>
                                        </li>
                                        <li>
                                            <h5><i class="fa fa-circle m-r-5 text-info"></i>iPad</h5>
                                        </li>
                                        <li>
                                            <h5><i class="fa fa-circle m-r-5 text-success"></i>iPod</h5>
                                        </li>
                                    </ul>
                                    <div id="morris-area-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Site visit Chart</h4>
                                    <ul class="list-inline text-right">
                                        <li>
                                            <h5><i class="fa fa-circle m-r-5 text-info"></i>Site A View</h5>
                                        </li>
                                        <li>
                                            <h5><i class="fa fa-circle m-r-5 text-inverse"></i>Site B View</h5>
                                        </li>
                                    </ul>
                                    <div id="morris-area-chart2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Line Chart</h4>
                                    <div id="morris-line-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Donut Chart</h4>
                                    <div id="morris-donut-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Bar Chart</h4>
                                    <div id="morris-bar-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Extra Area Chart</h4>
                                    <ul class="list-inline text-center m-t-40">
                                        <li>
                                            <h5><i class="fa fa-circle m-r-5 text-info"></i>Site A</h5>
                                        </li>
                                        <li>
                                            <h5><i class="fa fa-circle m-r-5 text-inverse"></i>Site B</h5>
                                        </li>
                                        <li>
                                            <h5><i class="fa fa-circle m-r-5 text-success"></i>Site C</h5>
                                        </li>
                                    </ul>
                                    <div id="extra-area-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                    </div>
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
    <!-- sidebar -->
    
    <!-- bootstrap -->


    <script src="assets/js/lib/morris-chart/raphael-min.js"></script>
    <script src="assets/js/lib/morris-chart/morris.js"></script>
    <script src="assets/js/lib/morris-chart/morris-init.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
    <!-- scripit init-->

</body>

</html>