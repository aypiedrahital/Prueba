<!DOCTYPE html>
<html>
<head>
		<title>Registrar representante</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>
		<div class="square">
			<center><form id="signup-form" action="{$gvar.l_global}registrar_representante.php?option=registrarRepresentante" method="post">
				<table width="100%" border="0" cellpadding="0" cellspacing="5">
					<tr><td>					
						<center><b><h1>Ingrese los siguientes datos</h1></b><br />
						<b>Nombre(*):</b> <input type="text" name="nombre" {if isset($object)} value="{$object->nombre}" {/if}/><br />
						<b>C&eacutedula(*):</b> <input type="text" name="cedula" {if isset($object)} value="{$object->cedula}" {/if}/><br />
						<b>Contraseña(*):</b> <input type="password" name="contrasena" {if isset($object)} value="{$object->contrasena}" {/if} /><br />						
						<input type="submit" value="Registrar "/></center>
					</td></tr></table>
			</form></center>
		</div>
		
</body>

<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled.</li><li>Credits: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer>
</html>