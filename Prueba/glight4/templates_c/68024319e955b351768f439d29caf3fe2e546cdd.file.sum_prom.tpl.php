<?php /* Smarty version Smarty-3.0.9, created on 2015-09-30 05:28:31
         compiled from "C:/wamp/www/glight/templates\sum_prom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12617560b56df10ad65-81873151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68024319e955b351768f439d29caf3fe2e546cdd' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\sum_prom.tpl',
      1 => 1443582425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12617560b56df10ad65-81873151',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="square">
<span class="title"><h2> Suma y promedio de números</h2></span><br/>

    <?php if ($_smarty_tpl->getVariable('bandera')->value==0){?>
	<form action = "<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
sum_prom.php?option=establecer_cantidad" method="post">
	<table width = "100%" border="0" cellpadding="0" cellspacing="5">
	<tr><td>
	<h4>Por favor ingrese la cantidad de numeros</h4>
	<b> Cantidad de números:</b> <input type="text" name="cantidad"/> <br/>
	<input type = "submit" value="Enviar"><br/>
	</td></tr></table>
	</form>
	<?php }?>
	
	<?php if ($_smarty_tpl->getVariable('bandera')->value==1){?>
	<form action = "<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
sum_prom.php?option=suma_promedio" method="post">
		<table width = "100%" border="0" cellpadding="0" cellspacing="5">
			<tr><td>
			<h4>Por favor ingrese los numeros:</h4><br/>
			<?php ob_start();?><?php echo $_smarty_tpl->getVariable('cantidad')->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<b> Numero <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
:</b> <input type = "text" name="numero<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"/> <br/>
			<?php }} ?>
			<input type = "hidden" name = "cantidad" value="<?php echo $_smarty_tpl->getVariable('cantidad')->value;?>
">
			<input type = "submit" value="Calcular"><br/>
			</td></tr>
		</table>
	</form>
	<?php }?>
	
	
	<?php if ($_smarty_tpl->getVariable('bandera')->value==2){?>
	<b>La cantidad de números es: <?php echo $_smarty_tpl->getVariable('cantidad')->value;?>
</b>  <br/>
	<b>La suma de los números es: <?php echo $_smarty_tpl->getVariable('suma')->value;?>
</b><br/>	
	<b>El promedio de los números es: <?php echo $_smarty_tpl->getVariable('promedio')->value;?>
</b>   <br/>
	<?php }?>
</div>
