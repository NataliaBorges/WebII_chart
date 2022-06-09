<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: UI Element Basic</title>

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
                                    <li class="breadcrumb-item active">UI-Alerts</li>
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
										<div class="card-body">
											<h4 class="card-title">Alerts</h4>
											<div class="card-content">
												<div class="alert alert-primary">
												  This is a primary alert—check it out!
												</div>
												<div class="alert alert-secondary">
												  This is a secondary alert—check it out!
												</div>
												<div class="alert alert-success">
												  This is a success alert—check it out!
												</div>
												<div class="alert alert-danger">
												  This is a danger alert—check it out!
												</div>
												<div class="alert alert-warning">
												  This is a warning alert—check it out!
												</div>
												<div class="alert alert-info">
												  This is a info alert—check it out!
												</div>
												<div class="alert alert-light">
												  This is a light alert—check it out!
												</div>
												<div class="alert alert-dark">
												  This is a dark alert—check it out!
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title">Link color</h4>
											<div class="card-content">
												<div class="alert alert-primary">
												  This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
												<div class="alert alert-secondary">
												  This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
												<div class="alert alert-success">
												  This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
												<div class="alert alert-danger">
												  This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
												<div class="alert alert-warning">
												  This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
												<div class="alert alert-info">
												  This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
												<div class="alert alert-light">
												  This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
												<div class="alert alert-dark">
												  This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title">Additional content</h4>
											<div class="card-content">
												<div class="alert alert-success">
												  <h4 class="alert-heading">Well done!</h4>
												  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
												  <hr>
												  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card">
										<div class="card-body">
											<h4 class="card-title">Dismissing</h4>
											<div class="card-content">
												<div class="alert alert-primary alert-dismissible fade show">
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
												</div>
												<div class="alert alert-danger alert-dismissible fade show">
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
												</div>
												<div class="alert alert-warning alert-dismissible fade show">
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
												</div>
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