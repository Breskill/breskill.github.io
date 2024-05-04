<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>El faro</title>
    <link rel="icon" href="/Imagenes/FARO_Logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="block-grid" style="background-color: #DBE0E3;">
    <header><!--Encabezado-->
            
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../Imagenes/FARO_Logo.png" alt="Logo empresa" width="120" height="40" class="d-inline-block align-text-center"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="noticias.php">Noticias</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="deportes.php">Deporte</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="negocios.php">Negocio</a>
                        </li>
                        <span class="cont_sep text-white">___</span>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="registro.php">Registrarse</a>
                        </li> 
                    </ul>
                        
                </div>
                <div class="d-flex aling-items-center justify-content-end text-body-secondary" id="fecha-hora"></div>
            </div>
        </nav>                                             
    </header>

    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../Imagenes/Avisos/aviso1.jpg" class="d-block w-100 mt-3 mb-3" alt="1">
          </div>
          <div class="carousel-item">
            <img src="../Imagenes/Avisos/aviso2.jpg" class="d-block w-100 mt-3 mb-3" alt="2">
          </div>
          <div class="carousel-item">
            <img src="../Imagenes/Avisos/aviso3.jpg" class="d-block w-100 mt-3 mb-3" alt="3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>    

    <Section id="inicio" class="inicio"><!--Seccio de inicio-->
            <div class="container text-black"><h3>inicio</h3></div>
                <div id="articulo-inicio" class="articulos">
                    <div class="container shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="fondo card h-100">
                                    <article class="card h-100 shadow bg-body-tertiary rounded"> 
                                        <a href="#" class="text-decoration-none">                   
                                        <img src="../Imagenes/inicio1.jpg" class="card-img-top" alt="asombro">
                                        <div class="card-body">
                                            <h2 class="card-title text-black">Por qué "el asombro requiere atención"</h2>
                                            <h4 class="fs-4 fw-lighter text-body-tertiary">Ciencia</h4>
                                            <p class="card-text text-black">Así describió el influyente filósofo, matemático y científico francés René Descartes la que calificó como "la primera" entre las seis pasiones primitivas en su obra "Las pasiones del alma" (1649).</p>
                                        </div>    
                                        </a>                                            
                                    </article>
                                </div>
                            </div>
                            <div class="col">
                                <div class="fondo card h-100">
                                    <article class="card h-100 shadow bg-body-tertiary rounded">
                                        <a href="#" class="text-decoration-none">
                                        <img src="../Imagenes/inicio2.jpg" class="card-img-top" alt="economia">
                                        <div class="card-body">
                                            <h2 class="card-title text-black">Deadpool y Wolverine</h2>
                                            <h4 class="fs-4 fw-lighter text-body-tertiary">Cómics</h4>
                                            <p class="card-text text-black">no siempre juegues bien con los demás. Si bien ambos han salvado al mundo más de unas pocas veces, Logan y Wade Wilson son asesinos con serios problemas de ira. Los enfrentamientos entre estos dos.</p>
                                        </div>    
                                        </a>
                                    </article>
                                </div>
                            </div>
                            <div class="col">  
                                <div class="fondo card h-100">
                                    <article class="card h-100 shadow bg-body-tertiary rounded">
                                        <a href="#" class="text-decoration-none">
                                        <img src="../Imagenes/inicio3.jpg" class="card-img-top" alt="divisas">
                                        <div class="card-body">
                                            <h2 class="card-title text-black">Hunter x Hunter volverá próximamente</h2>
                                            <h4 class="fs-4 fw-lighter text-body-tertiary">Manga</h4>                                            
                                            <p class="card-text text-black">Todos los seguidores de Hunter x Hunter pueden estar de celebración con el notición tan importante que ha querido compartir su creador, Yoshihiro Togashi, quien ha anunciado que ha decidido volver a ponerse manos a la obra con la creación de nuevos episodios de su aclamado manga.</p>
                                        </div>    
                                        </a>
                                    </article>
                                </div> 
                            </div> 
                            
                        </div>    
                        <!-- Contador de negocios -->
                        <p>Artículos: <span id="contador-inicio">0</span></p>                            
                    </div>        
                </div>                           
        </Section>
        
        <!--Crear articulo-->
        <section class="container">
            <!-- Sección para agregar nuevo artículo -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarArticulo">
                Agregar Nuevo Artículo
            </button>
            <!-- Modal -->
            <div class="modal fade" id="modalAgregarArticulo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Artículo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formulario-articulo" action="negocio.php" method="POST">
                                <div class="mb-3">
                                    <label for="imagen" class="form-label">Imagen</label>
                                    <input type="file" class="form-control" id="imagen" accept="image/*" required name="imagen">
                                </div>
                                <div class="mb-3">
                                    <label for="titulo" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="titulo" required name="titulo">
                                </div>
                                <div class="mb-3">
                                    <label for="categoria" class="form-label">Categoría</label>
                                    <input type="text" class="form-control" id="categoria" required name="categoria">
                                </div>
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="descripcion" rows="3" required name="descripcion"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="seccion" class="form-label">Sección</label>
                                    <select class="form-select" id="seccion" name="seccion">
                                        <option value="noticia">Noticias</option>
                                        <option value="deporte">Deportes</option>
                                        <option value="negocio">Negocios</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                                                                                    
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Enviar mensaje-->
<section class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">                    
                    <div class="container shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                        <h2>Contactanos</h2>
                        <form id="formulario-contacto">                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" required>
                                <label for="nombre">Nombre</label>
                                
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
                                <label for="email">Correo electronico</label>
                                
                            </div>
                            <div>
                                <textarea class="form-control" id="mensaje" rows="6" placeholder="Mensaje" name="mensaje" required></textarea>
                                <label for="mensaje"></label>                                
                                
                            </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3">Enviar</button>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
</section>
                
        
        <!-- Pop-up de confirmación -->
        <div id="popup-enviado" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Mensaje enviado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Tu mensaje ha sido enviado correctamente.</p>
                    </div>
                </div>
            </div>
        </div>
     
        
        <footer class="bg-dark text-white text-center py-3">
            <div class="container">
                <p>&copy;2024 El Faro. All Rights Reserved.</p>
                <div class="container">
                    <a href="https://www.facebook.com/" class="btn btn-primary"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="https://twitter.com/" class="btn btn-info"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="https://www.instagram.com/" class="btn btn-danger"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </footer>        
        
        </div>
        <script>
            // Función para contar en tiempo real la cantidad de elementos con la clase "fondo" dentro de la sección de inicio
                function contarArticulosInicio() {
                    var contadorInicio = document.getElementById('contador-inicio');
                    var articulosInicio = document.querySelectorAll('#articulo-inicio .fondo').length;
                    contadorInicio.textContent = articulosInicio;
                }

                // Llamar a la función para contar los artículos cuando se cargue la página
                document.addEventListener('DOMContentLoaded', function() {
                    contarArticulosInicio();
                });

                // Actualizar el contador cada 3 segundos
                setInterval(function() {
                    contarArticulosInicio();
                }, 3000);
        </script> 
        
        <script>
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
            </script>

        <script src="../javascript.js"></script>
    <div id="popup" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nuevo articulo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Agregado correctamente.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
