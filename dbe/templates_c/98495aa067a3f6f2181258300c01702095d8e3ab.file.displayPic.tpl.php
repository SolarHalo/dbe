<?php /* Smarty version Smarty-3.1.13, created on 2013-03-22 14:35:27
         compiled from "D:\workspace4php\dbe-a\dbe\templates\admin\displayPic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2427514acdd96a19f4-27265953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98495aa067a3f6f2181258300c01702095d8e3ab' => 
    array (
      0 => 'D:\\workspace4php\\dbe-a\\dbe\\templates\\admin\\displayPic.tpl',
      1 => 1363934116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2427514acdd96a19f4-27265953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514acdd96eaf10_58096334',
  'variables' => 
  array (
    'fileurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514acdd96eaf10_58096334')) {function content_514acdd96eaf10_58096334($_smarty_tpl) {?>
<!--<div style="margin-left:50px;margin-top:50px;">-->
<!--	<p class="text-success lead"><?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
</p>-->
<!--	<img src="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
"/>-->
<!--</div>-->

<div class="thumbnail" style="margin-left:50px;margin-top:50px;">
	<p class="text-success lead"><?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
</p>
	 <img src="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
" alt="">
</div><?php }} ?>