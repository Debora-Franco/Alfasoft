<?php

require_once 'conexao.php';

 $nome=$_Post['nome'];
 $sobrenome=$_Post['sobrenome'];

 
 $sql="INSERT INTO recruitment ( nome, sobrenome) values('$nome', '$sobrenome' ;
 
 $result = mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn) !=0){
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http:///wp-content/plugins/'>
    <script type=\"text/javascript\">
        alert(\"Nome Cadastrado  com Sucesso.\");
    </script>";
    }else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://wp-content/plugins/'> 
    <script type=\"text/javascript\">
        alert(\"Nome não foi cadastrato com Sucesso.\");
    </script>
    ";
}

?>




