<?php /* Smarty version Smarty-3.0.9, created on 2015-10-01 09:29:00
         compiled from "C:/wamp/www/glight/templates\get_set.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23560560ce0bc6d8764-90869429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26fe65c012891660f5a35740f95cb509533c8d40' => 
    array (
      0 => 'C:/wamp/www/glight/templates\\get_set.tpl',
      1 => 1443684537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23560560ce0bc6d8764-90869429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class= "square">
    <b>Name:</b><?php echo $_smarty_tpl->getVariable('clerk')->value->get('name');?>
<br />
    <b>Document:</b><?php echo $_smarty_tpl->getVariable('clerk')->value->get('id');?>
<br />
    <b>Document:</b><?php echo $_smarty_tpl->getVariable('clerk')->value->get('salary');?>
<br />
    <b>Age:</b><?php echo $_smarty_tpl->getVariable('clerk')->value->set('name','daniel');?>
 <br />  

    
</div>
    
    
   