<?php /* Smarty version Smarty-3.1.13, created on 2013-03-14 22:18:25
         compiled from "D:\workspace4php\dbe-a\dbe\templates\statusbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79035141dc31d3a308-69071740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b340d24c85b6948b3b551207d9985a373ddabde7' => 
    array (
      0 => 'D:\\workspace4php\\dbe-a\\dbe\\templates\\statusbar.tpl',
      1 => 1363249383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79035141dc31d3a308-69071740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loged' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5141dc31d5dc08_64797095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5141dc31d5dc08_64797095')) {function content_5141dc31d5dc08_64797095($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['loged']->value=='Y'){?>
<div id="loged" style="visibility:visible;"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&nbsp;欢迎您&nbsp;|&nbsp;<a href="logout.php">退出</a></div>
<div id="login" style="visibility:hidden"><a href="login.php">登录</a>&nbsp;&nbsp;<a href="register.php">注册</a></div>
<?php }else{ ?>
<div id="loged" style="visibility:hidden">欢迎您|<a href="logout.php">退出</a></div>
<div id="login" style="visibility:visible"><a href="login.php">登录</a>&nbsp;&nbsp;<a href="register.php">注册</a></div>
<?php }?><?php }} ?>