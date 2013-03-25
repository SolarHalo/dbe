<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery-1.8.0.min.js"></script>
<title>html</title>
<script>

$(document).ready(function(){
	$(".btn").click(function(){
		var un = $(this).attr('un');
		$("#piccontainer div div ").children("a[un="+un+"]").parent().remove();
	});
});

<img src=\"/dbe/dbe/htcdoc/js/kindeditor/attached/image/20130325/20130325153344_32420.jpg\" alt=\"\" /><!--?php echo htmlspecialchars($htmlData); ?-->

</script>
</head>

<body>
	<div id="piccontainer">
		<div>
			<div><p>cc</p><a href="#" un='aa' class="btn">aa</a><button  un='xx' >xx</button></div>
			<div><p>11</p><a href="#" un='11' class="btn">11</a><button  un='x33' >xx33</button></div>
		</div>
		<div>
			<div><p>dd</p><a href="#" un='bb' class="btn">bb</a><button  un='yy' >yy</button></div>
		</div>
	</div>
</body>

</html>