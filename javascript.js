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


// Obtener el formulario y el modal
var formulario = document.getElementById('formulario-articulo');
var modalAgregarArticulo = new bootstrap.Modal(document.getElementById('modalAgregarArticulo'));

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
            nuevoArticulo.classList.add('col');
            nuevoArticulo.innerHTML = `
                <div class="fondo card h-100">
                    <article class="card h-100 shadow bg-body-tertiary rounded">
                        <a href="#" class="text-decoration-none">                    
                            <img src="${imagenURL}" class="card-img-top" alt="${titulo}">
                            <div class="card-body">
                                <h2 class="card-title text-black">${titulo}</h2>
                                <h4 class="fs-4 fw-lighter text-body-tertiary">${categoria}</h4>
                                <p class="card-text text-black">${descripcion}</p>
                            </div>
                        </a>
                    </article>
                </div>
            `;

            // Determinar la sección donde se agregará el nuevo artículo
            var seccionContenedor = document.getElementById("articulo-" + seccion);
            var articuloContenedor = seccionContenedor.querySelector(".row-cols-1");

            // Si no hay un contenedor de artículos para la sección, créalo
            if (!articuloContenedor) {
                articuloContenedor = document.createElement("div");
                articuloContenedor.classList.add("row");
                articuloContenedor.classList.add("row-cols-1");
                seccionContenedor.appendChild(articuloContenedor);
            }

            // Agregar el nuevo artículo al contenedor
            articuloContenedor.appendChild(nuevoArticulo);

            // Limpiar el formulario y cerrar el modal
            formulario.reset();
            modalAgregarArticulo.hide();
        };

        // Leer la imagen como una URL
        reader.readAsDataURL(imagenInput);
    }
});

//Envío de mensaje    
document.addEventListener('DOMContentLoaded', function() {
    // Obtener el formulario y agregar un evento de submit
    var form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        // Prevenir el envío del formulario
        event.preventDefault();
        
        // Mostrar el pop-up
        var myModal = new bootstrap.Modal(document.getElementById('popup'));
        myModal.show();
        
        // Redirigir al usuario al inicio de la página después de 2 segundos
        setTimeout(function() {
            window.location.href = '#'; // Redirigir al inicio de la página
        }, 2000); // 2000 milisegundos = 2 segundos
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Obtener el formulario y agregar un evento de submit
    var formContacto = document.getElementById('formulario-contacto');
    formContacto.addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar el envío por defecto del formulario
        
        // Limpiar los campos de nombre y mensaje
        document.getElementById('nombre').value = '';
        document.getElementById('mensaje').value = '';
        
        // Mostrar el pop-up de mensaje enviado
        var popupEnviado = new bootstrap.Modal(document.getElementById('popup-enviado'));
        popupEnviado.show();
        
        // Redirigir al usuario al inicio de la página después de 2 segundos
        setTimeout(function() {
            window.location.href = '#'; // Redirigir al inicio de la página
        }, 2000); // 2000 milisegundos = 2 segundos
    });
});