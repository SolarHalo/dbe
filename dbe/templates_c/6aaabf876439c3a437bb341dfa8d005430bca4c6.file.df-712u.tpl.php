<?php /* Smarty version Smarty-3.1.13, created on 2013-03-13 22:42:22
         compiled from "D:\workspace4php\dbe\dbe\templates\df-712u.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16916514085d809e693-98373401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aaabf876439c3a437bb341dfa8d005430bca4c6' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\df-712u.tpl',
      1 => 1363185735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16916514085d809e693-98373401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514085d80e4e95_47943017',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514085d80e4e95_47943017')) {function content_514085d80e4e95_47943017($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

        <div class="container" id="container">
        	<div id="sub-nav">
            	 <ul>
                 	<li class="subnav-01"><a href="index.php">首页</a></li> 
                    <li class="subnav-01"><a href="dbemessage.php?type=df-712u">DF-712U</a></li> 
                    <li class="subnav-03"><a href="dbemessage.php?type=dr-640r">DR-640R</a></li>
                 </ul>
            </div> 
           <div class="chanpjies1">
           		<div class="chanpjies-top-l" id="DF">
                    <img src="images/pp1.png" style="padding:40px 120px 0 0" class="fl" /> 
                    <p class="fl">
                    	<strong>产品特性</strong><br /><br />
                        • 高精度打印技术配合高清晰度墨水实现最高ＵＶ打印品质<br />
                        • 支持White+Gloss+CMYKLcLm，实现高附加价值的打印<br />
                        • 开放式宽幅平台、超高厚度打印，实现高效直喷/打样/量产<br />
                        • 不含汞的低温LED-UV光源，安全环保。适应更多材料
                    </p> 
                </div>
                <img src="images/photo03.png" class="fl" align="top" style="padding-left:20px;" />  
                <img src="images/biao2.jpg" class="fl" align="top" style="padding-left:45px;" />
                <div style="height:1px; background:#519c00; float:left; width:100%;">&nbsp;</div>
                <div class="chanpjies-bot" id="DF-bot">
                	<p class="jianjiep1">
                        <strong>产品特性</strong><br /><br />
                        • 高遮密性的白色墨水；透明墨水的立体打印<br />
                        • 高精度的PLC程序控制，精确的重复打印<br />
                        • 2Pt字体的精准清晰打印<br />
                        • 高伸缩性墨水，适合柔性材料打印<br />
                        • 低运营成本，创造更高利润空间
                    </p> 
                    <p class="jianjiep2">
                        <strong>高信赖性产品&amp;操作简易</strong><br /><br />
                     	• 机体的高耐久性；维修的高便利性<br />
                        • 大屏幕、彩色触摸屏，支持包括简体/繁体等多语言<br />
                        • 直观的界面，快速的操作<br />
                        • 彩色大字体显示，减少误操作<br />
                        • 可自设定打印原点，增加打印多样性
                    </p> 
                    <p class="jianjiep3">
                    	<strong>原厂墨水</strong><br /><br />
                        <img src="images/jieshaoimages02.png" />
                    </p> 
                    <p class="jianjiep4">
                    	<strong>可应用行业</strong><br /><br />
                        3C行业（Iphone配件等的打印）， 广告输出，礼品业，个性化产品业，商业印刷，包装印刷的印前打样和小批量生产，特殊印刷、家装方案（墙纸，装饰油画、艺术画等）、
                        建材（地砖、移门、玻璃、地板天花板等）
                    </p> 
                </div>
           </div>  
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--        <div class="fotter2" style="margin-top:5px;">-->
<!--        	<a href="#" class="back">返回</a>  -->
<!--            <a href="#" class="link">友情连接</a>-->
<!--        </div> -->
    </div>
</body>
</html>
<?php }} ?>