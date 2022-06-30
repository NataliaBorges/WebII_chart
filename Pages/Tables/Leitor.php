<?php
require_once "../../Util/conexao.php";
try{
    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("
                                    SELECT  Leitor.Nome_Leitor,
                                            Leitor.Data_Nascimento,
                                            Leitor.CPF,
                                            Leitor.Telefone,
                                            Leitor.Endereco,
                                            Leitor.Email,
                                            Estado.Nome_Estado,
                                            (SELECT Data_Devolucao FROM Emprestimo WHERE Id_leitor = Leitor.Id ORDER BY Id DESC OFFSET 0 ROWS FETCH NEXT 1 ROWS ONLY) As Emprestimo,
                                            (SELECT COUNT(Emprestimo.Id) From Emprestimo WHERE Emprestimo.Id_leitor = Leitor.Id) AS Quantidade_Emprestimo
                                    FROM Leitor 
                                    INNER JOIN Estado ON Leitor.Id_estado = Estado.Id
                                    GROUP BY Leitor.Id, Leitor.Nome_Leitor, Leitor.Data_Nascimento, Leitor.CPF, Leitor.Telefone, Leitor.Endereco, Leitor.Email, Estado.Nome_Estado
                                    ORDER BY Leitor.Nome_Leitor;
");
$Leitores   = $query->fetchAll();
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

    <title>Relatório: Autor</title>

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
    <link href="/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/lib/helper.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/lib/data-table/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/lib/data-table/simple.css" rel="stylesheet">
</head>
<body>

        <?php
            require_once "../../Util/Menu.php";
        ?>
        <!-- /# sidebar -->


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Leitor e Empréstimos</h4>
                                </div>
                                <div class="buttonsDiv" id="buttonsDiv"></div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Nascimento</th>
                                                <th>CPF</th>
                                                <th>Telefone</th>
                                                <th>Endereço</th>
                                                <th>Email</th>
                                                <th>Estado</th>
                                                <th>Último Empréstimo</th>
                                                <th>Empréstimos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($Leitores as $Leitor) {
                                        ?>
                                            <tr>
                                                <td style="padding-left: 18px !important;"><?php echo $Leitor['Nome_Leitor']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo date('d/m/Y',  strtotime($Leitor['Data_Nascimento'])); ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $Leitor['CPF']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $Leitor['Telefone']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $Leitor['Endereco']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $Leitor['Email']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $Leitor['Nome_Estado']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo !$Leitor['Emprestimo']?"N/A":date('d/m/Y',  strtotime( $Leitor['Emprestimo'])); ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $Leitor['Quantidade_Emprestimo']; ?></td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Nascimento</th>
                                                <th>CPF</th>
                                                <th>Telefone</th>
                                                <th>Endereço</th>
                                                <th>Email</th>
                                                <th>Estado</th>
                                                <th>Último Empréstimo</th>
                                                <th>Empréstimos</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Nascimento</th>
                                                <th>CPF</th>
                                                <th>Telefone</th>
                                                <th>Endereço</th>
                                                <th>Email</th>
                                                <th>Estado</th>
                                                <th>Último Empréstimo</th>
                                                <th>Empréstimos</th>
                                            </tr>
                                        </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <?php
                        require_once "../../Util/Footer.php";
                    ?>
                </section>
            </div>
        </div>
    </div>
    
    <!-- jquery vendor -->
    <script src="/assets/js/lib/jquery.min.js"></script>
    <script src="/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="/assets/js/lib/menubar/sidebar.js"></script>
    <script src="/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="/assets/js/lib/bootstrap.min.js"></script><script src="/assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="/assets/js/lib/data-table/datatables-init.js"></script>

</body>

</html>