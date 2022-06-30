<?php
require_once "../../Util/conexao.php";
try{
    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("
                        SELECT  Editora.Nome_Editora, 
                        Editora.Endereco,
                        Editora.CNPJ,
                        Editora.Email,
                        COUNT(Exemplar.Id) AS Livros
                    FROM Editora
                    INNER JOIN Livro ON (Editora.Id = Livro.Id_editora)
                    INNER JOIN Exemplar ON (Livro.Id = Exemplar.Id_livro)
                    GROUP BY Editora.Nome_Editora, Editora.Endereco,Editora.CNPJ,Editora.Email
    ");
    $editoras   = $query->fetchAll();
    $query2      = $Conexao->query("
                    SELECT  Editora.Nome_Editora, 
                            Livro.Titulo, Livro.Edicao, 
                            Livro.Ano_Publicacao, 
                            Livro.Data_Aquisicao, 
                            Livro.ISBN, 
                            Autor.Nome_Autor,
                            Genero.Nome_Genero
                            FROM Editora
                    INNER JOIN Livro ON (Editora.Id = Livro.Id_editora)
                    INNER JOIN Genero ON (Livro.Id_genero = Genero.Id)
                    INNER JOIN Autor ON (Livro.Id_autor = Autor.Id)
                    ORDER BY Editora.Nome_Editora;
    ");
    $LivrosEditoras   = $query2->fetchAll();
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

    <title>Relatório: editora</title>

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
                                    <h4>Editora e Quantidade de Títulos</h4>
                                </div>
                                <div class= "buttonsDiv" id="buttonsDiv"></div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive" style="overflow-x: hidden;">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Editora</th>
                                                    <th>Endereço</th>
                                                    <th>CNPJ</th>
                                                    <th>Email</th>
                                                    <th>Qtd. de Títulos</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach($editoras as $editora) {
                                            ?>
                                                <tr>
                                                    <td style="padding-left: 18px !important;"><?php echo $editora['Nome_Editora']; ?></td>
                                                    <td><?php echo $editora['Endereco']; ?></td>
                                                    <td><?php echo $editora['CNPJ']; ?></td>
                                                    <td><?php echo $editora['Email']; ?></td>
                                                    <td style="padding-left: 20px !important;"><?php echo $editora['Livros']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th>Editora</th>
                                                    <th>Endereço</th>
                                                    <th>CNPJ</th>
                                                    <th>Email</th>
                                                    <th>Qtd. de Títulos</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Editora</th>
                                                    <th>Endereço</th>
                                                    <th>CNPJ</th>
                                                    <th>Email</th>
                                                    <th>Qtd. de Títulos</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Editora e Títulos</h4>
                                </div>
                                <div class="buttonsDiv" id="buttonsDiv2"></div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select1" class="display table table-borderd table-hover">
                                        <thead>
                                            <tr>
                                                <th>Editora</th>
                                                <th>Título</th>
                                                <th>Edição</th>
                                                <th>Publicação</th>
                                                <th>Aquisição</th>
                                                <th>ISBN</th>
                                                <th>Autor</th>
                                                <th>Gênero</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($LivrosEditoras as $LivroEditora) {
                                        ?>
                                            <tr>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroEditora['Nome_Editora']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroEditora['Titulo']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroEditora['Edicao']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroEditora['Ano_Publicacao']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo date('d/m/Y',  strtotime($LivroEditora['Data_Aquisicao'])); ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroEditora['ISBN']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroEditora['Nome_Autor']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroEditora['Nome_Genero']; ?></td>

                                            </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th>Editora</th>
                                                <th>Título</th>
                                                <th>Edição</th>
                                                <th>Publicação</th>
                                                <th>Aquisição</th>
                                                <th>ISBN</th>
                                                <th>Autor</th>
                                                <th>Gênero</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Editora</th>
                                                <th>Título</th>
                                                <th>Edição</th>
                                                <th>Publicação</th>
                                                <th>Aquisição</th>
                                                <th>ISBN</th>
                                                <th>Autor</th>
                                                <th>Gênero</th>
                                            </tr>
                                        </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
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