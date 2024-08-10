
<body>
  
<style>
/* Estilo del modal */
#modalPreguntaEnviar {
  display: none; /* Inicialmente oculto */
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8); /* Fondo oscuro translúcido */
  backdrop-filter: blur(10px); /* Efecto de desenfoque */
}

/* Contenido del modal con nuevo ID */
#modalPreguntaEnviar .modal-content {
  position: relative;
  margin: 10% auto;
  padding: 20px;
  background: linear-gradient(135deg, #282828, #333); /* Fondo con degradado */
  border-radius: 12px;
  width: 80%;
  max-width: 500px;
  color: #e0e0e0;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.5); /* Sombra alrededor del modal */
  animation: modalFadeIn 0.5s ease-in-out;
}

/* Título del modal */
#modalPreguntaEnviar .modal-content h2 {
  color: #b084cc; /* Color morado */
  margin-bottom: 20px;
  font-family: 'Roboto', sans-serif; /* Fuente personalizada */
}

/* Etiquetas dentro del modal */
#modalPreguntaEnviar .modal-content label {
  color: #8dd35f; /* Color verde */
  font-family: 'Roboto', sans-serif;
  margin-bottom: 8px;
  display: block;
}

/* Campos de entrada y texto dentro del modal */
#modalPreguntaEnviar .modal-content input[type="email"],
#modalPreguntaEnviar .modal-content textarea {
  width: 100%;
  padding: 10px;
  margin: 8px 0 16px 0;
  background-color: #444;
  border: 1px solid #666;
  border-radius: 8px;
  color: #fff;
  font-family: 'Roboto', sans-serif;
}

/* Estilo de enfoque de los campos */
#modalPreguntaEnviar .modal-content input[type="email"]:focus,
#modalPreguntaEnviar .modal-content textarea:focus {
  border-color: #b084cc; /* Borde morado al enfocar */
  outline: none;
}

/* Mensajes de error */
#modalPreguntaEnviar .modal-content .error-message {
  display: none;
  color: #ff4d4d; /* Rojo para mensajes de error */
  margin-bottom: 16px;
}

/* Botón de enviar */
#modalPreguntaEnviar .modal-content .submit-button {
  background-color: #b084cc; /* Botón morado */
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

/* Estilo del botón de enviar al pasar el mouse */
#modalPreguntaEnviar .modal-content .submit-button:hover {
  background-color: #8dd35f; /* Cambia a verde al pasar el mouse */
}

/* Estilo del botón de cerrar */
#modalPreguntaEnviar .modal-content #modalCloseButton {
  color: #e0e0e0;
  font-size: 24px;
  font-weight: bold;
  position: absolute;
  top: 10px;
  right: 20px;
  cursor: pointer;
  transition: color 0.3s ease;
}

/* Estilo del botón de cerrar al pasar el mouse */
#modalPreguntaEnviar .modal-content #modalCloseButton:hover {
  color: #ff4d4d; /* Rojo al pasar el mouse */
}

/* Animación de entrada del modal */
@keyframes modalFadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}


</style>
</body>

<footer class="u-align-center u-clearfix u-custom-color-1 u-footer u-footer" id="sec-65c1"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-active-none u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg></span>&nbsp;+1 ​809-256-8802
        </a>
        <div class="u-clearfix u-group-elements u-group-elements-1">
          <div class="u-shape u-shape-svg u-text-white u-shape-1">
            <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 110 160" style=""><use xlink:href="#svg-e527"></use></svg>
            <svg class="u-svg-content" viewBox="0 0 110 160" x="0px" y="0px" id="svg-e527"><path d="M55,0C24.6,0,0,24.6,0,55s55,105,55,105s55-74.6,55-105S85.4,0,55,0z M55,80c-13.8,0-25-11.2-25-25s11.2-25,25-25
	s25,11.2,25,25S68.8,80,55,80z"></path></svg>
          </div>
          <p class="u-text u-text-1">Calle Penetración esq. Rojas #25</p>
        </div>
        <div class="u-clearfix u-group-elements u-group-elements-2">
          <div class="u-shape u-shape-svg u-text-white u-shape-2">
            <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 120" style=""><use xlink:href="#svg-949a"></use></svg>
            <svg class="u-svg-content" viewBox="0 0 160 120" x="0px" y="0px" id="svg-949a" style="enable-background:new 0 0 160 120;"><g><path d="M159.9,12.2c0-0.2,0.1-0.4,0.1-0.6l-48.8,49.5L160,109c0-0.3-0.1-0.7-0.1-1V12.2L159.9,12.2z"></path><path d="M103.7,68.7L83.8,88.9c-1,1-2.3,1.5-3.6,1.5c-1.3,0-2.6-0.5-3.6-1.5L56.7,69.4L7.6,119.2c1.2,0.5,2.5,0.8,3.8,0.8h137.4
		c2,0,3.9-0.6,5.5-1.6L103.7,68.7z"></path><path d="M80.1,77.4l74.5-75.6c-1.7-1.1-3.7-1.8-5.8-1.8H11.5C8.8,0,6.2,1.1,4.3,2.8L80.1,77.4z"></path><path d="M0,14v94c0,1.1,0.2,2.1,0.5,3.1L49,62L0,14z"></path>
