<div class="row" >
	<div class="span3">
	</div>
	<div class="span9">
		<form method="post" class="form-horizontal" onsubmit="return beforeSubmit();">
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
				<td><textarea cols="80" id="content" name="content" class="ckeditor"></textarea></td>
				
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input id="addBtn" type="submit" value="提交" class="btn btn-primary"><span class="help-inline addnewsMsg" style="color:red"></span></td>
			</tr>
		</table>
		
		</form>
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
		

		

</script>