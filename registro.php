<?php
    // Función para generar la contraseña
    function generatePassword($length = 12) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[random_int(0, strlen($chars) - 1)];
        }
        return $password;
    }

    // Generar la contraseña al recibir el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = generatePassword(); // Genera la contraseña

        // Redirige de nuevo a la página de registro con la contraseña generada
        header("Location: registrar.php?password=" . urlencode($password));
        exit();
    }
?>
