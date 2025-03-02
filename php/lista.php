<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="website Icon" type="png" href="../img/Icon-MamaSarita.png">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <div class="container mt-5">
            <h1>Lista de Pedidos</h1>
            <table id="user-table" class="table mt-3">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>Cantidad de Pedidos</th>
                        <th>Tipo de Pedido</th>
                        <th>Dirección</th>
                        <th>Distrito</th>
                        <th>Comentario</th>
                        <th>Pedido Cancelado (Pagado)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include('mostrar_comentarios.php'); ?>
                </tbody>
            </table>

        </div>
    </section>
</body>
</html>