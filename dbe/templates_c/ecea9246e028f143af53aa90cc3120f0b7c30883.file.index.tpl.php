<?php /* Smarty version Smarty-3.1.13, created on 2013-03-14 22:19:14
         compiled from "D:\workspace4php\dbe-a\dbe\templates\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26425141dc62ec5c21-50536771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecea9246e028f143af53aa90cc3120f0b7c30883' => 
    array (
      0 => 'D:\\workspace4php\\dbe-a\\dbe\\templates\\admin\\index.tpl',
      1 => 1363242277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26425141dc62ec5c21-50536771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'managetpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5141dc630838a6_75892167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5141dc630838a6_75892167')) {function content_5141dc630838a6_75892167($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row" >
	<div class="span4">
		
		<?php echo $_smarty_tpl->getSubTemplate ('admin/leftnav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	<div class="span8" style="height:100%;">
		
		<?php if ($_smarty_tpl->tpl_vars['managetpl']->value!=null){?>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['managetpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
		
	</div>
</div>




<?php }} ?>