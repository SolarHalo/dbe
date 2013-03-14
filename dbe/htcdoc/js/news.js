$(document).ready(function(){
	$("#news_title").blur(function(){
		var title = $(this).val();
		if(title.length>255||title.length<1){
			$(".addnewsMsg").val("新闻标题不能超过255或小于1");
		}
	});
	
	$("#news_order").blur(function(){
		var news_order = $(this).val();
		if(validateNum(news_order)){
			
		}
	});
	
});

/**
 * 验证数字
 * @param objValue
 * @returns {Boolean} true-校验通过，false-校验失败
 */
function validateNum(objValue){
	var reg = new RegExp("^[0-9]{0,6}*$");
//    var obj = document.getElementById("name");
	if(!reg.test(objValue)){
		return false;
	 }
	 if(!/^[0-9]{0,3}*$/.test(obj.value)){
	     return false;
	 }
	 return true;
}