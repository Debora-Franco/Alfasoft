<?php

session_start();
include ('conexao.php');
$id = filter_input (INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_pessoas_contato = "delete from acervo where id_pessoas_contato = '$contato'";
$resulta_pessos_contato = mysqli_query($conn, $result_acervo);


if(mysqli_affected_rows($conn) !=0){
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http:///wp-content/plugins/lista.php'>
    <script type=\"text/javascript\">
        alert(\"Contato Excluído com Sucesso.\");
    </script>
    ";
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http:///wp-content/plugins/lista.php'>
    <script type=\"text/javascript\">
        alert(\"Contato não foi Excluído com Sucesso.\");
    </script>
    ";
}