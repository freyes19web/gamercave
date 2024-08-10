<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: Index.php');
    exit();
}
?>


<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="GamerCave​">
    <meta name="description" content="">
    <title>Articulos</title>
    <link rel="stylesheet" href="css/nicepage2.css" media="screen">
  
    <script class="u-script" type="text/javascript" src="js/nicepage2.js" defer=""></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "SItePrivado"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Consolas">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Consolas.html" data-home-page-title="Consolas" data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-custom-color-4 u-header u-header" id="sec-3ec8" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">GamerCave </h2><!--shopping_cart-->
        <a class="u-shopping-cart u-shopping-cart-1" data-payment-service="{&quot;id&quot;:&quot;96f8120eb619a381007a3aeea0ed576f&quot;,&quot;formServices&quot;:[&quot;62dc23a8-d596-f0fa-505b-2f67dee3ceb3&quot;],&quot;paymentMethods&quot;:[],&quot;userToken&quot;:&quot;f3025364-4f31-438c-8093-f9b093d4a6e8&quot;}" href="#sec-05a5"><span class="u-icon u-shopping-cart-icon u-text-custom-color-2 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xlink:href="#svg-3195"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-3195"><path d="M14.5,3l-2.1,5H6.1L5.9,7.6L4,3H14.5 M0,0v1h2.1L5,8l-2,4h11v-1H4.6l1-2H13l3-7H3.6L2.8,0H0z M12.5,13
	c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5S13.3,13,12.5,13L12.5,13z M4.5,13C3.7,13,3,13.7,3,14.5S3.7,16,4.5,16
	S6,15.3,6,14.5S5.3,13,4.5,13L4.5,13z"></path></svg>
        <span class="u-custom-color-5 u-icon-circle u-shopping-cart-count" style="font-size: 0.75rem;"><!--shopping_cart_count-->0<!--/shopping_cart_count--></span>
    </span>
        </a><!--/shopping_cart-->
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-custom-color-2" href="InicioPrivado.php">Computadoras</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-custom-color-2" href="Consolas.php">Consolas</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-custom-color-2" href="Componentes.php">Componentes</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-custom-color-2" href="#">Perfil</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="#" id="logoutLink">Cerrar sesion</a>
</li></ul>
</div>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="InicioPrivado.php">Computadoras</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Consolas.php">Consolas</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Componentes.php">Componentes</a>
<li class="u-nav-item">
    <a class="u-button-style u-nav-link" href="#">Perfil</a>
    <div class="u-nav-popup">
        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
            <li class="u-nav-item">
                <a id="logoutLink2" class="u-button-style u-nav-link" href="#">Cerrar sesión</a>
            </li>
        </ul>
    </div>
</li>
</div>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>

</header>
<body>

<style>
/* Estilos específicos para el modal del carrito */
.cart-modal .modal-content {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.cart-modal .modal-header {
    background-color: #1b1447; /* Morado principal */
    color: #fff;
    border-bottom: none;
    padding: 15px 20px;
}

.cart-modal .modal-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #fff;
}

.cart-modal .btn-close {
    filter: invert(100%);
    font-size: 1.5rem;
}



.cart-modal .cart-item {
    padding: 12px 0;
    border-bottom: 1px solid #e0e0e0;
    font-size: 1rem;
    color: #333;
    display: flex;
    justify-content: space-between;
}

.cart-modal .cart-item:last-child {
    border-bottom: none;
}

.cart-modal #cartTotal {
    font-size: 1.25rem;
    font-weight: bold;
    color: #32e81d; /* Verde para el total */
}

.cart-modal .modal-footer {
    background-color: #f8f9fa; /* Fondo claro */
    border-top: 1px solid #e0e0e0;
    padding: 15px;
    text-align: right;
}

.cart-modal .btn-primary {
    background-color: #2ad516; /* Verde principal para botones */
    border-color: #2ad516;
}

.cart-modal .btn-primary:hover {
    background-color: #32e81d; /* Verde secundario al pasar el ratón */
    border-color: #32e81d;
}

.cart-modal .btn-secondary {
    background-color: #f1f1f1;
    border-color: #dcdcdc;
    color: #333;
}

.cart-modal .btn-secondary:hover {
    background-color: #e0e0e0;
    border-color: #bdbdbd;
}


#paymentModal .modal-dialog {
    z-index: 1050; /* Asegúrate de que la animación de pago se muestre encima de otros modales */
}

#paymentModal .modal-content {
    background-color: #2ad516;
    border: none;
}

#paymentModal .modal-body {
    padding: 2rem;
}

