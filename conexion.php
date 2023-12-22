<?php 
    $connect = new mysqli("localhost","root","","tienda");

    if($connect) {
        //echo "Está conectado à base de dados"

    } else {
        echo "falha na conexão com a base de dados";
        exit();
    }

?>