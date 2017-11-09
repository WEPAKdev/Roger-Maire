<?php /* Smarty version Smarty-3.1.19, created on 2017-11-09 19:13:48
         compiled from "C:\wamp64\www\RogerMaireLocal\admin258korw9q\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110005a049adcb0a371-45627664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fcf1813bf7a1ad198bf468b6de296c2fda8ddfb' => 
    array (
      0 => 'C:\\wamp64\\www\\RogerMaireLocal\\admin258korw9q\\themes\\default\\template\\content.tpl',
      1 => 1509574300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110005a049adcb0a371-45627664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a049adcb2f540_13333221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a049adcb2f540_13333221')) {function content_5a049adcb2f540_13333221($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
