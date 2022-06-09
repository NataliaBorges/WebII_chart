<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Sparkline Chart</title>

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


    <style type="text/css">


    </style>
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
                    <li class="breadcrumb-item active">Chart-Sparkline</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>TOTAL VISIT</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <span id="sparklinedash">0, 5, 6, 10, 9, 12, 4, 9</span>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
              <div class="col-lg-3">
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>TOTAL PAGE VIEWS</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <span id="sparklinedash2">0, 5, 6, 10, 9, 12, 4, 9</span>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
              <div class="col-lg-3">
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>UNIQUE VISITOR</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <span id="sparklinedash3">0, 5, 6, 10, 9, 12, 4, 9</span>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
              <div class="col-lg-3">
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>BOUNCE RATE</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <span id="sparklinedash4"> 0, 5, 6, 10, 9, 12, 4, 9</span>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
            </div>
            <!-- /# row -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>SITE TRAFFIC</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <div id="sparkline8"></div>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
              <div class="col-lg-4">
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>SITE TRAFFIC</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <div id="sparkline9"></div>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
              <div class="col-lg-4">
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>SITE TRAFFIC</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <div id="sparkline10"></div>
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
                    <h4>Bar Chart</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <div id="sparkline12" class="text-center"></div>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
              <div class="col-lg-6">
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>Composite Bar Chart</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <div id="sparkline13" class="text-center"></div>
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
                    <h4>PIE CHART</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <div id="sparkline11" class="text-center"></div>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->


              <div class="col-lg-6">
                <div class="card nestable-cart sperkline_fourteen_bg">
                  <div class="card-title">
                    <h4>LINE CHART</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <div id="sparkline14" class="text-center"></div>
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
                    <h4>LINE CHART</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <div id="sparkline16" class="text-center"></div>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->




              <div class="col-lg-6">
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>BAR WITH DIFFERENT COLOR CHART</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="sparkline-unix">
                    <div id="sparkline15" class="text-center"></div>
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



    <div id="search">
      <button type="button" class="close">×</button>
      <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js">
      

    </script>
    <!-- bootstrap -->
    <script src="assets/js/lib/preloader/pace.min.js"></script>



    <script src="assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <!-- sparkline init-->

    <script src="assets/js/lib/bootstrap.min.js"></script><script src="assets/js/scripts.js"></script>
    <!-- scripit init-->


  </body>

</html>
