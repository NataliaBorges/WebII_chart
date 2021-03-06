<?php
require_once "../../Util/conexao.php";
try{
    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("
                    SELECT  AUTOR.Nome_Autor,
                            COUNT(LIVRO.Id) AS Livros
                    FROM Autor AS AUTOR
                    LEFT JOIN Livro AS LIVRO ON (AUTOR.Id = LIVRO.Id_autor)
                    GROUP BY AUTOR.Nome_Autor;
    ");
    $autores   = $query->fetchAll();
    $query2      = $Conexao->query("
                                    SELECT  Autor.Nome_Autor, 
                                            Livro.Titulo, 
                                            Livro.Edicao, 
                                            Livro.Ano_Publicacao, 
                                            Livro.Data_Aquisicao, 
                                            Livro.ISBN, 
                                            Genero.Nome_Genero,
                                            COUNT(Exemplar.Id) AS Quantidade_Exemplares
                                    FROM Autor
                                    LEFT JOIN Livro ON (Autor.Id = Livro.Id_autor)
                                    INNER JOIN Genero ON (Livro.Id_genero = Genero.Id)
                                    LEFT JOIN Exemplar ON (Livro.Id = Exemplar.Id_livro)
                                    GROUP BY Autor.Nome_Autor, Livro.Titulo, Livro.Edicao, Livro.Ano_Publicacao, Livro.Data_Aquisicao, Livro.ISBN, Genero.Nome_Genero
                                    ORDER BY Autor.Nome_Autor;
    ");
    $LivrosAutores   = $query2->fetchAll();
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
                                    <h4>Autor e Quantidade de Títulos</h4>
                                </div>
                                <div class="buttonsDiv" id="buttonsDiv"></div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive" style="overflow-x: hidden;">
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Autor</th>
                                                    <th>Qtd. de Títulos</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach($autores as $autor) {
                                            ?>
                                                <tr>
                                                    <td style="padding-left: 18px !important;"><?php echo $autor['Nome_Autor']; ?></td>
                                                    <td style="padding-left: 20px !important;"><?php echo $autor['Livros']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th>Autor</th>
                                                    <th>Qtd. de Títulos</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Autor</th>
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
                                    <h4>Autor e Títulos</h4>
                                </div>
                                <div class="buttonsDiv" id="buttonsDiv2"></div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select1" class="display table table-borderd table-hover">
                                        <thead>
                                            <tr>
                                                <th>Autor</th>
                                                <th>Título</th>
                                                <th>Edição</th>
                                                <th>Publicação</th>
                                                <th>Aquisição</th>
                                                <th>ISBN</th>
                                                <th>Gênero</th>
                                                <th>Qtd.Exemplares</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($LivrosAutores as $LivroAutor) {
                                        ?>
                                            <tr>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroAutor['Nome_Autor']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroAutor['Titulo']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroAutor['Edicao']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroAutor['Ano_Publicacao']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo date('d/m/Y',  strtotime($LivroAutor['Data_Aquisicao'])); ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroAutor['ISBN']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroAutor['Nome_Genero']; ?></td>
                                                <td style="padding-left:18px !important;"><?php echo $LivroAutor['Quantidade_Exemplares']; ?></td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th>Autor</th>
                                                <th>Títulos</th>
                                                <th>Edição</th>
                                                <th>Publicação</th>
                                                <th>Aquisição</th>
                                                <th>ISBN</th>
                                                <th>Gênero</th>
                                                <th>Qtd.Exemplares</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Autor</th>
                                                <th>Títulos</th>
                                                <th>Edição</th>
                                                <th>Publicação</th>
                                                <th>Aquisição</th>
                                                <th>ISBN</th>
                                                <th>Gênero</th>
                                                <th>Qtd.Exemplares</th>
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