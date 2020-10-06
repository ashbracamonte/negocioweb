<?php
require_once 'session.php';
echo'
<!DOCTYPE html>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>BEAUTIFUL CREATIONS</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main2.css">
	<link rel="stylesheet" href="style.css">
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>


		
</head>

<body class="is-preload">';

	if($loggedin)
	{
		sesión();
	}
	
	echo'
	</h1>

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Panel (Banner) -->
			<section class="panel banner right">
				<div class="content color0 span-3-75" id="cero">
					<h1 class="major">BIENVENIDO<br />
						A BEAUTIFUL CREATIONS</h1>
					<p>Somos un equipo llamado <strong>Beautiful Creations</strong>, dispuestos a remodelar su casa u
						oficina, trabajando en conjunto con usted para hacer que la remodelacion sea de su agrado
						haciendo de este su lugar favorito en el planeta.</p>
					<ul class="actions">';
					if($loggedin)
					{
						echo'
						<li>
							<a href="logout.php"> <h4>Salir </h4></a>
						</li>
						';
					}
					echo'
						<li>
							<a href="#first" class="button primary color1 circle icon solid fa-angle-right">Next</a>
						</li>
					</ul>
				</div>
				<div class="image filtered span-1-75" data-position="25% 25%">
					<img src="images/imagen.jpeg" alt="" />
				</div>
			</section>

			<!-- Panel (Spotlight) -->
			<section class="panel spotlight medium right" id="first">
				<div class="content span-7">
					<h2 class="major">NUESTRO OBJETIVO.</h2>
					<p>Crear espacios con valor que reflejen la comunicación de principios y calidad estética de
						nuestros clientes.</p>

					<br>
					<h2> VISION.</h2>
					<br>
					<p> En Beautiful Creations, tenemos la Visión de consolidarnos como una de las principales empresas
						de Arquitectura y Construcción en la República Mexicana. Ser reconocidos por la calidad de
						nuestro trabajo, el profesionalismo de nuestros empleados y nuestro compromiso con la seguridad
						y necesidades de nuestros clientes. </p>
						<ul class="actions">
							<li><a href="#second" class="button primary color1 circle icon solid fa-angle-right">Next</a>
							</li>
						</ul>
				</div>
				<div class="image filtered tinted" data-position="top left">
					<img src="images/unnamed1.jpg" alt="" />
				</div>
				
			</section>

			<!-- Panel -->
			<section class="panel color1" id="second">
				<div class="intro joined">
					<h2 class="major"> VALORES.</h2>
					<ul>
						<li>Responsabilidad: En Beautiful Crations cumplimos con los compromisos en el tiempo
							establecido y con
							garantía de nuestro trabajo.

						</li>

						<li>Honestidad: Contamos con profesionales entrenados y calificados, que garanticen la seguridad
							de nuestro cliente.</li>

						<li>Calidad: En Red tu Casa utilizamos los mejores materiales de construcción para brindarle
							garantía y valor a tu patrimonio.
						</li>
					</ul>
					<ul class="actions">
						<li><a href="#third" class="button primary color1 circle icon solid fa-angle-right">Next</a>
						</li>
					</ul>
					
				</div>
				<div class="inner">

				</div>
			</section>

			<!-- Panel (Spotlight) -->
			<section class="panel spotlight large left">
				<div class="intro joined">

					<h2 class="major" id = "third">ETAPAS DEL PROYECTO</h2>
					<ul>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						
					</ul>
					<ul class="actions">
						<li><a href="#quarter" class="button primary color1 circle icon solid fa-angle-right">Next</a>
						</li>
					</ul>


				</div>
				<div class="image filtered tinted" data-position="top right">
					<img src="images/ashh.jpg" alt="" />
				</div>
			</section>

			<!-- Panel -->
			<section class="panel">
				<div class="intro color2 " id="quarter">
					<h2 class="major">NUESTROS TRABAJOS</h2>
					<p>Aqui hay algunos de nuestros mejores trabajos, con estilos variados y toques unicos hechos por
						los mejores arquitectos y diseñadores.
						<br>
						<br>
					</p>
					<h4>Aprieta el boton si deseas saltar las imagenes de nuestros trabajos.</h4>
						<ul class="actions">
							<li><a href="#session" class="button primary color1 circle icon solid fa-angle-right">Next</a>
							</li>
						</ul>
				</div>
				<div class="gallery">
					<div class="group span-3">
						<a class="image filtered span-3" data-position="bottom"><img src="images/imagenn.jpeg"
								alt="" /></a>
						<a class="image filtered span-1-5" data-position="center"><img src="images/room1.jpg"
								alt="" /></a>
						<a class="image filtered span-1-5" data-position="bottom"><img src="images/comedor.jpg"
								alt="" /></a>
					</div>
					<a class="image filtered span-2-5" data-position="top"><img src="images/sala.jpg" alt="" /></a>
					<div class="group span-4-5">
						<a class="image filtered span-3" data-position="top"><img src="images/biblioteca.jpg"
								alt="" /></a>
						<a class="image filtered span-1-5" data-position="center"><img src="images/salon.jpg"
								alt="" /></a>
						<a class="image filtered span-1-5" data-position="bottom"><img src="images/xx.jpg" alt="" /></a>
						<a class="image filtered span-3" data-position="top"><img src="images/oficina.jpg" alt="" /></a>
					</div>
					<a class="image filtered span-2-5" data-position="right"><img src="images/salon2.jpg" alt="" /></a>
				</div>
			</section>

			<!-- Panel -->

			';
			$error = $user = $pass = "";

			if (isset($_POST['user']))
			{
				$user = sanitizeString ($_POST['user']);
				$pass = sanitizeString($_POST['pass']);
				
				if($user == "" || $pass == "")
				{
					$error = 'No fue llenado correctamente.';
				}
				else
				{
					$result = queryMySQL("SELECT user, pass from users
					WHERE user = '$user' AND pass = '$pass'");
				
					if ($result->num_rows == 0)
					{
						$error = "Intento de iniciar sesion erroneo.";
					}
					else
					{
						$_SESSION['user'] = $user;
						$_SESSION['pass'] = $pass;
						$error = "<div class='center'>Usted ha iniciado sesión. <a href='index.php'>
						click aquí</a> para refrescar la página";
					}
				}
			}

        if (isset($_SESSION['userR'])) destroySession();

		if (isset($_POST['userR'])) 
		{
            $user = sanitizeString($_POST['userR']);
            $pass = sanitizeString($_POST['passR']);

        	if($user == "" || $pass == "")
            	$error = 'No se lleno correctamente los datos.<br><br>';
			else 
			{
            	$result = queryMysql("SELECT * FROM users WHERE user='$user'");
        
            	if ($result->num_rows)
                	$error = 'El usuario ya existe.<br><br>';
				else 
				{
                	$account = mysqli_query($conexion, "INSERT INTO users VALUES('$user', '$pass')");
					if($account)
					{
						$error = 'Cuenta creada';
					}
            	}
        	}
		}
		
if(!$loggedin)
{
echo<<<_END

			<section class="panel color2" id="session">
				<div class="intro joined">
					<h2 class="major"> Inicia sesión <br>O regístrate</h2>
					<div class="btn-group" role="group" aria-label="Basic example">
						<button type="button" class="btn btn-primary"  onclick="mostrar(), ocultar2()">Entrar</button>
						<button type="button" class="btn btn-primary"  onclick="mostrar2(), ocultar()">Registro</button>
					</div>
					<br>
					<form id="login" method="POST" action="index.php">
						<h4>INICIAR SESIÓN</h4>
						<label></label>
						<span class = "error">$error</span>
						<div class="form-group">
						  <label for="exampleInputEmail1">Usuario</label>
						  <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
						  <label for="exampleInputPassword1">Contraseña</label>
						  <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Iniciar sesión</button>
					</form>

					<form id="register" method="POST" action="index.php">
						<h4>REGISTRARSE</h4>
						<div class="form-group">
						  <label for="exampleInputEmail1">Usuario</label>
						  <input type="text" maxlength='16' name="userR" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
						  <label for="exampleInputPassword1">Contraseña</label>
						  <input type="text" maxlength='16' name="passR" class="form-control" id="exampleInputPassword1">
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Registrarse</button>
					</form>
				</div>
				<div class="inner">

				</div>
			</section>

_END;
}
		if($loggedin)
		{
			echo'
			<section class="panel color2-alt">
				<div class="intro color2" >
					<h2 class="major">CREA UNA CITA!</h2>
					<p> CREA UNA CITA Y NOSOTROS NOS ENCARGAREMOS DE LA REMODELACIÓN
					<br>
					<br>
				</p>

						<h4>Aprieta el boton para regresar al inicio.</h4>

						<ul class="actions">
							<li><a href="#cero" class="button primary color1 circle icon solid fa-angle-left">Next</a>
							</li>
						</ul>
						
				</div>
				<div class="inner columns divided">
					<div class="span-3-25">
						<form method="post" action="index.php">
							<div class="fields">
								<div class="field half">
									<label for="email">Correo electronico (opcional).</label>
									<input type="email" name="email" id="email">
								</div>
								<div class="field half">
									<label for="direccion">Direccion</label>
									<input type="text" name="direccion" id="direccion" required>
								</div>
								<div class="field half">
									<label for="area">Área</label>
									<input type="text" name="area" id="area" required>
								</div>
								<div class="field half">
									<label for="fecha">Fecha</label>
									<input style="color:black" type="date" name="fecha" id="fecha" required>
								</div>
							</div>
							<ul class="actions">
								<li><input type="submit" value="Enviar" class="button primary"></li>
							</ul>
						</form>';
						if(isset($noti))
						{
							echo $noti;
						}
						echo'
					</div>
					<div class="span-1-5">
						<ul class="contact-icons color1" id="fifth">
							<li class="icon brands fa-twitter"><a href="#">@Beautiful_Crations</a></li>
							<br>
							<li class="icon brands fa-facebook-f"><a href="#">facebook.com/BC</a></li>
							<br>
							<li class="icon brands fa-instagram"><a href="#">@Beautiful_Crations</a></li>
							
						</ul>
					</div>
				</div>
			</section>
			';
		}
		else
		{
			echo'
			<section class="panel color4-alt">
				<div class="intro color4" >
					<h2 class="major">CONTACTANOS!</h2>
					<p> Puedes cotactarnos por medio de nuestras redes sociales o agendar una cita llenando el
						formulario y nuestro equipo llegará a para un buen trabajo!
					<br>
					<br>
				</p>

						<h4>Aprieta el boton para regresar al inicio.</h4>

						<ul class="actions">
							<li><a href="#cero" class="button primary color1 circle icon solid fa-angle-left">Next</a>
							</li>
						</ul>
						
				</div>
				<div class="inner columns divided">
					<div class="span-3-25">
						<form method="post" action="index.php">
							<div class="fields">
								<div class="field half">
									<label for="name">Nombre completo</label>
									<input type="text" name="name" id="name" required>
								</div>
								<div class="field half">
									<label for="email">Correo electronico (opcional).</label>
									<input type="email" name="email" id="email">
								</div>
								<div class="field half">
									<label for="direccion">Direccion</label>
									<input type="text" name="direccion" id="direccion" required>
								</div>
								<div class="field half">
									<label for="area">Área</label>
									<input type="text" name="area" id="area" required>
								</div>
								<div class="field half">
									<label for="fecha">Fecha</label>
									<input style="color:black" type="date" name="fecha" id="fecha" requires>
								</div>
							</div>
							<ul class="actions">
								<li><input type="submit" value="Enviar" class="button primary"></li>
							</ul>
						</form>
					</div>
					<div class="span-1-5">
						<ul class="contact-icons color1" id="fifth">
							<li class="icon brands fa-twitter"><a href="#">@Beautiful_Crations</a></li>
							<br>
							<li class="icon brands fa-facebook-f"><a href="#">facebook.com/BC</a></li>
							<br>
							<li class="icon brands fa-instagram"><a href="#">@Beautiful_Crations</a></li>
							
						</ul>
					</div>
				</div>
			</section>
			';
		}

		if(!empty($_POST['direccion']))
		{
			if($loggedin)
			{
				$name = $_SESSION['user'];
				$adress = $_POST['direccion'];
				$area = $_POST['area'];
				$date = $_POST['fecha'];

				$query = mysqli_query($conexion, "INSERT INTO xd VALUES('$name','$adress','$area','$date')");
			}
			else
			{
				$name = $_POST['name'];
				$adress = $_POST['direccion'];
				$area = $_POST['area'];
				$date = $_POST['fecha'];

				$query = mysqli_query($conexion, "INSERT INTO cita VALUES('$name','$adress','$area','$date')");
			}
		}
		else
		{
			
		}

		echo'




			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/form.js"></script>
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="js/scrollspy.js"></script>

</body>

</html>
';

?>