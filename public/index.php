<?php
// Archivo principal de la aplicación que carga las dependencias necesarias
require_once __DIR__ . '/../app/pdo.php';
require_once __DIR__ . '/../app/utils.php';
require_once __DIR__ . '/../app/auth.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Planificacion De Inventario</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                padding: 2rem;
            }
            .success {
                color: green;  
            }
        </style>
    </head>
    <body>
        <h1>Gestion de Inventario</h1>
        <p>
        <!-- el echo e() es mostrar texto seguro si se cargan las utilidades -->
        <?php 
        echo e("sistema de inventario iniciado correctamente");
        ?>
        </p>
        <!-- Verificar la conexión a la base de datos -->
        <?php if (isset($pdo)): ?>
            <p style="color: green;">Conexión a la base de datos exitosa.</p>
        <?php endif; ?>
    </body>
</html>