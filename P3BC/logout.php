    <?php
        require_once 'session.php';

        if (isset($_SESSION['user']))
        {
            destroySession();
            echo "<br><div class='center'>Has cerrado sesion. Por favor
                <a data-transition='slide' href='index.php'> click aquí </a>
                para recargar la pagina.</div>";
        }
        else echo "<div class='center'>You cannot log out because
                    you are not logged in</div>";
    ?>
        </div>
    </body>
</html>