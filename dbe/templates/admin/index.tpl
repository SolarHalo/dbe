{{* 引入头部文件 *}}
{{include file='admin/header.tpl'}}
<div class="row" >
	<div class="span4">
		{{* 引入导航文件 *}}
		{{include file='admin/leftnav.tpl'}}
	</div>
	<div class="span8" style="height:100%;">
		{{*引入不同用户的管理模板*}}
		{{if $managetpl!=null}}
		{{include file=$managetpl}}
		{{/if}}
		
	</div>
</div>




