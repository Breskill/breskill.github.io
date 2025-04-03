<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>El faro</title>
    <link rel="icon" href="Imagenes/FARO_Logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body class="block-grid" style="background-color: #DBE0E3;">
    <header><!--Encabezado-->
            
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-fixed-top" data-bs-theme="dark">
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
<body>

<Section id="deportes" class="deportes"><!--Seccion de deportes-->
            <div class="container text-black"><h3>Deportes</h3></div>
                <div id="articulo-deporte" class="articulos">
                    <section class="container shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                        <div class="row">
                            <div class="col-md-9"> <!-- Columna principal para la sección de deportes -->                                
                                <div id="articulo-deporte" class="articulos">                                    
                                    <div class="row row-cols-1 row-cols-md-2 g-2">
                                        <div class="col">
                                            <div class="fondo card h-100">
                                                <article class="card h-100 shadow bg-body-tertiary rounded">
                                                    <a href="#" class="text-decoration-none">                    
                                                    <img src="../Imagenes/deporte1.jpg" class="card-img-top" alt="futbol">
                                                        <div class="card-body">
                                                            <h2 class="card-title text-black">O'Higgins cayó por 0-3 mínima ante Deportes Iquique</h2>
                                                            <h4 class="fs-4 fw-lighter text-body-tertiary">Fútbol</h4>
                                                            <p class="card-text text-black">El compromiso jugado en el principal recinto deportivo de la ciudad comenzó cuesta arriba para los celestes. Deportes Iquique logró inaugurar el marcador a los 15 minutos de juego gracias a un lanzamiento penal.</p>
                                                        </div>
                                                    </a>
                                                </article>
                                            </div>
                                        </div>                        
                                        <div class="col">
                                            <div class="fondo card h-100">
                                                <article class="card h-100 shadow bg-body-tertiary rounded">
                                                    <a href="#" class="text-decoration-none">
                                                    <img src="../Imagenes/deporte2.jpg" class="card-img-top" alt="f1">
                                                    <div class="card-body">
                                                        <h2 class="card-title text-black">La Fórmula 1 del futuro</h2>
                                                        <h4 class="fs-4 fw-lighter text-body-tertiary">Automóvilismo</h4>
                                                        <p class="card-text text-black">Cada vez son más los datos que llegan acerca del estilo y las prestaciones de los monoplazas de Fórmula 1 de cara a la próxima renovación de 2026, donde los cambios van a ser más que notables.</p>
                                                    </div>
                                                    </a>
                                                </article>
                                            </div>
                                        </div>                        
                                        <div class="col">
                                            <div class="fondo card h-100">
                                                <article class="card h-100 shadow bg-body-tertiary rounded">
                                                    <a href="#" class="text-decoration-none">
                                                    <img src="../Imagenes/deporte3.jpg" class="card-img-top" alt="basket">
                                                    <div class="card-body">
                                                        <h2 class="card-title text-black">La Liga Dos se transmitirá en vivo en CHV</h2>
                                                        <h4 class="fs-4 fw-lighter text-body-tertiary">Basquetbol</h4>
                                                        <p class="card-text text-black">Desde este sábado 29 de abril podrás disfrutar de lo mejor del básquetbol nacional de manera totalmente gratuita en el servicio de streaming.</p>
                                                    </div>   
                                                    </a>
                                                </article>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="fondo card h-100">
                                                <article class="card h-100 shadow bg-body-tertiary rounded">
                                                    <a href="#" class="text-decoration-none">
                                                    <img src="../Imagenes/deporte4.jpg" class="card-img-top" alt="lucha">
                                                    <div class="card-body">
                                                        <h2 class="card-title text-black">Roman Reigns, ¿el nuevo Mr. WrestleMania?</h2>
                                                        <h4 class="fs-4 fw-lighter text-body-tertiary">Lucha</h4>
                                                        <p class="card-text text-black">A lo largo de los años hemos visto pasar grandes estrellas por el cuadrilátero del mayor show del año. De Hulk Hogan a Shawn Michaels o Undertaker todos merece su reconocimiento, pero este año Roman Reigns les superará a todos.</p>
                                                    </div>
                                                    </a>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                        <!-- Contador de deportes -->
                                        <p>Artículos: <span id="contador-deportes">0</span></p>
                                </div>
                            </div>
                            <div class="col col-md-3"> <!-- Columna para el aside de redes sociales -->
                                <div class="fondo card h-100">                                    
                                    <ul class="list-group">
                                        <li class="list-group-item active" aria-current="true"><span class="fw-bold fs-3">Lo último</span></li>
                                        <li class="list-group-item">
                                            <p class="fecha">20:02 horas</p>
                                            <h5 class="noticia">Atento Colo Colo: así quedó la tabla de posiciones tras empate entre Cerro Porteño y Fluminense</h5>
                                        </li>
                                        <li class="list-group-item">
                                            <p class="fecha">20:07 horas</p>
                                            <h5 class="noticia">Palestino vs. Millonarios: sigue aquí EN VIVO y ONLINE el partido de la Copa Libertadores</h5>
                                        </li>
                                        <li class="list-group-item">
                                            <p class="fecha">20:18 horas</p>
                                            <h5 class="noticia">Con revisión de VAR: el gol de "Gato" Lucero a Boca Juniors en la Copa Sudamericana</h5>
                                        </li>
                                        <li class="list-group-item">
                                            <p class="fecha">21:50 horas</p>
                                            <h5 class="noticia">Juan Martín Lucero lidera paliza de Fortaleza sobre Boca Juniors en la Copa Sudamericana</h5>
                                        </li>
                                        <li class="list-group-item">
                                            <p class="fecha">21:58 horas</p>
                                            <h5 class="noticia">Palestino celebra frente a Millonarios y así quedó la tabla de posiciones de la Copa Libertadores</h5>
                                        </li>
                                        <li class="list-group-item">
                                            <p class="fecha">22:19 horas</p>
                                            <h5 class="noticia">Copa Libertadores: así quedó el grupo de Cobresal tras victoria de Sao Paulo sobre Barcelona SC</h5>
                                        </li>
                                                                               
                                        </ul>                                    
                                </div>
                            </div>                            
                        </div>
                    </section>                    
                </div>
        </section>

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
    // Función para contar en tiempo real la cantidad de elementos con la clase "fondo" dentro de la sección de deportes
function contarArticulosDeportes() {
    var contadorDeportes = document.getElementById('contador-deportes');
    var articulosDeportes = document.querySelectorAll('#articulo-deporte .fondo').length;
    contadorDeportes.textContent = articulosDeportes;
}

// Llamar a la función para contar los artículos cuando se cargue la página
document.addEventListener('DOMContentLoaded', function() {
    contarArticulosDeportes();
});

// Actualizar el contador cada 3 segundos
setInterval(function() {
    contarArticulosDeportes();
}, 3000);

</script>
        <script src="../javascript.js"></script>
</body>
</html>