<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: ui-media</title>

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
                    </div><!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">UI-Blank</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Bootstrap UI Media Object</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Left-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Left-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Left-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="media">
                                    <div class="media-left round-img">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Left-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media">
                                    <div class="media-left round-img">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Left-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media">
                                    <div class="media-left round-img">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Left-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <!-- Right-aligned media object -->
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">Right-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="media-right">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                </div>
                                <!-- Right-aligned media object -->
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">Right-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="media-right">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                </div>
                                <!-- Right-aligned media object -->
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">Right-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="media-right">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <!-- Right-aligned media object -->
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">Right-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="media-right round-img">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                </div>
                                <!-- Right-aligned media object -->
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">Right-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="media-right round-img">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                </div>
                                <!-- Right-aligned media object -->
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">Right-aligned</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="media-right round-img">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <!-- Media top -->
                                <div class="media">
                                    <div class="media-left media-top">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media Top</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>

                                <!-- Media middle -->
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media Middle</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>

                                <!-- Media bottom -->
                                <div class="media">
                                    <div class="media-left media-bottom">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media Bottom</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <!-- Media top -->
                                <div class="media">
                                    <div class="media-left media-top round-img">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media Top</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>

                                <!-- Media middle -->
                                <div class="media">
                                    <div class="media-left media-middle round-img">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media Middle</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>

                                <!-- Media bottom -->
                                <div class="media">
                                    <div class="media-left media-bottom round-img">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media Bottom</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:45px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                        <!-- Nested media object -->
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="assets/images/avatar/2.jpg" class="media-object" style="width:45px">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                                <!-- Nested media object -->
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:45px">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="media">
                                    <div class="media-left round-img">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:45px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                        <!-- Nested media object -->
                                        <div class="media">
                                            <div class="media-left round-img">
                                                <img src="assets/images/avatar/2.jpg" class="media-object" style="width:45px">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                                <!-- Nested media object -->
                                                <div class="media">
                                                    <div class="media-left round-img">
                                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:45px">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:45px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                        <!-- Nested media object -->
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="assets/images/avatar/2.jpg" class="media-object" style="width:45px">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">John Doe <small><i>Posted on February 20, 2016</i></small></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                                <!-- Nested media object -->
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="assets/images/avatar/3.jpg" class="media-object" style="width:45px">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">John Doe <small><i>Posted on February 21, 2016</i></small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Nested media object -->
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/avatar/1.jpg" class="media-object" style="width:45px">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Jane Doe <small><i>Posted on February 20, 2016</i></small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Nested media object -->
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/images/avatar/2.jpg" class="media-object" style="width:45px">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Jane Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="media">
                                    <div class="media-left round-img">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:45px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                        <!-- Nested media object -->
                                        <div class="media">
                                            <div class="media-left round-img">
                                                <img src="assets/images/avatar/2.jpg" class="media-object" style="width:45px">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">John Doe <small><i>Posted on February 20, 2016</i></small></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                                <!-- Nested media object -->
                                                <div class="media">
                                                    <div class="media-left round-img">
                                                        <img src="assets/images/avatar/3.jpg" class="media-object" style="width:45px">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">John Doe <small><i>Posted on February 21, 2016</i></small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Nested media object -->
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/avatar/1.jpg" class="media-object" style="width:45px">
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Jane Doe <small><i>Posted on February 20, 2016</i></small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Nested media object -->
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/images/avatar/2.jpg" class="media-object" style="width:45px">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Jane Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Left-aligned</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <!-- Right-aligned media object -->
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">Right-aligned</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <div class="media-right">
                                        <img src="assets/images/avatar/2.jpg" class="media-object" style="width:60px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Left-aligned</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="media">
                                    <div class="media-left media-bottom">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media Bottom</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media Middle</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="media">
                                    <div class="media-left media-top">
                                        <img src="assets/images/avatar/1.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media Top</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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



    <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script><!-- sidebar -->
    <!-- bootstrap -->
    
    
    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script><!-- scripit init-->
</body>

</html>