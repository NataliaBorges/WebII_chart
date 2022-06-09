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
                                    <li class="breadcrumb-item active">UI-List-Group</li>
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
                            <div class="card">
                                <div class="card-title">
                                    <h4>List Groups</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">To create a basic list group, use an <code>&lt;ul&gt;</code> element with class <code>.list-group</code>, and<code>&lt;li&gt;</code> elements with class <code>.list-group-item</code>:</p>

                                    <ul class="list-group">
                                        <li class="list-group-item">First item</li>
                                        <li class="list-group-item">Second item</li>
                                        <li class="list-group-item">Third item</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>List Group With Badges</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">To create a badge, create a <code>&lt;span&gt;</code> element with class <code>.badge</code> inside the list item:</p>

                                    <ul class="list-group">
                                        <li class="list-group-item">New <span class="badge">12</span></li>
                                        <li class="list-group-item">Deleted <span class="badge">5</span></li>
                                        <li class="list-group-item">Warnings <span class="badge">3</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>List Group With Linked Items</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">To create a list group with linked items, use <code>&lt;div&gt;</code> instead of <code>&lt;ul&gt;</code> and <code>&lt;a&gt;</code> instead of <code>&lt;li&gt;</code>:</p>

                                    <div class="list-group">
                                        <a href="#" class="list-group-item">First item</a>
                                        <a href="#" class="list-group-item">Second item</a>
                                        <a href="#" class="list-group-item">Third item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Active State</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">Use the <code>.active</code> class to highlight the current item:</p>

                                    <div class="list-group">
                                        <a href="#" class="list-group-item active">First item</a>
                                        <a href="#" class="list-group-item">Second item</a>
                                        <a href="#" class="list-group-item">Third item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Disabled Item</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">To disable an item, add the <code>.disabled</code> class:</p>

                                    <div class="list-group">
                                        <a href="#" class="list-group-item disabled">First item</a>
                                        <a href="#" class="list-group-item">Second item</a>
                                        <a href="#" class="list-group-item">Third item</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Contextual Classes</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">The classes for coloring list-items are: <code>.list-group-item-success</code>, <code>list-group-item-info</code>, <code>list-group-item-warning</code>, and <code>.list-group-item-danger</code>:</p>

                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-success">First item</li>
                                        <li class="list-group-item list-group-item-info">Second item</li>
                                        <li class="list-group-item list-group-item-warning">Third item</li>
                                        <li class="list-group-item list-group-item-danger">Fourth item</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Custom Content</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted m-b-15">Bootstrap provides the classes <code>.list-group-item-heading</code> and
                                        <code>.list-group-item-text</code> which can be used as follows:</p>

                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <h5 class="list-group-item-heading">First List Group Item Heading</h5>
                                            <p class="list-group-item-text">List Group Item Text</p>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <h5 class="list-group-item-heading">Second List Group Item Heading</h5>
                                            <p class="list-group-item-text">List Group Item Text</p>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <h5 class="list-group-item-heading">Third List Group Item Heading</h5>
                                            <p class="list-group-item-text">List Group Item Text</p>
                                        </a>
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



    
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->


    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
    <!-- scripit init-->
</body>

</html>