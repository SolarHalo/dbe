
<!doctype html>
<head>
<link href="../style/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="../style/admincss.css" type="text/css" rel="stylesheet" />
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />-->
<script type="text/javascript" src="../js/jquery-1.8.0.min.js" ></script>
<script type="text/javascript" src="../js/bootstrap.min.js" ></script>
<!--<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>-->
<script type="text/javascript" src="../js/My97DatePicker/WdatePicker.js" ></script>
<script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../js/bootstrap-collapse.js" ></script>
<script type="text/javascript" src="../js/date.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>html</title>
</head>

<body>

<!--	<div class="row-fluid" style="margin-top:5px;">-->
<!--		<div class="span3 thumbnail">-->
<!--			 <img src="../../upload/1363931169.jpg" alt="">-->
<!--	     	 <h5>ddd</h5>-->
<!--		</div>-->
<!--		<div class="span3 thumbnail">-->
<!--			 <img src="../../upload/1363931169.jpg" alt="">-->
<!--	     	 <h5>ddd</h5>-->
<!--		</div>-->
<!--		<div class="span3 thumbnail">-->
<!--			 <img src="../../upload/1363931169.jpg" alt="">-->
<!--	     	 <h5>ddd</h5>-->
<!--		</div>-->
<!--		<div class="span3 thumbnail">-->
<!--			 <img src="../../upload/1363931169.jpg" alt="">-->
<!--	     	 <h5>ddd</h5>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="row-fluid" style="margin-top:5px;">-->
<!--		<div class="span3 thumbnail">-->
<!--			 <img src="../../upload/1363931169.jpg" alt="">-->
<!--	     	 <h5>ddd</h5>-->
<!--		</div>-->
<!--		<div class="span3 thumbnail">-->
<!--			 <img src="../../upload/1363931169.jpg" alt="">-->
<!--	     	 <h5>ddd</h5>-->
<!--		</div>-->
<!--		<div class="span3 thumbnail">-->
<!--			 <img src="../../upload/1363931169.jpg" alt="">-->
<!--	     	 <h5>ddd</h5>-->
<!--		</div>-->
<!--		<div class="span3 thumbnail">-->
<!--			 <img src="../../upload/1363931169.jpg" alt="">-->
<!--	     	 <h5>ddd</h5>-->
<!--		</div>-->
<!--	</div>-->
	<div id="pics"></div>
	
	<script>
		$(document).ready(function(){
			var pics = document.getElementById("pics");
			for(var j=0;j<2;j++){
				$("<div id="+j+" class='row-fluid' style='margin-top:5px;'></div>").appendTo("#pics");
				var out = document.getElementById(j);
				for(var i=0;i<4;i++){
					$("<div class='span3 thumbnail'><img src='../../upload/1363931169.jpg' alt=''><button class='btnclass' un="+((j+1)*10+i)+" >ddd</button></div>").appendTo(out);
				}
				
			}

			$(".btnclass").click(function(){
				var un = $(this).attr('un');
				alert(un);
				$(this).parent().remove();
			});
		});

	</script>
</body>

</html>
