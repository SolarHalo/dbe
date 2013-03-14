<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/register.js"></script>
</head>
<body>
<form >
			&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="aaa" id="radio" value=1 />
              <label for="radio">3个月</label>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="aaa" id="radio2" value=2 />
              <label for="radio2">6个月</label>
              &nbsp;&nbsp;&nbsp;
              <input type="radio" name="aaa" id="radio3" value=3 />
              <label for="radio3">12个月</label>
              &nbsp;&nbsp;&nbsp;
              <input type="radio" name="aaa" id="radio4" value=4 />
              <label for="radio4">一年以后</label> 
              
              <input id="btn" type="submit" value="提交" />
              
              </form>
              
<!--<form onsubmit="javaScript:return validateadd();">-->
<!--	<label>-->
<!--       <input name="New" type="radio" id="New_0" value="是"  checked="checked" />是</label>-->
<!--      <label>-->
<!--      <input type="radio" name="New" value="否" id="New_1" />否</label>-->
<!--      -->
<!--       <input id="btn" type="submit" value="提交"/>-->
<!--</form>-->

<script type="text/javascript">
	function validateadd(){
		var radio=document.getElementsByName("aaa");
		var selectedValue;
		for(var i=0;i<radio.length;i++){
		   if(radio[i].checked==true){
		      selectedValue = radio[i].value;
			 }
		   }
		   
		   alert(selectedValue);
		   return true;   
		}
</script>

</body>
</html>