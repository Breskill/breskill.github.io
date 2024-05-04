<!-- procesar_registro.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];    
}

header("location: http://breskill.github.io/Vista/inicio.php");
exit();

?>