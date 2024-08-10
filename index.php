<?php include 'header.php'; ?>
<main>
<!-- Inicio de mi cuerpo -->


            <section class="container mt-1" id="platos" data-mdb-animation=" fade-in" data-mdb-trigger="scroll"
                data-mdb-duration="2000">
                <h2 class="text-dark display-4 fw-bold text-center" style="font-family: 'Playfair Display', serif;">
                    Descubre sobre nuestros platos</h2>
                <section class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                    <section class="col mb-4">
                        <section class="card h-100 shadow">
                            <img src="images/platofuerte1.jpg" class="img-tamano card-img-top" alt="...">
                            <section class="card-body">
                                <p class="card-text" style="font-family: 'Roboto', sans-serif;">Conquista tu paladar con
                                    la perfección de nuestro filete a la parrilla. Un deleite de jugosidad y exquisitez,
                                    coronado con una irresistible salsa de vino tinto.</p>
                            </section>
                        </section>
                    </section>
                    <section class="col mb-4">
                        <section class="card h-100 shadow">
                            <img src="images/exoticos.jpg" class="img-tamano card-img-top" alt="...">
                            <section class="card-body">
                                <p class="card-text" style="font-family: 'Roboto', sans-serif;">Para los más
                                    tradicionales: la tortilla española es una opción infalible, elaborada con huevos
                                    frescos, pan de pueblo y aguacate de temporada.</p>
                            </section>
                        </section>
                    </section>
                    <section class="col mb-4">
                        <section class="card h-100 shadow">
                            <img src="images/postre 1.jpg" class="img-tamano card-img-top" alt="...">
                            <section class="card-body">
                                <p class="card-text" style="font-family: 'Roboto', sans-serif;">Para los que buscan un
                                    desayuno o brunch especial: nuestros pancakes esponjosos te conquistarán con su
                                    textura suave y su sabor irresistible.</p>
                            </section>
                        </section>
                    </section>
                    <section class="col mb-4">
                        <section class="card h-100 shadow">
                            <img src="images/postre.jpg" class="img-tamano card-img-top" alt="...">
                            <section class="card-body">
                                <p class="card-text" style="font-family: 'Roboto', sans-serif;">Para los amantes del
                                    chocolate: nuestro pastel te hará sucumbir al placer con su intenso sabor a cacao y
                                    su corazón líquido y caliente.</p>
                            </section>
                        </section>
                    </section>
                </section>
            </section>


            <section class="container mt-3 fs-1" id="menu">
                <section class="accordion accordion-flush" id="accordionFlushMenu">
                    <h2 class="text-dark display-4 fw-bold text-center" style="font-family: 'Playfair Display', serif;">
                        Menu</h2>
                    <section class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingAppetizers">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseAppetizers" aria-expanded="false"
                                aria-controls="flush-collapseAppetizers">
                                Entradas
                            </button>
                        </h2>
                        <section id="flush-collapseAppetizers" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingAppetizers" data-bs-parent="#accordionFlushMenu">
                            <section class="accordion-body text-center">
                                <h3>Camarones Especiales</h3>
                                <img src="images/Variedad.jpg" alt="Camarones Especiales" class="menu-image">
                                <p>Deléitate con nuestra exquisita entrada de camarones. Cada camarón está perfectamente sazonado y cocinado a la perfección. Acompañado de una salsa especial que realza los sabores del mar. ¡Una explosión de frescura en cada bocado!</p>
                                <p class="text-success">Precio: $14.99</p>
            
                                <h3>Papas Supremas</h3>
                                <img src="images/papasupremas.webp" alt="Papas Supremas" class="menu-image">
                                <p>Otra entrada deliciosa con una combinación perfecta de sabores y texturas.</p>
                                <p class="text-success">Precio: $12.99</p>
                            </section>
                        </section>
                    </section>
            
                    <section class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingMainCourses">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseMainCourses" aria-expanded="false"
                                aria-controls="flush-collapseMainCourses">
                                Platos Principales
                            </button>
                        </h2>
                        <section id="flush-collapseMainCourses" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingMainCourses" data-bs-parent="#accordionFlushMenu">
                            <section class="accordion-body text-center">
                                <h3>Langosta Exquisita</h3>
                                <img src="images/langosta.jpg" alt="Langosta Exquisita" class="menu-image">
                                <p>Disfruta de nuestra langosta cuidadosamente preparada con los mejores ingredientes y sabores frescos del mar.</p>
                                <p class="text-success">Precio: $24.99</p>
            
                                <h3>Mofongo Delicioso</h3>
                                <img src="images/mofongo.jpg" alt="Mofongo Delicioso" class="menu-image">
                                <p>Una experiencia culinaria única con nuestro mofongo perfectamente sazonado y acompañado de sabores auténticos.</p>
                                <p class="text-success">Precio: $18.99</p>
                            </section>
                        </section>
                    </section>
                    <section class="accordion-item mb-2">
                        <h2 class="accordion-header" id="flush-headingDesserts">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseDesserts" aria-expanded="false"
                                aria-controls="flush-collapseDesserts">
                                Postres
                            </button>
                        </h2>
                        <section id="flush-collapseDesserts" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingDesserts" data-bs-parent="#accordionFlushMenu">
                            <section class="accordion-body text-center">
                                <h3>Cheesecake Irresistible</h3>
                                <img src="images/cheessecake.jpeg" alt="Cheesecake Irresistible" class="menu-image">
                                <p>Endulza tu paladar con nuestro cheesecake irresistible. Una combinación perfecta de cremosidad y sabor.</p>
                                <p class="text-success">Precio: $10.99</p>
            
                                <h3>Brownie Tentador</h3>
                                <img src="images/brownie.jpg" alt="Brownie Tentador" class="menu-image">
                                <p>Disfruta de nuestro brownie tentador con cada bocado. Textura suave y rica en cada porción.</p>
                                <p class="text-success">Precio: $8.99</p>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </main>

 <!-- Modal de Registro e Inicio de Sesión -->
