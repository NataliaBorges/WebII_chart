<?php
require_once "../../Util/conexao.php";
try{
    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("
        SELECT  L.Titulo,
                L.Edicao,
                L.Ano_Publicacao,
                L.Data_Aquisicao,
                L.ISBN,
                G.Nome_Genero,
                A.Nome_Autor,
                ED.Nome_Editora,
                COUNT(E.Id) AS Exemplares
        FROM Exemplar AS E
        INNER JOIN Livro AS L ON (L.Id = E.Id_livro)
        INNER JOIN Genero AS G ON (L.Id_genero = G.Id)
        INNER JOIN Autor AS A ON (L.Id_autor = A.Id)
        INNER JOIN Editora AS ED ON (L.Id_editora = ED.Id)
        GROUP BY L.TItulo, L.Edicao, L.Ano_Publicacao, L.Data_Aquisicao, L.ISBN, G.Nome_Genero, A.Nome_Autor, ED.Nome_Editora;
    ");
    $livros   = $query->fetchAll();
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
</head>

<body>
    <?php
        require_once "../../Menu.php";
    ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Título</th>
                                                <th>Edição</th>
                                                <th>Publicação</th>
                                                <th>Aquisição</th>
                                                <th>ISBN</th>
                                                <th>Gênero</th>
                                                <th>Autor</th>
                                                <th>Editora</th>
                                                <th>Exemplares</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($livros as $livro) {
                                        ?>
                                            <tr>
                                                <td><?php echo $livro['Titulo']; ?></td>
                                                <td><?php echo $livro['Edicao']; ?></td>
                                                <td><?php echo $livro['Ano_Publicacao']; ?></td>
                                                <td><?php echo $livro['Data_Aquisicao']; ?></td>
                                                <td><?php echo $livro['ISBN']; ?></td>
                                                <td><?php echo $livro['Nome_Genero']; ?></td>
                                                <td><?php echo $livro['Nome_Autor']; ?></td>
                                                <td><?php echo $livro['Nome_Editora']; ?></td>
                                                <td><?php echo $livro['Exemplares']; ?></td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Título</th>
                                                <th>Edição</th>
                                                <th>Publicação</th>
                                                <th>Aquisição</th>
                                                <th>ISBN</th>
                                                <th>Gênero</th>
                                                <th>Autor</th>
                                                <th>Editora</th>
                                                <th>Exemplares</th>
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

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2022 © Dark Read.</p>
                            </div>
                        </div>
                    </div>
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