.spinner-border {
    width: 3rem;
    height: 3rem;
    border-width: .4em;
}

#successPaymentModal .modal-dialog {
   z-index: 2000;
   margin-top: 200px;
}

#successPaymentModal .modal-content {
    background-color: #2ad516; /* Verde para el éxito */
}

#successPaymentModal .modal-header .close {
    font-size: 1.5rem;
}

#successPaymentModal .modal-header .close {
    font-size: 1.5rem;
    color: white;
    opacity: 1; /* Asegúrate de que el botón sea visible */
}

#successPaymentModal .modal-header .close:hover {
    color: #f8f9fa; /* Cambiar color al pasar el mouse por encima */
}

.u-nav-popup {
    display: none; /* Ocultar por defecto */
    position: absolute;
    background: white; /* Ajusta según tu diseño */
    border: 1px solid #ddd;
    padding: 10px;
}

.u-nav-item:hover .u-nav-popup {
    display: block; /* Mostrar al pasar el mouse */
}




</style>
<!-- Modal del Carrito -->
<div class="modal fade cart-modal" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartModalLabel">Tu Carrito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="cartItemsContainer">
                    <!-- Los productos se agregarán aquí dinámicamente -->
                </div>
                <hr>
                <div class="text-end">
                    <strong id="cartTotal">Total: $0.00</strong>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="payButton">Proceder al Pago</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Procesando Pago -->
<div id="paymentModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Procesando...</span>
                </div>
                <p>Procesando el pago...</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Pago Exitoso -->
<div id="successPaymentModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-success text-white">
            <div class="modal-header">
                <h5 class="modal-title">Pago Realizado con Éxito</h5>
            </div>
        </div>
    </div>
</div>



    <!-- jQuery (versión completa) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS and dependencies -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
