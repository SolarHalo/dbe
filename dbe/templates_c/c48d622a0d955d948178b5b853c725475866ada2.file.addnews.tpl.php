<?php /* Smarty version Smarty-3.1.13, created on 2013-03-24 22:31:09
         compiled from "D:\workspace4php\dbe-a\dbe\templates\admin\addnews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311345141dc6a373e46-43336549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c48d622a0d955d948178b5b853c725475866ada2' => 
    array (
      0 => 'D:\\workspace4php\\dbe-a\\dbe\\templates\\admin\\addnews.tpl',
      1 => 1364135458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311345141dc6a373e46-43336549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5141dc6a3d5139_25176326',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5141dc6a3d5139_25176326')) {function content_5141dc6a3d5139_25176326($_smarty_tpl) {?><script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : '../js/kindeditor/plugins/code/prettify.css',
				uploadJson : '../js/kindeditor/php/upload_json.php',
				fileManagerJson : '../js/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
//						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
//						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
<div class="row" >
	<div class="span12">
		<div class="adminMainBody">
			<form method="post" class="form-horizontal" onsubmit="return beforeSubmit();">
				<table class="table table-bordered table-condensed span12">
				<caption class="well"><strong>添加新闻</strong></caption>
					<tr>
						<td><label class="control-label">标题：</label></td>
						<td><input id="news_title" name="news_title" type="text" ></td>
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
							<input id="news_order" name="news_order" type="text" >
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
						<td>
<!--						<textarea cols="80" id="content" name="content" class="ckeditor" ></textarea>-->
							<textarea id="content" name="content" style="visibility:hidden;width:100%;height:350px;"><<?php ?>?php echo htmlspecialchars($htmlData); ?<?php ?>></textarea>
						</td>
						
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input id="addBtn" type="submit" value="提交" class="btn btn-primary"><span class="help-inline addnewsMsg" style="color:red"></span></td>
					</tr>
				</table>
			
			</form>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$("#news_createdate").val(getCurrentDate());
		$("#date").val(getCurrentDate());


		$("#news_title").blur(function(){
			validateTitle();
		});
		
		$("#news_order").blur(function(){
			validateOrder();
		});

		
	});

	//获取当前时间
	function getCurrentDate(){
		var time = new Date();
		return time = time.format("yyyy-MM-dd");
	}

	/**
	 * 验证数字
	 * @param objValue
	 * @returns {Boolean} true-校验通过，false-校验失败
	 */
	 function validateNum(value){
		 var result = true;
		 var errorMsg = "";
		 if (isNaN(value)) {
             errorMsg = "排序只能输入数字";
             result = false;
         } else {
             var n = parseInt(value);
             if (n.toString() != value) {
            	 errorMsg = "排序只能输入数字 ";
            	 result = false;
             }else if(value.length>6){
            	 errorMsg = "最多只能输入6位数字";
            	 result = false;
             }
         }
		 $(".addnewsMsg").text(errorMsg);
         return result;
	}

	function validateTitle(){
		var title = $("#news_title").val();
		if(title.length>255||title.length<1){
			$(".addnewsMsg").text("新闻标题不能超过255或小于1");
			return false;
		}else{
			$(".addnewsMsg").text("");
			return true;
		}
	
	}

	function validateOrder(){
		var news_order = $("#news_order").val();
		return validateNum(news_order);
	}
	
	function beforeSubmit(){
		if(validateOrder()&&validateTitle()){
			return true;
		}else{
			return false;
		}
	}
		

		

</script><?php }} ?>