<?php /* Smarty version Smarty-3.0.9, created on 2015-10-09 10:57:12
         compiled from "C:/wamp/www/glight/templates\inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1478856178168475b91-62840882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4a3eaf16360bbe35e095a939892c4a34c8d351b' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\inicio.tpl',
      1 => 1444381028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1478856178168475b91-62840882',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
<table width="100%" border="0" cellpadding="0" cellspacing="5">
    <tr>
        
        <?php if (!is_empty($_smarty_tpl->getVariable('mensaje')->value)){?> 
        <h4 style="color:green"><?php echo $_smarty_tpl->getVariable('mensaje')->value;?>
</h4><br/>
            
        <td><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
registrar_vivienda.php" > Registrar vivienda </a></td>
        <td><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
Listar_vivienda.php" > Listar viviendas </a></td>
        <td><a href="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
propietario_rico.php" > Propietarios ricos </a></td>
            
        <?php }?>
    </tr>
</table>
</div>