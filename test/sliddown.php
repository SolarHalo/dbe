<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	.panel,.flip{
		margin:0px;
		padding:5px;
		text-align:center;
background:#e5eecc;
border:solid 1px #c3c3c3;
	}
	
	.flip{
		height:120px;
		display:none;
	}
</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
$(document).ready(function(){

$(".panel").click(function(){
	$(".flip").slideToggle("slow");
});
	
});

</script>
</head>


<body>

	<div class="panel">
	<p >
		click me
	</p>
	</div>
	<p class="flip">
			sjlsd
			slkdjf
		</p>
</body>

</html>