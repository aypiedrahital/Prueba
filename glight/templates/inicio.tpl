{if isset($smarty.session.persona)}
<html>
	<head>
		<title>Encuestando</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets2/css/main.css" />
	</head>

	

	<body id="top">


		<!-- Header -->
			<header id="header">
				{if $smarty.session.persona.sexo == "M"}
					<img src="images/Male.png" class="image avatar" alt="" /></a>
				
				{elseif $smarty.session.persona.sexo == "F"}
					<img src="images/Female.png" class="image avatar" alt="" /></a>

				{else $smarty.session.persona.sexo == null}
					<img src="images/admin.png" class="image avatar" alt="" /></a>
				{/if}
            {if isset($smarty.session.persona) && $smarty.get.option neq 'logout'} 
				<h4>Nombre: {$smarty.session.persona.nombre}<h4>
				<h4>Cedula: {$smarty.session.persona.cedula}<h4>
				<h4>Rol: {$smarty.session.persona.rol}<h4>
				{if $smarty.session.persona.rol == "representante"}
					<nav>
						<a href="{$gvar.l_global}suscribir_empresa.php">Suscribir empresa</a> <br />
						<a href=#>Crear encuesta</a><br />
						<a href=#>Realizar pago</a><br />
						<a href=#>Eliminar producto</a><br />
						<a href=#>Agregar pregunta</a><br />
						<a href=#>Buscar producto</a><br />
						<a href=#>Crear producto</a><br />
						<a href=#>Editar producto</a><br />
						<a href="{$gvar.l_global}login.php?option=logout">{$gvar.n_logout}</a>
					</nav>
				{/if}
				
				{if $smarty.session.persona.rol == "usuario"}
					<nav>
						<a href="{$gvar.l_global}c_buscar_encuesta.php">Buscar encuesta</a> <br />
						<a href=#>Realizar canje</a><br />
						<a href=#>Responder encuesta</a><br />
						<a href="{$gvar.l_global}login.php?option=logout">{$gvar.n_logout}</a>
				{/if}
			
				{if $smarty.session.persona.rol == "administrador"}
					<nav>
						<a href="{$gvar.l_global}c_crear_plan.php">Crear plan</a> <br />
						<a href="{$gvar.l_global}login.php?option=logout">{$gvar.n_logout}</a>
					</nav>
				{/if}
			
			{/if}
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Encuestando<br /></h2>
							
						</header>
						<p style="text-align: justify;">Encuestando le ofrece su servicio a grandes y medianas empresas que estén interesadas en 
						conocer el mercado Colombiano a través de nuestro sistema de encuestas, estas serán diseñadas en conjunto con nuestros expertos 
						en el área de psicometría*, con el fin de garantizar veracidad en los resultados obtenidos; para esto, el representante de cada 
						empresa deberá suscribirla a uno de nuestros planes, los cuales ofrecen variedad en costo, características y duración.</p>

                        <p  style="text-align: justify;">* La psicometría es una disciplina de la psicología cuya finalidad intrínseca es la de aportar 
						soluciones al problema de la medida en cualquier proceso de investigación. Esta incluye teorías sobre las mediciones en el área 
						psicológica, encargándose de describirlas, categorizarlas, evaluar su utilidad y precisión, así como la búsqueda de nuevos métodos,
						teorías y modelos matemáticos que permitan mejores instrumentos de medida.</p>
	
					</section>
             </div>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

{else}
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
	<link rel="stylesheet" href="css/style2.css "/>

    
    
    
  </head>

  <body>

   <div class="login-wrap">
  <h2>Login</h2>
  
  <div class="form">
    <form action="{$gvar.l_global}login.php?option=login" method="post" >
    <input type="text" placeholder="Usuario(*)" name="nombre" />
    <input type="password" placeholder="Contraseña(*)" name="contrasena" />
    <button action="{$gvar.l_global}login.php?option=login" method="post"> Log in </button>
    <a href="{$gvar.l_global}c_registrar_usuario.php">Registrar usuario</a><br />
	<a href="{$gvar.l_global}registrar_representante.php">Registrar representante</a><br />
	</form>
  </div>
</div>
    <script src='https://code.jquery.com/jquery-1.10.0.min.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>
{/if}