<section class="modal fade" id="registerLoginModal" tabindex="-1" aria-labelledby="registerLoginModalLabel" aria-hidden="true">
    <section class="modal-dialog">
        <section class="modal-content">
            <section class="modal-header">
                <h5 class="modal-title" id="registerLoginModalLabel">Registrarse</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </section>
            <section class="modal-body">
                

                <section class="tab-content" id="myTabContent">
                    <section class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <form id="registerForm" action="procesar_registro.php" method="POST">
                            <section class="mb-3">
                                <label for="registerName" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="registerName" name="nombre" required>
                                <section id="nameError" class="invalid-feedback"></section>
                            </section>
                            <section class="mb-3">
                                <label for="registerEmail" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="registerEmail" name="email" required>
                                <section id="emailError" class="invalid-feedback"></section>
                            </section>
                            <section class="mb-3">
                                <label for="registerPassword" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="registerPassword" name="password" required>
                                <section id="passwordError" class="invalid-feedback"></section>
                            </section>
                            <section class="mb-3">
                                <label for="registerAddress" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="registerAddress" name="direccion" required>
                                <section id="direccionError" class="invalid-feedback"></section>
                            </section>
                            <section class="mb-3">
                                <label for="registerPhone" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="registerPhone" name="telefono" required>
                                <section id="telefonoError" class="invalid-feedback"></section>
                            </section>
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </form>
                        <!-- Mensaje de éxito -->
                        <section class="mt-3">
                            <section id="registerSuccessMessage" class="alert alert-success d-none"></section>
                        </section>
                        
                    </section>
                        
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>


    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Manejar el envío del formulario de registro
    $('#registerForm').submit(function(event) {
        event.preventDefault(); // Evitar el envío por defecto
        $('.invalid-feedback').text(''); // Limpiar mensajes de error anteriores
        $('.form-control').removeClass('is-invalid'); // Limpiar clases de error anteriores
        $('#registerSuccessMessage').addClass('d-none').text(''); // Limpiar mensaje de éxito

        // Obtener datos del formulario
        var nombre = $('#registerName').val();
        var email = $('#registerEmail').val();
        var password = $('#registerPassword').val();
        var direccion = $('#registerAddress').val();
        var telefono = $('#registerPhone').val();

        // Realizar la solicitud AJAX para registro
        $.ajax({
            type: 'POST',
            url: 'procesar_registro.php',
            data: {
                nombre: nombre,
                email: email,
                password: password,
                direccion: direccion,
                telefono: telefono
            },
            dataType: 'json',
            success: function(response) {
                if (response.type === 'success') {
                    $('#registerForm')[0].reset();
                    $('#registerSuccessMessage').removeClass('d-none').text(response.message);
                } else if (response.type === 'danger') {
                    switch(response.field) {
                        case 'nombre':
                            $('#registerName').addClass('is-invalid');
                            $('#nameError').text(response.message);
                            break;
                        case 'email':
                            $('#registerEmail').addClass('is-invalid');
                            $('#emailError').text(response.message);
                            break;
                        case 'password':
                            $('#registerPassword').addClass('is-invalid');
                            $('#passwordError').text(response.message);
                            break;
                        case 'direccion':
                            $('#registerAddress').addClass('is-invalid');
                            $('#direccionError').text(response.message);
                            break;
                        case 'telefono':
                            $('#registerPhone').addClass('is-invalid');
                            $('#telefonoError').text(response.message);
                            break;
                        default:
                            alert(response.message);
                            break;
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Error al procesar el registro. Por favor, inténtalo de nuevo.');
            }
        });
    });

    // Manejar el envío del formulario de inicio de sesión
    $('#loginForm').submit(function(event) {
        event.preventDefault(); // Evitar el envío por defecto
        $('.invalid-feedback').text(''); // Limpiar mensajes de error anteriores
        $('.form-control').removeClass('is-invalid'); // Limpiar clases de error anteriores
        $('#loginErrorMessage').addClass('d-none').text(''); // Limpiar mensaje de error

        // Obtener datos del formulario
        var email = $('#loginEmail').val();
        var password = $('#loginPassword').val();

        // Realizar la solicitud AJAX para inicio de sesión
        $.ajax({
            type: 'POST',
            url: 'procesar_sesion.php',
            data: {
                email: email,
                password: password
            },
            dataType: 'json',
            success: function(response) {
                if (response.type === 'success') {
                    window.location.href = 'ordenar.php'; // Redirigir a la página de ordenar
                } else if (response.type === 'danger') {
                    switch(response.field) {
                        case 'email':
                            $('#loginEmail').addClass('is-invalid');
                            $('#loginEmailError').text(response.message);
                            break;
                        case 'password':
                            $('#loginPassword').addClass('is-invalid');
                            $('#loginPasswordError').text(response.message);
                            break;
                        default:
                            alert(response.message);
                            break;
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Error al procesar el inicio de sesión. Por favor, inténtalo de nuevo.');
            }
        });
    });
});
</script>













<!-- Final del cuerpo-->
<?php include 'footer.php'; ?>