<?php /* Smarty version Smarty-3.1.13, created on 2013-03-20 14:15:29
         compiled from "D:\workspace4php\dbe-a\dbe\templates\news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214135142868f85dd07-93561437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14497303b4b9b45e1fa01cc3b69a177683ff1bed' => 
    array (
      0 => 'D:\\workspace4php\\dbe-a\\dbe\\templates\\news.tpl',
      1 => 1363760114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214135142868f85dd07-93561437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5142868f93d540_86758934',
  'variables' => 
  array (
    'allnews' => 0,
    'new' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5142868f93d540_86758934')) {function content_5142868f93d540_86758934($_smarty_tpl) {?><!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--<title>index</title>-->
<!--<link href="style/dbe-style.css" type="text/css" rel="stylesheet" />-->
<!--<link href="style/jquery.mCustomScrollbar.css" rel="stylesheet" />-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"type="text/javascript"></script>-->
<!--<script type="text/javascript">  -->
<!--$(window).resize(function() {-->
<!--   if($(window).width()<1180){-->
<!--	$("#conter") .css ({"margin-left":"0","left":"0"});-->
<!--}else{-->
<!--$("#conter") .css ({"margin-left":"-590px","left":"50%"}); -->
<!--}-->
<!-- if($(window).height()<700){-->
<!--	$("#conter") .css ({"margin-top":"0","top":"0"});-->
<!--}else{-->
<!--$("#conter") .css ({"margin-top":"-361px","top":"50%"}); -->
<!--}-->
<!--}); -->
<!-- $(function(){-->
<!--          $('#wrapper').hide();-->
<!--          $('.xiaogu').mouseenter(function(){-->
<!--          	-->
<!--          	 $('#wrapper').slideDown("slow");-->
<!--          	  -->
<!--           });-->
<!--          $('#head').mouseleave(function(){-->
<!--          	  $('#wrapper').slideUp();-->
<!--          	  -->
<!--           });-->
<!--  	});-->
<!--function switchmodTag(modtag,modcontent,modk) {-->
<!--	 for(i=1; i <4; i++) {-->
<!--		 if (i==modk) {-->
<!--			 document.getElementById(modtag+i).className="menuOn";document.getElementById(modcontent+i).-->
<!--			 className="slidingList";}-->
<!--		 else {-->
<!--			 document.getElementById(modtag+i).className="menuNo";document.getElementById(modcontent+i).-->
<!--			 className="slidingList_none";}-->
<!--		 }-->
<!-- }-->
<!--</script>-->
<!-- -->
<!--</head>-->
<?php echo $_smarty_tpl->getSubTemplate ('header1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
	<div id="conter">
    	<?php echo $_smarty_tpl->getSubTemplate ('statusbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <div style=" background:url(images/bgwen.jpg); float:left; width:1180px; height:632px;">
    <div class="container" id="container">
      <div id="sub-nav">
        <ul>
          <li class="subnav-01"><a href="index.php">首页</a></li> 
          <li class="subnav-03"><a href="news.php">DBE新闻中心</a></li>
        </ul>
      </div>
    </div> 
    <div id="newpage">
        <div class="newlist">
            <span class="newlist-title">最新消息</span>
            <ul>
            <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allnews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value){
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
            <li><a href="news.php?news_id=<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
"><font size="3">&bull;</font>&nbsp;<?php echo $_smarty_tpl->tpl_vars['new']->value->news_title;?>
<br /><span><?php echo $_smarty_tpl->tpl_vars['new']->value->news_createtime;?>
</span></a></li>
            <?php } ?>
            </ul> 
        </div> 
        
         <div id="content_1" class="content">
            <h1><?php echo $_smarty_tpl->tpl_vars['news']->value->news_title;?>
</h1>
            <p>
              <?php echo $_smarty_tpl->tpl_vars['news']->value->news_body;?>
            
             </p>
        </div> 
	<!-- Google CDN jQuery with fallback to local -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
	<!-- custom scrollbars plugin -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
	<script>
		(function($){
			$(window).load(function(){
				$("#content_1").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
				//ajax demo fn
				$("a[rel='load-content']").click(function(e){
					e.preventDefault();
					var $this=$(this),
						url=$this.attr("href");
					$this.addClass("loading");
					$.get(url,function(data){
						$this.removeClass("loading");
						$("#content_1 .mCSB_container").html(data); //load new content inside .mCSB_container
						$("#content_1").mCustomScrollbar("update"); //update scrollbar according to newly loaded content
						$("#content_1").mCustomScrollbar("scrollTo","top",{scrollInertia:200}); //scroll to top
					});
				});
				$("a[rel='append-content']").click(function(e){
					e.preventDefault();
					var $this=$(this),
						url=$this.attr("href");
					$this.addClass("loading");
					$.get(url,function(data){
						$this.removeClass("loading");
						$("#content_1 .mCSB_container").append(data); //append new content inside .mCSB_container
						$("#content_1").mCustomScrollbar("update"); //update scrollbar according to newly appended content
						$("#content_1").mCustomScrollbar("scrollTo","h2:last",{scrollInertia:2500,scrollEasing:"easeInOutQuad"}); //scroll to appended content
					});
				});
			});
		})(jQuery);
	</script>
    </div>
<!--    <div class="fotter2"> <a href="#" class="back">返回</a> <a href="#" class="link">友情连接</a> </div>-->
	 <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </div>
</div>
</body>
</html>
<?php }} ?>