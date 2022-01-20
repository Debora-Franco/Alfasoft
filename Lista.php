<?php

$sql="SELECT*FROM pessoas_contato";
$result= mysqli_query($conn. $sql);


class Lista  {
      
                <h1>Lista de Pessoas</h1>

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
                                <?php while ($rows_pessoas_contato = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?php echo $rows_pessoas_contato['id_nome']; ?></td>
                                        <td><?php echo $rows_pessoas_contato['id_sobrenome']; ?></td>
                                        <td><?php echo $rows_pessoas_contato['contato']; ?></td>
                                        
                                      <td>
                                            <button class="btn btn-warning btn-sm btn-block" type="button">
                                                <?php echo "<a href='alterar.php?id=" . $rows_pessoas_contato['id_nome'] . "' >Alterar</a>" ?>
                                            </button>
      
                                            <button class="btn btn-danger btn-sm btn-block">
                                                <?php echo "<a href='excluir.php?id=" . $rows_pessoas_contato['id_sobrenomes'] . "'>Excluir</a>" ?>
                                            </button>   
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>        
                </div>
            </div>
    </body>
</html>
