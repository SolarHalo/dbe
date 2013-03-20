<?php /* Smarty version Smarty-3.1.13, created on 2013-03-20 23:22:55
         compiled from "D:\workspace4php\dbe-a\dbe\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162665141dc37b4cbe9-46243255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94f3352f10d9a1e3361cd738b3dbcab3f44e6040' => 
    array (
      0 => 'D:\\workspace4php\\dbe-a\\dbe\\templates\\login.tpl',
      1 => 1363792971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162665141dc37b4cbe9-46243255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5141dc37bade58_89013906',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5141dc37bade58_89013906')) {function content_5141dc37bade58_89013906($_smarty_tpl) {?><!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
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

  <div style=" background:url(images/bgwen.jpg); float:left; width:1180px; height:632px;">
<!--    <div class="container" id="container">-->
<!--      <div id="sub-nav">-->
<!--        <ul>-->
<!--          <li class="subnav-01"><a href="index.php">首页</a></li>-->
<!--          <li class="subnav-01"><a href="register.php">注册</a></li>-->
<!--          <li class="subnav-03"><a href="login.php">登录</a></li>-->
<!--        </ul>-->
<!--      </div>-->
<!--    </div>-->
    <div  class="login_center">
    <form method="post">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="login_table">
        <tr>
          <td colspan="3" valign="top"><h2><span  class="zhuce">登录</span><a href="register.php">注册</a></h2></td>
       	<td><a href="index.php"><span style="float:left;padding-top:0;"><img src="images/close.png" /></span></a></td>
        </tr>
        <tr>
          <td colspan="3" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">用户名/密码</td>
          <td><input name="user_name" type="text" class="input_css" /></td>
          <td rowspan="5"><img src="images/logo2.jpg" width="329" height="175" /></td>
        </tr>
        <tr>
          <td  align="right">登录密码</td>
          <td><input name="user_passwd" type="password" class="input_css" /></td>
        </tr>
        <tr>
          <td colspan="2">
          	<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="62%"><input name="" type="submit" class="login_button" value=""/></td>
                <td width="38%"><a href="register.php" style="margin-top:20px;">注册</a></td>
              </tr>
            </table>
           </td>
        </tr>
      </table>
      </form>
    </div>
<!--    <div class="fotter2"> -->
<!--    <a href="#" class="back">返回</a> -->
<!--    <a href="#" class="link">友情连接</a> -->
<!--    </div>-->
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </div>
</div>
</body>
</html>
<?php }} ?>