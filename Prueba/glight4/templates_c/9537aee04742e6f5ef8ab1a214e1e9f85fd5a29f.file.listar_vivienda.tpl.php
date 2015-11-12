<?php /* Smarty version Smarty-3.0.9, created on 2015-10-09 10:02:41
         compiled from "C:/wamp/www/glight/templates\listar_vivienda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23767561774a1515894-29361487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9537aee04742e6f5ef8ab1a214e1e9f85fd5a29f' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\listar_vivienda.tpl',
      1 => 1444371583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23767561774a1515894-29361487',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table border="0" width="100" cellpadding="0" cellspacing="10">
<tr><td><b>Listar las viviendas</b></td></tr>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('vivienda')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td>
    <b>codigo:</b> <?php echo $_smarty_tpl->getVariable('vivienda')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('codigo');?>
<br />
	<?php if ($_smarty_tpl->getVariable('vivienda')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('estrato')==5){?>
	   <b style='color:green'> Direccion: <?php echo $_smarty_tpl->getVariable('vivienda')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('direccion');?>
 </b> <br />
	   <?php }elseif($_smarty_tpl->getVariable('vivienda')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('estrato')==4){?>
	      <b style='color:red'> Direccion: <?php echo $_smarty_tpl->getVariable('vivienda')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('direccion');?>
 </b> <br />
     <?php }else{ ?>
 	     <b> Estrato: <?php echo $_smarty_tpl->getVariable('vivienda')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('estrato');?>
 </b> <br />
		 <b> Dirección: </b> <?php echo $_smarty_tpl->getVariable('vivienda')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->get('direccion');?>
<br/>
         <?php }?>
    </td></tr>
<?php endfor; endif; ?>
</table>