<?php /* Smarty version Smarty-3.1.13, created on 2013-03-10 16:33:15
         compiled from "D:\workspace4php\dbe\dbe\templates\admin\topnav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8961513c454b70c252-50951371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a18788f5aed9bbe73191c2e6b22f501146b4afa' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\admin\\topnav.tpl',
      1 => 1362842411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8961513c454b70c252-50951371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentnav' => 0,
    'domainname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513c454b80d822_67397061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513c454b80d822_67397061')) {function content_513c454b80d822_67397061($_smarty_tpl) {?><div class="navbar">
  <div class="navbar-inner">
    <div class="container">
 
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="#">爱博博彩</a>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse navbar-responsive-collapse">
	       <ul class="nav">
	       		<li <?php if ($_smarty_tpl->tpl_vars['currentnav']->value=='index'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
index.php" >首页</a></li>
	       		<li <?php if ($_smarty_tpl->tpl_vars['currentnav']->value=='usermanage'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
/admin/usermanage.php" >用户管理</a></li>
	       		<li <?php if ($_smarty_tpl->tpl_vars['currentnav']->value=='oddsmanage'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
/admin/oddsmanage.php" >赛事管理</a></li>
	       </ul>
      </div>
 
    </div>
  </div>
</div><?php }} ?>