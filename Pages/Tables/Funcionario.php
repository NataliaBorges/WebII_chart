<?php
require_once "../../Util/conexao.php";
try{
    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("
                                    SELECT	FUNCIONARIO.Nome_Funcionario,
                                            FUNCIONARIO.Data_Nascimento,
                                            FUNCIONARIO.CPF,
                                            FUNCIONARIO.Endereco,
                                            FUNCIONARIO.Telefone,
                                            FUNCIONARIO.Email,
                                            FUNCAO.Nome_Funcao,
                                            ESTADO.Nome_Estado,
                                            (SELECT COUNT(Emprestimo.Id) From Emprestimo WHERE Emprestimo.Id_funcionario = Funcionario.Id) AS Quantidade_Emprestimo
                                    FROM FUNCIONARIO
                                    INNER JOIN FUNCAO ON FUNCIONARIO.Id_funcao = FUNCAO.Id
                                    INNER JOIN ESTADO ON FUNCIONARIO.Id_estado = ESTADO.Id
                                    LEFT JOIN EMPRESTIMO ON FUNCIONARIO.Id = EMPRESTIMO.Id_funcionario
                                    GROUP BY FUNCIONARIO.Nome_Funcionario, FUNCIONARIO.Data_Nascimento, FUNCIONARIO.CPF, FUNCIONARIO.Endereco, FUNCIONARIO.Telefone, FUNCIONARIO.Email, FUNCAO.Nome_Funcao, ESTADO.Nome_Estado, Funcionario.Id
                                    ORDER BY FUNCIONARIO.Nome_Funcionario;
    ");
$funcionarios   = $query->fetchAll();
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
                                    <h4>Funcionários e Empréstimos</h4>
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
                                                <th>Endereço</th>
                                                <th>Telefone</th>
                                                <th>Email</th>
                                                <th>Função</th>
                                                <th>Estado</th>
                                                <th>Empréstimos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($funcionarios as $funcionario) {
                                        ?>
                                            <tr>
                                                <td><?php echo $funcionario['Nome_Funcionario']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo date('d/m/Y',  strtotime($funcionario['Data_Nascimento'])); ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $funcionario['CPF']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $funcionario['Endereco']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $funcionario['Telefone']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $funcionario['Email']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $funcionario['Nome_Funcao']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $funcionario['Nome_Estado']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $funcionario['Quantidade_Emprestimo']; ?></td>
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
                                                <th>Endereço</th>
                                                <th>Telefone</th>
                                                <th>Email</th>
                                                <th>Função</th>
                                                <th>Estado</th>
                                                <th>Empréstimos</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>Nome</th>
                                                <th>Nascimento</th>
                                                <th>CPF</th>
                                                <th>Endereço</th>
                                                <th>Telefone</th>
                                                <th>Email</th>
                                                <th>Função</th>
                                                <th>Estado</th>
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