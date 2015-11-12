<?php /* Smarty version Smarty-3.0.9, created on 2015-09-18 18:26:02
         compiled from "C:/wamp/www/glight/templates\conversor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2958555fc3b1a443ce0-32478432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36f5e63598be3e16beab8e97c921b4d55c24455f' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\conversor.tpl',
      1 => 1442593558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2958555fc3b1a443ce0-32478432',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div class="square">
    <form action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
conversor.php?option=conversion" method="get">
        <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr><td>
                    <span class="title"> Conversor divisas </span> <br></br>
                    <?php if (isset($_smarty_tpl->getVariable('resultado',null,true,false)->value)){?>
                        <b> El resultado es: </b> <?php echo $_smarty_tpl->getVariable('resultado')->value;?>
 <br></br>
                        <?php }?>
                        <b> Tasa: </b> <input type="text" name="tasa"/></br>
                        <b> Cantidad (U$): </b> <input type="text" name ="dolares"/></br>
						<input type="hidden" name="option" value="conversion"/>
                        <input type="submit" value="Calcular"/>
                        
                </td></tr>
				</table>
    
    
    
    </form>
</div>