<?php /* Smarty version Smarty-3.1.13, created on 2013-03-14 15:33:28
         compiled from "D:\workspace4php\dbe\dbe\templates\admin\displaynews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:514513dd7ce14cee5-75400164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '981883b858c4b5862def7626ad7048a9b6bf2db5' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\admin\\displaynews.tpl',
      1 => 1363246402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '514513dd7ce14cee5-75400164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513dd7ce2067b2_74157743',
  'variables' => 
  array (
    'news' => 0,
    'key' => 0,
    'new' => 0,
    'page' => 0,
    'startPage' => 0,
    'endPage' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513dd7ce2067b2_74157743')) {function content_513dd7ce2067b2_74157743($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="row">
	<div class="span3">
		
		
	</div>
	<div class="span9">
		<table id="newstable" class="table table-bordered table-striped table-condensed span12">
		<caption class="well"><strong>新闻列表</strong></caption>
			<thead>
				<tr>
					<td>#</td>
					<td>排序</td>
					<td>类别</td>
					<td>文章标题</td>
					<td>时间</td>
					<td>操作</td>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value){
$_smarty_tpl->tpl_vars['new']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['new']->key;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="news_order"><?php echo $_smarty_tpl->tpl_vars['new']->value->news_order;?>
</td>
					<td class="news_type"><?php if ($_smarty_tpl->tpl_vars['new']->value->news_type==1){?>企业新闻<?php }?></td>
					<td class="news_title"><?php echo $_smarty_tpl->tpl_vars['new']->value->news_title;?>
</td>
					<td class="news_createtime"><?php echo $_smarty_tpl->tpl_vars['new']->value->news_createtime;?>
</td>
					<td>
						<a  href="#updateNewsModal" data-toggle="modal" class="btn btn-info modifynews" un="<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
"><i class="icon-pencil icon-white"></i> 编辑</a>
						<a  href="#delNewsModal" data-toggle="modal" class="btn btn-danger delnews" un="<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
"><i class="icon-trash icon-white"></i> 删除</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="row-fluid">
				  <div class="span4">
					<div class="pagination">
					  <ul>
					    <li <?php if ($_smarty_tpl->tpl_vars['page']->value->haspre){?>class="active"<?php }else{ ?>class="disabled"<?php }?>><a href="displaynews.php?pageNo=<?php echo $_smarty_tpl->tpl_vars['page']->value->pre;?>
" class="active">Prev</a></li>
					  	
					  	<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['endPage']->value+1 - ($_smarty_tpl->tpl_vars['startPage']->value) : $_smarty_tpl->tpl_vars['startPage']->value-($_smarty_tpl->tpl_vars['endPage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['startPage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
					    <li <?php if ($_smarty_tpl->tpl_vars['page']->value->pageNo==$_smarty_tpl->tpl_vars['foo']->value){?>class="active"<?php }?>><a href="displaynews.php?pageNo=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
					    <?php }} ?>
					    
					    
					    <li <?php if ($_smarty_tpl->tpl_vars['page']->value->hasnext){?>class="active"<?php }else{ ?>class="disabled"<?php }?>><a href="displaynews.php?pageNo=<?php echo $_smarty_tpl->tpl_vars['page']->value->next;?>
" class="active">Next</a></li>
					  </ul>
					</div>
					
				  </div>
				  <div class="span3" style="padding:20px 0 0 0">
				  
					  <div class="input-append">
					    <input id="pageto" type="text" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->pageNo;?>
" class="span2">
			    		<button id="gotoBtn" class="btn btn-primary" onclick="gotoPage()">GO</button>
				      </div>
				  </div>
				  <div class="span5" style="padding:20px 0 0 0">
					  第<?php echo $_smarty_tpl->tpl_vars['page']->value->pageNo;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value->totalpage;?>
页
					 显示<?php echo $_smarty_tpl->tpl_vars['page']->value->startIndex+1;?>
到<?php echo $_smarty_tpl->tpl_vars['page']->value->endIndex;?>
条记录，共<?php echo $_smarty_tpl->tpl_vars['page']->value->totalsize;?>
条记录
				  
				  </div>
				</div>
	</div>
</div>

<div class="modal hide fade" id="updateNewsModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3 id="wintitle">编辑新闻</h3>
  </div>
  <div class="modal-body">
  <form method="post" class="form-horizontal">
		<table class="table table-bordered">
		<caption>编辑新闻</caption>
			<tr>
				<td><label class="control-label">标题：</label></td>
				<td><input id="news_title" name="news_title" type="text"></td>
			</tr>
			<tr>
				<td><label class="control-label">日期：</label></td>
				<td>
					<input id="news_createdate" 
						disabled="disabled" 
						name="news_createdate" type="text" 
						class="uneditable-input">
				</td>
			</tr>
			
			<tr>
				<td><label class="control-label">排序：</label></td>
				<td><input id="news_order" name="news_order" type="text"></td>
			</tr>
			
			<tr>
				<td><label class="control-label">分类：</label></td>
				<td>
					<select id="newstype" name="newstype">
					  <option  value="1">企业新闻</option>
					</select>
					<span class="help-inline">请注意插入文章的图片宽度不能大于550px</span>
				</td>
			</tr>
			
			<tr>
				<td><label class="control-label">内容：</label></td>
				<td><textarea cols="80" id="content" name="content" class="ckeditor"></textarea></td>
			</tr>
			
		</table>
		</form>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn"  data-dismiss="modal">关闭</a>
    <a id="modifynewsBtn" href="#" class="btn btn-primary">保存</a>
  </div>
</div>

<div class="modal hide fade" id="delNewsModal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3 id="wintitle">删除新闻</h3>
  </div>
  <div class="modal-body">
    <div class="alert alert-error">
	  <strong>警告！</strong> 确认删除新闻?
	</div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn"  data-dismiss="modal">关闭</a>
    <a id="delnewsbtn" href="#" class="btn btn-danger">确认</a>
  </div>
</div>

<script type="text/javascript">

$(document).ready(function(){

	$(".modifynews").live('click', function(){
			var un = $(this).attr("un");
			$("#modifynewsBtn").attr('un',un);
			
			$.ajax({
				'type':'POST',
				'url': 'ajaxnewsop.php',
				'data': {'method': 'getnewsbyid', 'news_id': un},
				'success': function(data){
					var obj = eval('(' + data + ')');
					$("#news_title").val(obj.news_title);
					$("#news_createdate").val(obj.news_createtime);
					$("#news_order").val(obj.news_order);
//					$("#content").val(obj.body);
					$("#newstype").val(obj.news_type);
					CKEDITOR.instances['content'].setData(obj.news_body);
				},
				'error':function(){
					alert("load ajax fail for getnewsbyid");
					}
				});
		});

	$(".delnews").live('click', function(){
		var un = $(this).attr("un");
		$("#delnewsbtn").attr('un', un);
	});

	$("#modifynewsBtn").click(function(){

		
		var news_id = $(this).attr("un");
		var news_title = $("#news_title").val();
		var news_createtime = $("#news_createdate").val();
		var news_order = $("#news_order").val();
		var news_type = $("#newstype").val();
		
		var content = CKEDITOR.instances['content'].getData(); 
		$.ajax({
			'type':'POST',
			'url': 'ajaxnewsop.php',
			'data': {'method': 'updatenews', 'news_id': news_id,'news_title':news_title,'news_createtime':news_createtime,'news_order':news_order,'news_type':news_type,'news_body':content},
			'success': function(data){
				if(data==-1){
					alert("updatenews failed");
				}else{
					var updatedRow = $("#newstable >tbody >tr >td").children("a[un='"+news_id+"']").parents("tr");
					updatedRow.children(".news_order").html(news_order);
					updatedRow.children(".news_title").html(news_title);
					var news_type_cn;
					if(news_type==1){
						news_type_cn = "企业新闻";
					}
					updatedRow.children(".news_type").html(news_type_cn);
					updatedRow.children(".news_createtime").html(news_createtime);
//					updatedRow.children(".news_body").html(content);
					$("#updateNewsModal").modal('hide');

				}
			},
			'error':function(){
				alert("load ajax fail for updatenews");
				}
			});
		});

	$("#delnewsbtn").click(function(){
		var news_id = $(this).attr("un");
		$.ajax({
			'type':'POST',
			'url': 'ajaxnewsop.php',
			'data': {'method': 'deletenews', 'news_id': news_id},
			'success': function(data){
				if(data==-1){
					alert("deletenews failed");
				}else{
					$("#delNewsModal").modal('hide');
					$("#newstable >tbody >tr >td").children("a[un='"+news_id+"']").parents("tr").remove();
				}
			}
			});
		});

	$('#updateNewsModal').on('hidden', function () {
		
	});


	$("#gotoBtn").click(function(){
		var page = $("#pageto").attr("value");
		window.location.href = "displaynews.php?pageNo="+page+"";
		});
	
});

</script><?php }} ?>