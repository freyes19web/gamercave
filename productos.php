<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php'); // Redirige al usuario a la página de inicio de sesión si no está logueado
    exit();
}
?>

<?php 
	include_once("headerprivado.php");
?>

 <!-- Catálogo de Productos -->
 <section class="container my-5">
        <h1 class="text-center mb-5">Catálogo de Productos</h1>
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="images/producto1.jpg" class="card-img-top" alt="Producto 1">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Diseño Web Personalizado</h5>
                    <p class="card-text">Crea un sitio web único y personalizado para tu negocio.</p>
                    <div class="mt-auto">
                        <button class="btn btn-primary btn-block add-to-cart" data-product="Diseño Web Personalizado">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
        </div>
            <!-- Producto 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="images/producto2.jpg" class="card-img-top" alt="Producto 2">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">SEO y Marketing Digital</h5>
                        <p class="card-text">Optimiza tu sitio web para motores de búsqueda y aumenta tu visibilidad.</p>
                        <div class="mt-auto">
                            <button class="btn btn-primary btn-block add-to-cart" data-product="SEO y Marketing Digital">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="images/producto3.jpg" class="card-img-top" alt="Producto 3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Tienda en Línea</h5>
                        <p class="card-text">Lanza tu tienda en línea y empieza a vender tus productos hoy mismo.</p>
                        <div class="mt-auto">
                            <button class="btn btn-primary btn-block add-to-cart" data-product="Tienda en Línea">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="images/producto4.jpg" class="card-img-top" alt="Producto 4">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Mantenimiento de Sitio Web</h5>
                        <p class="card-text">Servicio completo de mantenimiento y soporte para tu sitio web.</p>
                        <div class="mt-auto">
                            <button class="btn btn-primary btn-block add-to-cart" data-product="Mantenimiento de Sitio Web">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Producto 5 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="images/producto5.jpg" class="card-img-top" alt="Producto 5">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Gestión de Redes Sociales</h5>
                        <p class="card-text">Mejora tu presencia en redes sociales con nuestra gestión profesional.</p>
                        <div class="mt-auto">
                            <button class="btn btn-primary btn-block add-to-cart" data-product="Gestión de Redes Sociales">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Producto 6 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="images/producto6.jpg" class="card-img-top" alt="Producto 6">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Consultoría Tecnológica</h5>
                        <p class="card-text">Obtén asesoría experta en tecnología para tu negocio.</p>
                        <div class="mt-auto">
                            <button class="btn btn-primary btn-block add-to-cart" data-product="Consultoría Tecnológica">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
	include_once("carrito.php");
?>
<script>
    $(document).ready(function() {
        // Manejar clic en "Añadir al Carrito"
        $('.btn-primary').click(function() {
            var $button = $(this);
            var productName = $button.closest('.card').find('.card-title').text();

            // Deshabilitar el botón para evitar clics múltiples
            $button.prop('disabled', true);

            // Envío de datos al carrito
            $.ajax({
                type: 'POST',
                url: 'Conf/agregar_al_carrito.php',
                data: {
                    producto: productName
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Verifica si el producto ya está en el carrito antes de agregarlo
                        var itemHTML = '<li>' + response.item.producto + '</li>';
                        if ($('#cart-items li:contains(' + response.item.producto + ')').length === 0) {
                            $('#cart-items').append(itemHTML);
                        }
                        $('#successModal .modal-body').text('Producto añadido al carrito correctamente.');
                        $('#successModal').modal('show');
                    } else {
                        $('#successModal .modal-body').text('Error al añadir al carrito: ' + response.message);
                        $('#successModal').modal('show');
                    }
                    // Habilitar el botón de nuevo
                    $button.prop('disabled', false);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error en la solicitud AJAX: ' + errorThrown);
                    $('#successModal .modal-body').text('Error al añadir al carrito.');
                    $('#successModal').modal('show');
                    // Habilitar el botón de nuevo
                    $button.prop('disabled', false);
                }
            });
        });

        // Manejar clic en "Pagar"
        $('#checkout-btn').click(function() {
            // Obtener los productos en el carrito
            var cartItems = [];
            $('#cart-items li').each(function() {
                cartItems.push($(this).text());
            });

            if (cartItems.length > 0) {
                $.ajax({
                    url: 'Conf/procesar_carrito.php',
                    method: 'POST',
                    data: {
                        productos: cartItems
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#cart-items').empty();
                            $('#successModal .modal-body').text('Compra realizada con éxito.');
                            $('#successModal').modal('show');
                        } else {
                            $('#successModal .modal-body').text('Error al procesar la compra.');
                            $('#successModal').modal('show');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('Error en la solicitud AJAX: ' + errorThrown);
                        $('#successModal .modal-body').text('Error en la conexión con el servidor.');
                        $('#successModal').modal('show');
                    }
                });
            } else {
                $('#successModal .modal-body').text('El carrito está vacío.');
                $('#successModal').modal('show');
            }
        });
    });



</script>

<!--Final del contenido-->
<?php 
	include_once("Pie.php");
?>