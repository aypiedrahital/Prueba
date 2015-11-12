<?php /* Smarty version Smarty-3.0.9, created on 2015-11-07 23:57:14
         compiled from "C:/wamp/www/glight/templates\crear_plan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20250563e81ca456cf3-26543346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8247a7a182a4c16a7eb5a1f08baea612378da998' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\crear_plan.tpl',
      1 => 1446647666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20250563e81ca456cf3-26543346',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
c_crear_plan.php?option=crear" method="post">
			<center><h1>Crear plan</h1>
			<label>(*) Nombre: <input type="text" name="nombre" <?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?> value="<?php echo $_smarty_tpl->getVariable('object')->value->nombre;?>
" <?php }?> autocomplete="off" required/></label>
			<label>(*) Costo:<input type="text" name="costo" placeholder="124213" <?php if (isset($_smarty_tpl->getVariable('object',null,true,false)->value)){?> value="<?php echo $_smarty_tpl->getVariable('object')->value->costo;?>
" <?php }?> autocomplete="off" required/></label>
			<label>(*) Vigencia
				<select name="vigencia">
				<option value="1">1 mes</option> 
				<option value="6">6 meses</option>
				<option value="12">12 meses</option>
				required </select>
			</label>
			<a class="button" href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
login.php">Atrás</a>
			<input class="btn btn-primary" type="submit" value="Crear"/>
			<input class="btn btn-primary" type="reset"  value="Borrar"></center>

	</form>
