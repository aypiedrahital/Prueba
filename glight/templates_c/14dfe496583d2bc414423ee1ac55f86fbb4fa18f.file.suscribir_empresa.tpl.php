<?php /* Smarty version Smarty-3.0.9, created on 2015-11-07 23:56:06
         compiled from "C:/wamp/www/glight/templates\suscribir_empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14789563e81865b2eb9-79492027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14dfe496583d2bc414423ee1ac55f86fbb4fa18f' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\suscribir_empresa.tpl',
      1 => 1446646873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14789563e81865b2eb9-79492027',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
		<div class="square">
			<center><form id="signup-form" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
suscribir_empresa.php?option=suscribir" method="post">
				<table width="100%" border="0" cellpadding="0" cellspacing="5">
					<tr><td>					
						<center><b><h1>Agregar una empresa</h1></b><br />
						<b>(*) Nombre:</b> <input type="text" name="nombre" <?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?> value="<?php echo $_smarty_tpl->getVariable('object')->value->nombre;?>
" <?php }?> autocomplete="off" required/><br />
						<b>(*) NIT:</b> <input type="text" name="nit" <?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?> value="<?php echo $_smarty_tpl->getVariable('object')->value->nit;?>
" <?php }?> autocomplete="off" required/><br />
						<b>(*) Direcci&oacuten:</b> <input type="text" name="direccion" <?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?> value="<?php echo $_smarty_tpl->getVariable('object')->value->direccion;?>
" <?php }?> autocomplete="off" required/><br />
						<b>(*) Tel&eacutefono:</b> <input type="text" name="telefono" <?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?> value="<?php echo $_smarty_tpl->getVariable('object')->value->telefono;?>
" <?php }?> autocomplete="off" required/><br />
						<input type="hidden" name="persona" value="<?php echo $_smarty_tpl->getVariable('persona')->value;?>
">
						<br />						
						<!--<b>Ingrese el representante:</b> <input type="text" name="representante" <?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?> value="<?php echo $_smarty_tpl->getVariable('object')->value->representante;?>
" <?php }?>/><br />-->
						<a class="button" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
login.php">Atrás</a>												
						<input type="submit" value="Suscribir"/>
						<input type="reset"  value="Borrar"></center>
					</td></tr></table>
			</form></center>
		</div>
		