</g></svg>
          </div>
          <p class="u-text u-text-2">Info@gamercave.com</p>
        </div>
        <p class="u-text u-text-3">Nuestro blog siempre se complace en responderles:</p>
        <h2 class="u-text u-text-default u-text-4">SIGUENOS EN NUESTRAS REDES</h2>
        <div class="u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-text-custom-color-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-37d5"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-37d5"><path d="m512 256c0-141.4-114.6-256-256-256s-256 114.6-256 256 114.6 256 256 256c1.5 0 3 0 4.5-.1v-199.2h-55v-64.1h55v-47.2c0-54.7 33.4-84.5 82.2-84.5 23.4 0 43.5 1.7 49.3 2.5v57.2h-33.6c-26.5 0-31.7 12.6-31.7 31.1v40.8h63.5l-8.3 64.1h-55.2v189.5c107-30.7 185.3-129.2 185.3-246.1z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-text-custom-color-4 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 1200 1200" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-86da"></use></svg><svg class="u-svg-content" viewBox="0 0 1200 1200" x="0px" y="0px" id="svg-86da" style="enable-background:new 0 0 1200 1200;"><g><polygon points="334.1,309.2 769.1,890.8 867.6,890.8 432.6,309.2 	"></polygon><path d="M600,18C278.6,18,18,278.6,18,600s260.6,582,582,582s582-260.6,582-582S921.4,18,600,18z M745.9,937.2l-198-264.8
		L302.7,937.2h-63l279.9-302.4l-278.2-372h214.4l182.4,243.8L864,262.8h63L666.4,544.3l293.8,392.9H745.9z"></path>
