<?php /* Smarty version Smarty-3.1.13, created on 2013-03-14 22:19:15
         compiled from "D:\workspace4php\dbe-a\dbe\templates\admin\leftnav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97605141dc630b8d48-48272954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc6a46522a3a6cc3dcac171bbae383bafba85e48' => 
    array (
      0 => 'D:\\workspace4php\\dbe-a\\dbe\\templates\\admin\\leftnav.tpl',
      1 => 1363245405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97605141dc630b8d48-48272954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentnav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5141dc630f4e40_21777603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5141dc630f4e40_21777603')) {function content_5141dc630f4e40_21777603($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="span4 dbeheader">
	<h3 id="dbetitle" style="color:#fff">dbe欢迎您</h3>
	<a href="../index.php" style="color:#fff">网站首页</a><span style="color:#fff">&nbsp;|&nbsp;</span><a href="logout.php" style="color:#fff">注销</a>
</div>
<div class="row" style="background-color:#2F3840;height:960px;">
	<div class="span3">
		<ul class="nav nav-list " style="height:80%">
			  <li class="nav-header">
			  <i class="icon-edit icon-white"></i>
			    新闻列表
			  </li>
			  <li <?php if ($_smarty_tpl->tpl_vars['currentnav']->value=='news'){?>class="active"<?php }?>>
			    <a href="displaynews.php" >新闻列表</a>
			  </li>
			  <li <?php if ($_smarty_tpl->tpl_vars['currentnav']->value=='addNews'){?>class="active"<?php }?>>
			    <a href="addnews.php" >添加新闻</a>
			  </li>
			  
			  <li class="nav-header">
			  <i class="icon-user icon-white"></i>
			    会员管理
			  </li>
			  <li <?php if ($_smarty_tpl->tpl_vars['currentnav']->value=='users'){?>class="active"<?php }?>>
			    <a href="usermanage.php?type=user" >会员列表</a>
			  </li>
			  <li <?php if ($_smarty_tpl->tpl_vars['currentnav']->value=='admins'){?>class="active"<?php }?>>
			    <a href="usermanage.php?type=admin" >管理员</a>
			  </li>
			</ul>
	</div>
</div><?php }} ?>