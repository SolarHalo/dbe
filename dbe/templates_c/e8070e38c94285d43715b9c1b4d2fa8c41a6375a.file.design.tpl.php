<?php /* Smarty version Smarty-3.1.13, created on 2013-03-25 15:12:41
         compiled from "D:\workspace4php\dbe-a\dbe\templates\design.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35251483267169a79-41502592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8070e38c94285d43715b9c1b4d2fa8c41a6375a' => 
    array (
      0 => 'D:\\workspace4php\\dbe-a\\dbe\\templates\\design.tpl',
      1 => 1363759918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35251483267169a79-41502592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514832671b70e0_00532879',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514832671b70e0_00532879')) {function content_514832671b70e0_00532879($_smarty_tpl) {?><!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--<title>index</title>-->
<!--<link href="style/dbe-style.css" type="text/css" rel="stylesheet" />-->
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
<!---->
<!--</head>-->
<?php echo $_smarty_tpl->getSubTemplate ('header1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
	<div id="conter">
    	<?php echo $_smarty_tpl->getSubTemplate ('statusbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div style=" background:url(images/Design.jpg); float:left; width:1180px; height:632px;">
        <div class="container" id="container">
        	<div id="sub-nav">
            	 <ul>
                 	<li class="subnav-01"><a href="index.php">首页</a></li>
                    <li class="subnav-01"><a href="dbemessage.php?type=company">公司介绍</a></li>
                    <li class="subnav-01"><a href="dbemessage.php?type=design">设计、研发、生产</a></li>
                    <li class="subnav-03"><a href="dbemessage.php?type=operation">全球合作网络</a></li>
                 </ul>
            </div> 
        </div>
        <div class="fotter2" style="margin-top:525px;">
        	<a href="index.php" class="back">返回</a>  
<!--            <a href="#" class="link">友情连接</a>-->
			<label class="link">友情连接</label>
        </div>
        </div>
    </div>
</body>
</html>
<?php }} ?>