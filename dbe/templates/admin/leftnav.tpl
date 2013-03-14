{{* 引入头部文件 *}}
{{include file='admin/header.tpl'}}

<div class="span4 dbeheader">
	<h3 id="dbetitle" style="color:#fff">dbe欢迎您</h3>
	<a href="../index.php" style="color:#fff">网站首页</a><span style="color:#fff">&nbsp;|&nbsp;</span><a href="logout.php" style="color:#fff">注销</a>
</div>
<div class="row" style="background-color:#2F3840;height:960px;">
	<div class="span3">
		<ul class="nav nav-list " style="height:80%">
			  <li class="nav-header">
			  <i class="icon-edit icon-white"></i>
			    新闻列表
			  </li>
			  <li {{if $currentnav == 'news'}}class="active"{{/if}}>
			    <a href="displaynews.php" >新闻列表</a>
			  </li>
			  <li {{if $currentnav == 'addNews'}}class="active"{{/if}}>
			    <a href="addnews.php" >添加新闻</a>
			  </li>
			  
			  <li class="nav-header">
			  <i class="icon-user icon-white"></i>
			    会员管理
			  </li>
			  <li {{if $currentnav == 'users'}}class="active"{{/if}}>
			    <a href="usermanage.php?type=user" >会员列表</a>
			  </li>
			  <li {{if $currentnav == 'admins'}}class="active"{{/if}}>
			    <a href="usermanage.php?type=admin" >管理员</a>
			  </li>
			</ul>
	</div>
</div>