<div class="row">
	<div class="span3">
		{{* 引入导航文件 *}}
		{{include file='admin/leftnav.tpl'}}
	</div>
	<div class="span9">
		<div class="span12">
				{{*引入不同用户的管理模板*}}
				{{include file=$managetpl}}
		  </div>
		
	</div>
</div>


