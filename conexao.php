<?php

$conn = mysqli_connect(" https://deborasouza.eu1.alfasoft.pt/phpmyadmin/","deborasouza","","zcoqmcpTWiOGfOu");

if(mysqli_connect_errno()){
    echo "Erro ao conectar: ".mysqli_connect_error();
}else{
    echo "";
}