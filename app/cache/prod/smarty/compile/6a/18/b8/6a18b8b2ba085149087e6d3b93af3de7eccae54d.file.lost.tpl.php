<?php /* Smarty version Smarty-3.1.19, created on 2017-11-09 02:39:36
         compiled from "C:\wamp64\www\RogerMaireLocal\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130925a03b1d8780f83-25427799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a18b8b2ba085149087e6d3b93af3de7eccae54d' => 
    array (
      0 => 'C:\\wamp64\\www\\RogerMaireLocal\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1509574322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130925a03b1d8780f83-25427799',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a03b1d87b99e8_64467076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a03b1d87b99e8_64467076')) {function content_5a03b1d87b99e8_64467076($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
