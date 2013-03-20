<div class="adminMainBody">
	<div class="row">
		<div class="span12">
			<table id="usertable" class="table table-striped table-bordered table-condensed span12" style="font-size: 16px;">
				<caption>
					<div class="well">
						<strong>用户列表</strong>
					</div>
				</caption>
				<thead>
					<tr>
						<th class="span1">#</th>
						<th class="span1">账号</th>
						<th class="span2">真实姓名</th>
						<th class="span1">电子邮件</th>
						<th class="span1">公司</th>
						<th class="span1">行业</th>
						<th class="span1">电话</th>
						<th class="span3">设备近期采购</th>
						<th class="span2">注册时间</th>
						<th class="span1">操作</th>
					</tr>
				</thead>
				<tbody>
					{{foreach $users as $key=>$user}}
					<tr>
						<td>{{$key}}</td>
						<td>{{$user->user_name}}</td>
						<td>{{$user->user_fullname}}</td>
						<td>{{$user->user_email}}</td>
						<td>{{$user->user_company}}</td>
						<td>{{$user->user_industy}}</td>
						<td>{{$user->user_phone}}</td>
						<td>
						{{if $user->user_purchasing eq 1}}
						3个月
						{{elseif $user->user_purchasing eq 2}}
						6个月
						{{elseif $user->user_purchasing eq 3}}
						12个月
						{{else $user->user_purchasing eq 4}}
						一年以后
						{{/if}}
						</td>
						<td>{{$user->user_regdate}}</td>
						
						<td width="280">
							<a href="#deluserModal" data-toggle="modal" class="btn btn-danger deluser" un="{{$user->user_name}}"><i class="icon-trash icon-white"></i> 删除</a>
						</td>
					</tr>
					{{/foreach}}
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="modal hide fade" id="deluserModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3 id="wintitle">删除用户</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-error">
	  <strong>警告！</strong> 确认删除用户?
	</div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn"  data-dismiss="modal">关闭</a>
    <button id="deluser" class="btn btn-danger">确认</button>
  </div>
</div>


<script type="text/javascript">

$(document).ready(function(){
	
	$(".deluser").live('click', function(){
		var un = $(this).attr("un");
		$("#deluser").attr('un', un);
	});

	

	$("#deluser").click(function(){
		var username = $(this).attr("un");
		$.ajax({
			'url': 'ajaxuserop.php',
			'data': {'method': 'deleteuser', 'username': username},
			'success': function(data){
				if(data == -1){
					alert("deleteuser failed");
				}else{
//					$("#deluserModal").modal('hide');
					$("#deluser").attr('data-dismiss','modal');
					$("#usertable >tbody >tr >td").children("a[un='"+username+"']").parents("tr").remove();
				}
			},
			'error':function(){
				alert("ajax for deleteuser failed");
				}
			});
		});


	
	
});

</script>
