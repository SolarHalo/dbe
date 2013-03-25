<div class="adminMainBody">
	<div class="row">
		<div class="span12">
			<table id="usertable" class="table table-striped table-bordered table-condensed span12">
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
						<th class="span3">设备近期采购</th>
						<th class="span3">注册时间</th>
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
							<a href="#userDetailModal" data-toggle="modal" class="btn btn-info userdetail" un="{{$user->id}}"><i class="icon-tags icon-white"></i> 详细信息</a>
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

<div class="modal hide fade span12" id="userDetailModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3 id="wintitle">用户详细信息</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal">
    	<div class="control-group">
    		<label class="control-label">账号</label>
    		<div class="controls">
    			<input type="text" id="user_name" disabled="disabled">
    		</div>
    	</div>
    	<div class="control-group">
    		<label class="control-label">真实姓名</label>
    		<div class="controls">
    			<input type="text" id="user_fullname" disabled="disabled">
    		</div>
    	</div>
    	<div class="control-group">
    		<label class="control-label">电子邮件</label>
    		<div class="controls">
    			<input type="text" id="user_email" disabled="disabled">
    		</div>
    	</div>
    	<div class="control-group">
    		<label class="control-label">公司</label>
    		<div class="controls">
    			<input type="text" id="user_company" disabled="disabled">
    		</div>
    	</div>
    	<div class="control-group">
    		<label class="control-label">行业</label>
    		<div class="controls">
    			<input type="text" id="user_industy" disabled="disabled">
    		</div>
    	</div>
    	<div class="control-group">
    		<label class="control-label">电话</label>
    		<div class="controls">
    			<input type="text" id="user_phone" disabled="disabled">
    		</div>
    	</div>
    	<div class="control-group">
    		<label class="control-label">设备近期采购</label>
    		<div class="controls">
    			<input type="text" id="user_purchasing" disabled="disabled">
    		</div>
    	</div>
    	<div class="control-group">
    		<label class="control-label">注册时间</label>
    		<div class="controls">
    			<input type="text" id="user_regdate" disabled="disabled">
    		</div>
    	</div>
    	
    </form>
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
					$("#deluserModal").modal('hide');
					$("#deluser").attr('data-dismiss','modal');
					$("#usertable >tbody >tr >td").children("a[un='"+username+"']").parents("tr").remove();
				}
			},
			'error':function(){
				alert("ajax for deleteuser failed");
				}
			});
		});

	$(".userdetail").live('click',function(){
		var user_id = $(this).attr('un');
		$("#user_name").val("");
		$("#user_fullname").val("");
		$("#user_email").val("");
		$("#user_company").val("");
		$("#user_industy").val("");
		$("#user_phone").val("");
		$("#user_purchasing").val("");
		$("#user_regdate").val("");
		$.ajax({
			'url': 'ajaxuserop.php',
			'data': {'method': 'getUserById', 'id': user_id},
			'success': function(data){
				if(data.trim()== "error"){
					alert("获取用户详细信息失败！");
					
				}else{
					var obj = eval('(' + data + ')');
					var user_name = obj.user_name;
					var user_fullname = obj.user_fullname;
					var user_email = obj.user_email;
					var user_company = obj.user_company;
					var user_industy = obj.user_industy;
					var user_phone = obj.user_phone;
					var user_purchasing = obj.user_purchasing;
					var user_regdate = obj.user_regdate;
					$("#user_name").val(user_name);
					$("#user_fullname").val(user_fullname);
					$("#user_email").val(user_email);
					$("#user_company").val(user_company);
					$("#user_industy").val(user_industy);
					$("#user_phone").val(user_phone);
					$("#user_purchasing").val(getUserPurchasing(user_purchasing));
					$("#user_regdate").val(user_regdate);
					
					
				}
			},
			'error':function(){
				alert("ajax for deleteuser failed");
				}
			});
	});
	
	
});

function getUserPurchasing(userPurchasingFlag){
	if(userPurchasingFlag==null||userPurchasingFlag==""){
		return null;
	}
	var userPurchasing = null;
	switch(userPurchasingFlag){
	case "1":
		userPurchasing = "3个月";
		break;
	case "2":
		userPurchasing = "6个月";
		break;
	case "3":
		userPurchasing = "12个月";
		break;
	case "4":
		userPurchasing = "1年以后";
		break;
	}
	return userPurchasing;
}

</script>
