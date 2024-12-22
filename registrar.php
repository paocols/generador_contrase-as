<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <div class="registro-container">
        <h2>Registro</h2>
        <form action="registro.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <!-- Aquí se muestra la contraseña generada si está disponible en la URL -->
                <input type="text" id="contraseña" name="contraseña" placeholder="Contraseña generada" value="<?php echo isset($_GET['password']) ? $_GET['password'] : ''; ?>" readonly required>
            </div>
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>
