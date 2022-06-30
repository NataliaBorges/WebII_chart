<?php
require_once "../../Util/conexao.php";
try{
    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("
                                    SELECT	L.Titulo,
                                            L.Edicao,
                                            L.Ano_Publicacao,
                                            L.ISBN,
                                            A.Nome_Autor,
                                            E.Nome_Editora,
                                            G.Nome_Genero,
                                            EM.Data_Emprestimo,
                                            EM.Data_Devolucao,
                                            EM.Obs_Emprestimo,
                                            LE.Nome_Leitor,
                                            F.Nome_Funcionario,
                                            SE.Nome_Status,
                                            EST.Nome_Estado
                                    FROM Livro AS L
                                    INNER JOIN Autor AS A ON (L.Id_autor = A.Id)
                                    INNER JOIN Editora AS E ON (L.Id_editora = E.Id)
                                    INNER JOIN Genero AS G ON (G.Id = L.Id_genero)
                                    INNER JOIN Exemplar AS EX ON (L.Id = EX.Id_livro)
                                    INNER JOIN Item_Emprestimo AS IT ON (EX.Id = IT.Id_exemplar)
                                    INNER JOIN Emprestimo AS EM ON (EM.Id = IT.Id_emprestimo)
                                    INNER JOIN Funcionario AS F ON (F.Id = EM.Id_funcionario)
                                    INNER JOIN LEITOR AS LE ON (LE.Id = EM.Id_leitor)
                                    INNER JOIN Status_Emprestimo AS SE ON (SE.Id = EM.Id_emprestimoStatus)
                                    INNER JOIN Estado AS EST ON (EST.Id = EM.Id_estado)
                                    ORDER BY L.Titulo;
    ");
    $emprestimos   = $query->fetchAll();
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

    <title>Relatório: Empréstimo</title>

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
                                    <h4>Livros e Empréstimos</h4>
                                </div>
                                <div class="buttonsDiv" id="buttonsDiv"></div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Título</th>
                                                    <th>Edição</th>
                                                    <th>Publicação</th>
                                                    <th>ISBN</th>
                                                    <th>Autor</th>
                                                    <th>Editora</th>
                                                    <th>Gênero</th>
                                                    <th>Empréstimo</th>
                                                    <th>Devolução</th>
                                                    <th>Observação</th>
                                                    <th>Leitor</th>
                                                    <th>Funcionário</th>
                                                    <th>Status</th>
                                                    <th>Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach($emprestimos as $emprestimo) {
                                            ?>
                                                <tr>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Titulo']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Edicao']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Ano_Publicacao']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['ISBN']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Nome_Autor']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Nome_Editora']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Nome_Genero']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Data_Emprestimo']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Data_Devolucao']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Obs_Emprestimo']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Nome_Leitor']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Nome_Funcionario']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Nome_Status']; ?></td>
                                                    <td style="padding-left: 18px !important;"><?php echo $emprestimo['Nome_Estado']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                <th>Título</th>
                                                    <th>Edição</th>
                                                    <th>Publicação</th>
                                                    <th>ISBN</th>
                                                    <th>Autor</th>
                                                    <th>Editora</th>
                                                    <th>Gênero</th>
                                                    <th>Empréstimo</th>
                                                    <th>Devolução</th>
                                                    <th>Observação</th>
                                                    <th>Leitor</th>
                                                    <th>Funcionário</th>
                                                    <th>Status</th>
                                                    <th>Estado</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                <th>Título</th>
                                                    <th>Edição</th>
                                                    <th>Publicação</th>
                                                    <th>ISBN</th>
                                                    <th>Autor</th>
                                                    <th>Editora</th>
                                                    <th>Gênero</th>
                                                    <th>Empréstimo</th>
                                                    <th>Devolução</th>
                                                    <th>Observação</th>
                                                    <th>Leitor</th>
                                                    <th>Funcionário</th>
                                                    <th>Status</th>
                                                    <th>Estado</th>
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