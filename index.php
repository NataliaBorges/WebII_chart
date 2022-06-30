<?php
require_once "Util/conexao.php";
try{
    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("
                    SELECT COUNT(Id) AS Total FROM Exemplar;
    ");
    $totalLivros   = $query->fetchAll();
    $query2      = $Conexao->query("
                    SELECT COUNT(Id) AS Total FROM Leitor;
    ");
    $totalLeitor   = $query2->fetchAll();
    $query3      = $Conexao->query("
                    SELECT COUNT(Id) AS Total FROM Emprestimo;
    ");
    $totalEmprestimo   = $query3->fetchAll();
    $query4      = $Conexao->query("
                    SELECT COUNT(Id) AS Total FROM Funcionario;
    ");
    $totalFuncionario  = $query4->fetchAll();
    $query5      = $Conexao->query("
                    SELECT COUNT(Id) AS 'Janeiro',
                        (SELECT COUNT(Id) FROM Emprestimo WHERE MONTH(Data_Emprestimo) = 1 AND YEAR(Data_Emprestimo) = 2022) AS 'Fevereiro',
                        (SELECT COUNT(Id) FROM Emprestimo WHERE MONTH(Data_Emprestimo) = 2 AND YEAR(Data_Emprestimo) = 2022) AS 'Março',
                            (SELECT COUNT(Id) FROM Emprestimo WHERE MONTH(Data_Emprestimo) = 3 AND YEAR(Data_Emprestimo) = 2022) AS 'Abril',
                            (SELECT COUNT(Id) FROM Emprestimo WHERE MONTH(Data_Emprestimo) = 4 AND YEAR(Data_Emprestimo) = 2022) AS 'Maio',
                            (SELECT COUNT(Id) FROM Emprestimo WHERE MONTH(Data_Emprestimo) = 5 AND YEAR(Data_Emprestimo) = 2022) AS 'Junho',
                            (SELECT COUNT(Id) FROM Emprestimo WHERE MONTH(Data_Emprestimo) = 6 AND YEAR(Data_Emprestimo) = 2022) AS 'Julho',
                            (SELECT COUNT(Id) FROM Emprestimo WHERE MONTH(Data_Emprestimo) = 7 AND YEAR(Data_Emprestimo) = 2022) AS 'Agosto',
                            (SELECT COUNT(Id) FROM Emprestimo WHERE MONTH(Data_Emprestimo) = 8 AND YEAR(Data_Emprestimo) = 2022) AS 'Setembro',
                            (SELECT COUNT(Id) FROM Emprestimo WHERE MONTH(Data_Emprestimo) = 9 AND YEAR(Data_Emprestimo) = 2022) AS 'Outubro',
                            (SELECT COUNT(Id) FROM Emprestimo WHERE MONTH(Data_Emprestimo) = 10 AND YEAR(Data_Emprestimo) = 2022) AS 'Novembro',
                            (SELECT COUNT(Id) FROM Emprestimo WHERE MONTH(Data_Emprestimo) = 11 AND YEAR(Data_Emprestimo) = 2022) AS 'Dezembro'
                            
                    FROM Emprestimo 
                    WHERE MONTH(Data_Emprestimo) = 0 AND YEAR(Data_Emprestimo) = 2022
    ");
    $emprestimoMes  = $query5->fetchAll();

    $query6      = $Conexao->query("
                    SELECT Funcionario.Nome_funcionario,
                        COUNT(Emprestimo.Id) AS 'Total_emprestimos'
                    FROM Funcionario
                    LEFT JOIN Emprestimo ON (Funcionario.Id = Emprestimo.Id_funcionario)
                    GROUP BY Funcionario.Nome_funcionario;
    ");
    $totalEmprestimoFuncionario  = $query6->fetchAll();

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
    <title>Dark Read: Dashboard</title>
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
    <link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <?php
        require_once "Util/Menu.php";
    ?>
    <!-- /# sidebar -->

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid" style="background-color: black;">
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-book color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">LIVROS</div>
                                        <div class="stat-digit"><?php echo $totalLivros[0]['Total']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">LEITORES</div>
                                        <div class="stat-digit"><?php echo $totalLeitor[0]['Total']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-archive color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">EMPRÉSTIMOS</div>
                                        <div class="stat-digit"><?php echo $totalEmprestimo[0]['Total']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-headphone-alt color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">FUNCIONÁRIOS</div>
                                        <div class="stat-digit"><?php echo $totalFuncionario[0]['Total']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Empréstimos por mês</h4>

                                </div>
                                <div class="card-body">
                                    <div class="ct-bar-chart m-t-45"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">

                                <div class="card-body">
                                    <div class="ct-pie-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                        require_once "Util/Footer.php";
                    ?>
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

    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.init.js"></script>


    <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/lib/weather/weather-init.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="assets/js/lib/chartist/chartist.min.js"></script>
    <script src="assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/dashboard2.js"></script>
    <script>
        var data = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [
            [
                <?php echo $emprestimoMes[0]['Janeiro']; ?>,
                <?php echo $emprestimoMes[0]['Fevereiro']; ?>,
                <?php echo $emprestimoMes[0]['Março']; ?>,
                <?php echo $emprestimoMes[0]['Abril']; ?>,
                <?php echo $emprestimoMes[0]['Maio']; ?>,
                <?php echo $emprestimoMes[0]['Junho']; ?>,
                <?php echo $emprestimoMes[0]['Julho']; ?>,
                <?php echo $emprestimoMes[0]['Agosto']; ?>,
                <?php echo $emprestimoMes[0]['Setembro']; ?>,
                <?php echo $emprestimoMes[0]['Outubro']; ?>,
                <?php echo $emprestimoMes[0]['Novembro']; ?>,
                <?php echo $emprestimoMes[0]['Dezembro']; ?>
            ],
        ]
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
            <?php foreach($totalEmprestimoFuncionario as $emprestimoFuncionario) { ?>
                '<?php echo $emprestimoFuncionario['Nome_funcionario']; ?> (<?php echo $emprestimoFuncionario['Total_emprestimos']; ?>)',
            <?php } ?>
        ],
        series: [
            <?php $I = 0; foreach($totalEmprestimoFuncionario as $emprestimoFuncionario) { ?>
                {
                    value: <?php echo $emprestimoFuncionario['Total_emprestimos']; ?>,
                    className: '<?php echo $I == 0 ? 'bg-facebook' : 'bg-youtube'; ?>'
                },
            <?php $I +=1; } ?>
        ]
    };

    var options = {
        labelInterpolationFnc: function (value) {
            return value[0]
        }
    };

    var responsiveOptions = [
  ['screen and (min-width: 640px)', {
            chartPadding: 30,
            labelOffset: 100,
            labelDirection: 'explode',
            labelInterpolationFnc: function (value) {
                return value;
            }
  }],
  ['screen and (min-width: 1024px)', {
            labelOffset: 80,
            chartPadding: 20
  }]
];

    new Chartist.Pie('.ct-pie-chart', data, options, responsiveOptions);
    </script>
</body>

</html>