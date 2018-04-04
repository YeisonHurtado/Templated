<!DOCTYPE HTML>
<!--
	Ex Machina by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Ex Machina by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">
	<?php 
			$error1 = false;
			$error2 = false;
			$error3 = false;
			$error4 = false;
			$error5 = false;
			$error6 = false;
			$error7 = false;
		if (isset($_POST['submit'])) {

			session_start();
			$_SESSION['first_name'] = $_POST['first_name'];
			$_SESSION['last_name'] = $_POST['last_name'];
			$_SESSION['born'] = $_POST['born'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['password'] = $_POST['password'];
			$_SESSION['asunto'] = $_POST['asunto'];
			
			if (empty($_SESSION['first_name'])) {
				$error1 = true;
			}

			if (empty($_SESSION['last_name'])) {
				$error2 = true;
			}

			if (empty($_SESSION['born'])) {
				$error3 = true;
			}

			if (!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {
				$error4 = true;
			}

			if (strlen($_SESSION['password']) < 6 && !empty($_SESSION['password'])) {
				$error5 = true;
			} else if (empty($_SESSION['password'])) {
				$error6 = true;
			}

			if (empty($_SESSION['asunto'])){
				$error7 = true;
			}

			if (!$error1 && !$error2 && !$error3 && !$error4 && !$error5 && !$error6 && !$error7) {
				header("Location: no-sidebar.php");
			}
		}
	?>
	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="index.php">Perfil</a></h1>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="index.php">Inicio</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
		
	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

	<!-- Main -->
		<div id="page">

			<!-- Extra -->
			<div id="marketing" class="container">
				<div class="title"><strong>Formulario de sugerencias</strong></div>
				<div class="form">
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
						<span>
							<label for="first_name">Nombre(s) </label>
								<input type="text" name="first_name" id="first_name" value="<?php if (isset($_POST['submit'])) echo $_SESSION['first_name']?>">
						</span>
						<span class="error">
							<?php 
								if ($error1) {
									echo "*Por favor, ingrese su nombre*";
								}
							?>
						</span>
						<span>
							<label for="last_name">Apellido(s) </label>
							<input type="text" name="last_name" id="last_name" value="<?php if (isset($_POST['submit'])) echo $_SESSION['last_name']?>">
						</span>
						<span class="error">
							<?php 
								if ($error2) {
									echo "*Por favor, ingrese su apellido*";
								}
							?>
						</span>
						<span>
							<label for="born" class="dateborn">F. Nacimiento</label>
							<input type="date" name="born" max="2000-12-31" value="<?php if (isset($_POST['submit'])) echo $_SESSION['born']?>">
						</span>
						<span class="error">
							<?php 
								if ($error3) {
									echo "*Por favor, indique su fecha de nacimiento*";
								}
							?>
						</span>
						<span>
							<label for="email">E-mail</label>
							<input type="text" name="email" id="email" value="<?php if (isset($_POST['submit'])) echo $_SESSION['email']?>">
						</span>
						<span class="error">
							<?php 
								if ($error4) {
									echo "*La dirección de correo es invalida*";
								}
							?>
						</span>
						<span>
							<label for="password">Contraseña</label>
							<input type="password" name="password" id="password" value="">
						</span>		
						<span class="error">
							<?php 
								if ($error5) {
									echo "*La clave debe tener más de 6 caracteres*";
								} elseif ($error6) {
									echo "*Por favor, ingrese una contraseña*";
								}
							?>
						</span>				
						<span class="preg">
							<label for="asunto">Asunto</label>
							<textarea name="asunto" placeholder="¡Dinos tu opinión!"><?php if (isset($_POST['submit']) && !$error7)echo  $_SESSION['asunto'];?></textarea>
						</span>
						<span class="error">
							<?php 
								if ($error7) {
									echo "*Por favor, escriba un mensaje*";
								}
							?>
						</span>

						<input type="submit" name="submit" value="Enviar">
					</form>
				</div>
			</div>
			<!-- /Extra -->
				
			<!-- Main -->
			<div id="main" class="container">
				<div class="row">
					<div class="6u">
						<section>
							<header>
								<h2>Perfil profesional</h2>
								<span class="byline">By Yeison Duvan Hurtado Arboleda</span>
							</header>
							<p><strong>Biografía</strong>: nací en Santiago de Cali (Valle del Cauca) el 7 de noviembre del 2000. Viví ocho años en Cali, luego me mudé a Jamundí.
							Termine el bachillerato en el año 2016. Actualmente estudio una tecnología de sistemas en el SENA</p><p><strong>Perfil profesional: </strong>Dureante está carrera obtuve conocimientos de sobre programación web como HTML, CSS, PHP. Además de JAVA. Y en bases de datos, en gestores de bases de datos
							como My SQL y ORACLE. </p>
							<a href="#" class="button">More Details</a>
						</section>
					</div>
					
					<div class="3u">
						<section class="sidebar">
							<img src="images/dbz.jpg" alt="">
						</section>
					</div>
				</div>
			</div>
			<!-- Main -->

		</div>
	<!-- /Main -->

	<!-- Featured -->
		<div id="featured">
			<div class="container">
				<div class="row">
					<section class="4u">
						<div class="box">
							<a href="#" class="image left"><img src="images/pics04.jpg" alt=""></a>
							<h3>Etiam posuere augue</h3>
							<p>Donec nonummy magna quis risus eleifend. </p>
							<a href="#" class="button">More</a>
						</div>
					</section>
					<section class="4u">
						<div class="box">
							<a href="#" class="image left"><img src="images/pics05.jpg" alt=""></a>
							<h3>Etiam posuere augue</h3>
							<p>Donec nonummy magna quis risus eleifend. </p>
							<a href="#" class="button">More</a>
						</div>
					</section>
					<section class="4u">
						<div class="box">
							<a href="#" class="image left"><img src="images/pics06.jpg" alt=""></a>
							<h3>Etiam posuere augue</h3>
							<p>Donec nonummy magna quis risus eleifend. </p>
							<a href="#" class="button">More</a>
						</div>
					</section>
				</div>
				<div class="divider"></div>
			</div>
		</div>
	<!-- /Featured -->

	<!-- Footer -->
		


	</body>
</html>