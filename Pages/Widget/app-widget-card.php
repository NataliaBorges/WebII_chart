<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Focus Admin Dashboard</title>

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


  <!-- Common -->
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
                <h1>Hello,
                  <span>Welcome Here</span>
                </h1>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">App-Widget-Card</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <div id="main-content">
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-one">
                  <div class="stat-icon dib">
                    <i class="ti-money color-success border-success"></i>
                  </div>
                  <div class="stat-content dib">
                    <div class="stat-text">Total Profit</div>
                    <div class="stat-digit">1,012</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-one">
                  <div class="stat-icon dib">
                    <i class="ti-user color-primary border-primary"></i>
                  </div>
                  <div class="stat-content dib">
                    <div class="stat-text">New Customer</div>
                    <div class="stat-digit">961</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-one">
                  <div class="stat-icon dib">
                    <i class="ti-layout-grid2 color-pink border-pink"></i>
                  </div>
                  <div class="stat-content dib">
                    <div class="stat-text">Active Projects</div>
                    <div class="stat-digit">770</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-one">
                  <div class="stat-icon dib">
                    <i class="ti-link color-danger border-danger"></i>
                  </div>
                  <div class="stat-content dib">
                    <div class="stat-text">Referral</div>
                    <div class="stat-digit">2,781</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-two">
                  <div class="stat-content">
                    <div class="stat-text">Today Expenses </div>
                    <div class="stat-digit">
                      <i class="fa fa-usd"></i>8500</div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-two">
                  <div class="stat-content">
                    <div class="stat-text">Income Detail</div>
                    <div class="stat-digit">
                      <i class="fa fa-usd"></i>7800</div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-two">
                  <div class="stat-content">
                    <div class="stat-text">Task Completed</div>
                    <div class="stat-digit">
                      <i class="fa fa-usd"></i> 500</div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-two">
                  <div class="stat-content">
                    <div class="stat-text">Task Completed</div>
                    <div class="stat-digit">
                      <i class="fa fa-usd"></i>650</div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <div class="row">
            <div class="col-lg-3">
              <div class="card p-0">
                <div class="stat-widget-three">
                  <div class="stat-icon bg-primary">
                    <i class="ti-user"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-digit">123</div>
                    <div class="stat-text">New User</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card p-0">
                <div class="stat-widget-three">
                  <div class="stat-icon bg-success">
                    <i class="ti-user"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-digit">123</div>
                    <div class="stat-text">New User</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card p-0">
                <div class="stat-widget-three">
                  <div class="stat-icon bg-warning">
                    <i class="ti-user"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-digit">123</div>
                    <div class="stat-text">New User</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card p-0">
                <div class="stat-widget-three">
                  <div class="stat-icon bg-danger">
                    <i class="ti-user"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-digit">123</div>
                    <div class="stat-text">New User</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /# row -->
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-four">
                  <div class="stat-icon">
                    <i class="ti-server"></i>
                  </div>
                  <div class="stat-content">
                    <div class="text-left dib">
                      <div class="stat-heading">Database</div>
                      <div class="stat-text">Total: 765</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-four">
                  <div class="stat-icon">
                    <i class="ti-user"></i>
                  </div>
                  <div class="stat-content">
                    <div class="text-left dib">
                      <div class="stat-heading">Users</div>
                      <div class="stat-text">Total: 24720</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-four">
                  <div class="stat-icon">
                    <i class="ti-stats-up"></i>
                  </div>
                  <div class="stat-content">
                    <div class="text-left dib">
                      <div class="stat-heading">Daily sales</div>
                      <div class="stat-text">Total: 765</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-four">
                  <div class="stat-icon">
                    <i class="ti-pulse"></i>
                  </div>
                  <div class="stat-content">
                    <div class="text-left dib">
                      <div class="stat-heading">Bandwidth</div>
                      <div class="stat-text">Total: 24720</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-five">
                  <div class="stat-icon">
                    <i class="ti-home bg-primary"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-heading color-primary">New User</div>
                    <div class="stat-text">2700</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-five">
                  <div class="stat-icon">
                    <i class="ti-file bg-success"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-heading color-success">Profit</div>
                    <div class="stat-text">3600000</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-five">
                  <div class="stat-icon">
                    <i class="ti-info bg-danger"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-heading color-primary">Growth</div>
                    <div class="stat-text">200%</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="stat-widget-five">
                  <div class="stat-icon bg-warning">
                    <i class="ti-world"></i>
                  </div>
                  <div class="stat-content">
                    <div class="stat-heading color-primary">Revenue</div>
                    <div class="stat-text">226000</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="card bg-warning">
                <div class="stat-widget-six">
                  <div class="stat-icon">
                    <i class="ti-stats-up"></i>
                  </div>
                  <div class="stat-content">
                    <div class="text-left dib">
                      <div class="stat-heading">Daily sales</div>
                      <div class="stat-text">Total: 765</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card bg-primary">
                <div class="stat-widget-six">
                  <div class="stat-icon">
                    <i class="ti-bolt-alt"></i>
                  </div>
                  <div class="stat-content">
                    <div class="text-left dib">
                      <div class="stat-heading">Bandwidth</div>
                      <div class="stat-text">167.32 GB/s</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card bg-warning">
                <div class="stat-widget-six">
                  <div class="stat-icon">
                    <i class="ti-stats-up"></i>
                  </div>
                  <div class="stat-content">
                    <div class="text-left dib">
                      <div class="stat-heading">Progress</div>
                      <div class="stat-text">Total: 765</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card bg-primary">
                <div class="stat-widget-six">
                  <div class="stat-icon">
                    <i class="ti-bolt-alt"></i>
                  </div>
                  <div class="stat-content">
                    <div class="text-left dib">
                      <div class="stat-heading">Connection</div>
                      <div class="stat-text">167.32 GB/s</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="footer">
                <p>2018 © Admin Board. -
                  <a href="#">example.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




    <!-- Common -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>