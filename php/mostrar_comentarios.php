<?php 
    $conexion = mysqli_connect('localhost','root','','crud_db');
    //$conexion = mysqli_connect('localhost','id21175174_comnetarista','comentar123@A','id21175174_comentarios');

    $query = "SELECT nombre, apellido, telefono, pedidos, t_pedido, direccion, distrito, comentario, cancelado
    FROM comentario ORDER BY id ASC";

    $resultado = mysqli_query($conexion, $query);

    while($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellido'] . "</td>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "<td>" . $fila['pedidos'] . "</td>";
        echo "<td>" . $fila['t_pedido'] . "</td>";
        echo "<td>" . $fila['direccion'] . "</td>";
        echo "<td>" . $fila['distrito'] . "</td>";
        echo "<td>" . $fila['comentario']. "</td>";
        echo "<td>" . ($fila['cancelado'] ? 'Si' : 'No'). "</td>";
        echo "</tr>";
    }

    mysqli_close($conexion);
?>