<?php /* Smarty version Smarty-3.1.13, created on 2013-03-14 21:38:32
         compiled from "D:\workspace4php\dbe\dbe\templates\admin\addnews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8022513c57f7da67c0-54127291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7602a90f540e67cf1eb6837e395f16381e8b51e1' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\admin\\addnews.tpl',
      1 => 1363267301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8022513c57f7da67c0-54127291',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513c57f7f3d813_18628249',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513c57f7f3d813_18628249')) {function content_513c57f7f3d813_18628249($_smarty_tpl) {?>
<div class="row" >
	<div class="span3">
	</div>
	<div class="span9">
		<form method="post" class="form-horizontal" >
		<table class="table table-bordered table-condensed span12">
		<caption class="well"><strong>添加新闻</strong></caption>
			<tr>
				<td><label class="control-label">标题：</label></td>
				<td><input id="news_title" name="news_title" type="text"></td>
			</tr>
			<tr>
				<td><label class="control-label">日期：</label></td>
				<td>
					<input id="news_createdate" name="news_createtime"
						disabled="disabled" 
						type="text" class="uneditable-input">
						<input type="hidden" name="date" id="date"/>
				</td>
			</tr>
			
			<tr>
				<td><label class="control-label">排序：</label></td>
				<td>
					<input id="news_order" name="news_order" type="text">
					<span class="help-inline">数字大的排前面</span>
				</td>
			</tr>
			
			<tr>
				<td><label class="control-label">分类：</label></td>
				<td>
					<select name="news_type">
					  <option selected="selected" value="1">公司新闻</option>
					</select>
					<span class="help-inline" style="color:red">-----------------------请注意插入文章的图片的宽度不能大于550px</span></td>
			</tr>
			
			<tr>
				<td><label class="control-label">内容：</label></td>
				<td><textarea cols="80" id="content" name="content" class="ckeditor">ddd</textarea></td>
				
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="提交" class="btn btn-primary"><span class="help-inline addnewsMsg" style="color:red"></span></td>
			</tr>
		</table>
		
		</form>
	</div>
</div>
<script>
	$(document).ready(function(){
		$("#news_createdate").val(getCurrentDate());
		$("#date").val(getCurrentDate());
	});

	//获取当前时间
	function getCurrentDate(){
		var time = new Date();
		return time = time.format("yyyy-MM-dd");
	}
</script><?php }} ?>