<?php /* Smarty version Smarty-3.1.13, created on 2013-03-14 16:23:10
         compiled from "D:\workspace4php\dbe\dbe\templates\statusbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1449651408f57a96281-44132122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d8d4ae4f6277ff75356475c9f4ca2822fb58de' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\statusbar.tpl',
      1 => 1363249383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1449651408f57a96281-44132122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51408f57a9a8c3_93452895',
  'variables' => 
  array (
    'loged' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51408f57a9a8c3_93452895')) {function content_51408f57a9a8c3_93452895($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['loged']->value=='Y'){?>
<div id="loged" style="visibility:visible;"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&nbsp;欢迎您&nbsp;|&nbsp;<a href="logout.php">退出</a></div>
<div id="login" style="visibility:hidden"><a href="login.php">登录</a>&nbsp;&nbsp;<a href="register.php">注册</a></div>
<?php }else{ ?>
<div id="loged" style="visibility:hidden">欢迎您|<a href="logout.php">退出</a></div>
<div id="login" style="visibility:visible"><a href="login.php">登录</a>&nbsp;&nbsp;<a href="register.php">注册</a></div>
<?php }?><?php }} ?>