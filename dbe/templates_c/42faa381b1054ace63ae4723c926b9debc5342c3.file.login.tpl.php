<?php /* Smarty version Smarty-3.1.13, created on 2013-03-14 12:03:49
         compiled from "D:\workspace4php\dbe\dbe\templates\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21381513c44fc6c2340-27106236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42faa381b1054ace63ae4723c926b9debc5342c3' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\admin\\login.tpl',
      1 => 1363233151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21381513c44fc6c2340-27106236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513c44fca0d3f0_67951342',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513c44fca0d3f0_67951342')) {function content_513c44fca0d3f0_67951342($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
function beforeSubmit(){
	var user = $("#username").val();
	var pass = $("#password").val();
	if(user.length == 0 || pass.length == 0){
		$("#errorp").html("请先输入用户名密码!");
		return false;
	}else {
		return true;
	}
}
</script>
<div class="container">
	<div class="loginPanel">
	<legend>系统登录</legend>
		<form class="form-horizontal" method="post" onsubmit="return beforeSubmit();">
			<div class="control-group">
				<label class="control-label" for="username">用户名</label>
				<div class="controls">
					<input type="text" id="username" name="username" placeholder="用户名">
					<span id="errorp" class="help-inline" style="color:red;"><?php if ($_smarty_tpl->tpl_vars['error']->value==true){?>用户名或密码错误!<?php }?></span>
				</div>
			</div>
			<div class="control-group"><label class="control-label"
				for="password">密码</label>
			<div class="controls"><input type="password" id="password" name="password"
				placeholder="密码"></div>
			</div>
			<div class="control-group">
			<div class="controls">
			<button type="submit" class="btn btn-primary">登录</button>
			</div>
			</div>
		</form>
	</div>
	
</div>

<?php }} ?>