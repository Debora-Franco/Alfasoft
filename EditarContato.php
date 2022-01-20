<?php

require_once 'conexao.php';


 $contato=$_Post['contato'];
 
 $sql="UPADATE recruitment SET  contato='$contato WHERE pessoas_contato ;
 
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
        alert(\"Acervo não foi Alterado com Sucesso.\");
    </script>
    ";
}

?>