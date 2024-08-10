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

<section class="container help-container">
    <h2>Centro de Ayuda</h2>
    <form enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre Completo</label>
                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre completo" value="<?php echo htmlspecialchars($_SESSION['user_NombreCompleto']); ?>" readonly>
                <div class="invalid-feedback" id="nombreError"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="correo">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" placeholder="Tu correo electrónico" value="<?php echo htmlspecialchars($_SESSION['user_email']); ?>" readonly>
                <div class="invalid-feedback" id="correoError"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="asunto">Asunto</label>
            <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto de tu consulta" required>
            <div class="invalid-feedback" id="asuntoError"></div>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu pregunta o duda aquí" required></textarea>
            <div class="invalid-feedback" id="mensajeError"></div>
        </div>
        <div class="form-group">
            <label for="archivo">Adjuntar Archivo (opcional)</label>
            <div class="file-input-container">
                <label for="archivo" class="file-input-label">Selecciona un archivo</label>
                <input type="file" id="archivo" name="archivo">
                <div class="invalid-feedback" id="archivoError"></div>
            </div>
        </div>
        <button type="submit" class="btn btn-submit btn-block">Enviar Consulta</button>
    </form>
    <!-- Mensaje de éxito -->
    <section class="mt-3">
        <div id="registerSuccessMessage" class="alert alert-success d-none"></div>
    </section>
</section>


<script>
   $(document).ready(function() {
    $('form').on('submit', function(event) {
        event.preventDefault(); // Evitar el envío tradicional del formulario
        $('.invalid-feedback').text(''); // Limpiar mensajes de error anteriores
        $('.form-control').removeClass('is-invalid'); // Limpiar clases de error anteriores
        $('#registerSuccessMessage').addClass('d-none').text(''); // Limpiar mensaje de éxito

        // Crear un objeto FormData para manejar archivos
        let formData = new FormData(this);

         // Enviar los datos mediante AJAX
         $.ajax({
            url: 'Conf/procesar_soporte.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                // Manejar la respuesta del servidor
                if (response.type === 'success') {
                    $('#registerSuccessMessage').text(response.message).removeClass('d-none');
                    // Limpiar el formulario
                    $('form')[0].reset();
                } else {
                    // Mostrar mensajes de error
                    switch (response.field) {
                        case 'nombre':
                            $('#nombre').addClass('is-invalid');
                            $('#nombreError').text(response.message);
                            break;
                        case 'correo':
                            $('#correo').addClass('is-invalid');
                            $('#correoError').text(response.message);
                            break;
                        case 'asunto':
                            $('#asunto').addClass('is-invalid');
                            $('#asuntoError').text(response.message);
                            break;
                        case 'mensaje':
                            $('#mensaje').addClass('is-invalid');
                            $('#mensajeError').text(response.message);
                            break;
                        case 'archivo':
                            $('#archivo').addClass('is-invalid');
                            $('#archivoError').text(response.message);
                            break;
                        default:
                            alert(response.message);
                            break;
                    }
                }
            },
            error: function() {
                alert('Error al enviar el formulario. Inténtalo de nuevo.');
            }
        });
    });
});

</script>

    


<!--Final del contenido-->
<?php 
	include_once("Pie.php");
?>