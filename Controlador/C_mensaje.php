<!-- procesar_formulario_contacto.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
}

header("location: http://breskill.github.io/Vista/inicio.php");
exit();

?>
