<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin: Chart</title>

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
                    <li class="breadcrumb-item active">Chartjs</li>
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
                    <h4>Yearly Sales </h4>

                  </div>
                  <div class="sales-chart">
                    <canvas id="sales-chart"></canvas>
                  </div>
                </div>
              </div>
              <!-- /# column -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-title">
                    <h4>Team Total Completed </h4>

                  </div>
                  <div class="sales-chart">
                    <canvas id="team-chart"></canvas>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
            </div>
            <!-- /# row -->
            <div class="row">
              <!-- Bar Chart -->
              <div class="col-sm-12 col-md-6">
                <div class="panel">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <h4>Bar chart</h4>
                    </div>
                  </div>
                  <div class="panel-body">
                    <canvas id="barChart"></canvas>
                  </div>
                </div>
              </div>
              <!-- Radar Chart -->
              <div class="col-sm-12 col-md-6">
                <div class="panel">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <h4>Rader chart</h4>
                    </div>
                  </div>
                  <div class="panel-body">
                    <canvas id="radarChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Line Chart -->
              <div class="col-sm-12 col-md-8">
                <div class="panel panel-bd lobidrag">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <h4>Line chart</h4>
                    </div>
                  </div>
                  <div class="panel-body">
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>
              <!-- Pie Chart -->
              <div class="col-sm-6 col-md-4">
                <div class="panel">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <h4>Pie chart</h4>
                    </div>
                  </div>
                  <div class="panel-body">
                    <canvas id="pieChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Doughnut Chart -->
              <div class="col-sm-6 col-md-4">
                <div class="panel">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <h4>Doughut chart</h4>
                    </div>
                  </div>
                  <div class="panel-body">
                    <canvas id="doughutChart"></canvas>
                  </div>
                </div>
              </div>
              <!-- Polar Chart -->
              <div class="col-sm-6 col-md-4">
                <div class="panel">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <h4>Polar chart</h4>
                    </div>
                  </div>
                  <div class="panel-body">
                    <canvas id="polarChart"></canvas>
                  </div>
                </div>
              </div>
              <!-- Single Bar Chart -->
              <div class="col-sm-6 col-md-4">
                <div class="panel">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <h4>Single Bar Chart</h4>
                    </div>
                  </div>
                  <div class="panel-body">
                    <canvas id="singelBarChart"></canvas>
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


    <!--  Chart js -->
    <!--  Chart js -->
    <script src="../../assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../../assets/js/lib/chart-js/chartjs-init.js"></script>
    <!-- // Chart js -->
    <!-- // Chart js -->
    <script src="../../assets/js/lib/bootstrap.min.js"></script><script src="../../assets/js/scripts.js"></script>
    <!-- scripit init-->





  </body>

</html>
