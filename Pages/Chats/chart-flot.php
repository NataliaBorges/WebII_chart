<?php
require_once "../../Util/conexao.php";
try{
    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("
                      SELECT Leitor.Nome_leitor,
                          COUNT(Emprestimo.Id) AS 'Total_emprestimos'
                      FROM Leitor
                      LEFT JOIN Emprestimo ON (Leitor.Id = Emprestimo.Id_leitor)
                      GROUP BY Leitor.Nome_leitor;
    ");
    $emprestimosLeitor   = $query->fetchAll();

    $query2      = $Conexao->query("
                          SELECT Livro.Titulo,
                              COUNT(Emprestimo.Id) AS 'Total_emprestimos'
                          FROM Exemplar
                          INNER JOIN Livro ON (Livro.Id = Exemplar.Id_livro)
                          INNER JOIN Item_Emprestimo ON (Item_Emprestimo.Id_exemplar = Exemplar.Id)
                          LEFT JOIN Emprestimo ON (Item_Emprestimo.Id_emprestimo = Emprestimo.Id)
                          GROUP BY Livro.Titulo;
    ");
    $emprestimosLivros   = $query2->fetchAll();

    $query3      = $Conexao->query("
                      SELECT Genero.Nome_Genero,
                          COUNT(Emprestimo.Id) AS 'Total_emprestimos'
                      FROM Genero
                      LEFT JOIN Livro ON (Livro.Id_genero = Genero.Id)
                      LEFT JOIN Exemplar ON (Exemplar.Id_livro = Livro.Id)
                      LEFT JOIN Item_Emprestimo ON (Item_Emprestimo.Id_exemplar = Exemplar.Id)
                      LEFT JOIN Emprestimo ON (Item_Emprestimo.Id_emprestimo = Emprestimo.Id)
                      GROUP BY Genero.Nome_Genero;
    ");
    $emprestimosGeneros   = $query3->fetchAll();

 }catch(Exception $e){
    echo $e->getMessage();
    exit;
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dark Read - Gráficos</title>

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
  
  <link href="../../assets/css/lib/chartist/chartist.min.css" rel="stylesheet">


</head>

<style>
  .ct-bar-chart2 .ct-series-a .ct-bar {
    stroke: #00bcd4;
  }

</style>

<body>

<?php
require_once "../../Util/Menu.php";
?>

  <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <!-- /# row -->
        <section id="main-content">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-title">
                  <h4>Quantidade de Emprestimos por leitor</h4>
                </div>
                <div class="flot-container">
                  <div id="flot-pie" class="flot-pie-container"></div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-title">
                  <h4>Empréstimos por gênero</h4>
                </div>
                <div class="flot-container">
                  <div class="ct-bar-chart2 m-t-45"></div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-title">
                  <h4>Livro emprestado qtd de vezes</h4>
                </div>
                <div class="flot-container">
                <div class="ct-bar-chart"></div>
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
                <p>2018 © Admin Board. -
                  <a href="#">example.com</a>
                </p>
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
  <script src="../../assets/js/lib/menubar/sidebar.js"></script>
  <script src="../../assets/js/lib/preloader/pace.min.js"></script>
  <script src="../../assets/js/scripts.js"></script>


  <!--  flot-chart js -->
  <script src="../../assets/js/lib/flot-chart/excanvas.min.js"></script>
  <script src="../../assets/js/lib/flot-chart/jquery.flot.js"></script>
  <script src="../../assets/js/lib/flot-chart/jquery.flot.pie.js"></script>
  <script src="../../assets/js/lib/flot-chart/jquery.flot.time.js"></script>
  <script src="../../assets/js/lib/flot-chart/jquery.flot.stack.js"></script>
  <script src="../../assets/js/lib/flot-chart/jquery.flot.resize.js"></script>
  <script src="../../assets/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
  <script src="../../assets/js/lib/flot-chart/curvedLines.js"></script>
  <script src="../../assets/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
  <script src="../../assets/js/lib/flot-chart/flot-chart-init.js"></script>
  <script src="../../assets/js/lib/chartist/chartist.min.js"></script>

  <script>

$( function () {

  <?php

  function rand_color() {
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
  }

  ?>

var data = [
  <?php foreach($emprestimosLeitor as $empLeitor) { ?>
    {
      label: "<?php echo $empLeitor['Nome_leitor']; ?> (<?php echo $empLeitor['Total_emprestimos']; ?>)",
      data: <?php echo $empLeitor['Total_emprestimos']; ?>,
      color: "<?php echo rand_color(); ?>"
    },
    <?php } ?>
  ];

var plotObj = $.plot( $( "#flot-pie" ), data, {
  series: {
    pie: {
      show: true,
      radius: 1,
      label: {
        show: false,

      }
    }
  },
  grid: {
    hoverable: true
  },
  tooltip: {
    show: false,
    content: "%p.0%, %s, n=%n", // show percentages, rounding to 2 decimal places
    shifts: {
      x: 20,
      y: 0
    },
    defaultTheme: false
  }
} );

} );

var data = {
                labels: [
                  <?php foreach($emprestimosLivros as $empLivros) { ?>
                   '<?php echo $empLivros['Titulo']; ?>',
                  <?php } ?>
                ],
                series: [[
              <?php foreach($emprestimosLivros as $empLivros) { ?>
                    <?php echo $empLivros['Total_emprestimos']; ?>,
                  <?php } ?>
              ]
            ],
            };

            var options = {
                seriesBarDistance: 10
            };

            var responsiveOptions = [
        ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function (value) {
                            return value[0];
                        }
                    }
        }]
        ];

  new Chartist.Bar('.ct-bar-chart', data, options, responsiveOptions);

  var data = {
                labels: [
                  <?php foreach($emprestimosGeneros as $empGeneros) { ?>
                   '<?php echo $empGeneros['Nome_Genero']; ?>',
                  <?php } ?>
                ],
                series: [[
              <?php foreach($emprestimosGeneros as $empGeneros) { ?>
                    <?php echo $empGeneros['Total_emprestimos']; ?>,
                  <?php } ?>
              ]
            ],
            };

            var options = {
                seriesBarDistance: 10,
                color: ' #00bcd4',
            };

            var responsiveOptions = [
        ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function (value) {
                            return value[0];
                        }
                    }
        }]
        ];

  new Chartist.Bar('.ct-bar-chart2', data, options, responsiveOptions);

  </script>

</body>

</html>