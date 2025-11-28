<?php
require_once __DIR__ . '/../app/pdo.php';

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
        <h1>Bienvenido al Gestor de Inventario</h1>
        <?php if ($pdo): ?>
            <p class="success">Conexión a la base de datos exitosa.</p>
            <p>Puedes comenzar a gestionar tu inventario.</p>
            <?php endif; ?>
    </body>
</html>