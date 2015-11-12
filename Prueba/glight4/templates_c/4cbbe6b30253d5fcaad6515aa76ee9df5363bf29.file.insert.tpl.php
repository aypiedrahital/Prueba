<?php /* Smarty version Smarty-3.0.9, created on 2015-10-07 18:03:51
         compiled from "C:/wamp/www/glight/templates\insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16894561542671a5b98-79312941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cbbe6b30253d5fcaad6515aa76ee9df5363bf29' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\insert.tpl',
      1 => 1444089472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16894561542671a5b98-79312941',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
insert.php?option=add" method="post">
<table width="100%" border="0" cellpadding="0" cellspacing="5">
<tr><td>
<b>Agregar un empleado</b><br /><br />
<b>Ingrese el nombre:</b> <input type="text" name="name" /><br />
<b>Ingrese el id:</b> <input type="text" name="id" /><br />
<b>Ingrese el salario:</b> <input type="text" name="salary" /><br />
<b>Ingrese el jefe:</b> <input type="text" name="boss" /><br />
<input class="btn btn-primary" type="submit" value="Registrar" />
</td></tr>
</table>
</form>
</div>
