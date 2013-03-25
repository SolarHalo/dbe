<div id="picContainer" class="span12">
</div>

<div class="modal hide fade" id="delPicModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3 id="wintitle">删除图片</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-error">
	  <strong>警告！</strong> 确认删除图片?
	</div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn"  data-dismiss="modal">关闭</a>
	<button id="delPicbtn" class="btn btn-danger">确认</button>
  </div>
</div>

<div class="modal hide fade" id="PicUrlModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3 id="wintitle">图片链接</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-info">
	  <strong id="picurl"></strong> 
	</div>
  </div>
<!--  <div class="modal-footer">-->
<!--    <a href="#" class="btn"  data-dismiss="modal">关闭</a>-->
<!--	<button id="delPicbtn" class="btn btn-danger">确认</button>-->
<!--  </div>-->
</div>

<!--<div id="piccontainer">-->
<!--	<div>-->
<!--		<div><p></p><a href="#" un='aa'></a></div>-->
<!--	</div>-->
<!--	<div>-->
<!--		<div><p></p><a href="#" un='bb'></a></div>-->
<!--	</div>-->
<!--	...-->
<!--</div>-->

<script>
		$(document).ready(function(){
			var picContainer = document.getElementById("picContainer");
			var pics = {{$pics}};
			var fileurlpre = "{{$fileurlpre}}";
			var picnums = pics.length;
//			var rownum = pics.length%4==0?pics.length/4:parseInt(pics.length/4)+1;
			if(picnums<1){
				$("#picContainer").html("图片库当前没有图片，如有需要，请上传~");
				return;
			}
			var j=0;
			var picRow;
			for (var key in pics){
				if(j>picnums-1){
					break;
				}
				var picname = key;
				var picpath = pics[key];
				if(j%4==0){
					$("<div id='"+(j/4)+"' class='row-fluid' style='margin-top:5px;'></div>").appendTo(picContainer);
					picRow = document.getElementById(j/4);
				}
//				$("<div id="+picpath+" class='span3 thumbnail'>"
//						+"<img src='"+picpath+"' alt=''><p class='text-success lead'>"+fileurlpre+picname+"</p>"
//						+"<a  href='#delPicModal' data-toggle='modal' class='btn btn-danger delpic' un='"+picpath+"'>"
//						+"<i class='icon-trash icon-white'></i> 删除</a></div>").appendTo(picRow);
				$("<div class='span3 thumbnail'>"
						+"<img src='"+picpath+"' alt=''><a href='#PicUrlModal' data-toggle='modal' class='picurl' un="+fileurlpre+picname+">查看图片链接</a>     "
						+"<a href='#delPicModal' data-toggle='modal' class='delpic' un='"+picpath+"'>删除</a></div>").appendTo(picRow);
				j++;
			}
			
//			for(var i=0;i<rownum-1;i++){
//				$("<div id="+i+" class='row-fluid' style='margin-top:5px;'></div>").appendTo(picContainer);
//				var picRow = document.getElementById(i);
//				for(var j=0;j<4;j++){
//					$("<div class='span3 thumbnail'><img src='"+pics[i*4+j]+"' alt=''><p class='text-success lead'>"+fileurlpre+pics[i*4+j]+"</p><button class='btnclass' un="+((i+1)*10+j)+" >ddd</button></div>").appendTo(picRow);
//				}
//			}
			$(".picurl").live('click',function(){
				var picurl = $(this).attr('un');
				$("#picurl").html(picurl);
			});

			$(".delpic").live('click',function(){
				var picpath = $(this).attr('un');
				$("#delPicbtn").attr('un',picpath);
			});

			$("#delPicbtn").click(function(){
				var picpath = $(this).attr('un');
				$.ajax({
					'type':'POST',
					'url': 'ajaxnewsop.php',
					'data': {'method': 'deletepics', 'picpath': picpath},
					'success': function(data){
						if(data.trim()=="success"){
							$("#delPicModal").modal('hide');
							$("#delPicbtn").attr('data-dismiss','modal');
							//文件删除成功，将图片从界面上移除
							$("#picContainer div div").children("a[un='"+picpath+"']").parent().remove();
						}else{
							alert("删除是的文件不存在或删除失败，请刷新后重新操作！");
						}
					}
				});
			});
		});


	</script>