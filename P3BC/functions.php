<?php
    $host = 'localhost';
    $db = 'creations';
    $user = 'root';
    $pass = '';
    
    $conexion = new mysqli($host, $user, $pass, $db);
    if ($conexion->connect_error) die("Fatal Error");

    function createTable($name, $query)
    {
        queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
        echo "La tabla '$name' fue creada o ya existe.<br>";
    }

    function queryMysql($query)
    {
        global $conexion;
        $result = $conexion->query($query);
        if (!$result) die("Fatal Error");
        return $result;
    }

    function destroySession()
    {
        $_SESSION=array();

        if (session_id() != "" || isset($_COOKIE[session_name()]))
            setcookie(session_name(), '', time()-2592000, '/');
            
        session_destroy();
    }
    
    function sanitizeString($var)
    {
        global $conexion;
        $var = strip_tags($var);
        $var = htmlentities($var);
        if (get_magic_quotes_gpc())
            $var = stripslashes($var);
        return $conexion->real_escape_string($var);
    }
?>