<?php /* Smarty version Smarty-3.0.9, created on 2015-10-09 09:59:56
         compiled from "C:/wamp/www/glight/templates\registrar_vivienda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16475561773fca307f2-75980200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6bfdded2fe86e50125ca9fbdd216d8c2adcbe03' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\registrar_vivienda.tpl',
      1 => 1444369879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16475561773fca307f2-75980200',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
<form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
registrar_vivienda.php?option=add" method="post">
<table width="100%" border="0" cellpadding="0" cellspacing="5">
<tr><td>
<b>Agregar un vivienda</b><br /><br />
<b>Ingrese el codigo:</b> <input type="number" name="codigo" /><br />
<b>Ingrese el estrato:</b> <input type="number" name="estrato" /><br />
<b>Ingrese el direccion:</b> <input type="text" name="direccion" /><br />
<b>Informacion del propietario:</b>  /><br />
<b>Ingrese el cedula:</b> <input type="number" name="cedula" /><br />
<b>Ingrese el nombre:</b> <input type="text" name="nombre" /><br />

<input class="btn btn-primary" type="submit" value="Registrar" />
</td></tr>
</table>
</form>
</div>
