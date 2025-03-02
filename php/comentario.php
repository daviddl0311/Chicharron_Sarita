<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicharronería Mamá Sarita</title>
    <link rel="website Icon" type="png" href="../img/Icon-MamaSarita.png">
    <link rel="stylesheet" href="../css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../js/js.js"></script>
</head>
<body>
    <section class="container comentario">
        <article>
            <h3 class="tittle fw-bold center padding">¿HAMBRE YA? ¡ORDENE AHORA!</h3>
            <form method="post" action="agregar_comentario.php" onsubmit="mostrarMensaje()">
                <div class="mb-3 row g-3">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Nombre(s)" id="nombre" name="nombre" aria-label="First name" required>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Apellido(s)" id="apellido" name="apellido" aria-label="Last name" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telefono exampleInputEmail1" class="form-label">Teléfono</label>
                    <input type="number" id="telefono" name="telefono" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="pedidos exampleInputEmail1" class="form-label">Cantidad de Pedidos</label>
                    <input type="number" id="pedidos" name="pedidos" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="t_pedido" class="form-label">Indicación del Pedido</label>
                    <select class="form-select" aria-label="Default select example" name="t_pedido" id="t_pedido" required>
                        <option selected disabled>...</option>
                        <option value="Delivery">Delivery (El envío es gratis)</option>
                        <option value="Recoger">Recoger (Lo podra recoger en la dirección compartida)</option>
                    </select>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6 mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>
                    <div class="col-md-6">
                        <label for="distrito" class="form-label">Distrito</label>
                        <select  class="form-select" name="distrito" id="distrito" required>
                          <option selected disabled>...</option>
                          <option>Ancón</option>
                          <option>Ate</option>
                          <option>Barranco</option>
                          <option>Breña</option>
                          <option>Carabayllo</option>
                          <option>Cercado de Lima</option>
                          <option>Chaclacayo</option>
                          <option>Chorrillos</option>
                          <option>Cieneguilla</option>
                          <option>Comas</option>
                          <option>El agustino</option>
                          <option>Independencia</option>
                          <option>Jesús María</option>
                          <option>La Molina</option>
                          <option>La Victoria</option>
                          <option>Lince</option>
                          <option>Los Olivos</option>
                          <option>Lurigancho</option>
                          <option>Lurín</option>
                          <option>Magdalena del mar</option>
                          <option>Miraflores</option>
                          <option>Pachacámac</option>
                          <option>Pucusana</option>
                          <option>Pueblo libre</option>
                          <option>Puente piedra</option>
                          <option>Punta hermosa</option>
                          <option>Punta hermosa</option>
                          <option>Rímac</option>
                          <option>San Bartolo</option>
                          <option>San Borja</option>
                          <option>San Isidro</option>
                          <option>San Juan de Lurigancho</option>
                          <option>San Juan de Miraflores</option>
                          <option>San Luis</option>
                          <option>San Martin de Porres</option>
                          <option>San Miguel</option>
                          <option>Santa Anita</option>
                          <option>Santa María del Mar</option>
                          <option>Santa Rosa</option>
                          <option>Santiago de Surco</option>
                          <option>Surquillo</option>
                          <option>Villa el Salvador</option>
                          <option>Villa Maria del Triunfo</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="comentario exampleFormControlTextarea1" class="form-label">Comentario</label>
                    <textarea id="comentario" name="comentario" placeholder="¿Algo que añadir? (Opcional)" class="form-control" rows="3"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit" id="enviar">ENVIAR</button>
                </div>
                <div class="padding center">
                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="../index.html">Volver a Inicio</a>
                </div>
            </form>
        </article>
    </section>

    <script>
        function mostrarMensaje() {
            alert("¡Hemos recibido y registrado tu pedido exitosamente!");
        }
    </script>

</body>
</html>