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

    <!-- formulario registro-->
<section class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">                    
                    <div class="container shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                        <h2>Registrarse</h2>
                        <form action="procesar_registro.php" method="post">                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
                                <label for="username">Nombre de usuario</label>                               
                            </div>
                            <div class="form-floating mb-3">
                                <input type="correo" class="form-control" id="correo" placeholder="name@example.com" name="correo" required>
                                <label for="correo">Correo electronico</label>                                
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
                                <label for="password">Contraseña</label>                                
                            </div>

                                <button type="submit" class="btn btn-primary btn-block mt-3">Continuar</button>
                                                       
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <script src="../javascript.js"></script>
</body>
</html>