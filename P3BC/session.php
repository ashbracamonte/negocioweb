<?php 
  session_start();
  
    require_once 'functions.php';
    $userstr = 'Welcome Guest';
    if (isset($_SESSION['user'])) {
        $user     = $_SESSION['user'];
        $loggedin = TRUE;
        $userstr  = "Sesión: $user";
    }
    else $loggedin = FALSE;
    function sesión()
    {
        echo"
            <h1 style='color:rgb(233, 88, 172);; position: fixed;'>".$GLOBALS['userstr']."</h1>
        ";
    }
?>