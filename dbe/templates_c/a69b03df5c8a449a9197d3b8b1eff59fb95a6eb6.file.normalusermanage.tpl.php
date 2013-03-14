<?php /* Smarty version Smarty-3.1.13, created on 2013-03-14 17:28:03
         compiled from "D:\workspace4php\dbe\dbe\templates\admin\normalusermanage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13874513c4afb6fc4d5-82013982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a69b03df5c8a449a9197d3b8b1eff59fb95a6eb6' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\admin\\normalusermanage.tpl',
      1 => 1363253068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13874513c4afb6fc4d5-82013982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513c4afb887e21_70515959',
  'variables' => 
  array (
    'users' => 0,
    'key' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513c4afb887e21_70515959')) {function content_513c4afb887e21_70515959($_smarty_tpl) {?><div class="row">
	
	<div class="span12">
		<table id="usertable" class="table table-striped table-bordered table-condensed span12" style="font-size: 16px;">
			<caption>
				<div class="well">
					<strong>用户列表</strong>
				</div>
			</caption>
			<thead>
				<tr>
					<th>#</th>
					<th>账号</th>
					<th>真实姓名</th>
					<th>电子邮件</th>
					<th>公司</th>
					<th>行业</th>
					<th>电话</th>
					<th>设备近期采购</th>
					<th>注册时间</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['user']->key;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_fullname;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_email;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_company;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_industy;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_phone;?>
</td>
					<td>
					<?php if ($_smarty_tpl->tpl_vars['user']->value->user_purchasing==1){?>
					3个月
					<?php }elseif($_smarty_tpl->tpl_vars['user']->value->user_purchasing==2){?>
					6个月
					<?php }elseif($_smarty_tpl->tpl_vars['user']->value->user_purchasing==3){?>
					12个月
					<?php }else{ ?>
					一年以后
					<?php }?>
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_regdate;?>
</td>
					
					<td width="280">
						<a href="#deluserModal" data-toggle="modal" class="btn btn-danger deluser" un="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
"><i class="icon-trash icon-white"></i> 删除</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>


<div class="modal hide fade" id="deluserModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3 id="wintitle">删除用户</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-error">
	  <strong>警告！</strong> 确认删除用户?
	</div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn"  data-dismiss="modal">关闭</a>
    <a id="deluser" href="#" class="btn btn-danger">确认</a>
  </div>
</div>


<script type="text/javascript">

$(document).ready(function(){
	
	$(".deluser").live('click', function(){
		var un = $(this).attr("un");
		$("#deluser").attr('un', un);
	});

	

	$("#deluser").click(function(){
		var username = $(this).attr("un");
		$.ajax({
			'url': 'ajaxuserop.php',
			'data': {'method': 'deleteuser', 'username': username},
			'success': function(data){
				if(data == -1){
					alert("deleteuser failed");
				}else{
					$("#deluserModal").modal('hide');
					$("#usertable >tbody >tr >td").children("a[un='"+username+"']").parents("tr").remove();
				}
			},
			'error':function(){
				alert("ajax for deleteuser failed");
				}
			});
		});


	
	
});

</script>
<?php }} ?>