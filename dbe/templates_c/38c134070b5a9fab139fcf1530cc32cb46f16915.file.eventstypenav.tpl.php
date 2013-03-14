<?php /* Smarty version Smarty-3.1.13, created on 2013-03-05 23:11:30
         compiled from "D:\game\odds_game\templates\admin\eventstypenav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306985124dfc7521434-11493357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38c134070b5a9fab139fcf1530cc32cb46f16915' => 
    array (
      0 => 'D:\\game\\odds_game\\templates\\admin\\eventstypenav.tpl',
      1 => 1362495677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306985124dfc7521434-11493357',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5124dfc7577008_06189860',
  'variables' => 
  array (
    'eventcurrentnav' => 0,
    'domainname' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5124dfc7577008_06189860')) {function content_5124dfc7577008_06189860($_smarty_tpl) {?><ul class="nav nav-tabs">
	<li <?php if ($_smarty_tpl->tpl_vars['eventcurrentnav']->value=='current'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
admin/oddsmanage.php?type=current" >当前赛事</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['eventcurrentnav']->value=='history'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
admin/oddsmanage.php?type=history" >结束赛事</a></li>
</ul><?php }} ?>