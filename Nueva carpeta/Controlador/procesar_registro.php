<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elfaro";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['correo'];

    // Preparar y vincular
    $stmt = $conn->prepare("INSERT INTO registrousuario (nombre, contraseña, correo) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $contraseña, $correo);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        header("location: ../Vista/inicio.php");
        exit();
        
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
} else {
    echo "Error en la solicitud";
}
?>
