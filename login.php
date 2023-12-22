<?php 
    include 'conexion.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $consultar = $connect->query("SELECT * FROM usuarios WHERE username='".$username."' and password='".$password."'");

    $resultado = array();

    while($extrairDados = $consultar ->fetch_assoc()) {
        $resultado[] = $extrairDados;
    }

    echo json_encode($resultado);
?>