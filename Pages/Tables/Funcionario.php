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
$query2      = $Conexao->query("
                                    SELECT	Funcionario.Nome_funcionario,
                                            Funcao.Nome_funcao,
                                            Estado.Nome_Estado as Estado_funcionario,
                                            Livro.Titulo,
                                            Livro.Edicao,
                                            Livro.Ano_Publicacao,
                                            Livro.ISBN,
                                            Autor.Nome_autor,
                                            Genero.Nome_Genero,
                                            Autor.Nome_Autor,
                                            Editora.Nome_Editora,
                                            Leitor.Nome_leitor,
                                            Emprestimo.Data_Emprestimo,
                                            Emprestimo.Data_Devolucao,
                                            Emprestimo.Obs_Emprestimo,
                                            Status_Emprestimo.Nome_Status,
                                            EE.Nome_Estado as Estado_emprestimo
                                    FROM Funcionario
                                    INNER JOIN Emprestimo ON (Funcionario.Id = Emprestimo.Id_funcionario)
                                    INNER JOIN Funcao ON (funcao.Id = Funcionario.Id_funcao)
                                    INNER JOIN Estado ON (Funcionario.Id_estado = Estado.Id)
                                    INNER JOIN Estado AS EE ON (EE.Id = Emprestimo.Id_estado)
                                    INNER JOIN Status_Emprestimo ON (Emprestimo.Id_emprestimoStatus = Status_Emprestimo.Id)
                                    INNER JOIN Item_Emprestimo  ON (Item_Emprestimo.Id_emprestimo = Emprestimo.Id)
                                    INNER JOIN Exemplar  ON (Exemplar.Id = Item_Emprestimo.Id_exemplar)
                                    INNER JOIN Livro  ON (Livro.Id = Exemplar.Id_livro)
                                    INNER JOIN Genero  ON (Genero.Id = Livro.Id_genero)
                                    INNER JOIN Autor  ON (Autor.Id = Livro.Id_autor)
                                    INNER JOIN Editora  ON (Editora.Id = Livro.Id_editora)
                                    INNER JOIN Leitor  ON (leitor.Id = Emprestimo.Id_leitor)
                                    ORDER BY Funcionario.Nome_funcionario;
    ");
    $LivrosFuncionario   = $query2->fetchAll();
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

    <title>Relatório: Funcionário</title>

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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Funcionários e Empréstimos</h4>
                                </div>
                                <div class="buttonsDiv" id="buttonsDiv2"></div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="row-select1" class="display table table-borderd table-hover">
                                        <thead>
                                            <tr>
                                                <th>Funcionário</th>
                                                <th>Função</th>
                                                <th>Est. Funcionário</th>
                                                <th>Título</th>
                                                <th>Edição</th>
                                                <th>Publicação</th>
                                                <th>ISBN</th>
                                                <th>Autor</th>
                                                <th>Gênero</th>
                                                <th>Editora</th>
                                                <th>Leitor</th>
                                                <th>Empréstimo</th>
                                                <th>Devolução</th>
                                                <th>Observação</th>
                                                <th>Status</th>
                                                <th>Est. Empréstimo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($LivrosFuncionario as $LivroFuncionario) {
                                        ?>
                                            <tr>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['Nome_funcionario']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['Nome_funcao']; ?></td>
                                                <td style="padding-left: 18px !important;padding-right: 100px;"><?php echo $LivroFuncionario['Estado_funcionario']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['Titulo']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['Edicao']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['Ano_Publicacao']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['ISBN']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['Nome_autor']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['Nome_Genero']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['Nome_Editora']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['Nome_leitor']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo date('d/m/Y',  strtotime($LivroFuncionario['Data_Emprestimo'])); ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo date('d/m/Y',  strtotime($LivroFuncionario['Data_Devolucao'])); ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['Obs_Emprestimo']; ?></td>
                                                <td style="padding-left: 18px !important;"><?php echo $LivroFuncionario['Nome_Status']; ?></td>
                                                <td style="padding-left: 18px !important;padding-right: 100px;"><?php echo $LivroFuncionario['Estado_emprestimo']; ?></td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th>Funcionário</th>
                                                <th>Função</th>
                                                <th>Est. Funcionário</th>
                                                <th>Título</th>
                                                <th>Edição</th>
                                                <th>Publicação</th>
                                                <th>ISBN</th>
                                                <th>Autor</th>
                                                <th>Gênero</th>
                                                <th>Editora</th>
                                                <th>Leitor</th>
                                                <th>Empréstimo</th>
                                                <th>Devolução</th>
                                                <th>Observação</th>
                                                <th>Status</th>
                                                <th>Est.Empréstimo</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Funcionário</th>
                                                <th>Função</th>
                                                <th>Est. Funcionário</th>
                                                <th>Título</th>
                                                <th>Edição</th>
                                                <th>Publicação</th>
                                                <th>ISBN</th>
                                                <th>Autor</th>
                                                <th>Gênero</th>
                                                <th>Editora</th>
                                                <th>Leitor</th>
                                                <th>Empréstimo</th>
                                                <th>Devolução</th>
                                                <th>Observação</th>
                                                <th>Status</th>
                                                <th>Est.Empréstimo</th>
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