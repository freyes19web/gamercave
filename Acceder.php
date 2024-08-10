<?php include 'headerpublico.php'; ?>
<head>
  <link rel="stylesheet" href="css/Acceder.css" media="screen">

</head>
<!DOCTYPE html>
<style>
    /* Estilos generales */
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #2ad516;
      color: #ffffff;
    }
    .btn-primary {
      background-color: #32e81d;
      border-color: #32e81d;
    }
    .btn-primary:hover {
      background-color: #2ad516;
      border-color: #2ad516;
    }
    .text-primary {
      color: white !important;
    }
    .text-color-primary {
      color: #5338ec;
    }
    .text-large {
      font-size: 2.8rem;
      font-weight: bold;
      text-align: center;
      color: white;
    }
    .text-small {
      font-size: 2.3rem;
      text-align: center;
    }
    .m-20 {
      margin-top: 20px;
    }
    .bg-light-custom {
      background: linear-gradient(135deg, #1b1447 0%, #1f8e00 100%);
    }
    /* Estilo del modal */
    .modal-content {
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      overflow: hidden;
    }
    .modal-header {
      background-color: #1b1447;
      color: #ffffff;
      border-bottom: none;
      padding: 1rem 1.5rem;
    }
    .modal-body {
      background-color: #f8f9fa;
      padding: 2rem;
    }
    .modal-title {
      font-size: 1.5rem;
      font-weight: 600;
    }
    .btn-close {
      background-color: transparent;
      border: none;
      color: #ffffff;
      font-size: 1.5rem;
    }
    /* Estilo para el texto centrado en la sección de inicio de sesión */
    .text-center-custom {
      text-align: center;
    }
  </style>
</head>
<body>

<!-- Sección de Registro -->
<section class="py-5 bg-light-custom" id="sec-d315">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="card border-primary shadow">
          <div class="card-header text-center">
            <h4>Registro</h4>
          </div>
          <div class="card-body">
            <form id="registerForm" enctype="multipart/form-data" method="POST">
              <div class="mb-3">
                <label for="registerFullName" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="registerFullName" name="nombre_completo" placeholder="Introduzca su nombre" required>
                <div class="invalid-feedback" id="registerFullNameError"></div>
              </div>
              <div class="mb-3">
                <label for="registerEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="registerEmail" name="correo_electronico" placeholder="Introduzca una dirección de correo electrónico válida" required>
                <div class="invalid-feedback" id="registerEmailError"></div>
              </div>
              <div class="mb-3">
                <label for="registerNickname" class="form-label">Nickname</label>
                <input type="text" class="form-control" id="registerNickname" name="nickname" placeholder="Introduzca su nickname" required>
                <div class="invalid-feedback" id="registerNicknameError"></div>
              </div>
              <div class="mb-3">
                  <label for="registerPassword" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="registerPassword" name="contraseña" placeholder="Introduzca su contraseña" required>
                  <div class="invalid-feedback" id="registerPasswordError"></div>
              </div>

              <div class="mb-3">
                  <label for="registerConfirmPassword" class="form-label">Confirmar Contraseña</label>
                  <input type="password" class="form-control" id="registerConfirmPassword" name="confirmar_contraseña" placeholder="Confirme la contraseña" required>
                  <div class="invalid-feedback" id="registerConfirmPasswordError"></div>
              </div>

              <div class="mb-3">
                <label for="registerPlan" class="form-label">Elige tu plan</label>
                <select class="form-select" id="registerPlan" name="plan" required>
                    <option value="">Seleccionar plan</option>
                    <option value="Básico">Plan Básico - 9.99/mes</option>
                    <option value="Estándar">Plan Estándar - 14.99/mes</option>
                    <option value="Premium">Plan Premium - 19.99/mes</option>
                </select>
            </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Registrarse</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 text-center-custom text-lg-end mt-3 mt-lg-0">
        <p class="text-large text-color-primary">¿Ya tienes una cuenta?</p>
        <p class="text-small text-color-primary m-20">
          <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesión</a>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Modal para Iniciar Sesión -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="loginForm">
          <div class="mb-3">
            <label for="loginEmail" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="loginEmail" name="correo_electronico" placeholder="Introduzca su correo electrónico" required>
            <div class="invalid-feedback" id="loginEmailError"></div>
          </div>
          <div class="mb-3">
            <label for="loginPassword" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="loginPassword" name="contraseña" placeholder="Introduzca su contraseña" required>
            <div class="invalid-feedback" id="loginPasswordError"></div>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Acceder</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS y dependencias -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

<style>
@media (max-width: 1199px) {
  .u-dialog-section-5 .u-dialog-1 {
    width: 545px;
    margin-right: calc(((100% - 940px) / 2) + 268px);
  }
}

@media (max-width: 991px) {
  .u-dialog-section-5 .u-dialog-1 {
    margin-right: calc(((100% - 720px) / 2) + 175px);
  }
}

@media (max-width: 767px) {
  .u-dialog-section-5 .u-dialog-1 {
    width: 540px;
    margin-right: calc(((100% - 540px) / 2));
  }

  .u-dialog-section-5 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }
}

@media (max-width: 575px) {
  .u-dialog-section-5 .u-dialog-1 {
    width: 340px;
    margin-right: calc(((100% - 340px) / 2));
  }
}</style>











<!-- JAVASCRIPT para validaciones -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#registerForm').submit(function(event) {
        event.preventDefault(); // Evitar el envío por defecto
        $('.invalid-feedback').text(''); // Limpiar mensajes de error anteriores
        $('.form-control').removeClass('is-invalid'); // Limpiar clases de error anteriores
        $('#registerSuccessMessage').addClass('d-none').text(''); // Limpiar mensaje de éxito

        // Crear un objeto FormData
        var formData = new FormData(this);

        // Realizar la solicitud AJAX para registro
        $.ajax({
            type: 'POST',
            url: 'Conf/register.php',
            data: formData,
            processData: false, // No procesar el data
            contentType: false, // No establecer Content-Type
            dataType: 'json',
            success: function(response) {
                if (response.type === 'success') {
                    $('#registerForm')[0].reset();
                    $('#registerSuccessMessage').removeClass('d-none').text(response.message);
                } else if (response.type === 'danger') {
                    switch(response.field) {
                        case 'nickname':
                            $('#registerNickname').addClass('is-invalid');
                            $('#registerNicknameError').text(response.message);
                            break;
                        case 'nombre_completo':
                            $('#registerFullName').addClass('is-invalid');
                            $('#registerFullNameError').text(response.message);
                            break;
                        case 'correo_electronico':
                            $('#registerEmail').addClass('is-invalid');
                            $('#registerEmailError').text(response.message);
                            break;
                        case 'contraseña':
                            $('#registerPassword').addClass('is-invalid');
                            $('#registerPasswordError').text(response.message);
                            break;
                        case 'confirmar_contraseña':
                            $('#registerConfirmPassword').addClass('is-invalid');
                            $('#registerConfirmPasswordError').text(response.message);
                            break;
                        case 'plan':
                            $('#registerPlan').addClass('is-invalid');
                            $('#registerPlanError').text(response.message);
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
            url: 'Conf/procesar_sesion.php',
            data: {
                email: email,
                password: password
            },
            dataType: 'json',
            success: function(response) {
                if (response.type === 'success') {
                    window.location.href = 'Inicioprivado.php'; // Redirigir a la página de ordenar
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






<?php include 'footerpublico.php'; ?>