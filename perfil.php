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

<div id="perfilContainer" class="container mt-5">
    <h1 id="perfilTitle">Bienvenido al Panel de Usuario</h1>
    <p id="perfilSubtitle">Desde aquí puedes gestionar tus datos y configuraciones.</p>
</div>
<section id="perfilSection" class="container my-5">
    <div class="row">
        <!-- Perfil del Usuario -->
        <div id="perfilUsuario" class="col-md-4 text-center">
            <img id="perfilImagen" src="images/1gratuito.jpg" class="rounded-circle img-fluid" alt="Foto del Usuario">
            <h2 id="perfilNombre"><?php echo htmlspecialchars($_SESSION['user_Nickname']); ?></h2>
        </div>
        <!-- Menú de Opciones -->
        <div class="col-md-8">
            <h3 id="perfilOpcionesTitle">Opciones de Perfil</h3>
            <ul id="perfilOpcionesLista" class="list-group">
                <li class="list-group-item">
                    <a href="#cambiarNombre" class="perfilOpcionLink" data-toggle="modal" data-target="#cambiarNombre">Cambiar Nickname</a>
                </li>
                <li class="list-group-item">
                    <a href="#cambiarCorreo" class="perfilOpcionLink" data-toggle="modal" data-target="#cambiarCorreo">Cambiar Correo Electrónico</a>
                </li>
                <li class="list-group-item">
                    <a href="#cambiarPassword" class="perfilOpcionLink" data-toggle="modal" data-target="#cambiarPassword">Cambiar Contraseña</a>
                </ul>
            </div>
        </div>
    </section>

    <!-- Modales -->
    <!-- Modal Cambiar Nombre -->
    <div class="modal fade" id="cambiarNombre" tabindex="-1" role="dialog" aria-labelledby="cambiarNombreLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cambiarNombreLabel">Cambiar Nickname</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formCambioNombre">
                        <div class="form-group">
                            <label for="nuevoNombre">Nuevo Nickname</label>
                            <input type="text" class="form-control" id="nuevoNombre" name="nuevoNombre" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <div id="mensajeNombre" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal Cambiar Correo -->
    <div class="modal fade" id="cambiarCorreo" tabindex="-1" role="dialog" aria-labelledby="cambiarCorreoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cambiarCorreoLabel">Cambiar Correo Electrónico</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formCambioCorreo">
                        <div class="form-group">
                            <label for="nuevoCorreo">Nuevo Correo Electrónico</label>
                            <input type="email" class="form-control" id="nuevoCorreo" name="nuevoCorreo" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <div id="mensajeCorreo" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Cambiar Contraseña -->
    <div class="modal fade" id="cambiarPassword" tabindex="-1" role="dialog" aria-labelledby="cambiarPasswordLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cambiarPasswordLabel">Cambiar Contraseña</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formCambioPassword">
                        <div class="form-group">
                            <label for="nuevoPassword">Nueva Contraseña</label>
                            <input type="password" class="form-control" id="nuevoPassword" name="nuevoPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <div id="mensajePassword" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script>
    $(document).ready(function() {
        function handleFormSubmit(formId, url, messageId) {
            $(formId).on("submit", function(event) {
                event.preventDefault();
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $(messageId).html('<div class="alert alert-success">' + response + '</div>');
                        $(formId)[0].reset(); // Limpiar el formulario
                        setTimeout(function() {
                            $(messageId).empty(); // Eliminar el mensaje de éxito
                        }, 1500);
                    },
                    error: function(xhr, status, error) {
                        $(messageId).html('<div class="alert alert-danger">Error: ' + error + '</div>');
                    }
                });
            });
        }

        handleFormSubmit("#formCambioNombre", 'Conf/procesar_cambio_nombre.php', "#mensajeNombre");
        handleFormSubmit("#formCambioCorreo", 'Conf/procesar_cambio_correo.php', "#mensajeCorreo");
        handleFormSubmit("#formCambioPassword", 'Conf/procesar_cambio_password.php', "#mensajePassword");
    });
</script>



<!--Final del contenido-->
<?php 
	include_once("Pie.php");
?>