<footer class="bg-dark text-light pt-4 mt-5">
    <section class="container">
        <section class="row">
            <section class="col-md-4">
                <h5 class="text-uppercase">Contáctenos</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt-fill"></i> Dirección: 12 Calle Central, DN, RD</li>
                    <li><i class="bi bi-envelope-fill"></i> Correo: saboresdelcielo@gmail.com</li>
                    <li><i class="bi bi-telephone-fill"></i> Teléfono: +1 829 512 1111</li>
                </ul>
            </section>
            <section class="col-md-4 offset-md-4">
                <h5 class="text-uppercase">Envíanos tus preguntas</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#questionModal">
                    Enviar Pregunta
                </button>
            </section>
        </section>
    </section>
</footer>
<!-- Modal para enviar preguntas -->
<section class="modal fade" id="questionModal" tabindex="-1" aria-labelledby="questionModalLabel" aria-hidden="true">
    <section class="modal-dialog">
        <section class="modal-content">
            <form id="questionForm" method="post">
                <section class="modal-header">
                    <h5 class="modal-title" id="questionModalLabel">Enviar Pregunta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </section>
                <section class="modal-body">
                    <section class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                        <section id="nombre-error" class="text-danger"></section>
                    </section>
                    <section class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                        <section id="apellido-error" class="text-danger"></section>
                    </section>
                    <section class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <section id="email-error" class="text-danger"></section>
                    </section>
                    <section class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                        <section id="telefono-error" class="text-danger"></section>
                    </section>
                    <section class="mb-3">
                        <label for="pregunta" class="form-label">Pregunta</label>
                        <textarea class="form-control" id="pregunta" name="pregunta" rows="3" required></textarea>
                        <section id="pregunta-error" class="text-danger"></section>
                    </section>
                    <!-- Mensaje de confirmación/error dentro del modal -->
                    <section id="questionResult" class="alert d-none" role="alert"></section>
                </section>
                <section class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" id="submitQuestion">Enviar</button>
                </section>
            </form>
        </section>
    </section>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iKJEe&R1AAwn8FZd425MRVoMpFntF1egFgTC" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
    function validarNombre() {
        var nombre = $('#nombre').val().trim();
        var nombreRegex = /^[A-Za-záéíóúñÑÁÉÍÓÚ\s]+$/;
        if (!nombreRegex.test(nombre)) {
            $('#nombre-error').text('El nombre no debe contener números ni caracteres especiales.');
            return false;
        } else {
            $('#nombre-error').text('');
            return true;
        }
    }

    function validarApellido() {
        var apellido = $('#apellido').val().trim();
        var apellidoRegex = /^[A-Za-záéíóúñÑÁÉÍÓÚ\s]+$/;
        if (!apellidoRegex.test(apellido)) {
            $('#apellido-error').text('El apellido no debe contener números ni caracteres especiales.');
            return false;
        } else {
            $('#apellido-error').text('');
            return true;
        }
    }

    function validarEmail() {
        var email = $('#email').val().trim();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            $('#email-error').text('Ingrese un correo electrónico válido.');
            return false;
        } else {
            $('#email-error').text('');
            return true;
        }
    }

    function validarTelefono() {
        var telefono = $('#telefono').val().trim();
        var telefonoRegex = /^[0-9]{10}$/; // Asumiendo que el teléfono es de 10 dígitos numéricos
        if (!telefonoRegex.test(telefono)) {
            $('#telefono-error').text('El teléfono debe contener 10 dígitos numéricos.');
            return false;
        } else {
            $('#telefono-error').text('');
            return true;
        }
    }

    function validarPregunta() {
        var pregunta = $('#pregunta').val().trim();
        if (pregunta === '') {
            $('#pregunta-error').text('La pregunta no puede estar vacía.');
            return false;
        } else {
            $('#pregunta-error').text('');
            return true;
        }
    }

    $('#nombre').on('input', function() {
        validarNombre();
    });

    $('#apellido').on('input', function() {
        validarApellido();
    });

    $('#email').on('input', function() {
        validarEmail();
    });

    $('#telefono').on('input', function() {
        validarTelefono();
    });

    $('#pregunta').on('input', function() {
        validarPregunta();
    });

    $('#questionForm').submit(function(e) {
        e.preventDefault();

        var nombreValido = validarNombre();
        var apellidoValido = validarApellido();
        var emailValido = validarEmail();
        var telefonoValido = validarTelefono();
        var preguntaValida = validarPregunta();

        if (nombreValido && apellidoValido && emailValido && telefonoValido && preguntaValida) {
            var formData = {
                nombre: $('#nombre').val(),
                apellido: $('#apellido').val(),
                email: $('#email').val(),
                telefono: $('#telefono').val(),
                pregunta: $('#pregunta').val()
            };

            $.ajax({
                type: 'POST',
                url: 'procesar_pregunta.php',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    var questionResult = $('#questionResult');
                    questionResult.removeClass('d-none').addClass('alert-' + response.type).text(response.message);

                    $('#nombre').val('');
                    $('#apellido').val('');
                    $('#email').val('');
                    $('#telefono').val('');
                    $('#pregunta').val('');

                    $('#questionModal').on('hidden.bs.modal', function() {
                        questionResult.addClass('d-none').removeClass('alert-' + response.type).text('');
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error en la solicitud AJAX: ' + errorThrown);
                    console.log('Respuesta del servidor: ' + jqXHR.responseText);
                    $('#questionResult').removeClass('d-none').addClass('alert-danger').text('Error al enviar la pregunta.');
                }
            });
        }
    });

    $('#questionModal .btn-close, #questionModal .btn-secondary').click(function() {
        var questionResult = $('#questionResult');
        questionResult.addClass('d-none').text('');
    });
});

</script>
