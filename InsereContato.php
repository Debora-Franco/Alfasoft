<?php
require 'conexao.php';

$contato=$_Post['contao'];

$sql="INSERT INTO pessoas_contato(contato) values($'contato')";
    
$result = mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn) !=0){
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http:///wp-content/plugins/'>
    <script type=\"text/javascript\">
        alert(\"Contato Cadastrado com Sucesso.\");
    </script>
    ";
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http:///wp-content/plugins/'>
    <script type=\"text/javascript\">
        alert(\"Contato não foi Cadastrado com Sucesso.\");
    </script>
    ";
}
?>
