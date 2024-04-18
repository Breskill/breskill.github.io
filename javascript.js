// Función para actualizar la fecha y hora cada segundo
function actualizarFechaHora() {
    var ahora = new Date();
    var hora = ahora.getHours();
    var minutos = ahora.getMinutes();
    var segundos = ahora.getSeconds();

    // Agrega un cero delante de la hora si es menor a 10
    hora = (hora < 10 ? "0" : "") + hora;
    // Agrega un cero delante de los minutos si es menor a 10
    minutos = (minutos < 10 ? "0" : "") + minutos;
    // Agrega un cero delante de los segundos si es menor a 10
    segundos = (segundos < 10 ? "0" : "") + segundos;

    var fecha = ahora.toLocaleDateString();
    var tiempo = hora + ":" + minutos + ":" + segundos;

document.getElementById("fecha-hora").innerText = "Fecha: " + fecha + " - Hora: " + tiempo;

        // Actualiza cada segundo
        setTimeout(actualizarFechaHora, 1000);
        }
        // Llama a la función para iniciar la actualización
        actualizarFechaHora();



// Cuando el usuario envía el formulario
formulario.addEventListener('submit', function(event) {
    event.preventDefault();

    // Obtener los valores del formulario
    var imagenInput = document.getElementById('imagen').files[0];
    var titulo = document.getElementById('titulo').value;
    var categoria = document.getElementById('categoria').value;
    var descripcion = document.getElementById('descripcion').value;

    if (imagenInput) {
        var reader = new FileReader();

        reader.onload = function(event) {
            var imagenURL = event.target.result;

            // Crear el nuevo artículo
            var nuevoArticulo = document.createElement('div');
            nuevoArticulo.classList.add('fondo');
            nuevoArticulo.innerHTML = `
                <article class="article">
                    <a href="#">
                        <img src="${imagenURL}" alt="${titulo}">
                        <h2>${titulo}</h2>
                        <h4>${categoria}</h4>
                        <p>${descripcion}</p>
                    </a>
                </article>
            `;

            // Agregar el nuevo artículo a la sección de negocios
            document.getElementById("articulo-negocio").appendChild(nuevoArticulo);

            // Limpiar el formulario y cerrar el modal
            formulario.reset();
            modal.style.display = 'none';
        };

        // Leer la imagen como una URL
        reader.readAsDataURL(imagenInput);
    }
});
