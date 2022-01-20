<?php

require_once 'conexao.php';

 $nome=$_Post['nome'];
 $sobrenome=$_Post['sobrenome'];
 
 
 $sql="UPADATE recruitment SET nome='$nome', sobrenome='$sobrenome' WHERE pessoas_contato ;
 
 $result = mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn) !=0){
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT ='0:URL=https://wp-content/plugins/conexao.php'>
    <script type=\"text/javascript\">
        alert(\"Nome Alterado  com Sucesso.\");
    </script>
    ";
    }else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://wp-content/plugins/conexao.php'> 
    <script type=\"text/javascript\">
        alert(\"Nome não foi Alterado com Sucesso.\");
    </script>
    ";
}

?>