<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--CSS DE MATERIALIZE-->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

	<!--CSS DE LA PAGINA-->

	<link rel="stylesheet" href="../../css/home.css">

	<link rel="stylesheet" type="text/css" href="../../css/contact.css">

	<!-- CSS DE ANIMATE-->

	<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <!-- or -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto+Slab:700|Yellowtail" rel="stylesheet"> 

	<!--CDN DE FONT AWESOME ICONS-->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>
<body>
	

	<!--NAVBAR-->
	
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">Adoptapp</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="sass.html">Informacion</a></li>
					<li><a href="badges.html">Contacto</a></li>
					<li><a href="collapsible.html">Iniciar Sesion</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="container">
		<br>
		<br>

		<!-- FORMULARIO DE CONTACTO -->
	<div class="row">
		
		<h3 class="center">Contactanos!</h3>

	</div>

	<div class="row">
	<form action="soporte.php" method="post" name="form" class="form-box z-depth-1">
		<div class="input-field col s6">
          <input id="name" name="name" type="text" class="validate">
          <label for="name">Nombre completo:</label>
        </div>

		<div class="input-field col s6">
          <input id="phone" name="phone" type="text" class="validate">
          <label for="phone">Telefono / Celular:</label>
    	</div>
	</div>
	<div class="row">
    	<div class="input-field col s6">
          <input id="email" name="email" type="text" class="validate">
          <label for="email">Correo Electronico:</label>
    	</div>

    	<div class="input-field col s6">
          <input id="asunto" name="asunto" type="text" class="validate">
          <label for="asunto">Asunto:</label>
    	</div>
	</div>

	<div class="row">
    	<div class="input-field col s12">
          <textarea id="msg" name="msg" class="materialize-textarea"></textarea>
          <label for="msg">Mensaje</label>
        </div>
	</div>
	<div class="row">		
	<input type="submit" name="submit" class="enviar btn">
	</div>
</form>
</div>

	<!--FOOTER-->


	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Informacion Basica:</h5>
					<p class="grey-text text-lighten-4">Somos un grupo de proyecto final del colegio ORT de 6to B, conformado por Juan Giambra, Tobias Tuyzus y Valentin Orellano.</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Redes:</h5>
					<ul>
						<li><a class="grey-text text-lighten-3 pulse" href="#!"><i class="fab fa-instagram"></i>

 Juani Giambra</a></li>
						<li><a class="grey-text text-lighten-3 pulse" href="#!"><i class="fab fa-instagram"></i>

 Valentin Orellano</a></li>
						<li><a class="grey-text text-lighten-3 pulse" href="#!"><i class="fab fa-instagram"></i>

 Emiliano Maneiro</a></li>
						<li><a class="grey-text text-lighten-3 pulse" href="#!"><i class="fab fa-instagram"></i>

 Proyecto Final</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				© The TIC Company
				<a class="grey-text text-lighten-4 right" href="#!">PLU.US</a>
			</div>
		</div>
	</footer>


	<!--SCRIPTS-->

	<!--CDN DE JQUERY-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<!--CDN DE MATERIALIZE-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>