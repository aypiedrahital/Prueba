<?php /* Smarty version Smarty-3.0.9, created on 2015-11-07 03:48:24
         compiled from "C:/wamp/www/glight/templates\inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27438563d667873db17-82016909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4a3eaf16360bbe35e095a939892c4a34c8d351b' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\inicio.tpl',
      1 => 1446864501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27438563d667873db17-82016909',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_SESSION['persona'])){?>
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
				<?php if ($_SESSION['persona']['sexo']=="M"){?>
					<img src="images/Male.png" class="image avatar" alt="" /></a>
				
				<?php }elseif($_SESSION['persona']['sexo']=="F"){?>
					<img src="images/Female.png" class="image avatar" alt="" /></a>

				<?php }else{ ?>
					<img src="images/admin.png" class="image avatar" alt="" /></a>
				<?php }?>
            <?php if (isset($_SESSION['persona'])&&$_GET['option']!='logout'){?> 
				<h4>Nombre: <?php echo $_SESSION['persona']['nombre'];?>
<h4>
				<h4>Cedula: <?php echo $_SESSION['persona']['cedula'];?>
<h4>
				<h4>Rol: <?php echo $_SESSION['persona']['rol'];?>
<h4>
				<?php if ($_SESSION['persona']['rol']=="representante"){?>
					<nav>
						<a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
suscribir_empresa.php">Suscribir empresa</a> <br />
						<a href=#>Crear encuesta</a><br />
						<a href=#>Realizar pago</a><br />
						<a href=#>Eliminar producto</a><br />
						<a href=#>Agregar pregunta</a><br />
						<a href=#>Buscar producto</a><br />
						<a href=#>Crear producto</a><br />
						<a href=#>Editar producto</a><br />
						<a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
login.php?option=logout"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_logout'];?>
</a>
					</nav>
				<?php }?>
				
				<?php if ($_SESSION['persona']['rol']=="usuario"){?>
					<nav>
						<a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
c_buscar_encuesta.php">Buscar encuesta</a> <br />
						<a href=#>Realizar canje</a><br />
						<a href=#>Responder encuesta</a><br />
						<a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
login.php?option=logout"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_logout'];?>
</a>
				<?php }?>
			
				<?php if ($_SESSION['persona']['rol']=="administrador"){?>
					<nav>
						<a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
c_crear_plan.php">Crear plan</a> <br />
						<a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
login.php?option=logout"><?php echo $_smarty_tpl->getVariable('gvar')->value['n_logout'];?>
</a>
					</nav>
				<?php }?>
			
			<?php }?>
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

<?php }else{ ?>
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
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
login.php?option=login" method="post" >
    <input type="text" placeholder="Usuario(*)" name="nombre" />
    <input type="password" placeholder="Contraseña(*)" name="contrasena" />
    <button action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
login.php?option=login" method="post"> Log in </button>
    <a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
c_registrar_usuario.php">Registrar usuario</a><br />
	<a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
registrar_representante.php">Registrar representante</a><br />
	</form>
  </div>
</div>
    <script src='https://code.jquery.com/jquery-1.10.0.min.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>
<?php }?>
