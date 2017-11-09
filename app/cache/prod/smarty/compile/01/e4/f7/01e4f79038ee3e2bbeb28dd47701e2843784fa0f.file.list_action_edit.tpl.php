<?php /* Smarty version Smarty-3.1.19, created on 2017-11-09 18:54:57
         compiled from "C:\wamp64\www\RogerMaireLocal\admin258korw9q\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215235a0496716aa789-11900247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01e4f79038ee3e2bbeb28dd47701e2843784fa0f' => 
    array (
      0 => 'C:\\wamp64\\www\\RogerMaireLocal\\admin258korw9q\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1509574301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215235a0496716aa789-11900247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0496716e12a3_63219318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0496716e12a3_63219318')) {function content_5a0496716e12a3_63219318($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
