<?php /* Smarty version Smarty-3.1.13, created on 2013-03-14 14:24:41
         compiled from "D:\workspace4php\dbe\dbe\templates\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24808513c454b688bf4-07619072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7983523cd37231aaf7c89e0422fcc2921e2f98cf' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\admin\\index.tpl',
      1 => 1363242277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24808513c454b688bf4-07619072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513c454b6ec394_50977991',
  'variables' => 
  array (
    'managetpl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513c454b6ec394_50977991')) {function content_513c454b6ec394_50977991($_smarty_tpl) {?>
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