</g></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-text-custom-color-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cc06"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-cc06"><path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0"></path><path d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0"></path><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="Custom" title="linkedin" href="https://linkedin.com/name"><span class="u-icon u-social-custom u-social-icon u-text-custom-color-4 u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3165"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-3165"><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm-74.390625 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="Custom" title="pinterest" href="https://pinterest.com/name"><span class="u-icon u-social-custom u-social-icon u-text-custom-color-4 u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 97.75 97.75" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0a2f"></use></svg><svg class="u-svg-content" viewBox="0 0 97.75 97.75" x="0px" y="0px" id="svg-0a2f" style="enable-background:new 0 0 97.75 97.75;"><g><path d="M48.875,0C21.883,0,0,21.882,0,48.875S21.883,97.75,48.875,97.75S97.75,75.868,97.75,48.875S75.867,0,48.875,0z    M54.499,65.109c-4.521,0-8.773-2.444-10.229-5.219c0,0-2.432,9.645-2.943,11.506c-1.813,6.58-7.146,13.162-7.561,13.701   c-0.289,0.375-0.928,0.258-0.994-0.24c-0.113-0.838-1.475-9.139,0.127-15.909c0.801-3.4,5.383-22.814,5.383-22.814   s-1.334-2.673-1.334-6.625c0-6.205,3.596-10.837,8.074-10.837c3.807,0,5.645,2.859,5.645,6.286c0,3.828-2.436,9.552-3.693,14.856   c-1.051,4.441,2.225,8.064,6.605,8.064c7.933,0,13.272-10.188,13.272-22.261c0-9.174-6.176-16.044-17.418-16.044   c-12.697,0-20.615,9.471-20.615,20.052c0,3.646,1.078,6.221,2.764,8.21c0.773,0.915,0.883,1.283,0.602,2.333   c-0.203,0.771-0.66,2.625-0.854,3.358c-0.279,1.062-1.137,1.44-2.098,1.049c-5.846-2.387-8.572-8.793-8.572-15.994   c0-11.893,10.029-26.154,29.922-26.154c15.985,0,26.506,11.566,26.506,23.984C77.089,52.839,67.956,65.109,54.499,65.109z"></path>
</g></svg></span>
          </a>
        </div>
        <a href="#" class="u-btn u-btn-round u-button-style u-custom-color-4 u-hover-custom-color-5 u-radius u-btn-2" id="Preguntas-btn">Enviar preguntas </a>
        <p class="u-small-text u-text u-text-variant u-text-5">Derechos Reservados, GAMERCAVE 2024</p>
      </div>
    
    
   <!-- Modal de Enviar Preguntas -->
   <div id="modalPreguntaEnviar" class="modal">
      <div class="modal-content">
        <span id="modalCloseButton" class="close">&times;</span>
        <h2>Enviar Pregunta</h2>
        <form id="formEnviarPregunta">
          <label for="correoPregunta">Correo Electrónico:</label>
          <input type="email" id="correoPregunta" name="correoPregunta" required>
          <span id="correoPreguntaError" class="error-message"></span>

          <label for="preguntaEnviar">Tu Pregunta:</label>
          <textarea id="preguntaEnviar" name="preguntaEnviar" required></textarea>
          <span id="preguntaEnviarError" class="error-message"></span>

          <button type="submit" class="submit-button">Enviar</button>
        </form>
      </div>
    </div>

 
 <script>
  document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById('modalPreguntaEnviar');
    const form = document.getElementById('formEnviarPregunta');
    const closeButton = document.getElementById('modalCloseButton');
    const successMessageDuration = 2000; // Duración del mensaje de éxito en milisegundos

    // Mostrar el modal cuando se hace clic en el botón "Enviar preguntas"
    document.querySelector('#Preguntas-btn').addEventListener('click', function (event) {
        event.preventDefault();
        modal.style.display = 'block';
    });

    // Cerrar el modal cuando se hace clic en el botón de cerrar o fuera del modal
    closeButton.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Manejar el envío del formulario
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        // Obtener datos del formulario
        const correo = document.getElementById('correoPregunta').value.trim();
        const pregunta = document.getElementById('preguntaEnviar').value.trim();

        // Validar campos
        if (!validateEmail(correo) || pregunta === '') {
            if (!validateEmail(correo)) {
                document.getElementById('correoPreguntaError').textContent = 'Correo electrónico inválido';
            } else {
                document.getElementById('correoPreguntaError').textContent = '';
            }

            if (pregunta === '') {
                document.getElementById('preguntaEnviarError').textContent = 'La pregunta no puede estar vacía';
            } else {
                document.getElementById('preguntaEnviarError').textContent = '';
            }

            return;
        }

        // Preparar datos para enviar
        const data = {
            correo: correo,
            pregunta: pregunta
        };

        // Enviar datos al servidor
        fetch('Conf/procesar_pregunta.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(result => {
            const messageContainer = document.querySelector('.modal-content');
            
            if (result.status === 'success') {
                form.reset();
                // Mostrar mensaje de éxito
                const successMessage = document.createElement('p');
                successMessage.className = 'success-message';
                successMessage.textContent = 'Pregunta enviada con éxito.';
                messageContainer.appendChild(successMessage);

                // Ocultar mensaje de éxito después de 2 segundos
                setTimeout(() => {
                    successMessage.remove();
                }, successMessageDuration);
            } else {
                // Mostrar mensaje de error
                const errorMessage = document.createElement('p');
                errorMessage.className = 'error-message';
                errorMessage.textContent = result.message;
                messageContainer.appendChild(errorMessage);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Mostrar mensaje de error en caso de fallo en la solicitud
            const messageContainer = document.querySelector('.modal-content');
            const errorMessage = document.createElement('p');
            errorMessage.className = 'error-message';
            errorMessage.textContent = 'Ocurrió un error. Por favor, intente nuevamente.';
            messageContainer.appendChild(errorMessage);
        });
    });

    // Función para validar el correo electrónico
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});


 </script>   
    
    
    
    
    
</footer>