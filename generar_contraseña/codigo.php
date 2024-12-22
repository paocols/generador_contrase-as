<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Contraseñas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            color: #333;
        }
        .password {
            font-size: 20px;
            margin: 15px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
            display: inline-block;
            min-width: 280px;
        }
        button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Generador de Contraseñas</h1>
        <div class="password">
            <?php
                function generarContrasena() {
                    // Caracteres permitidos
                    $letrasMinusculas = 'abcdefghijklmnopqrstuvwxyz';
                    $letrasMayusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $numeros = '0123456789';
                    $caracteresEspeciales = '!@#$%^&*()_+-=[]{}|;:,.<>?';
                    $todosLosCaracteres = $letrasMinusculas . $letrasMayusculas . $numeros . $caracteresEspeciales;

                    // Longitud aleatoria entre 8 y 12 caracteres
                    $longitud = rand(8, 12);

                    // Generar la contraseña
                    $contrasena = [];
                    $contrasena[] = $letrasMinusculas[rand(0, strlen($letrasMinusculas) - 1)];
                    $contrasena[] = $letrasMayusculas[rand(0, strlen($letrasMayusculas) - 1)];
                    $contrasena[] = $numeros[rand(0, strlen($numeros) - 1)];
                    $contrasena[] = $caracteresEspeciales[rand(0, strlen($caracteresEspeciales) - 1)];

                    // Completar con caracteres aleatorios
                    for ($i = 4; $i < $longitud; $i++) {
                        $contrasena[] = $todosLosCaracteres[rand(0, strlen($todosLosCaracteres) - 1)];
                    }

                    // Mezclar los caracteres
                    shuffle($contrasena);

                    // Unir los caracteres en una cadena y devolver
                    return implode('', $contrasena);
                }

                // Mostrar la contraseña generada
                echo generarContrasena();
            ?>
        </div>
        <form method="POST">
            <button type="submit">Generar Nueva Contraseña</button>
        </form>
    </div>
</body>
</html>
