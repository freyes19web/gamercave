<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pedido - Sabores del Cielo</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <style>
        #carrito-flotante {
            position: fixed;
            top: 20px;
            right: 20px;
            width: 300px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 10px;
            z-index: 10;
        }

        #carrito-flotante h4 {
            margin-top: 0;
        }

        #carrito-flotante ul {
            list-style: none;
            padding: 0;
        }

        #carrito-flotante ul li {
            margin-bottom: 10px;
        }

        #carrito-flotante .btn {
            width: 100%;
        }
    </style>
</head>
<body class="font-monospace mt-2">
<div class="container mt-5">
    <h1 class="text-center mb-5">Realizar Pedido</h1>
    <form id="form-pedido" method="post">
        <div class="form-group">
            <label for="nombre">Nombre del Cliente:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <span id="nombre-error" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
            <span id="direccion-error" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
            <span id="telefono-error" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <span id="email-error" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label for="plato">Plato:</label>
            <select class="form-control" id="plato" name="plato" required>
                <option value="Camarones Especiales">Camarones Especiales</option>
                <option value="Papas Supremas">Papas Supremas</option>
                <option value="Langosta Exquisita">Langosta Exquisita</option>
                <option value="Mofongo Delicioso">Mofongo Delicioso</option>
                <option value="Cheesecake Irresistible">Cheesecake Irresistible</option>
                <option value="Brownie Tentador">Brownie Tentador</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
            <span id="cantidad-error" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label for="comentarios">Comentarios:</label>
            <textarea class="form-control" id="comentarios" name="comentarios" rows="3"></textarea>
        </div>
        <button type="button" id="add-to-cart" class="btn btn-primary">Añadir al Carrito</button>
    </form>
</div>

<!-- Carrito flotante -->
<div id="floating-cart" class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050;">
    <div class="bg-light rounded border shadow-sm p-2">
        <h5 class="mb-0">Carrito de Compras</h5>
        <ul id="cart-items" class="list-unstyled mt-3">
            <!-- Los productos añadidos se mostrarán aquí -->
        </ul>
        <button id="checkout-btn" class="btn btn-primary btn-block mt-3">Pagar</button>
    </div>
</div>

<!-- Modal de éxito -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Éxito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Mensaje de éxito o contenido que deseas mostrar.
            </div>
        </div>
    </div>
</div>




