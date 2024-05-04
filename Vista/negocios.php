<?php
    // Verificar si se enviaron datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir los datos del formulario
        $titulo = $_POST["titulo"];
        $categoria = $_POST["categoria"];
        $descripcion = $_POST["descripcion"];
        $seccion = $_POST["seccion"];

        // Aquí puedes imprimir los datos recibidos o hacer lo que necesites con ellos
        echo "Título: " . $titulo . "<br>";
        echo "Categoría: " . $categoria . "<br>";
        echo "Descripción: " . $descripcion . "<br>";
        echo "Sección: " . $seccion . "<br>";

        // Puedes agregar lógica adicional aquí, como mostrar un mensaje de éxito
        echo "El artículo se ha agregado correctamente a la sección de Negocios.";
    }
?>

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
<body>
    
<Section id="negocios" class="negocios"><!--Seccio de negocios-->
            <div class="container text-black"><h3>Negocios</h3></div>
                <div id="articulo-negocio" class="articulos">
                    <div class="container shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="fondo card h-100">
                                    <article class="card h-100 shadow bg-body-tertiary rounded"> 
                                        <a href="#" class="text-decoration-none">                   
                                        <img src="../Imagenes/negocio1.jpg" class="card-img-top" alt="bitcoins">
                                        <div class="card-body">
                                            <h2 class="card-title text-black">Más dinero vendiendo energía que con los bitcoins</h2>
                                            <h4 class="fs-4 fw-lighter text-body-tertiary">Criptomonedas</h4>
                                            <p class="card-text text-black">Riot Blockchain cerró su operación varias veces durante la reciente ola de calor de Texas, pero se benefició de 9.5 millones de dólares en créditos de energía, mucho más que vendiendo bitcoins.</p>
                                        </div>    
                                        </a>                                            
                                    </article>
                                </div>
                            </div>
                            <div class="col">
                                <div class="fondo card h-100">
                                    <article class="card h-100 shadow bg-body-tertiary rounded">
                                        <a href="#" class="text-decoration-none">
                                        <img src="../Imagenes/negocio2.jpg" class="card-img-top" alt="economia">
                                        <div class="card-body">
                                            <h2 class="card-title text-black">Trading con noticias de bolsa</h2>
                                            <h4 class="fs-4 fw-lighter text-body-tertiary">Economía</h4>
                                            <p class="card-text text-black">En un mundo cada vez más globalizado, las noticias de un país determinado pueden tener un gran impacto en otro.</p>
                                        </div>    
                                        </a>
                                    </article>
                                </div>
                            </div>
                            <div class="col">  
                                <div class="fondo card h-100">
                                    <article class="card h-100 shadow bg-body-tertiary rounded">
                                        <a href="#" class="text-decoration-none">
                                        <img src="../Imagenes/negocio3.jpg" class="card-img-top" alt="divisas">
                                        <div class="card-body">
                                            <h2 class="card-title text-black">Qué pasa con el dólar en Venezuela</h2>
                                            <h4 class="fs-4 fw-lighter text-body-tertiary">Divisas</h4>                                            
                                            <p class="card-text text-black">Ya sea en supermercados, peluquerías, restaurantes o bodegones, los precios están marcados en dólares con la tasa oficial del Banco Central de Venezuela (BCV).</p>
                                        </div>    
                                        </a>
                                    </article>
                                </div> 
                            </div> 
                            <div class="col">
                                <div class="fondo card h-100">
                                    <article class="card h-100 shadow bg-body-tertiary rounded">
                                        <a href="#" class="text-decoration-none">
                                        <img src="../Imagenes/negocio4.jpg " class="card-img-top" alt="emprendimiento">
                                        <div class="card-body">
                                            <h2 class="card-title text-black">Programa Viraliza “Reactiva Mujer”</h2>
                                            <h4 class="fs-4 fw-lighter text-body-tertiary">Emprendimiento</h4>
                                            <p class="card-text text-black">Ellas participarán de la etapa de formación del Programa Reactiva Mujer, 60 de las cuales serán seleccionadas para la etapa de asesoramiento y generación de un plan de mejoras para sus negocios.</p>
                                        </div>    
                                        </a>
                                    </article>
                                </div>                
                            </div>

                            


                        </div>    
                        <!-- Contador de negocios -->
                        <p>Artículos: <span id="contador-negocios">0</span></p>                            
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

            <script>
            // Función para contar en tiempo real la cantidad de elementos con la clase "fondo" dentro de la sección de negocios
            function contarArticulosNegocios() {
                var contadorNegocios = document.getElementById('contador-negocios');
                var articulosNegocios = document.querySelectorAll('#articulo-negocio .fondo').length;
                contadorNegocios.textContent = articulosNegocios;
            }

            // Llamar a la función para contar los artículos cuando se cargue la página
            document.addEventListener('DOMContentLoaded', function() {
                contarArticulosNegocios();
            });

            // Actualizar el contador cada 3 segundos
            setInterval(function() {
                contarArticulosNegocios();
            }, 3000);
        </script>

        <script src="../javascript.js"></script>
</body>
</html>
