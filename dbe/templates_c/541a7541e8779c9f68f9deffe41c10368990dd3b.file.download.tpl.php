<?php /* Smarty version Smarty-3.1.13, created on 2013-03-14 21:39:46
         compiled from "D:\workspace4php\dbe\dbe\templates\download.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28173513c2c010dfcc9-26186334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '541a7541e8779c9f68f9deffe41c10368990dd3b' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\download.tpl',
      1 => 1363248129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28173513c2c010dfcc9-26186334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513c2c01128cc9_25970384',
  'variables' => 
  array (
    'loged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513c2c01128cc9_25970384')) {function content_513c2c01128cc9_25970384($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="style/dbe-style.css" type="text/css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"type="text/javascript"></script>
<script type="text/javascript">  
$(window).resize(function() {
   if($(window).width()<1180){
	$("#conter") .css ({"margin-left":"0","left":"0"});
}else{
$("#conter") .css ({"margin-left":"-590px","left":"50%"}); 
}
 if($(window).height()<700){
	$("#conter") .css ({"margin-top":"0","top":"0"});
}else{
$("#conter") .css ({"margin-top":"-361px","top":"50%"}); 
}
}); 
 $(function(){
          $('#wrapper').hide();
          $('.xiaogu').mouseenter(function(){
          	
          	 $('#wrapper').slideDown("slow");
          	  
           });
          $('#head').mouseleave(function(){
          	  $('#wrapper').slideUp();
          	  
           });
  	});
function switchmodTag(modtag,modcontent,modk) {
	 for(i=1; i <4; i++) {
		 if (i==modk) {
			 document.getElementById(modtag+i).className="menuOn";document.getElementById(modcontent+i).
			 className="slidingList";}
		 else {
			 document.getElementById(modtag+i).className="menuNo";document.getElementById(modcontent+i).
			 className="slidingList_none";}
		 }
 }
</script>

</head>

<body>
	<div id="conter">
		<?php echo $_smarty_tpl->getSubTemplate ('statusbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <div style=" background:url(images/bgwen.jpg); float:left; width:1180px; height:632px;">
        <div class="container" id="container">
        	<div id="sub-nav">
            	 <ul>
                 	<li class="subnav-01"><a href="index.php">首页</a></li> 
                    <li class="subnav-03"><a href="#">下载中心</a></li>
                 </ul>
            </div> 
            <ul class="dow">
            	<li>
                	<img src="images/d1.png" />
                	<a href="download.php?fileName=test.docx" <?php if ($_smarty_tpl->tpl_vars['loged']->value=='N'){?>onclick="alert('请先登录');return false;"<?php }?>>点击下载</a>
                </li>
                <li>
                	<img src="images/d2.png" />
                	<a href="download.php?fileName=test.docx" <?php if ($_smarty_tpl->tpl_vars['loged']->value=='N'){?>onclick="alert('请先登录');return false;"<?php }?>>点击下载</a>
                </li>
            </ul>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--        <div class="fotter2" style="margin-top:5px;">-->
<!--        	<a href="#" class="back">返回</a>  -->
<!--            <a href="#" class="link">友情连接</a>-->
<!--        </div>-->
        </div>
    </div>
</body>
</html>
<?php }} ?>