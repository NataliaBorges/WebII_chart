<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Peity Chart</title>

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
    <link href="../../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../../assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    
    <link href="../../assets/css/lib/helper.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">


  </head>

  <body>
    
  <?php
    require_once "../../Util/Menu.php";
  ?>
    <!-- /# sidebar -->


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
                    <li class="breadcrumb-item active">Chart-Peity</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>Pie Chart</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-2">
                        <span class="pie" data-peity='{ "fill": ["#13dafe", "#f2f2f2"]}'>1/5</span>
                      </div>
                      <div class="col-lg-2">
                        <span class="pie" data-peity='{ "fill": ["#6164C1", "#f2f2f2"]}'>226/360</span>
                      </div>
                      <div class="col-lg-2">
                        <span class="pie" data-peity='{ "fill": ["#F96262", "#f2f2f2"]}'>0.52/1.561</span>
                      </div>
                      <div class="col-lg-2">
                        <span class="pie" data-peity='{ "fill": ["#99D683", "#f2f2f2"]}'>1,4</span>
                      </div>
                      <div class="col-lg-2">
                        <span class="pie" data-peity='{ "fill": ["#FFCA4A", "#f2f2f2"]}'>226,134</span>
                      </div>
                      <div class="col-lg-2">
                        <span class="pie" data-peity='{ "fill": ["#4C5667", "#f2f2f2"]}'>0.52,1.041</span>
                      </div>
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
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>Donut Charts</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-2">
                        <span class="donut" data-peity='{ "fill": ["#13DAFE", "#f2f2f2"]}'>1/5</span>
                      </div>
                      <div class="col-lg-2">
                        <span class="donut" data-peity='{ "fill": ["#6164C1", "#f2f2f2"]}'>226/360</span>
                      </div>
                      <div class="col-lg-2">
                        <span class="donut" data-peity='{ "fill": ["#F96262", "#f2f2f2"]}'>0.52/1.561</span>
                      </div>
                      <div class="col-lg-2">
                        <span class="donut" data-peity='{ "fill": ["#99D683", "#f2f2f2"]}'>1,4</span>
                      </div>
                      <div class="col-lg-2">
                        <span class="donut" data-peity='{ "fill": ["#FFCA4A", "#f2f2f2"]}'>226,134</span>
                      </div>
                      <div class="col-lg-2">
                        <span class="donut" data-peity='{ "fill": ["#4C5667", "#f2f2f2"]}'>0.52,1.041</span>
                      </div>
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
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>Line Charts</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-4">
                        <span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                      </div>
                      <div class="col-lg-4">
                        <span class="peity-line" data-width="100%">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                      </div>
                      <div class="col-lg-4">
                        <span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                      </div>
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
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>Bar Charts</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-4">
                        <span class="bar" data-peity='{ "fill": ["#13DAFE", "#6164C1"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                      </div>
                      <div class="col-lg-4">
                        <span class="bar" data-peity='{ "fill": ["#F96262", "#f2f2f2"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                      </div>
                      <div class="col-lg-4">
                        <span class="bar" data-peity='{ "fill": ["#99D683", "#4C5667"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                      </div>
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
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>Data attributes</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-2">
                        <p class="data-attributes">
                          <span data-peity='{ "fill": ["#13DAFE", "#eeeeee"],    "innerRadius": 10, "radius": 40 }'>1/7</span>
                        </p>
                      </div>
                      <div class="col-lg-2">
                        <p class="data-attributes">
                          <span data-peity='{ "fill": ["#6164C1", "#eeeeee"], "innerRadius": 14, "radius": 36 }'>2/7</span>
                        </p>
                      </div>
                      <div class="col-lg-2">
                        <p class="data-attributes">
                          <span data-peity='{ "fill": ["#F96262", "#eeeeee"], "innerRadius": 16, "radius": 32 }'>3/7</span>
                        </p>
                      </div>
                      <div class="col-lg-2">
                        <p class="data-attributes">
                          <span data-peity='{ "fill": ["#99D683", "#eeeeee"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
                        </p>
                      </div>
                      <div class="col-lg-2">
                        <p class="data-attributes">
                          <span data-peity='{ "fill": ["#FFCA4A", "#eeeeee"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                        </p>
                      </div>
                      <div class="col-lg-2">
                        <p class="data-attributes">
                          <span data-peity='{ "fill": ["indigo", "#eeeeee"], "innerRadius": 18, "radius": 20 }'>6/7</span>
                        </p>
                      </div>
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
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>Setting Colours Dynamically</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3">
                        <span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span>
                      </div>
                      <div class="col-lg-3">
                        <span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span>
                      </div>
                      <div class="col-lg-3">
                        <span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                      </div>
                      <div class="col-lg-3">
                        <span class="pie-colours-2">5,3,9,6,5</span>
                      </div>
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
                <div class="card nestable-cart">
                  <div class="card-title">
                    <h4>Updating Charts</h4>
                    <div class="card-title-right-icon">
                      <ul>

                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <span class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
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
    <script src="../../assets/js/lib/jquery.min.js"></script>
    <script src="../../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../../assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="../../assets/js/lib/bootstrap.min.js">
      

    </script>
    <!-- bootstrap -->



    <script src="../../assets/js/lib/peitychart/jquery.peity.min.js"></script>
    <script src="../../assets/js/lib/peitychart/peitychart.init.js"></script>
    <!-- scripit init-->

    <script src="../../assets/js/lib/bootstrap.min.js"></script><script src="../../assets/js/scripts.js"></script>
    <!-- scripit init-->


  </body>

</html>
