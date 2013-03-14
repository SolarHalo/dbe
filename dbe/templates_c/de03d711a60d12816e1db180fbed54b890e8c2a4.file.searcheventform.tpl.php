<?php /* Smarty version Smarty-3.1.13, created on 2013-02-22 15:47:06
         compiled from "D:\game\odds_game\templates\admin\searcheventform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307255125aaa72e65b9-04885306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de03d711a60d12816e1db180fbed54b890e8c2a4' => 
    array (
      0 => 'D:\\game\\odds_game\\templates\\admin\\searcheventform.tpl',
      1 => 1361548020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307255125aaa72e65b9-04885306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5125aaa72f13f0_50310428',
  'variables' => 
  array (
    'eventcurrentnav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5125aaa72f13f0_50310428')) {function content_5125aaa72f13f0_50310428($_smarty_tpl) {?><!-- 搜索表单 -->
<form class="form-inline span=12" action="oddsmanage.php" method="get" >

	<input name="sport_subtype_name" type="text" class="input-small" placeholder="赛事">
  	<input name="team_name" type="text" class="input-small" placeholder="球队名称">
	<input type="text" id="datepicker1" class="uneditable-input" name="starttime" placeholder="开始时间" onClick="WdatePicker()">
  	<input type="text" id="datepicker2" class="uneditable-input" name="endtime" placeholder="结束时间" onClick="WdatePicker()">
	<input name="type" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['eventcurrentnav']->value;?>
">
  	<input type="submit" class="btn btn-primary" value="搜索" class="con-search"><i class="icon-search icon-white"></i>
	
</form>

<?php }} ?>