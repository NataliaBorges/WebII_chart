<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Weather</title>

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
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/toastr/toastr.min.css" rel="stylesheet">
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
                                    <li class="breadcrumb-item active">UC-Toastr</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Toastr Top Right</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-top-right">Success</button>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-right">Info</button>
                                        <button type="button" class="btn btn-warning m-b-10 m-l-5" id="toastr-warning-top-right">Warning</button>
                                        <button type="button" class="btn btn-danger m-b-10 m-l-5" id="toastr-danger-top-right">Error</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Toastr Bottom Right</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-bottom-right">Success</button>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-bottom-right">Info</button>
                                        <button type="button" class="btn btn-warning m-b-10 m-l-5" id="toastr-warning-bottom-right">Warning</button>
                                        <button type="button" class="btn btn-danger m-b-10 m-l-5" id="toastr-danger-bottom-right">Error</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Toastr Bottom Left</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-bottom-left">Success</button>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-bottom-left">Info</button>
                                        <button type="button" class="btn btn-warning m-b-10 m-l-5" id="toastr-warning-bottom-left">Warning</button>
                                        <button type="button" class="btn btn-danger m-b-10 m-l-5" id="toastr-danger-bottom-left">Error</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Toastr Top Left</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-top-left">Success</button>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-left">Info</button>
                                        <button type="button" class="btn btn-warning m-b-10 m-l-5" id="toastr-warning-top-left">Warning</button>
                                        <button type="button" class="btn btn-danger m-b-10 m-l-5" id="toastr-danger-top-left">Error</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Toastr Top Full Width</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-top-full-width">Success</button>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-full-width">Info</button>
                                        <button type="button" class="btn btn-warning m-b-10 m-l-5" id="toastr-warning-top-full-width">Warning</button>
                                        <button type="button" class="btn btn-danger m-b-10 m-l-5" id="toastr-danger-top-full-width">Error</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Toastr Bottom Full Width</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-bottom-full-width">Success</button>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-bottom-full-width">Info</button>
                                        <button type="button" class="btn btn-warning m-b-10 m-l-5" id="toastr-warning-bottom-full-width">Warning</button>
                                        <button type="button" class="btn btn-danger m-b-10 m-l-5" id="toastr-danger-bottom-full-width">Error</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Toastr Top Center</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-top-center">Success</button>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-top-center">Info</button>
                                        <button type="button" class="btn btn-warning m-b-10 m-l-5" id="toastr-warning-top-center">Warning</button>
                                        <button type="button" class="btn btn-danger m-b-10 m-l-5" id="toastr-danger-top-center">Error</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Toastr Bottom Center</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="toastr">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-success m-b-10 m-l-5" id="toastr-success-bottom-center">Success</button>
                                        <button type="button" class="btn btn-info m-b-10 m-l-5" id="toastr-info-bottom-center">Info</button>
                                        <button type="button" class="btn btn-warning m-b-10 m-l-5" id="toastr-warning-bottom-center">Warning</button>
                                        <button type="button" class="btn btn-danger m-b-10 m-l-5" id="toastr-danger-bottom-center">Error</button>
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
    <!-- sidebar -->
    
    <!-- bootstrap -->


    <script src="assets/js/lib/toastr/toastr.min.js"></script>
    <script src="assets/js/lib/toastr/toastr.init.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>

</body>

</html>