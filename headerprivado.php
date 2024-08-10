<!DOCTYPE html>
<html lang='es'></html>
<head>
		<title>Registro y Login PHP</title>
        <link href='css/HojaEstilo2.css' type='text/css' rel='stylesheet'>
        <link href='css/HeaderPrivado.css' type='text/css' rel='stylesheet'>
		<link href='css/Bootstrapv4.css' type='text/css' rel='stylesheet'>
		<!--Insertados para el Slider-->
		<meta name="viewport" content="width=device-width, initial-scale=1">   
		<script src="js/Bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



	</head>

    <body>


    <section id="Principal">
        <nav id="Menu" class="container d-flex justify-content-between align-items-center">
            <img src="images/web.png" id="imgLogo" alt="Logo">
            <ul class="d-flex list-unstyled mb-0">
                <li class="mx-3"><a href="productos.php">Productos</a></li>
                <li class="mx-3"><a href="cursos.php">Cursos</a></li>
                <li class="mx-3"><a href="centroayuda.php">Centro de Ayuda</a></li>
                <li class="mx-3 position-relative">
                    <a href="#" id="perfilLink">Perfil</a>
                    <!-- Cuadro desplegable -->
                    <div id="perfilDropdown" class="dropdown-menu">
                        <a class="dropdown-item" href="perfil.php" style="color: #179cc8">Administrar perfil</a>
                        <a class="dropdown-item" href="index.php" style="color: #179cc8">Salir</a>
                    </div>
                </li>
            </ul>
        </nav>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var perfilLink = document.getElementById('perfilLink');
            var perfilDropdown = document.getElementById('perfilDropdown');

            perfilLink.addEventListener('click', function(e) {
                e.preventDefault();
                perfilDropdown.classList.toggle('show');
            });

            document.addEventListener('click', function(e) {
                if (!perfilLink.contains(e.target) && !perfilDropdown.contains(e.target)) {
                    perfilDropdown.classList.remove('show');
                }
            });
        });
    </script>
</body>