<?php /* Smarty version Smarty-3.0.9, created on 2015-10-06 00:16:38
         compiled from "C:/wamp/www/glight/templates\constructor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242475612f6c68d3bb1-19502839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dbb02f42223ce8ed6f6a8d17b36dc8084bbdaf5' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\constructor.tpl',
      1 => 1444083367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242475612f6c68d3bb1-19502839',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<table border="0" width="100%" cellpadding="0" cellspacing="30">
<tr><td><b>INFORMACION DE LOS EMPLEADOS</br></td></tr>

<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('listclerk')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
<tr><td><b>Nombre:</b> <?php echo $_smarty_tpl->getVariable('listclerk')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('name');?>
<br />
	
    <b>ID:</b> <?php echo $_smarty_tpl->getVariable('listclerk')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('id');?>
<br />
    <b>Salario:</b> <?php echo $_smarty_tpl->getVariable('listclerk')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('salary');?>

    </td></tr>
<?php endfor; endif; ?>
<tr><td>    <b></b></td></tr>
<tr><td><b>Mayor salario:</b> <?php echo $_smarty_tpl->getVariable('mayor_salario')->value;?>
 </td></tr>
<tr><td><b>Salario promedio:</b> <?php echo $_smarty_tpl->getVariable('salario_promedio')->value;?>
 </td></tr>

</table>