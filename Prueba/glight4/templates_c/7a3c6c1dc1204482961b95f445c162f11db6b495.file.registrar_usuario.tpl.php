<?php /* Smarty version Smarty-3.0.9, created on 2015-11-03 05:37:44
         compiled from "C:/wamp/www/glight/templates\registrar_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2829556383a187854d1-82462720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a3c6c1dc1204482961b95f445c162f11db6b495' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\registrar_usuario.tpl',
      1 => 1446525412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2829556383a187854d1-82462720',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
		<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
c_registrar_usuario.php?option=registrar" method="post">
			<center><h1>Registrar usuario</h1>
			<label>(*) Nombre: <input type="text" name="nombre" required/></label>
			<label>(*) C&eacute;dula:<input type="text" name="cedula" required/></label>
			<label>(*) Contrase&ntilde;a:</b> <input type="password" name="contrasena" required/></label>
			<label>(*) Sexo
				<select name="sexo">
					<option value="M">M</option> 
					<option value="F">F</option> 
				</select>
			</label>
			<label>Ocupaci&oacute;n:<input type="text" name="ocupacion"/></label>					                    
			
			<br />
			<a class="button" href="#">Atrás</a>
			<input class="btn btn-primary" type="submit" value="Registrar"/>
			<input class="btn btn-primary" type="reset"  value="Borrar">
			</center>

		</form>