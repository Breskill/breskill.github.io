<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>El faro</title>
    <link rel="icon" href="Imagenes/FARO_Logo.png" type="image/png">
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
<Section id="noticias" class="noticias"><!--Secion de noticias-->
            <div class="container text-black"><h3>Noticias</h3></div>                
                <div id="articulo-noticia" class="articulos">
                    <div class="container shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="fondo card h-100">
                                    <article class="card h-100 shadow bg-body-tertiary rounded">
                                        <a href="#" class="text-decoration-none">
                                            <video controls class="card-img-top">
                                                <source src="../Audiovisual/video.mp4" type="video/mp4" >
                                                Tu navegador no soporta el elemento de video.
                                            </video>
                                                <div class="card-body">           
                                                    <h2 class="card-title text-black">Choque de automóvil</h2>
                                                    <p class="fs-4 fw-lighter text-body-tertiary">Accidente</p>
                                                    <p class="card-text text-black">En el lugar, por causas que investiga carabineros, el conductor de un automóvil, perdió el control del vehículo, estrellándose de manera violenta contra un poste del tendido eléctrico, ubicado a un costado de la ruta.</p>
                                                </div>    
                                        </a>                
                                    </article>
                                </div>
                            </div>
                            <div class="col">
                                <div class="fondo card h-100">
                                    <article class="card h-100 shadow bg-body-tertiary rounded"> 
                                        <a href="#" class="text-decoration-none">                                                        
                                            <img src="../Imagenes/noticia2.jpg" class="card-img-top" alt="vaper">
                                            <audio controls class="card-img-top">
                                                <source src="../Audiovisual/Audio.mp3" type="audio/mp3">
                                                Tu navegador no soporta el elemento de audio.                                            
                                            </audio>
                                                <div class="card-body">
                                                    <h2 class="card-title text-black">Ley regula uso de "vapers"</h2>
                                                    <p class="fs-4 fw-lighter text-body-tertiary">Comunidad</p> 
                                                    <p class="card-text text-black">El objetivo de este proyecto que ya está aprobado para su promulgación, es regular la venta, publicidad y consumo de los cigarrillos electrónicos o “vapers”.</p>
                                                </div>
                                        </a>
                                    </article>
                                </div>
                            </div>
                            <div class="col">
                                <div class="fondo card h-100">
                                    <article class="card h-100 shadow bg-body-tertiary rounded">
                                        <a href="#" class="text-decoration-none">
                                        <img src="../Imagenes/noticia3.jpg" class="card-img-top" alt="ia">
                                        <div class="card-body">
                                            <h2 class="card-title text-black">DeepMind IA de Google</h2>
                                            <h4 class="fs-4 fw-lighter text-body-tertiary">Actualidad</h4>
                                            <p class="card-text text-black">DeepMind, la empresa de inteligencia artificial (IA) de Google, está utilizando una nueva herramienta para identificar cambios en el ADN humano que pueden causar enfermedades.</p>
                                        </div>
                                        </a>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-1 g-4 py-3">    
                            <div class="col">
                                <div class="fondo card h-100">
                                    <article class="card h-100 shadow bg-body-tertiary rounded">
                                        <a href="#" class="text-decoration-none">
                                        <img src="../Imagenes/noticia4.jpg" class="card-img-top" alt="pascua">
                                            <div class="card-body">
                                                <h2 class="card-title text-black">Semana Santa</h2>
                                                <h4 class="fs-4 fw-lighter text-body-tertiary">Religión</h4>
                                                <p class="card-text text-black">Semana Santa es una época de encuentro para los católicos. Un momento que conmemora la Pasión, Muerte y Resurrección de Cristo y que invita a juntarse con los seres queridos para conectarse con Dios.</p>
                                            </div>
                                        </a>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <!-- Contador de noticias -->
                        <p class="container text-black">Artículos: <span id="contador-noticias">0</span></p>
                    </div>
                </div>                    
        </Section>

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
        <script>
            // Función para contar en tiempo real la cantidad de elementos con la clase "fondo" dentro de la sección de noticias
function contarArticulosNoticias() {
    var contadorNoticias = document.getElementById('contador-noticias');
    var articulosNoticias = document.querySelectorAll('#articulo-noticia .fondo').length;
    contadorNoticias.textContent = articulosNoticias;
}

// Llamar a la función para contar los artículos cuando se cargue la página
document.addEventListener('DOMContentLoaded', function() {
    contarArticulosNoticias();
});

// Actualizar el contador cada 3 segundos
setInterval(function() {
    contarArticulosNoticias();
}, 3000);

        </script>
        <script src="../javascript.js"></script>
</body>
</html>