$(document).ready(function() {
    // Inicializar el contador de productos en el carrito y cargar el carrito desde el Local Storage
    updateCartCount();
    loadCart();

    // Función para guardar el carrito en el Local Storage
    function saveCart() {
        var cartItems = [];
        $('#cartItemsContainer .cart-item').each(function() {
            var item = {
                name: $(this).find('.item-name').text(),
                quantity: $(this).find('.item-quantity').text(),
                price: $(this).find('.item-price').text().replace('Total: $', '') // Asegúrate de limpiar el texto
            };
            cartItems.push(item);
        });
        localStorage.setItem('cart', JSON.stringify(cartItems));
        updateCartCount();
    }

    // Función para actualizar el número de productos en el carrito
    function updateCartCount() {
        var cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        var totalQuantity = 0;
        cartItems.forEach(function(item) {
            totalQuantity += parseInt(item.quantity);
        });
        $('.u-shopping-cart-count').text(totalQuantity);
    }

    // Función para cargar el carrito desde el Local Storage
    function loadCart() {
        var cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        var cartHtml = '';
        var total = 0;

        cartItems.forEach(function(item) {
            cartHtml += `
                <div class="cart-item">
                    <div class="item-name">${item.name}</div>
                    <div class="item-quantity">${item.quantity}</div>
                    <div class="item-price">Total: $${(parseFloat(item.price) * parseInt(item.quantity)).toFixed(2)}</div>
                </div>
            `;
            total += parseFloat(item.price) * parseInt(item.quantity);
        });

        $('#cartItemsContainer').html(cartHtml);
        $('#cartTotal').text('Total: $' + total.toFixed(2));
    }

    // Abre el modal del carrito cuando se hace clic en el ícono del carrito
    $('.u-shopping-cart-icon').click(function() {
        loadCart();
        $('#cartModal').modal('show');
    });

    // Cuando se hace clic en el botón de añadir al carrito en las cards
    $('.btn-add-to-cart').click(function() {
        var productId = $(this).data('id'); // Obtener el ID del producto

        // Realizar una solicitud AJAX para obtener los detalles del producto
        $.ajax({
            url: 'Conf/obtener_producto.php',
            type: 'GET',
            data: { id: productId },
            success: function(response) {
                var product = JSON.parse(response);

                // Asegurarse de que el precio es un número
                var precio = parseFloat(product.precio);

                // Actualizar el contenido del modal con los datos obtenidos
                $('#modalProductName').text(product.nombre_producto);
                $('#modalProductDescription').text(product.descripcion);
                $('#quantityInput').val(1);
                $('#modalProductPrice').text(precio.toFixed(2));
                $('#modalTotalPrice').text('Total: $' + precio.toFixed(2));

                // Establecer el precio del producto y la cantidad inicial
                $('#quantityInput').data('price', precio);

                // Mostrar el modal de añadir al carrito
                $('#addToCartModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error("Error al obtener los detalles del producto: " + error);
            }
        });
    });

    // Incrementar cantidad
    $('#increaseQuantity').click(function() {
        var quantity = parseInt($('#quantityInput').val());
        quantity++;
        $('#quantityInput').val(quantity);
        updateTotalPrice();
    });

    // Disminuir cantidad
    $('#decreaseQuantity').click(function() {
        var quantity = parseInt($('#quantityInput').val());
        if (quantity > 1) {
            quantity--;
            $('#quantityInput').val(quantity);
            updateTotalPrice();
        }
    });

    // Actualizar total cuando se cambia la cantidad
    $('#quantityInput').on('input', function() {
        updateTotalPrice();
    });

    // Actualizar el precio total
    function updateTotalPrice() {
        var quantity = parseInt($('#quantityInput').val());
        var price = $('#quantityInput').data('price');
        var total = quantity * price;
        $('#modalTotalPrice').text('Total: $' + total.toFixed(2));
    }

    // Cuando se hace clic en el botón de añadir al carrito
    $('#addToCartBtn').click(function() {
        var productName = $('#modalProductName').text();
        var quantity = $('#quantityInput').val();
        var totalPrice = $('#modalTotalPrice').text().replace('Total: $', '');

        // Añadir al carrito en el modal #cartModal
        var cartItemHtml = `
            <div class="cart-item">
                <div class="item-name">${productName}</div>
                <div class="item-quantity">${quantity}</div>
                <div class="item-price">Total: $${totalPrice}</div>
            </div>
        `;
        $('#cartItemsContainer').append(cartItemHtml);

        // Guardar el carrito en el Local Storage
        saveCart();

        // Cerrar el modal de añadir al carrito
        $('#addToCartModal').modal('hide');
    });

    // Cuando se hace clic en el botón de pagar
    $('#payButton').click(function() {
        var cartItems = [];
        $('#cartItemsContainer .cart-item').each(function() {
            var item = {
                name: $(this).find('.item-name').text(),
                quantity: $(this).find('.item-quantity').text(),
                price: $(this).find('.item-price').text().replace('Total: $', '') // Asegúrate de limpiar el texto
            };
            cartItems.push(item);
        });

        $('#cartModal').modal('hide');
        // Mostrar la animación de pago
        $('#paymentModal').modal('show');

        $.ajax({
            url: 'Conf/guardar_carrito.php',
            type: 'POST',
            data: { cartItems: cartItems },
            success: function(response) {
                // Mostrar el modal de animación de pago
                $('#paymentModal').modal('show');

                // Ocultar el modal de animación de pago después de 4 segundos
                setTimeout(function() {
                    $('#paymentModal').modal('hide'); // Ocultar la animación de pago

                    // Mostrar el modal de éxito
                    $('#successPaymentModal').modal('show');

                    // Ocultar el modal de éxito después de 2 segundos
                    setTimeout(function() {
                        $('#successPaymentModal').modal('hide'); // Cerrar el modal de éxito
                        // Limpiar el carrito y el Local Storage
                        localStorage.removeItem('cart');
                        $('#cartItemsContainer').empty();
                        $('#cartTotal').text('Total: $0.00');
                        updateCartCount();
                    }, 2000); // Esperar 2 segundos antes de ocultar el modal de éxito
                }, 4000); // Esperar 4 segundos antes de ocultar el modal de animación de pago
            },
            error: function(xhr, status, error) {
                $('#paymentModal').modal('hide'); // Ocultar la animación de pago
                console.error("Error al realizar el pago: " + error);
            }
        });

    });

});
</script>
<script>
$(document).ready(function() {
    $('#logoutLink, #logoutLink2').click(function(event) {
        event.preventDefault(); // Prevenir la acción por defecto del enlace

        $.ajax({
            url: 'Conf/cerrar_sesion.php',
            type: 'POST',
            dataType: 'json', // Esperar una respuesta en formato JSON
            success: function(response) {
                console.log("Respuesta del servidor:", response); // Registrar la respuesta completa
                if (response.success) {
                    window.location.href = 'Index.php'; // Redirigir a Index.php
                } else {
                    console.error("Error al cerrar sesión: " + (response.error || "Respuesta incorrecta"));
                }
            },
            error: function(xhr, status, error) {
                console.error("Error al cerrar sesión: " + error);
            }
        });
    });
});
</script>











</body>