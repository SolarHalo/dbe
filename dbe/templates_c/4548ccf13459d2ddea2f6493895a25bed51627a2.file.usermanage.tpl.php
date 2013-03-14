<?php /* Smarty version Smarty-3.1.13, created on 2013-03-12 15:57:59
         compiled from "D:\workspace4php\dbe\dbe\templates\admin\usermanage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9108513c4afb5d8757-02256807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4548ccf13459d2ddea2f6493895a25bed51627a2' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\admin\\usermanage.tpl',
      1 => 1363075075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9108513c4afb5d8757-02256807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513c4afb683809_74055023',
  'variables' => 
  array (
    'managetpl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513c4afb683809_74055023')) {function content_513c4afb683809_74055023($_smarty_tpl) {?><div class="row">
	<div class="span4">
		
		<?php echo $_smarty_tpl->getSubTemplate ('admin/leftnav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	<div class="span8">
		<div class="span12">
				
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['managetpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		  </div>
		
	</div>
</div>


<?php }} ?>