<?php /* Smarty version Smarty-3.1.19, created on 2017-11-09 22:24:08
         compiled from "module:ps_facetedsearch/ps_facetedsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47885a04c778a300c7-75970153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:ps_facetedsearch/ps_facetedsearch.tpl',
      1 => 1510191507,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '47885a04c778a300c7-75970153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a04c778a5eee3_65864609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a04c778a5eee3_65864609')) {function content_5a04c778a5eee3_65864609($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
<div id="search_filters_wrapper" class="hidden-sm-down">
  <div id="search_filter_controls" class="hidden-md-up">
      <span id="_mobile_search_filters_clear_all"></span>
      <button class="btn btn-secondary ok">
        <i class="material-icons">&#xE876;</i>
        <?php echo smartyTranslate(array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </button>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

</div>
<?php }?>
<?php }} ?>
