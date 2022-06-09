<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Nestable</title>

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
    <link href="assets/css/lib/nestable/nestable.css" rel="stylesheet">
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
                                    <li class="breadcrumb-item active">UC-Nestable</li>
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
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>NESTABLE 1</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="nestable">
                                    <div class="dd" id="nestable">
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="1">
                                                <div class="dd-handle">Item 1</div>
                                            </li>
                                            <li class="dd-item" data-id="2">
                                                <div class="dd-handle">Item 2</div>
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="3">
                                                        <div class="dd-handle">Item 3</div>
                                                    </li>
                                                    <li class="dd-item" data-id="4">
                                                        <div class="dd-handle">Item 4</div>
                                                    </li>
                                                    <li class="dd-item" data-id="5">
                                                        <div class="dd-handle">Item 5</div>
                                                        <ol class="dd-list">
                                                            <li class="dd-item" data-id="6">
                                                                <div class="dd-handle">Item 6</div>
                                                            </li>
                                                            <li class="dd-item" data-id="7">
                                                                <div class="dd-handle">Item 7</div>
                                                            </li>
                                                            <li class="dd-item" data-id="8">
                                                                <div class="dd-handle">Item 8</div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li class="dd-item" data-id="9">
                                                        <div class="dd-handle">Item 9</div>
                                                    </li>
                                                    <li class="dd-item" data-id="10">
                                                        <div class="dd-handle">Item 10</div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->



                        <div class="col-lg-4">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>NESTABLE 2</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="nestable">
                                    <div class="dd" id="nestable2">
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="13">
                                                <div class="dd-handle">Item 13</div>
                                            </li>
                                            <li class="dd-item" data-id="13">
                                                <div class="dd-handle">Item 13</div>
                                            </li>
                                            <li class="dd-item" data-id="14">
                                                <div class="dd-handle">Item 14</div>
                                            </li>
                                            <li class="dd-item" data-id="15">
                                                <div class="dd-handle">Item 15</div>
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="16">
                                                        <div class="dd-handle">Item 16</div>
                                                    </li>
                                                    <li class="dd-item" data-id="17">
                                                        <div class="dd-handle">Item 17</div>
                                                    </li>
                                                    <li class="dd-item" data-id="18">
                                                        <div class="dd-handle">Item 18</div>
                                                    </li>
                                                    <li class="dd-item" data-id="18">
                                                        <div class="dd-handle">Item 19</div>
                                                    </li>
                                                    <li class="dd-item" data-id="18">
                                                        <div class="dd-handle">Item 20</div>
                                                    </li>
                                                    <li class="dd-item" data-id="18">
                                                        <div class="dd-handle">Item 21</div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->


                        <div class="col-lg-4">
                            <div class="card nestable-cart">
                                <div class="card-title">
                                    <h4>NESTABLE 3</h4>
                                    <div class="card-title-right-icon">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="nestable">
                                    <div class="dd" id="nestable3">
                                        <ol class="dd-list">
                                            <li class="dd-item dd3-item" data-id="13">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 13</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="14">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 14</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="14">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 16</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="14">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 17</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="14">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 18</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="14">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 19</div>
                                            </li>
                                            <li class="dd-item dd3-item" data-id="15">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">Item 15</div>
                                                <ol class="dd-list">
                                                    <li class="dd-item dd3-item" data-id="16">
                                                        <div class="dd-handle dd3-handle"></div>
                                                        <div class="dd3-content">Item 16</div>
                                                    </li>
                                                    <li class="dd-item dd3-item" data-id="17">
                                                        <div class="dd-handle dd3-handle"></div>
                                                        <div class="dd3-content">Item 17</div>
                                                    </li>
                                                    <li class="dd-item dd3-item" data-id="18">
                                                        <div class="dd-handle dd3-handle"></div>
                                                        <div class="dd3-content">Item 18</div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
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


    <script src="assets/js/lib/nestable/jquery.nestable.js"></script>
    <script src="assets/js/lib/nestable/nestable.init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
    <!-- scripit init-->

</body>

</html>