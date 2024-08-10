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

<section class="container my-5">
    <h1 class="text-center mb-5">Catálogo de Cursos</h1>
        <div class="row">
            <!-- Curso 1 -->
            <div class="col-md-4 mb-4">
                <div class="card curso-card h-100">
                    <img src="images/curso1.jpg" class="card-img-top curso-img-top" alt="Curso 1">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title curso-title">Curso de React</h5>
                        <p class="card-text curso-text">Aprende a construir aplicaciones web con React.</p>
                        <div class="mt-2">
                            <label for="fecha-curso1">Fecha:</label>
                            <input type="date" id="fecha-curso1" class="form-control mb-2">
                            <div class="invalid-feedback d-none" id="fecha-curso1-error"></div>
                        </div>
                        <div class="mt-auto">
                            <button class="btn btn-agendar btn-block" data-curso="Curso de React" data-error-id="error-fecha-curso1" data-success-id="success-curso1">Agendar</button>
                            <div id="success-curso1" class="alert alert-success d-none mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Curso 2 -->
            <div class="col-md-4 mb-4">
                <div class="card curso-card h-100">
                    <img src="images/curso2.jpg" class="card-img-top curso-img-top" alt="Curso 2">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title curso-title">Curso de Angular</h5>
                        <p class="card-text curso-text">Domina el framework Angular para crear SPA.</p>
                        <div class="mt-2">
                            <label for="fecha-curso2">Fecha:</label>
                            <input type="date" id="fecha-curso2" class="form-control mb-2">
                            <div class="invalid-feedback d-none" id="fecha-curso2-error"></div>
                        </div>
                        <div class="mt-auto">
                            <button class="btn btn-agendar btn-block" data-curso="Curso de Angular" data-error-id="error-fecha-curso2" data-success-id="success-curso2">Agendar</button>
                            <div id="success-curso2" class="alert alert-success d-none mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Curso 3 -->
            <div class="col-md-4 mb-4">
                <div class="card curso-card h-100">
                    <img src="images/curso3.jpg" class="card-img-top curso-img-top" alt="Curso 3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title curso-title">Curso de Vue.js</h5>
                        <p class="card-text curso-text">Crea interfaces web interactivas con Vue.js.</p>
                        <div class="mt-2">
                            <label for="fecha-curso3">Fecha:</label>
                            <input type="date" id="fecha-curso3" class="form-control mb-2">
                            <div class="invalid-feedback d-none" id="fecha-curso3-error"></div>
                        </div>
                        <div class="mt-auto">
                            <button class="btn btn-agendar btn-block" data-curso="Curso de Vue.js" data-error-id="error-fecha-curso3" data-success-id="success-curso3">Agendar</button>
                            <div id="success-curso3" class="alert alert-success d-none mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Curso 4 -->
            <div class="col-md-4 mb-4">
                <div class="card curso-card h-100">
                    <img src="images/curso4.jpg" class="card-img-top curso-img-top" alt="Curso 4">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title curso-title">Curso de Node.js</h5>
                        <p class="card-text curso-text">Desarrolla aplicaciones backend con Node.js.</p>
                        <div class="mt-2">
                            <label for="fecha-curso4">Fecha:</label>
                            <input type="date" id="fecha-curso4" class="form-control mb-2">
                            <div class="invalid-feedback d-none" id="fecha-curso4-error"></div>
                        </div>
                        <div class="mt-auto">
                            <button class="btn btn-agendar btn-block" data-curso="Curso de Node.js" data-error-id="error-fecha-curso4" data-success-id="success-curso4">Agendar</button>
                            <div id="success-curso4" class="alert alert-success d-none mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Curso 5 -->
            <div class="col-md-4 mb-4">
                <div class="card curso-card h-100">
                    <img src="images/curso5.jpg" class="card-img-top curso-img-top" alt="Curso 5">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title curso-title">Curso de Django</h5>
                        <p class="card-text curso-text">Crea aplicaciones web rápidas y seguras con Django.</p>
                        <div class="mt-2">
                            <label for="fecha-curso5">Fecha:</label>
                            <input type="date" id="fecha-curso5" class="form-control mb-2">
                            <div class="invalid-feedback d-none" id="fecha-curso5-error"></div>
                        </div>
                        <div class="mt-auto">
                            <button class="btn btn-agendar btn-block" data-curso="Curso de Django" data-error-id="error-fecha-curso5" data-success-id="success-curso5">Agendar</button>
                            <div id="success-curso5" class="alert alert-success d-none mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Curso 6 -->
            <div class="col-md-4 mb-4">
                <div class="card curso-card h-100">
                    <img src="images/curso6.jpg" class="card-img-top curso-img-top" alt="Curso 6">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title curso-title">Curso de Laravel</h5>
                        <p class="card-text curso-text">Desarrolla aplicaciones web con el framework Laravel.</p>
                        <div class="mt-2">
                            <label for="fecha-curso6">Fecha:</label>
                            <input type="date" id="fecha-curso6" class="form-control mb-2">
                            <div class="invalid-feedback d-none" id="fecha-curso6-error"></div>
                        </div>
                        <div class="mt-auto">
                            <button class="btn btn-agendar btn-block" data-curso="Curso de Laravel" data-error-id="error-fecha-curso6" data-success-id="success-curso6">Agendar</button>
                            <div id="success-curso6" class="alert alert-success d-none mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
    $(document).ready(function() {
    $('.btn-agendar').click(function(e) {
        e.preventDefault();

        var curso = $(this).data('curso');
        var fecha = $(this).closest('.card-body').find('input[type="date"]').val();
        var errorId = $(this).data('error-id');
        var successId = $(this).data('success-id');

        // Limpiar mensajes anteriores
        $('.invalid-feedback').addClass('d-none');
        $('.alert-success').addClass('d-none');

        // Validar fecha
        if (fecha === '') {
            $('#' + errorId).text('Por favor, selecciona una fecha.').removeClass('d-none');
            return;
        }

        // Enviar los datos al servidor mediante AJAX
        $.ajax({
            url: 'Conf/procesar_cursos.php',
            type: 'POST',
            data: {
                curso: curso,
                fecha: fecha
            },
            success: function(response) {
                console.log(response); // Para depuración

                if (response.type === 'success') {
                    $('#' + successId).text('Curso agendado con éxito.').removeClass('d-none');
                    
                    // Limpiar el campo de fecha y el mensaje de éxito después de 3 segundos
                    $('#' + successId).delay(1500).queue(function(next) {
                        $(this).addClass('d-none');
                        $('#' + errorId).text('').addClass('d-none');
                        $(this).closest('.card-body').find('input[type="date"]').val('');
                        next();
                    });
                } else {
                    $('#' + errorId).text(response.message).removeClass('d-none');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Para depuración
                alert('Hubo un error al agendar el curso.');
            }
        });
    });
});



</script>





<!--Final del contenido-->
<?php 
	include_once("Pie.php");
?>