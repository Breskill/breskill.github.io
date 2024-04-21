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

        
// Función para contar en tiempo real la cantidad de elementos con la clase "fondo" dentro de la sección de noticias
function contarArticulosNoticias() {
    var contadorNoticias = document.getElementById('contador-noticias');
    var articulosNoticias = document.querySelectorAll('.noticias .fondo').length;
    contadorNoticias.textContent = articulosNoticias;
}

// Función para contar en tiempo real la cantidad de elementos con la clase "fondo" dentro de la sección de deportes
function contarArticulosDeportes() {
    var contadorDeportes = document.getElementById('contador-deportes');
    var articulosDeportes = document.querySelectorAll('.deportes .fondo').length;
    contadorDeportes.textContent = articulosDeportes;
}

// Función para contar en tiempo real la cantidad de elementos con la clase "fondo" dentro de la sección de negocios
function contarArticulosNegocios() {
    var contadorNegocios = document.getElementById('contador-negocios');
    var articulosNegocios = document.querySelectorAll('.negocios .fondo').length;
    contadorNegocios.textContent = articulosNegocios;
}

// Llamar a las funciones para contar los artículos cuando se cargue la página
document.addEventListener('DOMContentLoaded', function() {
    contarArticulosNoticias();
    contarArticulosDeportes();
    contarArticulosNegocios();
});

// Actualizar el contador cada 3 segundos
setInterval(function() {
    contarArticulosNoticias();
    contarArticulosDeportes();
    contarArticulosNegocios();
}, 3000);



// Cuando el usuario envía el formulario
formulario.addEventListener('submit', function(event) {
    event.preventDefault();

    // Obtener los valores del formulario
    var imagenInput = document.getElementById('imagen').files[0];
    var titulo = document.getElementById('titulo').value;
    var categoria = document.getElementById('categoria').value;
    var descripcion = document.getElementById('descripcion').value;
    var seccion = document.getElementById('seccion').value; // Obtener la sección seleccionada

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

            // Determinar la sección donde se agregará el nuevo artículo
            var seccionContenedor = document.getElementById("articulo-" + seccion);
            seccionContenedor.appendChild(nuevoArticulo);

            // Limpiar el formulario y cerrar el modal
            formulario.reset();
            modal.style.display = 'none';
        };

        // Leer la imagen como una URL
        reader.readAsDataURL(imagenInput);
    }
});
    
