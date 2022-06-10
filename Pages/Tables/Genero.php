<?php
require_once "../../Util/conexao.php";
try{
    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("
                    SELECT  Genero.Nome_Genero,
                            COUNT(Livro.Id) AS Livros
                    FROM Genero
                    INNER JOIN Livro ON Genero.Id = Livro.Id_genero
                    GROUP BY Genero.Nome_Genero;
    ");
    $generos   = $query->fetchAll();
    $query2      = $Conexao->query("
                    SELECT  Genero.Nome_Genero,
                            Livro.Titulo,
                            Livro.Edicao,
                            Livro.Ano_Publicacao,
                            Livro.ISBN,
                            Autor.Nome_Autor,
                            Editora.Nome_Editora
                    FROM Genero
                    INNER JOIN Livro ON (Genero.Id = Livro.Id_genero)
                    INNER JOIN Autor ON (Livro.Id_autor = Autor.Id)
                    INNER JOIN Editora ON (Livro.Id_editora = Editora.Id)
    ");
    $LivrosGeneros   = $query2->fetchAll();
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

    <title>Dark Read</title>

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
<style>
    table.dataTable thead .sorting, table.dataTable thead .sorting_asc, table.dataTable thead .sorting_desc, table.dataTable thead .sorting_asc_disabled, table.dataTable thead .sorting_desc_disabled {
    background-repeat: no-repeat;
}
</style>
<body>
    <?php
        require_once "../../Util/Menu.php";
    ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Gêneros e Quantidade de Obras</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Gêneros</th>
                                                <th>Qtd. de Obras</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($generos as $genero) {
                                        ?>
                                            <tr>
                                                <td style="padding-left: 18px !important;"><?php echo $genero['Nome_Genero']; ?></td>
                                                <td style="padding-left: 80px !important;"><?php echo $genero['Livros']; ?></td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Gêneros</th>
                                                <th>Qtd. de Obras</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Gêneros e Obras</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="Autor" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Gênero</th>
                                                <th>Título</th>
                                                <th>Edição</th>
                                                <th>Ano de Publicação</th>
                                                <th>ISBN</th>
                                                <th>Autor</th>
                                                <th>Editora</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($LivrosGeneros as $LivroGenero) {
                                        ?>
                                            <tr>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroGenero['Nome_Genero']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroGenero['Titulo']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroGenero['Edicao']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroGenero['Ano_Publicacao']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroGenero['ISBN']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroGenero['Nome_Autor']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroGenero['Nome_Editora']; ?></td>

                                            </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Gênero</th>
                                                <th>Título</th>
                                                <th>Edição</th>
                                                <th>Ano de Publicação</th>
                                                <th>ISBN</th>
                                                <th>Autor</th>
                                                <th>Editora</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
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

    <!-- Datatable -->
    <script src="/assets/js/lib/data-table/global.min.js"></script>
    <script src="/assets/js/lib/data-table/quixnav-init.js"></script>
    <script src="/assets/js/lib/data-table/custom.min.js"></script>
    <script src="/assets/js/lib/data-table/jquery.dataTables2.min.js"></script>
    <script src="/assets/js/lib/data-table/datatables.init.js"></script>
</body>

</html>