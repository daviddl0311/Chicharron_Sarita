<?php
    $conexion = mysqli_connect('localhost','root','','crud_db');
    //$conexion = mysqli_connect('localhost','id21175174_comnetarista','comentar123@A','id21175174_comentarios');
    
    $nom = $_POST['nombre'];
    $apell = $_POST['apellido'];
    $tel = $_POST['telefono'];
    $ped = $_POST['pedidos'];
    $t_ped = $_POST['t_pedido'];
    $dir = isset($_POST['direccion']) ? $_POST['direccion'] : '';
    $dist = isset($_POST['distrito']) ? $_POST['distrito'] : '';
    $com = $_POST['comentario'];

    $query = "INSERT INTO comentario (nombre, apellido, telefono, pedidos, t_pedido, direccion, distrito, comentario, cancelado) 
    VALUES ('$nom', '$apell', '$tel', '$ped', '$t_ped', '$dir', '$dist', '$com', 0)";
    
    mysqli_query($conexion, $query);

    header('Location: comentario.php');
?>