<script>
    $(document).ready(function() {
        // Función para cerrar el modal al hacer clic en el botón de "Cerrar" o la "x"
        $('#successModal').on('hidden.bs.modal', function () {
        // Limpiar el contenido del modal si es necesario
            $(this).find('.modal-body').empty();
        });
        $('#successModal .close').click(function() {
            $('#successModal').modal('hide');
        });
            // Manejar clic en el botón "Cerrar" del modal
        $('#successModal').on('hidden.bs.modal', function () {
            $('#successModal .modal-body').text(''); // Limpiar contenido del modal
        });
        // Función para validar el nombre
        function validarNombre() {
            var nombre = $('#nombre').val();
            var nombreRegex = /^[A-Za-záéíóúñÑÁÉÍÓÚ\s]+$/; // Expresión regular para permitir solo letras y espacios

            if (!nombreRegex.test(nombre)) {
                $('#nombre-error').text('El nombre no debe contener números ni caracteres especiales.');
                return false;
            } else {
                $('#nombre-error').text('');
                return true;
            }
        }

        // Función para validar el teléfono
        function validarTelefono() {
            var telefono = $('#telefono').val();
            var telefonoRegex = /^[0-9]{10}$/; // Expresión regular para un número de teléfono de 10 dígitos

            if (!telefonoRegex.test(telefono)) {
                $('#telefono-error').text('El teléfono debe contener 10 dígitos numéricos.');
                return false;
            } else {
                $('#telefono-error').text('');
                return true;
            }
        }

        // Función para validar el correo electrónico
        function validarEmail() {
            var email = $('#email').val();
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Expresión regular para validar correo electrónico

            if (!emailRegex.test(email)) {
                $('#email-error').text('Ingrese un correo electrónico válido.');
                return false;
            } else {
                $('#email-error').text('');
                return true;
            }
        }

        // Función para validar la cantidad
        function validarCantidad() {
            var cantidad = $('#cantidad').val();

            if (cantidad <= 0) {
                $('#cantidad-error').text('La cantidad debe ser mayor que cero.');
                return false;
            } else {
                $('#cantidad-error').text('');
                return true;
            }
        }

        // Validar al cambiar el contenido del campo nombre
        $('#nombre').on('input', function() {
            validarNombre();
        });

        // Validar al cambiar el contenido del campo teléfono
        $('#telefono').on('input', function() {
            validarTelefono();
        });

        // Validar al cambiar el contenido del campo correo electrónico
        $('#email').on('input', function() {
            validarEmail();
        });

        // Validar al cambiar el contenido del campo cantidad
        $('#cantidad').on('input', function() {
            validarCantidad();
        });

        // Validar al enviar el formulario
        $('#form-pedido').submit(function(e) {
            var nombreValido = validarNombre();
            var telefonoValido = validarTelefono();
            var emailValido = validarEmail();
            var cantidadValida = validarCantidad();

            if (!nombreValido || !telefonoValido || !emailValido || !cantidadValida) {
                e.preventDefault(); // Evita que se envíe el formulario si la validación falla
            }
        });

        // Manejar clic en "Añadir al Carrito"
        $('#add-to-cart').click(function() {
            var nombreValido = validarNombre();
            var telefonoValido = validarTelefono();
            var emailValido = validarEmail();
            var cantidadValida = validarCantidad();

            if (nombreValido && telefonoValido && emailValido && cantidadValida) {
                var formData = {
                    nombre: $('#nombre').val(),
                    direccion: $('#direccion').val(),
                    telefono: $('#telefono').val(),
                    email: $('#email').val(),
                    plato: $('#plato').val(),
                    cantidad: $('#cantidad').val(),
                    comentarios: $('#comentarios').val()
                };

                // Envío de datos al carrito
                $.ajax({
                    type: 'POST',
                    url: 'procesar_carrito.php',
                    data: formData,
                    dataType: 'json', // Esperamos una respuesta JSON del servidor
                    success: function(response) {
                        if (response.success) {
                            // Agregar el producto al carrito mostrando los detalles
                            var itemHTML = '<li>' + response.item.cantidad + ' x ' + response.item.plato + '</li>';
                            $('#cart-items').append(itemHTML);
                            $('#successModal .modal-body').text('Producto añadido al carrito correctamente.');
                            $('#successModal').modal('show');
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Error al añadir al carrito: ' + response.message
                            });
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('Error en la solicitud AJAX: ' + errorThrown);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error al añadir al carrito.'
                        });
                    }
                });
            }
        });

        // Manejar clic en "Pagar"
        $('#checkout-btn').click(function() {
            var formData = {
                nombre: $('#nombre').val(),
                direccion: $('#direccion').val(),
                telefono: $('#telefono').val(),
                email: $('#email').val(),
                plato: $('#plato').val(),
                cantidad: $('#cantidad').val()
            };

            $.ajax({
                type: 'POST',
                url: 'procesar_pedido.php',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#successModal .modal-body').text('¡Pedido guardado correctamente!');
                        $('#successModal').modal('show');
                        $('#form-pedido')[0].reset(); // Opcional: limpiar el formulario después de pagar
                        $('#cart-items').empty(); // Opcional: limpiar el carrito después de pagar
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error al guardar el pedido: ' + response.message
                        });
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error en la solicitud AJAX: ' + errorThrown);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Error al procesar el pedido.'
                    });
                }
            });
        });
    });
</script>
</body>
</html>




<?php include 'footer.php'; ?>
