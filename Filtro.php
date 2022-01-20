
<?php
include_once ("conexao.php");


?>

<!DOCTYPE html>
<html lang=""pt-br>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <title>Pesquisar Acervo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container theme-showcase" role="main">

            
            <h1>Filtro</h1>
            
            <form name="pesquisa" method="post" >
                Buscar Usuários: <input type="text" name="buscar"/> <button class="btn btn-primary btn-sm">Pesquisar</button>
            </form>
            
            <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>Contato</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $buscar = filter_input(INPUT_POST,'buscar', FILTER_SANITIZE_STRING);
                                   if ($buscar) {
                                   $pesquisa = filter_input(INPUT_POST,'buscar', FILTER_SANITIZE_STRING);
                                   $result_pesquisa = "SELECT * FROM acervo WHERE titulo LIKE '%$pesquisa%'";
                                   $resultado_pesquisa = mysqli_query($conn, $result_pesquisa);{
                                       
                                   }
                                while ($row_usuario = mysqli_fetch_assoc($resultado_pesquisa)){ ?>
                                    <tr>
                                        <td><?php echo $row_pessoas_contato['nome']; ?></td>
                                        <td><?php echo $row_pessoas_contato['sobrenome']; ?></td>
                                        <td><?php echo $row_pessoas_contato['contato']; ?></td>
                                       
                                        <td>
                                            <button class="btn btn-warning btn-sm btn-block">
                                                <?php echo "<a href='EditarPessoa.php?id=" . $row_pessoas_contato['nome'] . "' >Alterar</a>" ?>
                                            </button>
                                            <button class="btn btn-danger btn-sm btn-lg btn-block">
                                                <?php echo "<a href='excluirNome.php?id=" . $row_pessoas_contato['nome'] . "' >Excluir</a>" ?>
                                            </button>
                                            
                                            <button class="btn btn-danger btn-sm btn-lg btn-block">
                                                <?php echo "<a href='EditarContato.php?id=" . $row_pessoas_contato['contato'] . "' >Alterar</a>" ?>
                                            </button>
                                            <button class="btn btn-danger btn-sm btn-lg btn-block">
                                                <?php echo "<a href='excluirContato.php?id=" . $row_pessoas_contato['contato'] . "' >Excluir</a>" ?>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                   }
                                ?>
                            </tbody>
                        </table>
                    </div>        
                </div>
        </div>
    </body>
</html>