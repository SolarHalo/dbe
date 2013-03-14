
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
</script>