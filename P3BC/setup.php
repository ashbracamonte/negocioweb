<!DOCTYPE html>
<html>
    <head>
        <title>Creando bases de datos</title>
    </head>
    <body>
        
        <h3>Configurando ...</h3>

<?php
    require_once 'functions.php';

    createTable('users',
                'user VARCHAR(16),
                pass VARCHAR(16),
                INDEX(user(6))');
    
    createTable('cita',
                'user VARCHAR(16),
                direccion TEXT,
                area VARCHAR(16),
                fecha DATE,
                INDEX(user(6))');
?>

        <br>... listo!.
        <br>
        <a class='nav-link' data-transition='slide' href='index.php'>Ir al sistema</a>
    </body>
</html>